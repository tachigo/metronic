<?php
class Menu {
    private static $initialized = false;

    public static function init() {
        global $_CONFIG;
        if (self::$initialized) {
            return;
        }
        self::$initialized = true;
    }

    public static function renderVerMenu($item, $parent = null, $rec = 0, $singleItem = false) {
        if ($rec > 10000) {
            echo 'Too many recursive calls!';
            exit;
        }

        if (isset($item['separator'])) {
            echo '<li class="m-menu__separator"><span></span></li>';
        } else if (isset($item['section'])) {
            echo '<li class="m-menu__section">
                <h4 class="m-menu__section-text">' . $item['section'] . '</h4>
                <i class="m-menu__section-icon flaticon-more-v3"></i>
            </li>';
        } else if (isset($item['title'])) {
            $item_class = '';
            $item_attr = '';

            if (isset($item['submenu'])) {
                $item_class .= ' m-menu__item--submenu'; // m-menu__item--active

                if (isset($item['toggle']) && $item['toggle'] == 'click') {
                    $item_attr = ' data-menu-submenu-toggle="click"';
                } else {
                    $item_attr = ' data-menu-submenu-toggle="hover"';
                }
            }

            if (@$item['redirect'] === true) {
                $item_attr .= ' data-redirect="true"';
            }

            // parent item for hoverable submenu
            if (isset($item['parent'])) {
                $item_class .= ' m-menu__item--parent'; // m-menu__item--active
            }

            // custom class for menu item
            if (isset($item['custom-class'])) {
                $item_class .= ' ' . $item['custom-class'];
            }

            $is_item_active = false;
            
            if (isset($item['submenu']) && self::isActiveVerMenuItem($item, Page::getPageId())) {
                $item_class .= ' m-menu__item--open m-menu__item--expanded'; // m-menu__item--active
                $is_item_active = true;
            } else if (self::isActiveVerMenuItem($item, Page::getPageId())) {
                $item_class .= ' m-menu__item--active';
                $is_item_active = true;
            }

            echo '<li class="m-menu__item ' . $item_class . '" aria-haspopup="true" ' . $item_attr . '>';
                echo '<a ' . (@$item['new-tab'] == true ? 'target="_blank"' : '') . ' href="' . (!empty($item['page']) ? Util::getUrl($item['page']) : '#') . '" class="m-menu__link ' . (isset($item['submenu']) ? 'm-menu__toggle' : '') . '">';

                if (@$item['here'] === true) {
                    echo '<span class="m-menu__item-here"></span>';
                }

                // bullet
                $bullet = '';

                if ($parent != null && isset($parent['bullet']) && $parent['bullet'] == 'dot') {
                    $bullet = 'dot';
                } else if ($parent != null && isset($parent['bullet']) && $parent['bullet'] == 'line') {
                    $bullet = 'line';
                } 
                
                if ($bullet == 'dot') {
                    echo '<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>';
                } else if ($bullet == 'line') {
                    echo '<i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i>';
                } else if (isset($item['icon']) && !empty($item['icon'])) {
                    echo '<i class="m-menu__link-icon ' .  $item['icon'] . '"></i>';
                }

                if (isset($item['badge'])) {
                    echo '<span class="m-menu__link-title">';
                    echo '  <span class="m-menu__link-wrap">';
                    echo '      <span class="m-menu__link-text">' . $item['title'] . '</span>';
                    echo '      <span class="m-menu__link-badge"><span class="m-badge ' . $item['badge']['type'] . '">' . $item['badge']['value'] . '</span></span>';
                    echo '  </span>';
                    echo '</span>';
                } else {
                    echo '<span class="m-menu__link-text">' . $item['title'] . '</span>';
                }

                if ($singleItem == true) {
                    echo '</a>';
                    echo '</li>';
                    return;
                }

                if (isset($item['submenu'])) {
                    if (isset($item['root']) == false && Page::getOption('layout', 'menu/aside/submenu/arrow') == 'plus-minus') {
                        echo '<i class="m-menu__ver-arrow m-menu__ver-arrow--pm"><span><span></span></span></i>';
                    } else if (isset($item['root']) == false && Page::getOption('layout', 'menu/aside/submenu/arrow') == 'plus-minus-square') {
                        echo '<i class="m-menu__ver-arrow m-menu__ver-arrow--pm-square"><span><span></span></span></i>';
                    } else if (isset($item['root']) == false && Page::getOption('layout', 'menu/aside/submenu/arrow') == 'plus-minus-circle') {
                        echo '<i class="m-menu__ver-arrow m-menu__ver-arrow--pm-circle"><span><span></span></span></i>';
                    } else {
                        if (@$item['arrow'] !== false) {
                             echo '<i class="m-menu__ver-arrow la la-angle-right"></i>';
                        }                       
                    }                   
                }
                    
                echo '</a>';        

                if (isset($item['root']) && Page::getOption('layout', 'menu/aside/root-arrow')) {
                    echo '<span class="m-menu__arrow"></span>';
                }

                if (isset($item['submenu'])) {
                    echo '<div class="m-menu__submenu">';
                    echo '<span class="m-menu__arrow"></span>';
                    echo '<ul class="m-menu__subnav">';
                    if (isset($item['root'])) {
                        $parent_item = $item;
                        $parent_item['parent'] = true;
                        unset($parent_item['icon']);
                        unset($parent_item['submenu']);
                        self::renderVerMenu($parent_item, null, $rec++, true); // single item render
                    }
                    foreach ($item['submenu'] as $submenu_item) {
                        self::renderVerMenu($submenu_item, $item, $rec++);
                    }
                    echo '</ul>';
                    echo '</div>';
                }
            echo '</li>';
        } else {
            foreach ($item as $each) {
                self::renderVerMenu($each, $parent, $rec++);
            }
        }
    }

