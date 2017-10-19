<?php
class Demo5Init {

	public static function run() {
		// init base layout
		self::initLayout();
		self::initLoader();
		self::initContent();
		
		// init header and header menu
		self::initHeader();
		self::initHeaderMenuDesktop();
		self::initHeaderMenuMobile();

		// init aside and aside menu
		self::initAsideLeft();
		self::initAsideMenu();

		// init other asides
		self::initAsideRight();
		
		// init subheader
		self::initSubheder();

		// init footer
		self::initFooter();

		// init quick sidebar
		self::initQuickSidebar();
	}

	private static function initLayout() {
		Page::addClass('body', 'm-page--' . Page::getOption('layout', 'self/layout'));		
	}

	private static function initLoader() {
		if (Page::getOption('main', 'request/type') === 'angular') {
			if (empty(Page::getOption('layout', 'angular/loader/type'))) {
				Page::addClass('body', 'm-page--loading-non-block');
			}
		} else {
			if (!empty(Page::getOption('layout', 'loader/type'))) {
				Page::addClass('body', 'm-page--loading');
			} 
		}
	}
	
	private static function initHeader() {		
		// header fixed mode
		if (Page::getOption('layout', 'header/self/fixed/desktop') == true) {
			Page::addClass('body', 'm-header--fixed');
		} else {
			Page::addClass('body', 'm-header--static');
		}

		if (Page::getOption('layout', 'header/self/fixed/mobile') == true) {
			Page::addClass('body', 'm-header--fixed-mobile');
		}

		if (Page::getOption('layout', 'header/self/fixed/minimize/desktop') == 'minimize') {
			Page::addAttr('header', "minimize", "minimize");
		}

		if (Page::getOption('layout', 'header/self/fixed/minimize/desktop') == 'hide') {
			Page::addAttr('header', "minimize", "hide");
		}

		if (Page::getOption('layout', 'header/self/fixed/minimize/mobile') == 'hide') {
			Page::addAttr('header', "minimize-mobile", "hide");
		}	

		if (Page::getOption('layout', 'header/self/fixed/minimize/mobile') == 'hide') {
			Page::addAttr('header', "minimize-mobile", "hide");
		}	

		if (Page::getOption('layout', 'header/self/fixed/minimize-offset/desktop')) {
			Page::addAttr('header', "minimize-offset", Page::getOption('layout', 'header/self/fixed/minimize-offset/desktop'));
		}

		if (Page::getOption('layout', 'header/self/fixed/minimize-offset/mobile')) {
			Page::addAttr('header', "minimize-mobile-offset", Page::getOption('layout', 'header/self/fixed/minimize-offset/mobile'));
		}	
	}

	private static function initHeaderMenuDesktop() {
		Page::addClass('header_menu', 'm-header-menu--skin-' . Page::getOption('layout', 'menu/header_desktop/skin'));
		Page::addClass('header_menu', 'm-header-menu--submenu-skin-' . Page::getOption('layout', 'menu/header_desktop/submenu/skin'));	

		if (Page::getOption('layout', 'menu/header_desktop/arrow')) {
			Page::addClass('header_menu_nav', 'm-menu__nav--submenu-arrow');
		}
	}

	private static function initHeaderMenuMobile() {
		Page::addClass('header_menu', 'm-aside-header-menu-mobile--skin-' . Page::getOption('layout', 'aside/left/skin'));
		Page::addClass('header_menu', 'm-aside-header-menu-mobile--submenu-skin-' . Page::getOption('layout', 'aside/left/skin'));
		Page::addClass('header_menu_close', 'm-aside-header-menu-mobile-close--skin-' . Page::getOption('layout', 'aside/left/skin'));		
	}

	private static function initHeaderTopbar() {
		Page::addClass('topbar_aside', 'm-aside-quick--skin-' . Page::getOption('layout', 'header/topbar/aside/skin'));

		if (Page::getOption('layout', 'header/topbar/aside/display')) {
			Page::addClass('body', 'm-aside--offcanvas-default');
		}
	}

