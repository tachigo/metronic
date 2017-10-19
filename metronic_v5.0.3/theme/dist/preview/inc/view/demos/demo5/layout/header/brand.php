<!-- begin::Brand -->
<div class="m-stack__item m-brand">
	<div class="m-stack m-stack--ver m-stack--general m-stack--inline">
		<div class="m-stack__item m-stack__item--middle m-brand__logo">
			<a href="<?php echo Util::getUrl('index') ?>" class="m-brand__logo-wrapper">
				<img alt="" src="<?php echo Page::getDemoMediaPath();?>img/logo/logo.png"/>
			</a>  
		</div>
		<div class="m-stack__item m-stack__item--middle m-brand__tools">
			<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-left m-dropdown--align-push" data-dropdown-toggle="click" aria-expanded="true">
				<a href="#" class="dropdown-toggle m-dropdown__toggle btn btn-outline-metal m-btn  m-btn--icon m-btn--pill">
					<span>Dashboard</span>
				</a>
				<div class="m-dropdown__wrapper">
					<span class="m-dropdown__arrow m-dropdown__arrow--left m-dropdown__arrow--adjust"></span>
					<div class="m-dropdown__inner">
						<div class="m-dropdown__body">
							<div class="m-dropdown__content">
								<ul class="m-nav">
									<li class="m-nav__section m-nav__section--first m--hide">
										<span class="m-nav__section-text">Quick Menu</span>
									</li>
									<li class="m-nav__item">
										<a href="" class="m-nav__link">
										<i class="m-nav__link-icon flaticon-share"></i>
										<span class="m-nav__link-text">Human Resources</span>
										</a>
									</li>
									<li class="m-nav__item">
										<a href="" class="m-nav__link">
										<i class="m-nav__link-icon flaticon-chat-1"></i>
										<span class="m-nav__link-text">Customer Relationship</span>
										</a>
									</li>
									<li class="m-nav__item">
										<a href="" class="m-nav__link">
										<i class="m-nav__link-icon flaticon-info"></i>
										<span class="m-nav__link-text">Order Processing</span>
										</a>
									</li>
									<li class="m-nav__item">
										<a href="" class="m-nav__link">
										<i class="m-nav__link-icon flaticon-lifebuoy"></i>
										<span class="m-nav__link-text">Accounting</span>
										</a>
									</li>
									<li class="m-nav__separator m-nav__separator--fit">
									</li>
									<li class="m-nav__item">
										<a href="" class="m-nav__link">
										<i class="m-nav__link-icon flaticon-chat-1"></i>
										<span class="m-nav__link-text">Customer Relationship</span>
										</a>
									</li>
									<li class="m-nav__item">
										<a href="" class="m-nav__link">
										<i class="m-nav__link-icon flaticon-info"></i>
										<span class="m-nav__link-text">Order Processing</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>							

			<?php if (Page::getOption('layout', 'menu/aside/display') && Page::getOption('layout', 'aside/left/display')):?>
				<!-- BEGIN: Responsive Aside Left Menu Toggler -->
				<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
					<span></span>
				</a>
				<!-- END -->
			<?php endif?>	

			<?php if (Page::getOption('layout', 'menu/header_desktop/display')):?>
			<!-- begin::Responsive Header Menu Toggler-->
			<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
				<span></span>
			</a>
			<!-- end::Responsive Header Menu Toggler-->
			<?php endif?>	

			<!-- begin::Topbar Toggler-->
			<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
				<i class="flaticon-more"></i>
			</a>
			<!--end::Topbar Toggler-->
		</div>
	</div>
</div>
<!-- end::Brand -->