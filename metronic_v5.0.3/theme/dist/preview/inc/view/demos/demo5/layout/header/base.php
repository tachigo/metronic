<?php
	$m_container_class = '';
	if (Page::getOption('layout', 'self/layout') == 'boxed') {
		$m_container_class = 'm-container m-container--responsive m-container--xxl m-container--full-height m-page__container';
	} else if (Page::getOption('layout', 'self/layout') == 'wide') {
		$m_container_class = 'm-container m-container--responsive m-container--xxl m-container--full-height m-page__container';
	} else {
		$m_container_class = 'm-container m-container--fluid m-container--full-height m-page__container';
	}
?>
<!-- begin::Header -->
<header class="m-grid__item		m-header <?php Page::printClasses('header', false)?>" <?php Page::printAttrs('header')?>>
	<div class="m-header__top">
		<div class="<?php echo $m_container_class;?>">
			<div class="m-stack m-stack--ver m-stack--desktop">		
				<?php Page::getLayoutPartialView('header/brand');?>		
				<?php Page::getLayoutPartialView('header/topbar');?>
			</div>
		</div>
	</div>
	<div class="m-header__bottom">
		<div class="<?php echo $m_container_class;?>">
			<div class="m-stack m-stack--ver m-stack--desktop">		
				<?php Page::getLayoutPartialView('header/hor-menu');?>	
				<?php Page::getLayoutPartialView('header/search');?>
			</div>
		</div>
	</div>
</header>
<!-- end::Header -->