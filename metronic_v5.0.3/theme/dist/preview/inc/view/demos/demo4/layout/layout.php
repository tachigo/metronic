<?php
	if ( Page::getOption('layout', 'self/layout') == 'fluid' ) {
		$m_container_class = 'm-container m-container--fluid m-container--responsive';
	} else {
		$m_container_class = 'm-container m-container--responsive m-container--xxl';
	}
?>

<!-- begin:: Page -->
<?php Util::putAngularComment( 'begin', array( 'id' => 'layout', 'type' => 'layout', 'selector' => '.m-page' ) ); ?>
<div class="m-grid m-grid--hor m-grid--root m-page">
    
	<?php if (Page::getOption('layout', 'self/layout') == 'blank'):?>		
		<div class="m-grid__item m-grid__item--fluid">
            <?php Util::putAngularComment( 'begin', array( 'id' => 'page', 'router' => 'outlet', 'type' => 'page' ) ); ?>
            <?php Page::getPageView();?>
            <?php Util::putAngularComment( 'end', array( 'id' => 'page' ) ); ?>
		</div>
	<?php else:?>

		<!-- begin::Header -->
		<header class="m-grid__item	m-grid m-grid--desktop m-grid--hor-desktop  m-header <?php Page::printClasses('header', false)?>" <?php Page::printAttrs('header')?>>
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--desktop m-grid--hor-desktop <?php echo $m_container_class?>">
				<div class="m-grid__item m-grid__item--fluid m-grid m-grid--desktop m-grid--ver-desktop m-header__wrapper">
                    <?php Util::putAngularComment( 'begin', array( 'id' => 'header-brand' ) ); ?>
					<?php Page::getLayoutPartialView('header/brand');?>
                    <?php Util::putAngularComment( 'end', array( 'id' => 'header-brand' ) ); ?>
                    <?php Util::putAngularComment( 'begin', array( 'id' => 'header-topbar' ) ); ?>
					<?php Page::getLayoutPartialView('header/topbar');?>
                    <?php Util::putAngularComment( 'end', array( 'id' => 'header-topbar' ) ); ?>
				</div>
			</div>
		</header>
		<!-- end::Header -->

		<!-- begin::Body -->
		<div class="m-grid__item m-grid__item--fluid m-grid m-grid m-grid--hor <?php echo $m_container_class?>">
			<?php Util::putAngularComment( 'begin', array( 'id' => 'body', 'router' => 'outlet', 'selector' => '.m-body' ) ); ?>
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor-desktop m-grid--desktop m-body">
				<div class="m-grid__item m-body__nav">
					<div class="m-stack m-stack--ver m-stack--desktop">
                        <?php Util::putAngularComment( 'begin', array( 'id' => 'hor-menu', 'init' => 'mLayout.initHeader();' ) ); ?>
						<?php Page::getLayoutPartialView('hor-menu/hor-menu');?>
                        <?php Util::putAngularComment( 'end', array( 'id' => 'hor-menu' ) ); ?>
                        <?php Util::putAngularComment( 'begin', array( 'id' => 'search' ) ); ?>
                        <?php Page::getLayoutPartialView('hor-menu/search');?>
                        <?php Util::putAngularComment( 'end', array( 'id' => 'search' ) ); ?>
					</div>
				</div>
				<div class="m-grid__item m-grid__item--fluid m-grid m-grid--desktop m-grid--ver-desktop m-body__content">
					<?php if (Page::getOption('layout', 'aside/left/display') == true):?>
                        <?php Util::putAngularComment( 'begin', array( 'id' => 'aside-nav', 'init' => 'mLayout.initAside();' ) ); ?>
                        <?php Page::getLayoutPartialView('aside/left');?>
                        <?php Util::putAngularComment( 'end', array( 'id' => 'aside-nav' ) ); ?>
					<?php endif;?>

                    <?php Util::putAngularComment( 'begin', array( 'id' => 'wrapper', 'router' => 'outlet', 'type' => 'page', 'selector' => '.m-wrapper' ) ); ?>
					<div class="m-grid__item m-grid__item--fluid m-wrapper">
					   	<?php Page::getLayoutPartialView('subheader/default')?>
					     <div class="m-content">
					        <?php Page::getPageView();?>
					    </div>
					</div>
                    <?php Util::putAngularComment( 'end', array( 'id' => 'wrapper' ) ); ?>

					<?php if (Page::getOption('layout', 'aside/right/display') == true):?>
                        <?php Util::putAngularComment( 'begin', array( 'id' => 'aside-right' ) ); ?>
                        <?php Page::getLayoutPartialView('aside/right');?>
                        <?php Util::putAngularComment( 'end', array( 'id' => 'aside-right' ) ); ?>
					<?php endif;?>
				</div>				
			</div>
			<?php Util::putAngularComment( 'end', array( 'id' => 'body' ) ); ?>
		</div>
		<!-- begin::Body -->
	
		<!-- begin::Footer -->
		<footer class="m-grid__item		m-footer <?php Page::printClasses('footer', false);?>">
			<div class="<?php echo $m_container_class;?>">
                <?php Util::putAngularComment( 'begin', array( 'id' => 'footer' ) ); ?>
                <?php Page::getLayoutPartialView('footer/default')?>
                <?php Util::putAngularComment( 'end', array( 'id' => 'footer' ) ) ?>
			</div>
		</footer>

	<?php endif;?>	

</div>
<?php Util::putAngularComment( 'end', array( 'id' => 'layout' ) ); ?>
<!-- end:: Page -->

<?php if (Page::getOption('layout', 'self/layout') !== 'blank'):?>
    <?php if (Page::getOption('layout', 'quick-sidebar/display') == true):?>
	    <?php Util::putAngularComment( 'begin', array( 'id' => 'quick-sidebar' ) ); ?>
        <?php Page::getGlobalPartialView(Page::getOption('layout', 'quick-sidebar/layout'));?>
	    <?php Util::putAngularComment( 'end', array( 'id' => 'quick-sidebar' ) ); ?>
    <?php endif;?>

	<?php Util::putAngularComment( 'begin', array( 'id' => 'scroll-top' ) ); ?>
    <?php Page::getGlobalPartialView('layout/scroll-top');?>
	<?php Util::putAngularComment( 'end', array( 'id' => 'scroll-top' ) ); ?>
	<?php Util::putAngularComment( 'begin', array( 'id' => 'tooltips' ) ); ?>
	<?php Page::getGlobalPartialView('layout/tooltips');?>
	<?php Util::putAngularComment( 'end', array( 'id' => 'tooltips' ) ); ?>
<?php endif?>