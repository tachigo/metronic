<?php

set_time_limit( -1 );
include_once __DIR__ . '/lib/ThemeBuilder.php';

class HtmlStaticGenerate extends ThemeBuilder {

	const PREG_ASSETS    = '/(href|src)=["\'](.*?assets\/.*?)["\']/';
	const PREG_HREF_PAGE = '/href=["\'](.?page=.*?)["\']/';
	const PREG_CSS_URL   = '/url\(((.*?)assets\/.*?)\)/';

	// main output path
	public static $outputPath = __DIR__ . '/../../theme/dist/html/';

	public static function init() {
		// set which demo to generate
		if ( isset( $_REQUEST[ 'demo' ] ) ) {
			// proceed with this demo
			self::$demo = $_REQUEST[ 'demo' ];
		}

		self::run( function ( $config ) {
			// remove all old folders
			self::rmdir( array( self::getHtmlPath( 'builder.html' ) ) );
			//var_dump( 'delete ' . self::getHtmlPath() );

			// copy assets folder from preview
			//self::copy( self::getHtmlPath( '../../../preview/assets/' ), self::getHtmlPath( 'assets/' ) );

			// iterate all pages
			self::_iterates( $config[ 'pages' ] );
		} );
	}

	/**
	 * Iterate every each page refering to config page
	 * @param $config
	 */
	private static function _iterates( $config ) {
		if ( empty( self::$demos ) ) {
			throw new InvalidArgumentException( 'No demos found in the demo list' );
		}
		foreach ( $config as $conf ) {
			if ( isset( $conf[ 'view' ] )
				&& ! in_array( $conf[ 'view' ], self::$pages )
				&& ! empty( $conf[ 'view' ] ) ) {
				// remove /_index special view path
				$conf[ 'view' ] = preg_replace( '/\/_.*/', '', $conf[ 'view' ] );
				// check visibility of page in angular context
				if( ! isset( $conf[ 'visible' ] ) || in_array( 'html', (array)$conf[ 'visible' ] ) ) {
					$output = self::getPageContent( array( 'page' => $conf[ 'view' ], 'demo' => self::$demo, 'type' => 'html' ) );
					if ( ! empty( $output ) ) {
						self::$pages[] = $conf[ 'view' ];
						self::modifyContent( $conf[ 'view' ], $output );
						self::filePutContents( self::getHtmlPath( $conf[ 'view' ] . '.html', true ), $output );
					}
				}
			}
			if ( is_array( $conf ) ) {
				self::_iterates( $conf );
			}
		}
	}

	/**
	 * Find and replace fix for assets src and href relative path to new location
	 * @param $path
	 * @param $output
	 */
	private static function modifyContent( $path, &$output ) {
		// backward reference for nested levels files location
		$backDot = '';
		for ( $i = 0; $i < count( explode( '/', $path ) ) - 1; $i++ ) {
			$backDot .= '../';
		}

		// fix href and src assets path
		$output = preg_replace_callback( self::PREG_ASSETS, function ( $match ) use ( $backDot ) {
			$path       = str_replace( './', '', $match[ 2 ] );
			$match[ 0 ] = str_replace( $match[ 2 ], $backDot . $path, $match[ 0 ] );
			return $match[ 0 ];
		}, $output );

		$output = preg_replace_callback( self::PREG_CSS_URL, function ( $match ) use ( $backDot ) {
			$path       = str_replace( './', '', $match[ 2 ] );
			$match[ 0 ] = str_replace( $match[ 2 ], $backDot . $path, $match[ 0 ] );
			return $match[ 0 ];
		}, $output );

		// fix href page link for nested levels files location
		$output = preg_replace_callback( self::PREG_HREF_PAGE, function ( $match ) use ( $backDot ) {
			$path = str_replace( '?page=', '', $match[ 1 ] );
			if ( $path === '#' ) {
				return '#';
			}
			$match[ 0 ] = str_replace( $match[ 1 ], $backDot . $path . '.html', $match[ 0 ] );
			return $match[ 0 ];
		}, $output );

		$output = self::sanitizeOutput( $output );
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
}

$start = microtime( true );
HtmlStaticGenerate::init();
$time_elapsed_secs = microtime( true ) - $start;
//var_dump( 'Total execution time: ' . $time_elapsed_secs );