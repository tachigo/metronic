<?php

include __DIR__ . "/../../../theme/dist/preview/inc/init.php";
include __DIR__ . "/init.php";

class ThemeBuilder {

	// preg for router
	const PREG_PARTIAL              = '/<!--\[angular:(begin|end):(.*?)\]\/-->/';
	const PREG_PARTIAL_HTML         = '/<!--\[html-partial:(begin|end):(.*?)\]\/-->/';
	const PREG_PARTIAL_HTML_INCLUDE = '/<!--\[html-partial:(include):(.*?)\]\/-->/';

	// set which demo to generate
	public static $demo = 'default';
	// html formatter enabled
	public static $htmlFormatter = true;
	// main output path
	public static $outputPath = '';

	// hold list of demos config
	public static $demos = array();
	// pages list
	public static $pages = array();
	// demo already init
	public static $init = array();

	public static function run( callable $callable ) {
		$all = isset( $_REQUEST[ 'all' ] ) ? $_REQUEST[ 'all' ] : false;

		self::$demos = self::getConfigs();
		foreach ( self::$demos as $demo => $config ) {
			// if self::$demo is set, generate only this demo
			if ( ! $all && self::$demo !== $demo ) {
				continue;
			}

			// reset variables for each demo
			self::$pages = array();

			Page::$demo = self::$demo = $demo;
			if ( ! in_array( self::$demo, self::$init ) ) {
				// init Page class demo
				Page::initDemoView();
				self::$init[] = self::$demo;
			}

			$callable( $config );
		}
	}

	/**
	 * Get demos list and config
	 * @return mixed
	 */
	public static function getConfigs() {
		global $_CONFIG;
		Util::init();

		return $_CONFIG[ 'demos' ];
	}

	/**
	 * Helper function to remove directories and files recursively
	 * @param $dir
	 */
	public static function rmdir( $dir ) {
		if ( is_array( $dir ) ) {
			// if folder is array, loop each folder
			foreach ( $dir as $d ) {
				self::rmdir( $d );
			}
		} else {
			if ( is_dir( $dir ) ) {
				$objects = scandir( $dir );
				foreach ( $objects as $object ) {
					if ( $object != "." && $object != ".." ) {
						if ( @filetype( $dir . '/' . $object ) == "dir" )
							self::rmdir( $dir . '/' . $object );
						else @unlink( $dir . '/' . $object );
					}
				}
				reset( $objects );
				@rmdir( $dir );
			}
		}
	}

	/**
	 * Helper to get theme page
	 * @param array $args
	 * @return mixed
	 */
	public static function getPageContent( $args = array() ) {
		global $_CONFIG;

		$request = array_merge( array(
			'page' => '',
			'demo' => self::$demo,
			'type' => '',
		), $args );

		if ( isset( $_SESSION[ 'demos' ][ $request[ 'demo' ] ][ 'builder' ] ) ) {
			$request[ 'builder' ] = $_SESSION[ 'demos' ][ $request[ 'demo' ] ][ 'builder' ];
		}

		$_CONFIG[ 'main' ][ 'request' ] = $request;

		Page::$initialized = false;
		Page::$attrs     = [];
		Page::$classes     = [];
		Page::init();
		$initClass = ucfirst( self::$demo ) . 'Init';
		$initClass::run();

		ob_start();
		Page::getBaseView();
		$result = ob_get_clean();

		return $result;
	}

	public static function getZip( $demo = '', $filename = '' ) {
		$demo        = $demo ?: self::$demo;
		$source      = self::$outputPath . $demo;
		$destination = self::$outputPath . $demo . '.zip';
		if ( empty( $filename ) ) {
			$filename = $demo . '.zip';
		}

		// zip folder
		self::zip( $source, $destination );

		header( 'Content-Type: application/zip' );
		header( 'Content-Disposition: attachment; filename=' . $filename );
		header( 'Content-Length: ' . filesize( $destination ) );
		header( 'Pragma: no-cache' );
		header( 'Expires: 0' );
		// clean all levels of output buffering
		while ( ob_get_level() ) {
			ob_end_clean();
		}
		readfile( $destination );
	}

	/**
	 * Zip a folder
	 * @param        $source
	 * @param string $destination
	 * @return bool
	 */
	public static function zip( $source, $destination = 'output.zip' ) {
		if ( ! extension_loaded( 'zip' ) || ! file_exists( $source ) ) {
			return false;
		}

		// Get real path for our folder
		$rootPath = realpath( $source );

		// Initialize archive object
		$zip = new ZipArchive();
		$zip->open( $destination, ZipArchive::CREATE | ZipArchive::OVERWRITE );

		// Create recursive directory iterator
		/** @var SplFileInfo[] $files */
		$files = new RecursiveIteratorIterator(
			new DirFilter( new RecursiveDirectoryIterator( $rootPath ), array( 'node_modules' ) ),
			RecursiveIteratorIterator::LEAVES_ONLY
		);

		foreach ( $files as $name => $file ) {
			// Skip directories (they would be added automatically)
			if ( ! $file->isDir() ) {
				// Get real and relative path for current file
				$filePath     = $file->getRealPath();
				$relativePath = substr( $filePath, strlen( $rootPath ) + 1 );
				$relativePath = str_replace( '\\', '/', $relativePath );

				// Add current file to archive
				$zip->addFile( $filePath, $relativePath );
			}
		}

		// Zip archive will be created only after closing object
		return $zip->close();
	}

