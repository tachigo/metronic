<div class="row">
    <div class="col-md-6">
		<!--begin::Portlet-->
		<div class="m-portlet m-portlet--tabs">
			<div class="m-portlet__head">
				<div class="m-portlet__head-tools">
					<ul class="nav nav-tabs m-tabs m-tabs-line  m-tabs-line-danger" role="tablist">
						<li class="nav-item m-tabs__item">
							<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_buttons_default" role="tab">Default Style</a>
						</li>
						<li class="nav-item m-tabs__item">
							<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_buttons_square" role="tab">Square Style</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="m-portlet__body">
				<!--begin::Tab content-->
				<div class="tab-content">
					<!--begin::Default Buttons Tab-->
					<div class="tab-pane active" id="m_buttons_default" role="tabpanel">
						<?php Page::getPagePartialView('/default')?>						
					</div>
					<!--end::Default Buttons Tab-->

					<!--begin::Square Buttons Tab-->
					<div class="tab-pane" id="m_buttons_square" role="tabpanel">
						<?php Page::getPagePartialView('/square')?>
					</div>
					<!--end::Square Buttons Tab-->
				</div>
				<!--end::Tab content-->
			</div>
		</div> 	
		<!--end::Portlet-->
    </div>

    <div class="col-md-6">
		<!--begin::Portlet-->
		<div class="m-portlet m-portlet--tabs">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
							<i class="la la-gear"></i>
						</span>
						<h3 class="m-portlet__head-text">
						Custom Buttons
						</h3>
					</div>			
				</div>
				<div class="m-portlet__head-tools">
					<ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--right m-tabs-line-danger" role="tablist">
						<li class="nav-item m-tabs__item">
							<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_buttons_pill" role="tab">Pill Style</a>
						</li>
						<li class="nav-item m-tabs__item">
							<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_buttons_air" role="tab">Air Style</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="m-portlet__body">
				<!--begin::Tab content-->
				<div class="tab-content">
					<!--begin::Pill Buttons Tab-->
					<div class="tab-pane active" id="m_buttons_pill" role="tabpanel">
						<?php Page::getPagePartialView('/pill')?>						
					</div>
					<!--end::Pill Buttons Tab-->

					<!--begin::Air Buttons Tab-->
					<div class="tab-pane" id="m_buttons_air" role="tabpanel">
						<?php Page::getPagePartialView('/air')?>
					</div>
					<!--end::Air Buttons Tab-->
				</div>
				<!--end::Tab content-->
			</div>
		</div> 	
		<!--end::Portlet-->
    </div>
</div>