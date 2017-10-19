<?php

class TsFile {
	public $name = '';
	public $suffix = '';
	public $filename;
	public $const = array();
	public $metaname = 'Component'; // Component | NgModule | Directive
	public $import = array();
	public $metadata = array();
	public $implements = array();
	public $methods = array();
	public $nowrap = array( 'encapsulation', 'imports', 'exports', 'declarations', 'providers', 'bootstrap', 'host' );
	public $variables = array();

	/**
	 * Add bulk import
	 *
	 * @param $imports
	 */
	function addImports( $imports ) {
		foreach ( $imports as $where => $module ) {
			$this->addImport( $where, $module );
		}
	}

	/**
	 * Add single import
	 *
	 * @param $where
	 * @param $module
	 */
	function addImport( $where, $module ) {
		if ( isset( $this->import[ $where ] ) ) {
			$this->import[ $where ][] = $module;
		} else {
			$this->import[ $where ] = is_string( $module ) ? array( $module ) : $module;
		}
	}

	/**
	 * Print all TS file content to a file
	 */
	function create() {
		$import   = $this->import();
		$const    = implode( "\n", $this->const );
		$metadata = $this->metadata();
		$class    = $this->classStructure();
		file_put_contents( $this->filename, $import . "\n" . $const . "\n" . $metadata . "\n" . $class );
	}

	/**
	 * Get import print
	 * @return string
	 */
	function import() {
		$text = '';
		foreach ( $this->import as $where => $module ) {
			$text .= sprintf( "import { %s } from '%s';\n", implode( ', ', $module ), $where );
		}

		return $text;
	}

	/**
	 * Get metadata print
	 *
	 * @param bool $alternative
	 *
	 * @return mixed|string
	 */
	function metadata( $alternative = false ) {
		if ( $alternative ) {
			$text = $this->meta_encode( $this->metadata );
		} else {
			//$text = json_encode( $this->metadata, JSON_PRETTY_PRINT | JSON_NUMERIC_CHECK );
			$text = $this->str_meta_encode( $this->metadata );
		}
		$text = sprintf( '@%s(%s)', $this->metaname, $text );

		return $text;
	}

	function meta_encode( $data ) {
		if ( is_array( $data ) || is_object( $data ) ) {
			$islist = is_array( $data ) && ( empty( $data ) || array_keys( $data ) === range( 0, count( $data ) - 1 ) );

			if ( $islist ) {
				$json = " [\n" . implode( ',', array_map( array( $this, 'meta_encode' ), $data ) ) . "\n]";
			} else {
				$items = Array();
				foreach ( $data as $key => $value ) {
					$items[] = $this->meta_encode( "$key" ) . ':' . $this->meta_encode( $value );
				}
				$json = '{' . implode( ',', $items ) . '}';
			}
		} elseif ( is_string( $data ) ) {
			# Escape non-printable or Non-ASCII characters.
			# I also put the \\ character first, as suggested in comments on the 'addclashes' page.
			$string = addcslashes( $data, "\\\"\n\r\t/" . chr( 8 ) . chr( 12 ) );
			if ( strlen( $string ) === 0 ) {
				$string = '""';
			}
			$json = '';
			$len  = strlen( $string );
			# Convert UTF-8 to Hexadecimal Codepoints.
			for ( $i = 0; $i < $len; $i++ ) {

				$char = $string[ $i ];
				$c1   = ord( $char );

				# Single byte;
				if ( $c1 < 128 ) {
					$json .= ( $c1 > 31 ) ? $char : sprintf( "\\u%04x", $c1 );
					continue;
				}

				# Double byte
				$c2 = ord( $string[ ++$i ] );
				if ( ( $c1 & 32 ) === 0 ) {
					$json .= sprintf( "\\u%04x", ( $c1 - 192 ) * 64 + $c2 - 128 );
					continue;
				}

				# Triple
				$c3 = ord( $string[ ++$i ] );
				if ( ( $c1 & 16 ) === 0 ) {
					$json .= sprintf( "\\u%04x", ( ( $c1 - 224 ) << 12 ) + ( ( $c2 - 128 ) << 6 ) + ( $c3 - 128 ) );
					continue;
				}

				# Quadruple
				$c4 = ord( $string[ ++$i ] );
				if ( ( $c1 & 8 ) === 0 ) {
					$u = ( ( $c1 & 15 ) << 2 ) + ( ( $c2 >> 4 ) & 3 ) - 1;

					$w1   = ( 54 << 10 ) + ( $u << 6 ) + ( ( $c2 & 15 ) << 2 ) + ( ( $c3 >> 4 ) & 3 );
					$w2   = ( 55 << 10 ) + ( ( $c3 & 15 ) << 6 ) + ( $c4 - 128 );
					$json .= sprintf( "\\u%04x\\u%04x", $w1, $w2 );
				}
			}
		} else {
			# int, floats, bools, null
			$json = strtolower( var_export( $data, true ) );
		}

		return $json;
	}

