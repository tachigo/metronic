<!-- begin:: Page -->
<?php Util::putAngularComment( 'begin', array( 'id' => 'layout', 'type' => 'layout', 'selector' => '.m-page' ) ); ?>
<div class="m-grid m-grid--hor m-grid--root m-page">
    
	<?php if (Page::getOption('layout', 'self/layout') == 'blank'):?>
		
		<?php Util::putAngularComment( 'begin', array( 'id' => 'page', 'router' => 'outlet', 'type' => 'page' ) ); ?>
		<?php Page::getPageView();?>
		<?php Util::putAngularComment( 'end', array( 'id' => 'page' ) ); ?>
		
	<?php else:?>

		<?php Util::putAngularComment( 'begin', array( 'id' => 'header-nav', 'init' => 'mLayout.initHeader();' ) ); ?>
		<?php Page::getLayoutPartialView('header/base')?>
		<?php Util::putAngularComment( 'end', array( 'id' => 'header-nav' ) ); ?>

		<!-- begin::Body -->
		<?php Util::putAngularComment( 'begin', array( 'id' => 'body', 'router' => 'outlet', 'selector' => '.m-body' ) ); ?>
		<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
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
		<?php Util::putAngularComment( 'end', array( 'id' => 'body' ) ); ?>
		<!-- end:: Body -->

		<?php Util::putAngularComment( 'begin', array( 'id' => 'footer' ) ); ?>
		<?php Page::getLayoutPartialView('footer/default')?>
		<?php Util::putAngularComment( 'end', array( 'id' => 'footer' ) ) ?>

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
