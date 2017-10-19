<div class="m-portlet m-portlet--mobile <?php echo Page::getGlobalPortletClass()?>">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Exclusive Datatable Plugin
				</h3>
			</div>
		</div>
		<div class="m-portlet__head-tools">
			<ul class="m-portlet__nav">
				<li class="m-portlet__nav-item">
					<?php Page::getGlobalPartialView('content/general/action-dropdown');?>
				</li>
			</ul>
		</div>
	</div>
	<div class="m-portlet__body">
		<!--begin: Datatable -->
		<div class="m_datatable" id="m_datatable_latest_orders"></div>
		<!--end: Datatable -->
	</div>
</div>