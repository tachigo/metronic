<!-- BEGIN: Brand -->
<div class="m-stack__item m-brand <?php Page::printClasses('brand', false)?>">
	<div class="m-stack m-stack--ver m-stack--general">
		<div class="m-stack__item m-stack__item--middle m-stack__item--center m-brand__logo">
			<a href="<?php echo Util::getUrl('index') ?>" class="m-brand__logo-wrapper">
			<img alt="" src="<?php echo Page::getDemoMediaPath();?>img/logo/logo.png"/>
			</a>  
		</div>
		<div class="m-stack__item m-stack__item--middle m-brand__tools">
			<?php if (Page::getOption('layout', 'menu/aside/display')):?>
				<!-- BEGIN: Responsive Aside Left Menu Toggler -->
				<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
					<span></span>
				</a>
				<!-- END -->
			<?php endif?>

			<?php if (Page::getOption('layout', 'menu/header_desktop/display')):?>
				<!-- BEGIN: Responsive Header Menu Toggler -->
				<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
					<span></span>
				</a>
				<!-- END -->
			<?php endif?>			

			<!-- BEGIN: Topbar Toggler -->
			<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
				<i class="flaticon-more"></i>
			</a>
			<!-- BEGIN: Topbar Toggler -->
		</div>
	</div>
</div>
<!-- END: Brand -->