<!--begin::Portlet-->
<div class="m-portlet">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Bootstrap Switch Examples
				</h3>
			</div>
		</div>
	</div>
	<!--begin::Form-->
	<form class="m-form m-form--fit m-form--label-align-right">
		<div class="m-portlet__body">
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Basic Example</label>
				<div class="col-lg-9 col-md-9 col-sm-12">
					<input data-switch="true" type="checkbox" checked="checked" id="m_switch_1">
					<input data-switch="true" type="checkbox" id="m_switch_1">
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">State Colors</label>
				<div class="col-lg-9 col-md-9 col-sm-12">
					<input data-switch="true" type="checkbox" checked="checked" data-on-color="success" data-off-color="warning">
					<input data-switch="true" type="checkbox" checked="checked" data-on-color="brand">
					<input data-switch="true" type="checkbox" checked="checked" data-on-color="danger">
					<input data-switch="true" type="checkbox" checked="checked" data-on-color="info">
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Custom Label</label>
				<div class="col-lg-9 col-md-9 col-sm-12">
					<input data-switch="true" type="checkbox" checked="checked" data-on-text="True" data-handle-width="50" data-off-text="False" data-on-color="success">
					<input data-switch="true" type="checkbox" checked="checked" data-on-text="1" data-handle-width="30" data-off-text="0" data-on-color="info" >
					<input data-switch="true" type="checkbox" checked="checked" data-on-text="Enabled" data-handle-width="70" data-off-text="Disabled" data-on-color="brand" >
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Disabled State</label>
				<div class="col-lg-9 col-md-9 col-sm-12">
					<input data-switch="true" type="checkbox" checked="checked" disabled>
					<input data-switch="true" type="checkbox" disabled>
				</div>
			</div>

			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Sizing</label>
				<div class="col-lg-9 col-md-9 col-sm-12">
					<input data-switch="true" data-size="small" type="checkbox" checked="checked" >
					<input data-switch="true" type="checkbox" checked="checked" >
					<input data-switch="true" data-size="large" type="checkbox" checked="checked" >
				</div>
			</div>

			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Pill Style</label>
				<div class="col-lg-9 col-md-9 col-sm-12">
					<span class="m-bootstrap-switch m-bootstrap-switch--pill">
						<input data-switch="true" type="checkbox" checked="checked">
					</span>
					<span class="m-bootstrap-switch m-bootstrap-switch--pill">
						<input data-switch="true" type="checkbox" data-on-color="success" checked="checked">
					</span>
					<span class="m-bootstrap-switch m-bootstrap-switch--pill">
						<input data-switch="true" type="checkbox" data-on-color="brand" checked="checked">
					</span>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Air Style</label>
				<div class="col-lg-9 col-md-9 col-sm-12">
					<span class="m-bootstrap-switch m-bootstrap-switch--pill m-bootstrap-switch--air">
						<input data-switch="true" type="checkbox" data-on-color="danger" checked="checked">
					</span>
					<span class="m-bootstrap-switch m-bootstrap-switch--pill m-bootstrap-switch--air">
						<input data-switch="true" type="checkbox" data-on-color="primary" checked="checked">
					</span>
					<span class="m-bootstrap-switch m-bootstrap-switch--pill m-bootstrap-switch--air">
						<input data-switch="true" type="checkbox" data-on-color="info" checked="checked">
					</span>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Square Style</label>
				<div class="col-lg-9 col-md-9 col-sm-12">
					<span class="m-bootstrap-switch m-bootstrap-switch--square">
						<input data-switch="true" type="checkbox" data-on-color="success" checked="checked">
					</span>
					<span class="m-bootstrap-switch m-bootstrap-switch--square">
						<input data-switch="true" type="checkbox" data-on-color="warning" checked="checked">
					</span>
					<span class="m-bootstrap-switch m-bootstrap-switch--square">
						<input data-switch="true" type="checkbox" data-on-color="brand" data-off-color="metal" checked="checked">
					</span>
				</div>
			</div>

			
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Modal Demos</label>
				<div class="col-lg-9 col-md-9 col-sm-12">
					<a href="" class="btn btn-outline-danger success m-btn m-btn--pill" data-toggle="modal" data-target="#m_switch_modal">Launch switches on modal</a>
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

<!--begin::Modal-->
<div class="modal fade" id="m_switch_modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="">Bootstrap Switch Examples</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" class="la la-remove"></span>
				</button>
			</div>
			<form class="m-form m-form--fit m-form--label-align-right">
				<div class="modal-body">
					<div class="form-group m-form__group row m--margin-top-20">
						<label class="col-form-label col-lg-3 col-sm-12">Basic Example</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<input data-switch="true" type="checkbox" checked="checked" id="m_switch_1">
							<input data-switch="true" type="checkbox" id="m_switch_1">
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">State Colors</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<input data-switch="true" type="checkbox" checked="checked" data-on-color="success" data-off-color="warning">
							<input data-switch="true" type="checkbox" checked="checked" data-on-color="brand">
							<input data-switch="true" type="checkbox" checked="checked" data-on-color="danger">
							<input data-switch="true" type="checkbox" checked="checked" data-on-color="info">
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">Custom Label</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<input data-switch="true" type="checkbox" checked="checked" data-on-text="True" data-off-text="False" data-on-color="success">
							<input data-switch="true" type="checkbox" checked="checked" data-on-text="1" data-off-text="0" data-on-color="info" >
							<input data-switch="true" type="checkbox" checked="checked" data-on-text="Enabled" data-off-text="Disabled" data-on-color="brand" >
						</div>
					</div>
					<div class="form-group m-form__group row m--margin-bottom-20">
						<label class="col-form-label col-lg-3 col-sm-12">Disabled State</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<input data-switch="true" type="checkbox" checked="checked" disabled>
							<input data-switch="true" type="checkbox" disabled>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-brand m-btn" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-secondary m-btn">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!--end::Modal-->