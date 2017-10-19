<div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-dismissible m--margin-bottom-30" role="alert">
	<div class="m-alert__icon">
		<i class="flaticon-exclamation m--font-warning"></i>
	</div>
	<div class="m-alert__text">
		Static datatable initialized from HTML table element with local column sorting and record pagination features.
	</div>
</div>

<div class="m-portlet m-portlet--mobile">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Static Datatable <small>initialized from table element</small>
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
		<!--begin: Search Form -->
		<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
			<div class="row align-items-center">
				<div class="col-xl-8 order-2 order-xl-1">
					<div class="form-group m-form__group row align-items-center">
						<div class="col-md-4">
							<div class="m-input-icon m-input-icon--left">
								<input type="text" class="form-control m-input" placeholder="Search..." id="m_form_search">
								<span class="m-input-icon__icon m-input-icon__icon--left">
									<span><i class="la la-search"></i></span>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 order-1 order-xl-2 m--align-right">
					<a href="#" class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
						<span>
							<i class="la la-cart-plus"></i>
							<span>New Order</span>
						</span>
					</a>					
					<div class="m-separator m-separator--dashed d-xl-none"></div>					
				</div>
			</div>
		</div>
		<!--end: Search Form -->
		
		<!--begin: Datatable -->
		<div class="m_datatable" id="api_events"></div>
		<!--end: Datatable -->
		<textarea id="m_datatable_console" class="form-control m--margin-top-30" cols="100" rows="10" title="Console" readonly="readonly"></textarea>
		<div class="m--margin-top-10">
			<button class="btn btn-secondary" type="button" id="m_datatable_clear">Clear Console</button>
			<button class="btn btn-secondary" type="button" id="m_datatable_reload">Reload Data</button>
		</div>
	</div>
</div>