	private static function initAsideMenu() {		
		// skin
		Page::addClass('aside_menu', 'm-aside-menu--skin-' . Page::getOption('layout', 'aside/left/skin'));

		if (Page::getOption('layout', 'menu/aside/submenu/skin') == 'inherit') {
			Page::addClass('aside_menu', 'm-aside-menu--submenu-skin-' . Page::getOption('layout', 'aside/left/skin'));
		} else {
			Page::addClass('aside_menu', 'm-aside-menu--submenu-skin-' . Page::getOption('layout', 'menu/aside/submenu/skin'));
		}

		// dropdown submenu
		if (Page::getOption('layout', 'menu/aside/dropdown') == true) {
			Page::addClass('aside_menu', 'm-aside-menu--dropdown');	
			Page::addAttr('aside_menu', 'menu-dropdown', 'true');
		}

		// scrollable menu
		if (Page::getOption('layout', 'aside/left/fixed')) {
			Page::addAttr('aside_menu', 'menu-scrollable', "true");
		} else {
			Page::addAttr('aside_menu', 'menu-scrollable', "false");
		}

		// menu root level item highlight stype
		if (Page::getOption('layout', 'menu/aside/root-active-style') == true) {
			Page::addClass('aside_menu', 'm-aside-menu--active-item-border');	
		}

		if (Page::getOption('layout', 'menu/aside/minimize/submenu-type') == 'compact') {
			Page::addClass('aside_menu', 'm-aside-menu--minimize-submenu-compact');	
		}
		if (Page::getOption('layout', 'menu/aside/submenu/dropdown/arrow')) {
			Page::addClass('aside_menu_nav', 'm-menu__nav--dropdown-submenu-arrow');
		}

		if (Page::getOption('layout', 'menu/aside/submenu/dropdown/hover-timeout')) {
			Page::addAttr('aside_menu', 'menu-dropdown-timeout', Page::getOption('layout', 'menu/aside/submenu/dropdown/hover-timeout'));	
		}
	}

	private static function initAsideLeft() {
		if (Page::getOption('layout', 'aside/left/display') != true) {
			return;
		}

		Page::addClass('body', 'm-aside-left--enabled');

		// fixed aside
		if (Page::getOption('layout', 'aside/left/fixed')) {
			Page::addClass('body', 'm-aside-left--fixed');
		}

		// offcanvas aside
		if (Page::getOption('layout', 'aside/left/offcanvas/default')) {
			Page::addClass('aside_left', 'm-aside-left--offcanvas-default');
		} else {
			// Set aside menu mobile mode
			Page::addClass('body', 'm-aside-left--offcanvas');
		}

		// minimized aside for desktop mode
		if (Page::getOption('layout', 'aside/left/minimize/default')) {
			Page::addClass('body', 'm-aside-left--minimize');
			Page::addClass('body', 'm-brand--minimize');
		}

		// hidable aside
		if (Page::getOption('layout', 'aside/left/hide/default')) {
			Page::addClass('body', 'm-aside-left--hide');
		}
	}

	private static function initAsideRight() {
		if (Page::getOption('layout', 'aside/right/display') != true) {
			return;
		}

		Page::addClass('body', 'm-aside-right--enabled');
	}


	private static function initContent() {
			
	}

	private static function initSubheder() {
		
	}
	
	private static function initFooter() {		
		if (Page::getOption('layout', 'footer/fixed')) {
			Page::addClass('body', 'm-footer--fixed');
		}		

		if ((Page::getOption('layout', 'aside/left/push_footer') == true || Page::getOption('layout', 'aside/left/fixed') == true) && Page::getOption('layout', 'footer/fixed') == false) {
			Page::addClass('body', 'm-footer--push');
		}
	}

	private static function initQuickSidebar() {
		if (Page::getOption('layout', 'quick-sidebar/display')) {
			Page::addClass('body', 'm-aside--offcanvas-default');
		}
	}
}