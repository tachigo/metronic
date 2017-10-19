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
	<!--Begin::Trends -->
	<div class="col-xl-4">
		<?php Page::getGlobalPartialView('content/widgets/chart/trends');?>
	</div>
	<!--End::Trends CNT-->

	<!--Begin::Sales Stats-->
	<div class="col-xl-4">
		<?php Page::getGlobalPartialView('content/widgets/chart/sales-stats');?>
	</div>
	<!--End::Sales Stats-->

	<!--Begin::Latest Trends::--> 
	<div class="col-xl-4">
		<?php Page::getGlobalPartialView('content/widgets/chart/top-locations');?>
	</div>
	<!--End::UK Trends::-->
</div>
<!--End::Main Portlet-->				 

<!--Begin::Main Portlet-->
<div class="row">
	<div class="col-xl-6">
		<?php Page::getGlobalPartialView('content/widgets/chart/support-cases');?>
	</div>
	<div class="col-xl-6">
		<?php Page::getGlobalPartialView('content/widgets/chart/support-requests');?>
	</div>
</div>
<!--End::Main Portlet-->

<!--Begin::Main Portlet-->
<div class="row">
	<div class="col-xl-4">
		<?php Page::getGlobalPartialView('content/widgets/chart/activity');?>
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
		<?php Page::getGlobalPartialView('content/widgets/chart/adwords-stats');?>
	</div>
	<div class="col-xl-6">
		<?php Page::getGlobalPartialView('content/widgets/chart/quick-stats');?>
	</div>
</div>
<!--End::Main Portlet-->

<!--Begin::Main Portlet-->
<div class="row">
	<div class="col-xl-6">
		<?php Page::getGlobalPartialView('content/widgets/chart/finance-summary');?>
	</div>
</div>
<!--End::Main Portlet-->