    public static function renderHorMenu($item, $parent = null, $rec = 0) {
        if ($rec > 10000) {
            echo 'Too many recursive calls!';
            exit;
        }

        // render separator
        if (isset($item['separator'])) {
            echo '<li class="m-menu__separator"><span></span></li>';
        } else if (isset($item['title'])) {
            $item_class = '';
            $item_attr = '';

            if (self::isActiveHorMenuItem($item, Page::getPageId())) {
                $item_class .= ' m-menu__item--active';
            }

            if (isset($item['submenu'])) {
                $item_class .= ' m-menu__item--submenu'; // m-menu__item--active

                if (isset($item['toggle']) && $item['toggle'] == 'click') {
                    $item_attr .= ' data-menu-submenu-toggle="click"';
                } else {
                    $item_attr .= ' data-menu-submenu-toggle="hover"';
                }

                if (isset($item['resizer']) && $item['resizer'] == true) {
                    $item_class .= ' m-menu__item--resize';
                    $item_attr .= ' data-menu-resize-desktop-breakpoint="' . $item['resize-breakpoint'] . '"';
                }                
            }

            if (@$item['redirect'] === true) {
                $item_attr .= ' data-redirect="true"';
            }

            if (isset($item['submenu'])) {
                if (($item['submenu']['type'] == 'classic' || intval($item['submenu']['width']) > 0) && isset($item['root'])) {
                    $item_class .= ' m-menu__item--rel';
                }
            }

            if (isset($item['submenu']['items']) && self::isActiveHorMenuItem($item['submenu'], Page::getPageId())) {
                $item_class .= ' m-menu__item--open'; // m-menu__item--active
            }

            if (isset($item['custom-class'])) {
                $item_class .= ' ' . $item['custom-class'];
            }

            if (@$item['icon-only'] == true) {
                $item_class .= ' m-menu__item--icon-only';
            }

            if (isset($item['heading']) == false) {
                echo '<li class="m-menu__item ' . $item_class . '" ' . $item_attr .  ' aria-haspopup="true">';
            }

                // insert title or heading
                if (isset($item['heading']) == false) {
                    echo '<a ' . (@$item['new-tab'] == true ? 'target="_blank"' : '') . '' . (@$item['new-tab'] == true ? 'target="_blank"' : '') . ' href="' . (!empty($item['page']) ? Util::getUrl($item['page']) : '#') . '" class="m-menu__link ' . (isset($item['submenu']) ? 'm-menu__toggle' : '') . '">';
                } else {
                    echo '<h3 class="m-menu__heading m-menu__toggle">';
                }
                
                // put root level arrow
                if (@$item['here'] === true) {
                    echo '<span class="m-menu__item-here"></span>';
                }

                // bullet
                $bullet = '';

                if ($parent != null && isset($parent['bullet']) && $parent['bullet'] == 'dot') {
                    $bullet = 'dot';
                } else if ($parent != null && isset($parent['bullet']) && $parent['bullet'] == 'line') {
                    $bullet = 'line';
                } 
                
                if ($bullet == 'dot') {
                    echo '<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>';
                } else if ($bullet == 'line') {
                    echo '<i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i>';
                } else if (isset($item['icon']) && !empty($item['icon'])) {
                    echo '<i class="m-menu__link-icon ' .  $item['icon'] . '"></i>';
                }

                // badge
                if (isset($item['badge'])) {
                    echo '<span class="m-menu__link-title">';
                    echo '  <span class="m-menu__link-wrap">';
                    echo '      <span class="m-menu__link-text">' . $item['title'] . '</span>';
                    echo '      <span class="m-menu__link-badge"><span class="m-badge ' . $item['badge']['type'] . '">' . $item['badge']['value'] . '</span></span>';
                    echo '  </span>';
                    echo '</span>';
                } else {
                    echo '<span class="m-menu__link-text">' . $item['title'] . '</span>';
                }

                // arrow
                if (isset($item['submenu']) && (!isset($item['arrow']) || $item['arrow'] != false)) {
                    if (isset($item['root'])) {
                        echo '<i class="m-menu__hor-arrow la la-angle-down"></i>';
                        echo '<i class="m-menu__ver-arrow la la-angle-right"></i>';
                    } else {
                        echo '<i class="m-menu__hor-arrow la la-angle-right"></i>';
                        echo '<i class="m-menu__ver-arrow la la-angle-right"></i>';
                    }
                }
                    
                // closing title or heading
                if (isset($item['heading']) == false) {
                    echo '</a>';
                } else {
                    echo '<i class="m-menu__ver-arrow la la-angle-right"></i></h3>';
                }         

                if (isset($item['submenu'])) {
                    if ($item['submenu']['type'] == 'classic') {
                        if (isset($item['submenu']['alignment'])) {
                            $submenu_class = ' m-menu__submenu--' . $item['submenu']['alignment'];

                            if (isset($item['submenu']['pull']) && $item['submenu']['pull'] == true) {
                                $submenu_class .= ' m-menu__submenu--pull'; 
                            }
                        }

                        echo '<div class="m-menu__submenu m-menu__submenu--classic' . $submenu_class . '">';
                        if (
                            (isset($item['root']) && (Page::getOption('layout', 'menu/header_desktop/arrow'))) ||
                            (isset($item['root']) == false && (Page::getOption('layout', 'menu/header_desktop/submenu/arrow')))
                            ) {
                            echo '<span class="m-menu__arrow '.(isset($item['root']) ? 'm-menu__arrow--adjust' : '').'"></span>';
                        }
                        
                        echo '<ul class="m-menu__subnav">';
                        foreach ($item['submenu']['items'] as $submenu_item) {
                            self::renderHorMenu($submenu_item, $item, $rec++);
                        }
                        echo '</ul>';
                        echo '</div>';
                    } else if ($item['submenu']['type'] == 'mega') {
                        $submenu_fixed_width = '';

                        if (intval(@$item['submenu']['width']) > 0) {
                            $submenu_class = ' m-menu__submenu--fixed';  
                            $submenu_fixed_width = 'style="width:' . $item['submenu']['width'] . '"';
                        } else {
                            $submenu_class = ' m-menu__submenu--' . $item['submenu']['width'];   
                        }

                        if (isset($item['submenu']['alignment'])) {
                            $submenu_class .= ' m-menu__submenu--' . $item['submenu']['alignment'];

                            if (isset($item['submenu']['pull']) && $item['submenu']['pull'] == true) {
                                $submenu_class .= ' m-menu__submenu--pull'; 
                            }
                        }
                        
                        echo '<div class="m-menu__submenu ' . $submenu_class  . '" ' . ($submenu_fixed_width) . '>';

                        if (
                            (isset($item['root']) && (Page::getOption('layout', 'menu/header_desktop/arrow'))) ||
                            (isset($item['root']) == false && (Page::getOption('layout', 'menu/header_desktop/submenu/arrow')))
                            ) {
                            echo '<span class="m-menu__arrow '.(isset($item['root']) ? 'm-menu__arrow--adjust' : '').'"></span>';
                        }
                        
                        echo '<div class="m-menu__subnav">';
                        echo '<ul class="m-menu__content">';
                            foreach ($item['submenu']['columns'] as $column) {
                                echo '<li class="m-menu__item">';                                    
                                    if (isset($column['heading'])) {
                                        self::renderHorMenu($column['heading'], null, $rec++);
                                    }                                    
                                    echo '<ul class="m-menu__inner">';
                                    foreach ($column['items'] as $column_submenu_item) {
                                        self::renderHorMenu($column_submenu_item, $column, $rec++);
                                    }
                                    echo '</ul>';
                                echo '</li>';
                            }
                        echo '</ul>';
                        echo '</div>';
                        echo '</div>';
                    }                   
                }
            
            if (isset($item['heading']) == false) {    
                echo '</li>';
            }
        } else if (is_array($item)) {
            foreach ($item as $each) {
                self::renderHorMenu($each, $parent, $rec++);
            }
        }
    }

