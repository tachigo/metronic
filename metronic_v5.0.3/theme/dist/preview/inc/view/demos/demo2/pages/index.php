<?php Page::getGlobalPartialView('content/widgets/general/stats');?> 

<!--Begin::Main Portlet-->
<div class="row">
  <div class="col-xl-4">
    <?php Page::getGlobalPartialView('content/widgets/general/new-users');?>
  </div>
  <div class="col-xl-4">
    <?php Page::getGlobalPartialView('content/widgets/chart/inbound-bandwidth');?>
    <div class="m--space-30"></div>
    <?php Page::getGlobalPartialView('content/widgets/chart/outbound-bandwidth');?>
  </div>
  <div class="col-xl-4">
    <?php Page::getGlobalPartialView('content/widgets/chart/top-products');?>
  </div>
</div>
<!--End::Main Portlet-->

<!--Begin::Main Portlet-->
<div class="row">
	<div class="col-xl-6">
		<?php Page::getGlobalPartialView('content/widgets/chart/support-cases');?>
	</div>
	<div class="col-xl-6">
		<?php Page::getGlobalPartialView('content/widgets/general/finance-stats');?>
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
  <div class="col-xl-8">
    <?php Page::getGlobalPartialView('content/widgets/datatables/latest-orders');?>
  </div>
  <div class="col-xl-4">
    <?php Page::getGlobalPartialView('content/widgets/general/latest-logs');?>
  </div>
</div>
<!--End::Main Portlet-->   

<!--Begin::Main Portlet-->
<div class="row">
  <div class="col-xl-4">
    <?php Page::getGlobalPartialView('content/widgets/general/announcements-1');?>
  </div>
  <div class="col-xl-4">
    <?php Page::getGlobalPartialView('content/widgets/general/blog');?>
  </div>
  <div class="col-xl-4">
    <?php Page::getGlobalPartialView('content/widgets/general/sales-stats');?>
  </div>
</div>
<!--End::Main Portlet-->