	/**
	 * Helper function to copy directory recursively
	 * @param          $src
	 * @param          $dst
	 * @param null     $callable
	 */
	public static function copy( $src, $dst, $callable = null ) {
		$src = rtrim( $src, '/' );
		$dir = @opendir( $src );
		if ( $dir === false ) return;

		if ( ! file_exists( $dst ) ) {
			mkdir( $dst, 0777, true );
		}

		while ( false !== ( $file = readdir( $dir ) ) ) {
			if ( $file != '.' && $file != '..' ) {
				$file = str_replace( '\\', '/', $file );
				if ( is_callable( $callable ) && ! $callable( $src . '/' . $file ) ) continue;

				if ( is_dir( $src . '/' . $file ) ) {
					self::copy( $src . '/' . $file, $dst . '/' . $file, $callable );
				} else {
					copy( $src . '/' . $file, $dst . '/' . $file );
				}
			}
		}
		closedir( $dir );
	}

	public static function sanitizeOutput( $output, $regex = '' ) {
		if ( empty( $regex ) ) $regex = self::PREG_PARTIAL;
		// remove unused comments
		return preg_replace( $regex, '', $output );
	}

	/**
	 * @param $url
	 * @return mixed
	 */
	public static function getPageConfig( $url ) {
		$config = self::arrayPath( self::$demos[ self::$demo ][ 'pages' ], $url );
		return $config;
	}

	/**
	 * Get (can be set) nested array value
	 * @param       $array
	 * @param array $path
	 * @param null  $value
	 * @return mixed
	 */
	public static function arrayPath( &$array, $path = array(), $value = null ) {
		if ( is_string( $path ) ) {
			// dot delimiter
			$path = explode( '/', $path );
		}
		$args = func_get_args();
		$ref  = &$array;
		foreach ( $path as $key ) {
			if ( ! is_array( $ref ) ) {
				$ref = array();
			}
			$ref = &$ref[ $key ];
		}
		$prev = $ref;
		if ( array_key_exists( 2, $args ) ) {
			// value param was passed -> we're setting
			$ref = $value;  // set the value
		}
		return $prev;
	}

	/**
	 * @param $paths
	 * @param $format
	 * @param $output
	 * @return array
	 */
	public static function resolvePaths( $paths, $format, &$output ) {
		return $output = array_merge( $output, array_map( function ( $js ) use ( $format ) {
			if ( Util::isExternalURL( $js ) ) {
				return sprintf( "'%s'", $js );
			}
			return sprintf( $format, $js );
		}, (array)$paths ) );
	}

	/**
	 * Encode array to json format, define by keys to remove quote.
	 * Use for typescript code.
	 * @param       $metas
	 * @param array $noQuote
	 * @return mixed|string
	 */
	public static function strEncode( $metas, $noQuote = array() ) {
		$text    = json_encode( $metas, JSON_PRETTY_PRINT );
		$noQuote = implode( '|', $noQuote );
		$text    = preg_replace_callback( '/"(?:' . $noQuote . ')":.("(.*?)")/', function ( $match ) {
			$match[ 0 ] = str_replace( $match[ 1 ], $match[ 2 ], $match[ 0 ] );
			return $match[ 0 ];
		}, $text );
		return $text;
	}

	/**
	 * Walk recursive array with callback
	 * @param array    $array
	 * @param callable $callback
	 * @return array
	 */
	public static function arrayWalkCallback( array &$array, callable $callback ) {
		foreach ( $array as $k => &$v ) {
			if ( is_array( $v ) ) {
				$callback( $k, $v, $array );
				self::arrayWalkCallback( $v, $callback );
			}
		}

		return $array;
	}

	/**
	 * Replace all occurrences of the search string with the replacement string
	 * @param $search
	 * @param $replace
	 * @param $filename
	 */
	public static function strReplaceFileContent( $search, $replace, $filename ) {
		$subject  = file_get_contents( $filename );
		$replaced = str_replace( $search, $replace, $subject );
		self::filePutContents( $filename, $replaced );
	}

	/**
	 * Helper function to put content into file
	 * @param $filename
	 * @param $data
	 */
	public static function filePutContents( $filename, $data ) {
		if ( self::$htmlFormatter && substr( $filename, -5 ) === '.html' ) {
			if ( is_array( $data ) ) {
				$data = implode( '', $data );
			}
			$formatter = new \XhtmlFormatter\Formatter();
			// Change the content type from CONTENT_HTML (default) to CONTENT_XML or CONTENT_XHTML
			$formatter->setContentType( \XhtmlFormatter\Formatter::CONTENT_XHTML );
			$data = $formatter->format( $data );
		}

		file_put_contents( $filename, $data );
	}

