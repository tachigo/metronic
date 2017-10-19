<!-- BEGIN: Left Aside -->
<button class="m-aside-left-close m-aside-left-close--skin-dark" id="m_aside_left_close_btn"><i class="la la-close"></i></button>

<div id="m_aside_left" class="m-grid__item	m-aside-left <?php Page::printClasses('aside_left', false);?>">	
	<!-- BEGIN: Aside Menu -->
	<div 
		id="m_ver_menu" 
		class="m-aside-menu <?php Page::printClasses('aside_menu', false);?>" 
		data-menu-vertical="true"
		<?php Page::printAttrs('aside_menu');?> 
		>		
		<ul class="m-menu__nav <?php Page::printClasses('aside_menu_nav', false);?>">
			<?php Menu::renderVerMenu(Page::getOption('menu', 'aside/items'), Page::getOption('menu', 'aside/self'))?>
		</ul>
	</div>
	<!-- END: Aside Menu -->
</div>
<!-- END: Left Aside -->