	/**
	 * @param $metas
	 * @return string
	 */
	public function str_meta_encode( $metas ) {
		$text = '{' . "\n";
		foreach ( $metas as $key => $meta ) {
			$text .= $key . ': ';
			if ( in_array( $key, $this->nowrap ) ) {
				if ( is_array( $meta ) ) {
					$text .= " [\n" . implode( ',', $meta ) . '],' . "\n";
				} else {
					$text .= $meta . ',' . "\n";
				}
			} else {
				if ( is_array( $meta ) ) {
					$text .= " [\n\"" . implode( '","', $meta ) . '"],' . "\n";
				} else {
					$text .= '"' . $meta . '",' . "\n";
				}
			}
		}
		$text .= '}';
		return $text;
	}

	/**
	 * Get class structure print
	 * @return string
	 */
	function classStructure() {
		$text = '';
		$text .= sprintf( "export class %s %s {\n%s\n}", $this->className(), $this->classImplements(), $this->classContent() );

		return $text;
	}

	/**
	 * Get class name print
	 * @return mixed|string
	 */
	function className() {
		return $this->name . $this->suffix;
	}

	/**
	 * Get class implements print
	 * @return string
	 */
	function classImplements() {
		$text = '';
		if ( ! empty( $this->implements ) ) {
			$text = 'implements ' . implode( ', ', $this->implements );
		}

		return $text;
	}

	/**
	 * Get class content print
	 * @return string
	 */
	function classContent() {
		return $this->classVariables() . $this->classMethods();
	}

	function classVariables() {
		return implode( "\n", $this->variables ) . "\n\n";
	}

	/**
	 * Get class methods print
	 * @return string
	 */
	function classMethods() {
		$text = '';
		if ( ! empty( $this->methods ) ) {
			$default = array( 'params' => '', 'return' => '', 'content' => '' );
			foreach ( $this->methods as $method => $content ) {
				$content = array_merge( $default, $content );
				$text    .= sprintf( "%s(%s) %s {\n%s\n}\n", $method, $content[ 'params' ], $content[ 'return' ], $content[ 'content' ] );
			}
		}

		return $text;
	}

	/**
	 * Encode array to json format, define by keys to remove quote.
	 * Use for typescript code.
	 * @param       $metas
	 * @param array $noQuote
	 * @return mixed|string
	 */
	public function str_encode( $metas, $noQuote = array() ) {
		$text    = json_encode( $metas, JSON_PRETTY_PRINT );
		$noQuote = implode( '|', $noQuote );
		$text    = preg_replace_callback( '/"(?:' . $noQuote . ')":.("(.*?)")/', function ( $match ) {
			$match[ 0 ] = str_replace( $match[ 1 ], $match[ 2 ], $match[ 0 ] );
			return $match[ 0 ];
		}, $text );
		return $text;
	}

}