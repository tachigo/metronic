<?php

/**
 *
 * This file is part of the Xhtml-formatter
 *
 * Copyright (c) 2017 Vladimír Macháček
 *
 * For the full copyright and license information, please view the file license.md
 * that was distributed with this source code.
 *
 */

//declare(strict_types = 1);

namespace XhtmlFormatter;


class Formatter {

	const    SPACES_INDENTATION = 'spacesIndentation';
	const    TABS_INDENTATION   = 'tabsIndentation';

	const CONTENT_HTML  = 'contentHtml';
	const CONTENT_XHTML = 'contentXhtml';
	const CONTENT_XML   = 'contentXml';

	const TOKEN_OPEN_TAG     = 'openTag';
	const TOKEN_UNPAIRED_TAG = 'unpairedTag';
	const TOKEN_CLOSE_TAG    = 'closeTag';
	const TOKEN_TEXT         = 'text';
	const TOKEN_COMMENT      = 'comment';

	const SKIP_TAG = 'formatter-off';

	const COMMENT_TAG_RE          = '/<!--(.*?)-->/';
	const OPEN_TAG_RE             = '/<\??(?<element>[-\w]+)(?:[^>]+)?>/';
	const CLOSE_TAG_RE            = '/^<\/[^\>]+>/';
	const PREG_SPLIT_RE           = '/(<(?:\/|\?|\!)?[-\w]+(?:>|.*?>))/';
	const FORMATTER_OFF_REMOVE_RE = '/\n*\s*<\/?formatter-off>(?:(?<!<\/formatter-off>)\n)?/m';

	const CODE_PLACEHOLDER_NAMESPACE_PREFIX = 'codePlaceholder_';
	const CODE_PLACEHOLDER_RE               = '/codePlaceholder_\d+/';

	/**
	 * @var array
	 */
	private $codePlaceholders = [];

	/**
	 * @var array
	 */
	private $codePlaceholdersRegularExpressions = [];

	/**
	 * @var string
	 */
	private $contentType = self::CONTENT_HTML;

	/**
	 * @var string
	 */
	private $output;

	/**
	 * @var string
	 */
	private $outputIndentation;

	/**
	 * @var string
	 */
	private $outputIndentationMethod = self::TABS_INDENTATION;

	/**
	 * @var int
	 */
	private $outputIndentationSize;

	/**
	 * @var string
	 */
	private $outputIndentationUnit;

	/**
	 * @var string
	 */
	private $previousTokenType;

	/**
	 * @var array
	 */
	private $skippedElements = [ self::SKIP_TAG, 'code', 'script', 'style', 'textarea' ];

	/**
	 * @var array
	 */
	private $unpairedElements = [
		self::CONTENT_HTML => [
			'area', 'base', 'br', 'code', 'col', 'embed', 'hr', 'img', 'input', 'link', 'meta', 'param', 'source',
			'track', 'wbr',
		],

		self::CONTENT_XML => [
			'cloud', 'xml',
		],
	];

	/**
	 * @var bool
	 */
	private $xmlSyntax = FALSE;


	public function addSkippedElement( $skippedElement ) {
		$skippedElements       = $this->skippedElements;
		$newSkippedElements    = explode( ' ', $skippedElement );
		$this->skippedElements = array_unique( array_merge( $skippedElements, $newSkippedElements ) );

		return $this;
	}


	/**
	 * @param string|array $elements
	 * @param string|NULL  $contentType
	 * @return Formatter
	 */
	public function addUnpairedElements( $elements, $contentType = NULL ) {
		if ( is_string( $elements ) ) {
			$elements = explode( ' ', trim( $elements ) );
		}

		$contentType = $contentType ?: self::CONTENT_HTML;

		foreach ( $elements as $element ) {
			$this->unpairedElements[ $contentType ][] = $element;
		}

		return $this;
	}


	public function format( $string ) {
		$this->output                = '';
		$this->outputIndentation     = '';
		$this->outputIndentationUnit = $this->outputIndentationMethod === self::TABS_INDENTATION
			? "\t"
			: str_repeat( ' ', $this->outputIndentationSize );

		$this->setCodePlaceholdersRegularExpressions();

		$string = $this->setCodePlaceholders( $string );

		$tokens = preg_split(
			self::PREG_SPLIT_RE, $string, -1,
			PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY
		);

		foreach ( $tokens as $token ) {
			$this->formatToken( $token );
		}

		$this->unsetCodePlaceholders();
		$this->removeBlankLines();
		$this->addBlankLine();

		return $this->output;
	}

	private function setCodePlaceholdersRegularExpressions() {
		$this->codePlaceholdersRegularExpressions = [
			'/<\?php(?: |\n)(?:.|\n)*\?>/Um', // php code
			'/[\w\:-]+=(?:"([^"]*)"|\'([^\']*)\'|([^ >]*))/', // element attribute
			'/<(formatter-off|code|script|style)(?:[-\w]+)?(?:[^>]+)?>([\s\S]*?)<\/\1>/m', // skipped elements
		];
	}

