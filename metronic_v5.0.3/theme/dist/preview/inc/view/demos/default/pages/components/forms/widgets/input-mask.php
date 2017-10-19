<!--begin::Portlet-->
<div class="m-portlet">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Input Mask Examples
				</h3>
			</div>
		</div>
	</div>
	<!--begin::Form-->
	<form class="m-form m-form--fit m-form--label-align-right">
		<div class="m-portlet__body">
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Date</label>
				<div class="col-lg-6 col-md-9 col-sm-12">
					<input type='text' class="form-control" id="m_inputmask_1" type="text"/>
					<span class="m-form__help">Custom date format: <code>mm/dd/yyyy</code></span>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Custom Placeholder</label>
				<div class="col-lg-6 col-md-9 col-sm-12">
					<input type='text' class="form-control" id="m_inputmask_2" type="text"/>
					<span class="m-form__help">Date mask with custom placeholder: <code>mm/dd/yyyy</code></span>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Phone Number</label>
				<div class="col-lg-6 col-md-9 col-sm-12">
					<input type='text' class="form-control" id="m_inputmask_3" type="text"/>
					<span class="m-form__help">Phone number mask: <code>(999) 999-9999</code></span>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Expty Placeholder</label>
				<div class="col-lg-6 col-md-9 col-sm-12">
					<input type='text' class="form-control" id="m_inputmask_4" type="text"/>
					<span class="m-form__help">Phone number mask: <code>99-9999999</code></span>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Repeating Mask</label>
				<div class="col-lg-6 col-md-9 col-sm-12">
					<input type='text' class="form-control" id="m_inputmask_5" type="text"/>
					<span class="m-form__help">Mask <code>9</code>, <code>99</code> or ... <code>9999999999</code></span>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Right Align</label>
				<div class="col-lg-6 col-md-9 col-sm-12">
					<input type='text' class="form-control" id="m_inputmask_6" type="text"/>
					<span class="m-form__help">Right aligned numeric mask</span>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Currency</label>
				<div class="col-lg-6 col-md-9 col-sm-12">
					<input type='text' class="form-control" id="m_inputmask_7" type="text"/>
					<span class="m-form__help">Currency format <code>€ ___.__1.234,56</code></span>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">IP Address</label>
				<div class="col-lg-6 col-md-9 col-sm-12">
					<input type='text' class="form-control" id="m_inputmask_8" type="text"/>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Email Address</label>
				<div class="col-lg-6 col-md-9 col-sm-12">
					<input type='text' class="form-control" id="m_inputmask_9" type="text"/>
				</div>
			</div>
		</div>
		<div class="m-portlet__foot m-portlet__foot--fit">
			<div class="m-form__actions m-form__actions">
				<div class="row">
					<div class="col-lg-9 ml-lg-auto">
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