	/**
	 * Reset numeric array keys recursively
	 * @param $array
	 * @return array
	 */
	public static function resetArrayKeys( $array ) {
		$numberCheck = false;
		foreach ( $array as $k => $val ) {
			if ( is_array( $val ) ) $array[ $k ] = self::resetArrayKeys( $val );
			if ( is_numeric( $k ) ) $numberCheck = true;
		}
		if ( $numberCheck === true ) {
			return array_values( $array );
		} else {
			return $array;
		}
	}

	/**
	 * Get all keys from a multidementional array
	 * @param array $array
	 * @return array
	 */
	public static function arrayMultiKeys( array $array ) {
		$keys = array();

		foreach ( $array as $key => $value ) {
			$keys[] = $key;

			if ( is_array( $value ) ) {
				$keys = array_merge( $keys, self::arrayMultiKeys( $value ) );
			} else {
				if ( is_bool( $value ) ) {
					$keys[] = $value ? 'enabled' : 'disabled';
				} else {
					$keys[] = $value;
				}
			}
		}

		return $keys;
	}

	public static function resolveRelativePath( $from, $to ) {
		// some compatibility fixes for Windows paths
		$from = is_dir( $from ) ? rtrim( $from, '\/' ) . '/' : $from;
		$to   = is_dir( $to ) ? rtrim( $to, '\/' ) . '/' : $to;
		$from = str_replace( '\\', '/', $from );
		$to   = str_replace( '\\', '/', $to );

		$from    = explode( '/', $from );
		$to      = explode( '/', $to );
		$relPath = $to;

		foreach ( $from as $depth => $dir ) {
			// find first non-matching dir
			if ( $dir === $to[ $depth ] ) {
				// ignore this directory
				array_shift( $relPath );
			} else {
				// get number of remaining dirs to $from
				$remaining = count( $from ) - $depth;
				if ( $remaining > 1 ) {
					// add traversals up to first matching dir
					$padLength = ( count( $relPath ) + $remaining - 1 ) * -1;
					$relPath   = array_pad( $relPath, $padLength, '..' );
					break;
				} else {
					$relPath[ 0 ] = './' . $relPath[ 0 ];
				}
			}
		}
		return implode( '/', $relPath );
	}

	/**
	 * Convert long path to id
	 * @param $path
	 * @return string
	 */
	public static function getComponentNamespace( $path ) {
		return implode( '-', array_slice( explode( '/', $path ), -2, 2 ) );
	}

	public static function strposArray( $haystack, $needles, $offset = 0 ) {
		if ( ! is_array( $needles ) ) $needle = array( $needles );
		foreach ( $needles as $query ) {
			if ( strpos( $haystack, $query, $offset ) !== false ) return true; // stop on first true result
		}
		return false;
	}

    /**
     * @param       $source
     * @param       $to
     * @param array $skip
     */
    public static function copyFolder( $source, $to, $skip = array() ) {
        self::copy( $source, $to, function ( $path ) use ( $source, $skip ) {
            return ! self::strposArray( $path, $skip );
        } );
    }

	/**
	 * @param array  $buffer
	 * @param bool   $reverse
	 * @param string $regex
	 * @return array
	 */
	protected static function _getMarker( array $buffer, $reverse = true, $regex = '' ) {
		if ( empty( $regex ) ) $regex = self::PREG_PARTIAL;
		$marker = array();
		foreach ( $buffer as $i => $line ) {
			preg_match( $regex, $line, $matches );
			if ( ! empty( $matches ) ) {
				$tag    = $matches[ 1 ];
				$params = json_decode( $matches[ 2 ], true );
				if ( $tag === 'begin' ) {
					$marker[ $params[ 'id' ] ][ 'params' ] = $params;
				}
				$marker[ $params[ 'id' ] ][ $tag ] = $i;
			}
		}

		if ( $reverse ) {
			// sort to start from bottom of the buffer
			uasort( $marker, function ( $a, $b ) {
				if ( $a[ 'begin' ] === $b[ 'begin' ] ) return 0;
				return ( $a[ 'begin' ] > $b[ 'begin' ] ) ? -1 : 1;
			} );
		}

		return $marker;
	}
}

class DirFilter extends RecursiveFilterIterator {
	protected $exclude;

	public function __construct( $iterator, array $exclude ) {
		parent::__construct( $iterator );
		$this->exclude = $exclude;
	}

	public function accept() {
		return ! ( $this->isDir() && in_array( $this->getFilename(), $this->exclude ) );
	}

	public function getChildren() {
		return new DirFilter( $this->getInnerIterator()->getChildren(), $this->exclude );
	}
}