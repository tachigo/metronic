<!-- BEGIN: Horizontal Menu -->
<button class="m-aside-header-menu-mobile-close <?php Page::printClasses('header_menu_close', false);?>" id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>

<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas <?php Page::printClasses('header_menu', false);?>" <?php Page::printAttrs('header_menu')?> >	
	<ul class="m-menu__nav <?php Page::printClasses('header_menu_nav', false)?>">
		<?php Menu::renderHorMenu(Page::getOption('menu', 'header/items'), Page::getOption('menu', 'header/self'))?>
	</ul>
</div>
<!-- END: Horizontal Menu -->