    public static function isActiveVerMenuItem($item, $page, $rec = 0) {
        if (@$item['redirect'] === true) {
            return false;
        }

        if ($rec > 10000) {
            echo 'Too many recursions!!!';
            exit;
        }

        if (isset($item['page'])) {
            if ($item['page'] == $page) {
                return true;
            } 
        }
            
        if (isset($item['submenu'])) {
            foreach ($item['submenu'] as $each) {
                if (self::isActiveVerMenuItem($each, $page, $rec++)) {
                    return true;
                }
            }            
        }

        return false;
    }

    public static function isActiveHorMenuItem($item, $page, $rec = 0) {
        if (@$item['redirect'] === true) {
            return false;
        }

        if ($rec > 10000) {
            echo 'Too many recursions!!!';
            exit;
        }

        if (isset($item['page'])) {
            if ($item['page'] == $page) {
                return true;
            } 
        }
            
        if (isset($item['submenu']['items'])) {
            foreach ($item['submenu']['items'] as $each) {
                if (self::isActiveHorMenuItem($each, $page, $rec++)) {
                    return true;
                }
            }            
        }

        return false;
    }

	public static function getHorMenuBreadcrumb( $page ) {
		$menus = Page::getOption( 'menu', 'header/items' );

		$breadcrumbs = array();
		if ( $keys = self::getArrayPath( $menus, $page ) ) {
			foreach ( $keys as $key ) {
				$menus = $menus[ $key ];
				if ( isset( $menus[ 'title' ] ) ) {
					$breadcrumbs[] = array('title' => $menus[ 'title' ], 'page' => @$menus[ 'page' ]);
				}
			}
		}

		return $breadcrumbs;
	}

