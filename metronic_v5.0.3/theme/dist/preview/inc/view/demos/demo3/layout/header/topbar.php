<!-- BEGIN: Topbar -->
<div id="m_header_topbar" class="m-topbar <?php Page::printClasses('topbar', false)?> m-stack m-stack--ver m-stack--general">

	<?php if( Page::getOption('layout', 'header/search/type') == 'search-default' ):?>
		<?php Page::getLayoutPartialView('header/topbar/search-default');?>
	<?php endif;?>

	<div class="m-stack__item m-topbar__nav-wrapper">
		<ul class="m-topbar__nav m-nav m-nav--inline">
			<?php if( Page::getOption('layout', 'header/search/type') == 'search-dropdown' ):?>
				<?php Page::getLayoutPartialView('header/topbar/search-dropdown');?>
			<?php endif;?>

			<?php Page::getLayoutPartialView('header/topbar/notifications');?>

			<?php Page::getLayoutPartialView('header/topbar/quick-actions');?>

			<?php Page::getLayoutPartialView('header/topbar/user-profile');?>

			<?php if (Page::getOption('layout', 'quick-sidebar/display') == true):?>		
				<li id="m_quick_sidebar_toggle" class="m-nav__item">
					<a href="#" class="m-nav__link m-dropdown__toggle">
						<span class="m-nav__link-icon"><i class="flaticon-menu-button"></i></span>
					</a>
				</li>			
			<?php endif;?>
		</ul>
	</div>
</div>
<!-- END: Topbar -->