<!--Begin::Main Portlet--> 
<div class="m-portlet">
  <div class="m-portlet__body  m-portlet__body--no-padding">
    <div class="row m-row--no-padding m-row--col-separator-xl">
      <div class="col-xl-4">
        <?php Page::getGlobalPartialView('content/widgets/chart/daily-sales');?>
      </div>
      <div class="col-xl-4">
        <?php Page::getGlobalPartialView('content/widgets/chart/profit-share');?>
      </div>
      <div class="col-xl-4">
        <?php Page::getGlobalPartialView('content/widgets/chart/revenue-change');?>
      </div>
    </div>
  </div>
</div>
<!--End::Main Portlet-->

<!--Begin::Main Portlet-->
<div class="row">
  <div class="col-xl-6">
    <?php Page::getGlobalPartialView('content/widgets/general/product-sales');?>
  </div>
  <div class="col-xl-6">
    <?php Page::getGlobalPartialView('content/widgets/chart/adwords-stats');?>
  </div>
</div>
<!--End::Main Portlet--> 

<!--Begin::Main Portlet-->
<div class="row">
	<div class="col-xl-12">
		<?php Page::getGlobalPartialView('content/widgets/general/calendar');?>
	</div>
</div>
<!--End::Main Portlet-->

<!--Begin::Main Portlet-->
<div class="row">
  <div class="col-xl-8">
    <?php Page::getGlobalPartialView('content/widgets/chart/application-sales');?>
  </div>
  <div class="col-xl-4">
    <?php Page::getGlobalPartialView('content/widgets/chart/latest-updates');?>
  </div>
</div>
<!--End::Main Portlet-->

<!--Begin::Main Portlet-->
<div class="row">
	<div class="col-xl-4">
   		<?php Page::getGlobalPartialView('content/widgets/general/latest-logs');?>
  	</div>
  	<div class="col-xl-8">
    	<?php Page::getGlobalPartialView('content/widgets/datatables/latest-orders');?>
  	</div>  
</div>
<!--End::Main Portlet-->   
