<?php
class Page {
	public static $initialized = false;

    public static $config;

    public static $demo;
    public static $demoConfig;

    public static $page;
    public static $pageConfig;

    public static $layout;
    public static $layoutConfig;

    public static $menuConfig;

    public static $attrs;
    public static $classes;

    public static $masterLayout;

    public static function init() {
        global $_CONFIG;

        if (self::$initialized) {
            return;
        }
        self::$initialized = true;

        self::$config = $_CONFIG;

        self::$demo = self::$config['main']['request']['demo'];

        if (isset(self::$config['demos'][self::$demo])) {
            self::$demoConfig = self::$config['demos'][self::$demo]['demo'];

            self::$page = self::$config['main']['request']['page'];

            if (Util::hasArrayValue(self::$page, self::$config['demos'][self::$demo]['pages'])) {
                self::$pageConfig = Util::getArrayValue(self::$page, self::$config['demos'][self::$demo]['pages']);
            } else {
                echo 'Undefined page: ' .  self::$page;
            }

            if (isset(self::$config['demos'][self::$demo]['layout'])) {
                self::$layoutConfig = self::$config['demos'][self::$demo]['layout'];

                // merge with layout builder level override
                if (isset(self::$config['main']['request']['builder']['layout'])) {
                    $tmp = self::$config['main']['request']['builder']['layout'];

                    array_walk_recursive($tmp, function (&$value) {
                        if ($value === 'true') {
                            $value = true;
                        } elseif ($value === 'false') {
                            $value = false;
                        }
                    });

                    self::$layoutConfig = array_replace_recursive(self::$layoutConfig, $tmp);
                }

                // merge with page level override
                if (isset(self::$pageConfig['layout'])) {
                    self::$layoutConfig = array_replace_recursive(self::$layoutConfig, self::$pageConfig['layout']);
                }
            } else {
                echo 'Undefined layout: ' .  self::$layout;
                exit;
            }

            if (isset(self::$config['demos'][self::$demo]['menu'])) {
                self::$menuConfig = self::$config['demos'][self::$demo]['menu'];
	            self::filterMenu(self::$menuConfig);
            } else {
                echo 'Undefined menu';
                exit;
            }
        } else {
            echo 'Undefined demo: ' .  self::$demo;
            exit;
        }
    }

    public static function run() {
        self::init();
        self::initDemoView();

        //ob_start('ob_gzhandler');
        ob_start();
        
        self::getBaseView();

        echo ob_get_clean();
    }

    public static function initDemoView() {
        $path = 'demos/' . self::$demo . '/init';
        Util::getView($path);
	    $initClass = ucfirst( self::$demo ) . 'Init';
	    $initClass::run();
    }

    public static function getBaseView() {
        $path = 'default';
        if (isset(self::$layoutConfig['self']['base_view'])) {
            $path = self::$layoutConfig['self']['base_view'];
        }
	    Util::putAngularComment( 'begin', array( 'id' => 'base', 'type' => 'base' ) );
	    Util::getView('base/' . $path);
	    Util::putAngularComment( 'end', array( 'id' => 'base' ) );
    }

    public static function getLayoutView() {
        $path = 'demos/' . self::$demo . '/layout/' . self::$layout . 'layout' ;
        Util::getView($path);
    }

    public static function getLayoutPartialView($path) {
        Util::getView('demos/' . self::$demo . '/layout/' . $path);
    }

    public static function getPageView() {
        $path = self::$page;
        if (isset(self::$pageConfig['view'])) {
            $path = self::$pageConfig['view'];
        }
        Util::getView('demos/' . self::$demo . '/pages/' . $path);
    }

    public static function getPagePartialView($page_path) {
        $path = self::$page;
        Util::getView('demos/' . self::$demo . '/pages/' . $path . $page_path);
    }

    public static function getPageId() {
        return self::$page;
    }

    public static function getPageViewName($page) {
        return self::$demoConfig['pages'][$page]['view'];
    }

