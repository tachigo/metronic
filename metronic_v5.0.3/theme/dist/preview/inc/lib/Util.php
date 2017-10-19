<?php
class Util {
    private static $initialized = false;

    public static $config;

    public static function init() {
        global $_CONFIG;
        if (self::$initialized) {
            return;
        }
        self::$initialized = true;
        self::$config = $_CONFIG;
    }

    public static function getView($path) {
        $file = self::$config['main']['path']['root'] . '/view/' . $path . '.php';

        if (file_exists($file) === false) {
            echo '<code>Partial not found: ' . $file . '</code>';
            //exit;
        }else{
	        self::putHtmlExportComment( 'begin', array( 'id' => $path ) );
	        include( $file );
	        self::putHtmlExportComment( 'end', array( 'id' => $path ) );
        }
    }

    public static function getArrayValue($path, $array) {
        $indexes = explode('/', $path);

        if (count($indexes) > 1 && isset($array[$indexes[0]])) {
            return self::getArrayValue(implode('/', array_slice($indexes, 1)), $array[$indexes[0]]);
        } else {
            if (isset($array[$indexes[0]])) {
                return $array[$indexes[0]];
            } else {
                return null;
            }
        }
    }

    public static function hasArrayValue($path, $array) {
        $indexes = explode('/', $path);

        if(!isset($array[$indexes[0]])) {
        	return false;
        }

        if (count($indexes) > 1) {
            return self::hasArrayValue(implode('/', array_slice($indexes, 1)), $array[$indexes[0]]);
        } else {
            if (isset($array[$indexes[0]])) {
                return true;
            } else {
                return false;
            }
        }
    }

    public static function putIf($cond, $value) {
        return $cond ? $value : '';
    }

    public static function echoIf($cond, $value) {
        echo self::putIf($cond, $value);
    }

    public static function startCode() {
        ob_start();
    }

    public static function endCode() {
        $str = ob_get_clean();
        $str = trim($str);
        $str = htmlspecialchars($str);


        echo $str;
    }

    public static function outputCode($str) {
        $str = trim($str);
        $str = htmlspecialchars($str);

        echo $str;
    }

    public static function code($str) {
        $str = trim($str);
        $str = htmlspecialchars($str);

        echo $str;
    }

    public static function isExternalURL($url) {
        $url = trim(strtolower($url));

        if (substr($url, 0, 2) == '//') {
            return true;
        }

        if (substr($url, 0, 7) == 'http://') {
            return true;
        }

        if (substr($url, 0, 8) == 'https://') {
            return true;
        }

        if (substr($url, 0, 5) == 'www.') {
            return true;
        }

        return false;
    }

	public static function getUrl( $page = '', $demo = '' ) {
		$url = '#';
		if ( ! empty( $page ) && $page !== '#' ) {
			$url = '?page=' . $page;
			$mode = Page::getOption( 'main', 'request/type' ) ?: 'preview';
			if ( in_array( 'preview', (array)$mode ) ) {
				$url .= '&demo=' . ( $demo == '' ? Page::$demo : $demo);
			}
		}
		return $url;
	}

	public static function putAngularComment( $tag, $args = array(), $echo = true ) {
		if ( $tag === 'begin' ) {
			$args = array_merge( array( 'type' => 'component' ), $args );
		}
		if( $tag === 'begin' || $tag === 'end' ) {
			$args[ 'page' ] = Page::getOption( 'main', 'request/page' );
		}
		// check current request is angular
		$mode = Page::getOption( 'main', 'request/type' ) ?: 'preview';
		if ( in_array( 'angular', (array)$mode ) ) {
			$comment = sprintf( "\n<!--[angular:%s:%s]/-->\n", $tag, json_encode( $args ) );
			if ( $echo ) {
				echo $comment;
			}
			return $comment;
		}
		return '';
	}

	public static function putHtmlExportComment( $tag, $args = array(), $echo = true ) {
		if ( $tag === 'begin' || $tag === 'end' ) {
			$args[ 'page' ] = Page::getOption( 'main', 'request/page' );
		}
		// check current request is angular
		$mode = Page::getOption( 'main', 'request/type' ) ?: 'preview';
		if ( in_array( 'html-export', (array)$mode ) ) {
			$comment = sprintf( "\n<!--[html-partial:%s:%s]/-->\n", $tag, json_encode( $args ) );
			if ( $echo ) {
				echo $comment;
			}
			return $comment;
		}
		return '';
	}
}

