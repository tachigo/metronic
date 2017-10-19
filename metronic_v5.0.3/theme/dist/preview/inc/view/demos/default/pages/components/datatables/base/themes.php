<div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-dismissible m--margin-bottom-30" role="alert">
	<div class="m-alert__icon">
		<i class="flaticon-exclamation m--font-warning"></i>
	</div>
	<div class="m-alert__text">
		The Metronic Datatable supports multi themes to provide unique design options. In this example we shown 2 supported theme options.
	</div>
</div>

<div class="m-portlet m-portlet--mobile">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Default Theme
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
				<div class="col-xl-6 flex-last-xl-down">
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
				<div class="col-xl-6 m--align-right flex-first-xl-down">
					<div class="m-separator m-separator--dashed hidden-xl-up"></div>
					<a href="#" class="btn btn-success m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
						<span>
							<i class="la la-cart-plus"></i>
							<span>New Order</span>
						</span>
					</a>
				</div>
			</div>
		</div>
		<!--end: Search Form -->
		<!--begin: Datatable -->
		<div class="m_datatable" id="m_datatable_theme_default"></div>
		<!--end: Datatable -->
	</div>
</div>

<div class="m-portlet m-portlet--mobile">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Bordered Theme
				</h3>
			</div>
		</div>
		<div class="m-portlet__head-tools">
			<ul class="m-portlet__nav">
				<li class="m-portlet__nav-item">
	                <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl">
	                   	<i class="la la-ellipsis-h m--font-brand"></i>
	                </a>
				</li>
			</ul>
		</div>
	</div>
	<div class="m-portlet__body">
		<!--begin: Search Form -->
		<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
			<div class="row align-items-center">
				<div class="col-xl-6 flex-last-xl-down">
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
				<div class="col-xl-6 m--align-right flex-first-xl-down">
					<div class="m-separator m-separator--dashed hidden-xl-up"></div>
					<a href="#" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
						<span>
							<i class="la la-cart-plus"></i>
							<span>New Order</span>
						</span>
					</a>
				</div>
			</div>
		</div>
		<!--end: Search Form -->
		<!--begin: Datatable -->
		<div class="m_datatable" id="m_datatable_theme_bordered"></div>
		<!--end: Datatable -->
	</div>
</div>