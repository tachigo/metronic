<?php

include_once __DIR__ . '/lib/ThemeBuilder.php';

class HtmlExportGenerate extends ThemeBuilder {

	// keep or remove generated source?
	public static $keep = false;

	// main output path
	public static $outputPath = __DIR__ . '/../../theme/dist/export/';

	public static function init() {
		// set which demo to generate
		if ( isset( $_REQUEST[ 'demo' ] ) ) {
			// proceed with this demo
			self::$demo = $_REQUEST[ 'demo' ];
		}

		self::run( function ( $config ) {
			// remove all old folders
			self::rmdir( array( self::getHtmlPath() ) );
			//var_dump( 'delete ' . self::getHtmlPath() );

			// iterate all pages
			self::_iterates();
		} );
	}

	public static function getHtmlPath( $path = '', $create = false ) {
		$path = self::$outputPath . self::$demo . '/' . $path;
		if ( $create ) {
			$pathArr = explode( '/', $path );
			array_pop( $pathArr );
			$dir = implode( '/', $pathArr );
			if ( ! file_exists( $dir ) ) {
				mkdir( $dir, 0777, true );
			}
		}

		return $path;
	}

	/**
	 * Iterate every each page refering to config page
	 */
	private static function _iterates() {
		if ( empty( self::$demos ) ) {
			throw new InvalidArgumentException( 'No demos found in the demo list' );
		}
		$output = self::getPageContent( array( 'page' => 'index', 'demo' => self::$demo, 'type' => 'html-export' ) );
		if ( ! empty( $output ) ) {
			self::_parsePartials( 'index', $output );
		}
	}

	private static function _parsePartials( $url, $html ) {
		$buffer = explode( "\n", $html );
		$marker = self::_getMarker( $buffer, true, self::PREG_PARTIAL_HTML );

		foreach ( $marker as $id => $mark ) {
			$param = array_merge( array( 'id' => '' ), $mark[ 'params' ] );
			if ( strpos( $id, 'partials/content/' ) !== false ) continue;

			$param[ 'id' ] = str_replace( 'demos/' . self::$demo . '/', '', $param[ 'id' ] );
			$param[ 'id' ] = self::getComponentNamespace( $param[ 'id' ] );
			$partials      = 'partials/_' . $param[ 'id' ];

			// base default as index.html
			if ( $param[ 'id' ] === 'base-default' ) {
				$partials = 'index';
			}
			// layout to root
			if ( $param[ 'id' ] === 'layout-layout' ) {
				$partials = '_layout';
			}

			$length = $mark[ 'end' ] - $mark[ 'begin' ];

			$replacement = array( '' );
			// skip page content
			if ( $param[ 'id' ] !== 'pages-index' ) {
				$replacement = array( "\n" . Util::putHtmlExportComment( 'include', array( 'file' => $partials . '.html' ), false ) . "\n" );
			}

			// replace temporary empty array length to maintain buffer index
			for ( $i = 0; $i < $length; $i++ ) {
				$replacement[] = '';
			}

			$output = array_splice( $buffer, $mark[ 'begin' ], $length + 1, $replacement );

			// remove unused comments
			$output = self::sanitizeOutput( $output, self::PREG_PARTIAL_HTML );

			// skip page content
			if ( $param[ 'id' ] !== 'pages-index' ) {
				self::filePutContents( self::getHtmlPath( $partials . '.html', true ), $output );
			}
		}
	}

	public static function getZip( $demo = '', $filename = '' ) {
		ThemeBuilder::$outputPath = self::$outputPath;
		ThemeBuilder::$demo       = $demo ?: self::$demo;

		if ( empty( $filename ) ) {
			$filename = 'html-' . self::$demo . '.zip';
		}

		parent::getZip( $demo, $filename );
		if ( ! self::$keep ) {
			self::rmdir( array( self::$outputPath ) );
		}
		exit;
	}
}

$start = microtime( true );
HtmlExportGenerate::init();
$time_elapsed_secs = microtime( true ) - $start;
//var_dump( 'Total execution time: ' . $time_elapsed_secs );