    public static function getGlobalPartialView($path) {
         Util::getView('partials/' . $path);
    }

    public static function addAttr($scope, $name, $value) {
        self::$attrs[$scope][$name] = $value;
    }

    public static function addClass($scope, $class) {
        self::$classes[$scope][] = $class;
    }

    public static function printAttrs($scope) {
        $attrs = array();
        if (isset(self::$attrs[$scope]) && !empty(self::$attrs[$scope])) {
            foreach (self::$attrs[$scope] as $name => $value) {
                if ($name == 'style') {
                    $attrs[] = $name . '="' . $value . '"';
                } else {
                    $attrs[] = 'data-' . $name . '="' . $value . '"';
                }               
            }
            echo ' ' . implode(' ', $attrs) . ' ';
        }
        echo '';
    }

    public static function printClasses($scope, $full = true) {
        if (isset(self::$classes[$scope]) && !empty(self::$classes[$scope])) {
            $classes = implode(' ', self::$classes[$scope]);
            if ($full) {
                echo ' class="' . $classes . '" ';
            } else {
                echo ' ' . $classes . ' ';
            }
        } else {
            echo '';
        }
    }

    //== Path functions
    public static function getDemoAssetsPath() {
        return Page::$config['main']['path']['assets'];
    }

    public static function getMediaPath() {
        return Page::$config['main']['path']['assets'] . 'assets/media/';
    }

    public static function getMediaImgPath() {
        return Page::$config['main']['path']['assets'] . 'assets/app/media/img/';
    }

    public static function getDemoMediaPath() {
        return Page::$config['main']['path']['assets'] . 'assets/demo/' . self::$demo . '/media/';
    }

    public static function getDemoCustomPath() {
        return Page::$config['main']['path']['assets'] . 'assets/demo/' . self::$demo . '/custom/';
    }

    public static function getVendorsPath() {
        return Page::$config['main']['path']['assets'] . 'assets/vendors/';
    }

    public static function getSnippetsPath() {
        return Page::$config['main']['path']['assets'] . 'assets/snippets/';
    }

    public static function getAppScriptsPath() {
        return Page::$config['main']['path']['assets'] . 'assets/app/';
    }    

    //== Get JS/CSS functions
    public static function getDemoCss() {
        return isset(Page::$demoConfig['resources']) && isset(Page::$demoConfig['resources']['css']) ? Page::$demoConfig['resources']['css'] : array();
    }

    public static function getDemoJs() {
        return isset(Page::$demoConfig['resources']) && isset(Page::$demoConfig['resources']['js']) ? Page::$demoConfig['resources']['js'] : array();
    }

    public static function getPageResources($type) {
        $result = array();

        if (isset(Page::$pageConfig['resources']) && isset(Page::$pageConfig['resources'][$type])) {
            foreach (Page::$pageConfig['resources'][$type] as $file) {
                $result[] = $file;
            }
        }

        return $result;
    }

    public static function getPageVendors($type) {
        $result = array();

        if (isset(Page::$pageConfig['vendors']) && isset(Page::$pageConfig['vendors'][$type])) {
            foreach (Page::$pageConfig['vendors'][$type] as $file) {
                $result[] = $file;
            }
        }

        return $result;
    }

    public static function getAppScripts($type) {
        $result = array();

        if (isset(Page::$pageConfig['app']) && isset(Page::$pageConfig['app'][$type])) {
            foreach (Page::$pageConfig['app'][$type] as $file) {
                $result[] = $file;
            }
        }

        return $result;
    }

    public static function getSnippets($type) {
        $result = array();

        if (isset(Page::$pageConfig['snippets']) && isset(Page::$pageConfig['snippets'][$type])) {
            foreach (Page::$pageConfig['snippets'][$type] as $file) {
                $result[] = $file;
            }
        }

        return $result;
    }

    public static function getDemoFavicon() {
        return Page::$demoConfig['resources']['favicon'];
    }

