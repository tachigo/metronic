<!--Begin::Main Portlet--> 
<div class="row">			
	<div class="col-xl-4">
		<?php Page::getGlobalPartialView('content/widgets/chart/trends');?>
	</div>
	<div class="col-xl-4">
		<?php Page::getGlobalPartialView('content/widgets/chart/activity');?>
	</div>
	<div class="col-xl-4">
		<?php Page::getGlobalPartialView('content/widgets/general/blog');?>
	</div>
</div>
<!--End::Main Portlet-->

<!--Begin::Main Portlet--> 
<div class="m-portlet">
	<div class="m-portlet__body  m-portlet__body--no-padding">
		<div class="row m-row--no-padding m-row--col-separator-xl">			
			<div class="col-xl-4">
				<?php Page::getGlobalPartialView('content/widgets/general/stats2-1');?>
			</div>
			<div class="col-xl-4">
				<?php Page::getGlobalPartialView('content/widgets/chart/daily-sales');?>
			</div>
			<div class="col-xl-4">
				<?php Page::getGlobalPartialView('content/widgets/chart/profit-share');?>
			</div>
		</div>
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
  <div class="col-xl-6">
    <?php Page::getGlobalPartialView('content/widgets/general/tasks');?>
  </div> 
  <div class="col-xl-6">
    <?php Page::getGlobalPartialView('content/widgets/general/support-tickets');?>
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
		<?php Page::getGlobalPartialView('content/widgets/chart/sales-stats');?>
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
  <div class="col-xl-8">
    <?php Page::getGlobalPartialView('content/widgets/general/best-sellers');?>
  </div>
  <div class="col-xl-4">
    <?php Page::getGlobalPartialView('content/widgets/general/authors-profit');?>
  </div>
</div>
<!--End::Main Portlet-->   