	public static function getVerMenuBreadcrumb( $page ) {
		$menus = Page::getOption( 'menu', 'aside/items' );

		$breadcrumbs = array();
		if ( $keys = self::getArrayPath( $menus, $page ) ) {
			foreach ( $keys as $key ) {
				$menus = $menus[ $key ];
				if ( isset( $menus[ 'title' ] ) ) {
					$breadcrumbs[] = array('title' => $menus[ 'title' ], 'page' => @$menus[ 'page' ]);
				}
			}
		}

		return $breadcrumbs;
	}

	public static function getArrayPath( $array, $searchKey = '' ) {
		//create a recursive iterator to loop over the array recursively
		$iter = new RecursiveIteratorIterator(
			new RecursiveArrayIterator( $array ),
			RecursiveIteratorIterator::SELF_FIRST );

		//loop over the iterator
		foreach ( $iter as $key => $value ) {
			//if the value matches our search
			if ( $value === $searchKey ) {
				//add the current key
				$keys = array( $key );
				//loop up the recursive chain
				for ( $i = $iter->getDepth() - 1; $i >= 0; $i-- ) {
					//add each parent key
					array_unshift( $keys, $iter->getSubIterator( $i )->key() );
				}
				//return our output array
				return $keys;
			}
		}
		//return false if not found
		return false;
	}
}