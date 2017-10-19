<!--begin::Portlet-->
<div class="m-portlet">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					ion Range Slider Examples
				</h3>
			</div>
		</div>
	</div>
	<!--begin::Form-->
	<form class="m-form m-form--fit m-form--label-align-right">
		<div class="m-portlet__body">
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Basic Example</label>
				<div class="col-lg-8 col-md-9 col-sm-12">
					<div class="m-ion-range-slider">
						<input type="hidden" id="m_slider_1"/>
					</div>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Min & Max Values</label>
				<div class="col-lg-8 col-md-9 col-sm-12">
					<input type="hidden" id="m_slider_2"/>
					<div class="m-ion-range-slider">
						<input type="hidden" id="m_slider_2"/>
					</div>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Custom Prefix</label>
				<div class="col-lg-8 col-md-9 col-sm-12">
					<div class="m-ion-range-slider">
						<input type="hidden" id="m_slider_3"/>
					</div>
					<div class="m-form__help">
						Set type to double and specify range, also showing grid and adding prefix "$"
					</div>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Range & Step</label>
				<div class="col-lg-8 col-md-9 col-sm-12">
					<div class="m-ion-range-slider">
						<input type="hidden" id="m_slider_4"/>
					</div>
					<div class="m-form__help">
						Set up range with negative values
					</div>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Fractional Range & Step</label>
				<div class="col-lg-8 col-md-9 col-sm-12">
					<div class="m-ion-range-slider">
						<input type="hidden" id="m_slider_5"/>
					</div>
					<div class="m-form__help">
						Set up range with fractional values, using fractional step
					</div>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Using Postfixes</label>
				<div class="col-lg-8 col-md-9 col-sm-12">
					<div class="m-ion-range-slider">
						<input type="hidden" id="m_slider_6"/>
					</div>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Using Text</label>
				<div class="col-lg-8 col-md-9 col-sm-12">
					<div class="m-ion-range-slider">
						<input type="hidden" id="m_slider_7"/>
					</div>
				</div>
			</div>
		</div>
		<div class="m-portlet__foot m-portlet__foot--fit">
			<div class="m-form__actions m-form__actions">
				<div class="row">
					<div class="col-lg-8 ml-lg-auto">
						<button type="reset" class="btn btn-brand">Submit</button>
						<button type="reset" class="btn btn-secondary">Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<!--end::Form-->
</div>
<!--end::Portlet-->
