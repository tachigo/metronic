<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Version: 5.0.3
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" <?php Page::printAttrs('html'); Page::printClasses('html'); ?>>
    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />
        
        <title>Metronic | <?php echo ucfirst(Page::getPageTitle())?></title>
        <meta name="description" content="<?php echo ucfirst(Page::getPageDesc())?>"> 

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       

        <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
          WebFont.load({
            google: <?php echo Page::getDemoGoogleFonts()?>,
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!--end::Web font -->

        <!--begin::Base Styles -->  

        <?php if (count(Page::getPageVendors('css')) > 0):?>         
        <!--begin::Page Vendors --> 
        <?php foreach(Page::getPageVendors('css') as $each):?>
        <link href="<?php echo (Util::isExternalURL($each) ? $each : Page::getVendorsPath() . 'custom/' . $each)?>" rel="stylesheet" type="text/css" />
        <?php endforeach?>
        <!--end::Page Vendors -->
        <?php endif?> 

		<?php foreach(Page::getDemoCss() as $each):?>
		<link href="<?php echo (Util::isExternalURL($each) ? $each : Page::getDemoAssetsPath() . $each)?>" rel="stylesheet" type="text/css" />
		<?php endforeach?>
        <!--end::Base Styles -->

        <link rel="shortcut icon" href="<?php echo Page::getDemoFavicon();?>" /> 
    </head>
    <!-- end::Head -->

    <?php if (Page::getOption('main', 'request/type') === 'angular'):?>
        <?php Page::getGlobalPartialView('layout/loader/angular');?>
    <?php endif;?>

    <!-- end::Body -->
    <body<?php Page::printAttrs('body'); Page::printClasses('body');?> >

        <?php if (Page::getOption('main', 'request/type') === 'angular'):?>
            <?php Page::getGlobalPartialView('layout/loader/angular');?>
        <?php endif;?>

        <?php if (!empty(Page::getOption('layout', 'loader/type'))):?>
            <?php Page::getGlobalPartialView('layout/loader/base');?>
        <?php endif?>

    	<?php
    		Page::getLayoutView();
    	?>

    	<!--begin::Base Scripts -->        
    	<?php foreach(Page::getDemoJs() as $each):?>
    	<script src="<?php echo Page::getDemoAssetsPath() . $each;?>" type="text/javascript"></script>
		<?php endforeach?>
		<!--end::Base Scripts -->   

        <?php if (count(Page::getPageVendors('js')) > 0):?> 
        <!--begin::Page Vendors --> 
        <?php foreach(Page::getPageVendors('js') as $each):?>
        <script src="<?php echo (Util::isExternalURL($each) ? $each : Page::getVendorsPath() . 'custom/' . $each)?>" type="text/javascript"></script>
        <?php endforeach?>
        <!--end::Page Vendors -->  
         <?php endif?> 

        <?php if (count(Page::getPageResources('js')) > 0):?>            
        <!--begin::Page Resources --> 
        <?php foreach(Page::getPageResources('js') as $each):?>
        <script src="<?php echo (Util::isExternalURL($each) ? $each : Page::getDemoCustomPath() . $each)?>" type="text/javascript"></script>
        <?php endforeach?>
        <!--end::Page Resources -->   
        <?php endif?>

        <?php if (count(Page::getSnippets('js')) > 0):?>            
        <!--begin::Page Snippets --> 
        <?php foreach(Page::getSnippets('js') as $each):?>
        <script src="<?php echo Page::getSnippetsPath() . '' . $each?>" type="text/javascript"></script>
        <?php endforeach?>
        <!--end::Page Snippets -->   
        <?php endif?>

        <?php if (count(Page::getAppScripts('js')) > 0):?>            
        <!--begin::Page Snippets --> 
        <?php foreach(Page::getAppScripts('js') as $each):?>
        <script src="<?php echo Page::getAppScriptsPath() . '' . $each?>" type="text/javascript"></script>
        <?php endforeach?>
        <!--end::Page Snippets -->   
        <?php endif?>
        
        <?php if (!empty(Page::getOption('layout', 'loader/type'))):?> 
        <!-- begin::Page Loader -->
        <script>
            $(window).on('load', function() {
                $('body').removeClass('m-page--loading');         
            });
        </script>       
        <!-- end::Page Loader -->
        <?php endif?>

        
    </body>
    <!-- end::Body -->
</html>