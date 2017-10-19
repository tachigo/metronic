<?php
	$m_container_class = '';
	if (Page::getOption('layout', 'self/layout') == 'boxed') {
		$m_container_class = 'm-container m-container--responsive m-container--xxl m-container--full-height';
	} else if (Page::getOption('layout', 'self/layout') == 'wide') {
		$m_container_class = 'm-container m-container--responsive m-container--xxl m-container--full-height';
	} else {
		$m_container_class = 'm-container m-container--fluid m-container--full-height';
	}
?>
<!-- BEGIN: Header -->
<header class="m-grid__item    m-header <?php Page::printClasses('header', false)?>" <?php Page::printAttrs('header')?>>
	<div class="<?php echo $m_container_class;?>">
		<div class="m-stack m-stack--ver m-stack--desktop">		
			<?php Page::getLayoutPartialView('header/brand');?>			
			<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
				<?php if (Page::getOption('layout', 'menu/header_desktop/display')):?>
				<?php Page::getLayoutPartialView('header/hor-menu');?>
				<?php endif?>
				<?php Page::getLayoutPartialView('header/topbar');?>
			</div>
		</div>
	</div>
</header>
<!-- END: Header -->