	private function setCodePlaceholders( $string ) {
		foreach ( $this->codePlaceholdersRegularExpressions as $codePlaceholderRe ) {
			preg_match_all( $codePlaceholderRe, $string, $matches, PREG_SET_ORDER );

			foreach ( $matches as $match ) {
				$fullMatch            = $match[ 0 ];
				$fullMatchReplacement = $fullMatch;
				$codeToReplace        = end( $match );

				if ( ! trim( $codeToReplace ) ) {
					continue;
				}

				$codePlaceholder      = uniqid( self::CODE_PLACEHOLDER_NAMESPACE_PREFIX );
				$fullMatchReplacement = str_replace( $codeToReplace, $codePlaceholder, $fullMatchReplacement );
				$string               = preg_replace(
					'/' . preg_quote( $fullMatch, '/' ) . '/',
					$fullMatchReplacement,
					$string,
					1 );

				$this->codePlaceholders[ $codePlaceholder ] = $codeToReplace;
			}
		}

		return $string;
	}

	private function formatToken( $token ) {
		$token = trim( $token );

		if ( ! $token ) {
			return;
		}

		$type                   = $this->matchTokenType( $token );
		$previousTokenIsOpenTag = $this->previousTokenType === self::TOKEN_OPEN_TAG;
		$previousTokenIsText    = $this->previousTokenType === self::TOKEN_TEXT;
		$tokenIsOpenTag         = $type === self::TOKEN_OPEN_TAG;
		$tokenIsUnpairedTag     = $type === self::TOKEN_UNPAIRED_TAG;
		$tokenIsCloseTag        = $type === self::TOKEN_CLOSE_TAG;
		$tokenIsText            = $type === self::TOKEN_TEXT;
		$tokenIsComment         = $type === self::TOKEN_COMMENT;
		$emptyElement           = $tokenIsCloseTag && $previousTokenIsOpenTag;
		$connectedText          = $tokenIsText && $previousTokenIsText;

		if ( $previousTokenIsOpenTag && ( $tokenIsOpenTag || $tokenIsUnpairedTag || $tokenIsText || $tokenIsComment ) ) {
			$this->increaseIndentation();

		} elseif ( $tokenIsCloseTag && ! $previousTokenIsOpenTag ) {
			$this->decreaseIndentation();
		}

		if ( ! ( ! $this->output || $connectedText || $emptyElement ) ) {
			$this->output .= "\n";
		}

		if ( ! ( ! $token || $emptyElement || $connectedText ) ) {
			$this->output .= $this->outputIndentation;
		}

		//var_dump( $this->outputIndentation . $token );
		$this->output            .= $token;
		$this->previousTokenType = $type;
	}

	private function matchTokenType( $token ) {
		$type = self::TOKEN_TEXT;

		if ( $this->matchOpenTag( $token, $matches ) ) {
			$type = in_array( $matches[ 'element' ], $this->unpairedElements[ $this->contentType ] )
				? self::TOKEN_UNPAIRED_TAG
				: self::TOKEN_OPEN_TAG;

		} elseif ( $this->matchCloseTag( $token ) ) {
			$type = self::TOKEN_CLOSE_TAG;
		} elseif ( $this->matchCommentTag( $token ) ) {
			$type = self::TOKEN_COMMENT;
		}

		return $type;
	}

	private function matchOpenTag( $string, array &$matches = NULL ) {
		return (bool)preg_match( self::OPEN_TAG_RE, $string, $matches );
	}

	private function matchCloseTag( $string ) {
		return (bool)preg_match( self::CLOSE_TAG_RE, $string );
	}

	private function matchCommentTag( $string ) {
		return (bool)preg_match( self::COMMENT_TAG_RE, $string );
	}

	private function increaseIndentation() {
		$this->outputIndentation .= $this->outputIndentationUnit;
	}

	private function decreaseIndentation() {
		$this->outputIndentation = preg_replace(
			"/" . $this->outputIndentationUnit . "/",
			'',
			$this->outputIndentation,
			1
		) ?: '';
	}

	private function unsetCodePlaceholders() {
		$codePlaceholders = array_reverse( $this->codePlaceholders );

		foreach ( $codePlaceholders as $codePlaceholder => $code ) {
			$this->output = str_replace( $codePlaceholder, $code, $this->output );
		}

		$this->output           = preg_replace( self::FORMATTER_OFF_REMOVE_RE, '', $this->output );
		$this->codePlaceholders = [];
	}

	private function removeBlankLines() {
		$this->output = preg_replace( '/\n\s*\n/', "\n", $this->output );
	}

	private function addBlankLine() {
		if ( ! preg_match( "/\n$/", $this->output ) ) {
			$this->output .= "\n";
		}
	}

	public function setContentType( $contentType ) {
		$this->xmlSyntax = in_array( $contentType, [ self::CONTENT_XHTML, self::CONTENT_XML ], TRUE );

		if ( $contentType === self::CONTENT_XHTML ) {
			$contentType = self::CONTENT_HTML;
		}

		$this->contentType = $contentType;

		return $this;
	}

	public function setSpacesIndentationMethod( $indentationSize ) {
		$this->outputIndentationMethod = self::SPACES_INDENTATION;
		$this->outputIndentationSize   = $indentationSize;

		return $this;
	}

}