    public static function getDemoGoogleFonts() {
        return json_encode(Page::$demoConfig['resources']['fonts']['google']);
    }

    //= Config get functions

    public static function getOption($scope, $path) {
        $result = array();

        if ($scope == 'demo') {
            $result = Util::getArrayValue($path, self::$demoConfig);
        } else if ($scope == 'page') {
            $result = Util::getArrayValue($path, self::$pageConfig);
        } else if ($scope == 'layout') {
            $result = Util::getArrayValue($path, self::$layoutConfig);
        } else if ($scope == 'menu') {
            $result = Util::getArrayValue($path, self::$menuConfig);
        } else if ($scope == 'main') {
            $result = Util::getArrayValue($path, self::$config['main']);
        }

        return $result;
    }

    public static function hasOption($scope, $path) {
        $result = array();

        if ($scope == 'demo') {
            return Util::hasArrayValue($path, self::$demoConfig);
        } else if ($scope == 'page') {
            return Util::hasArrayValue($path, self::$pageConfig);
        } else if ($scope == 'layout') {
            $result = Util::hasArrayValue($path, self::$layoutConfig);
        } else if ($scope == 'menu') {
            return Util::hasArrayValue($path, self::$menuConfig);
        } else if ($scope == 'main') {
            return Util::hasArrayValue($path, self::$config['main']);
        }

        return false;
    }

    //== Helper functions

    public static function isLayoutBoxed() {
        return (Page::getOption('layout', 'layout') == 'boxed' ? true : false);
    }

    public static function isLayoutWide() {
        return (Page::getOption('layout', 'layout') == 'wide' ? true : false);
    }

    public static function isLayoutFluid() {
        return (Page::getOption('layout', 'layout') == 'fluid' ? true : false);
    }

    public static function getPageTitle() {
        $title = self::getOption('page', 'page/title');

        return $title;
    }

    public static function getPageDesc() {
        $desc = self::getOption('page', 'page/desc');

        return $desc;
    }

	public static function getPageBreadcrumb() {
		$page = Page::getOption( 'main', 'request/page' );
		$breadcrumbs = Menu::getHorMenuBreadcrumb( $page );
		if ( empty( $breadcrumbs ) ) {
			$breadcrumbs = Menu::getVerMenuBreadcrumb( $page );
		}

		// check if breadcrumb has 1 item
		if ( count( $breadcrumbs ) === 1 ) {
			// and same as page title
			if ( $breadcrumbs[ 0 ]['title'] === self::getPageTitle() ) {
				return array();
			}
		}

		return $breadcrumbs;
	}

	/**
	 * check and filter visibility of menu between php and angular
	 * @param $menuConfig
	 */
	public static function filterMenu( &$menuConfig ) {
		$mode = self::getOption( 'main', 'request/type' ) ?: 'preview';
		self::arrayWalkCallback( $menuConfig, function ( $k, $v, &$parent ) use ( $mode ) {
			if ( isset( $v[ 'visible' ] ) && ! in_array( $v[ 'visible' ], (array)$mode ) ) {
				unset( $parent[ $k ] );
			}
		} );
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

	public static function classValue( $helper, $current, $echo = true, $class = 'active' ) {
		$result = '';
		if ( (string)$helper === (string)$current ){
			$result = ' ' . $class;
		}

		if ( $echo )
			echo $result;

		return $result;
	}

	public static function getBuilderTabSession( $default = false ) {
		$builder = self::getOption( 'main', 'request/builder' );
		if ( isset( $builder[ 'tab' ] ) ) {
			return $builder[ 'tab' ];
		}
		return $default;
	}

    public static function getGlobalPortletClass() {
        $m_portlet_class = '';
        $m_portlet_class = self::getOption('layout', 'content/portlet/rounded') ? ' m-portlet--rounded' : '';
        $m_portlet_class .= self::getOption('layout', 'content/portlet/air') === false  ? ' m-portlet--unair' : '';

        return $m_portlet_class;
    }
}