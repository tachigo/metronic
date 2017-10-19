<!--begin::Portlet-->
<div class="m-portlet">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Bootstrap Time Picker Examples
				</h3>
			</div>
		</div>
	</div>
	<!--begin::Form-->
	<form class="m-form m-form--fit m-form--label-align-right">
		<div class="m-portlet__body">
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Minimum Setup</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<input type='text' class="form-control" id="m_timepicker_1" readonly placeholder="Select time" type="text"/>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Current Time</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class='input-group timepicker' id='m_timepicker_2'>
						<input type='text' class="form-control m-input" readonly placeholder="Select time" type="text"/>
						<span class="input-group-addon">
						<i class="la la-clock-o"></i>
						</span>
					</div>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Default Time</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class='input-group timepicker' id='m_timepicker_3' >
						<span class="input-group-addon">
						<i class="la la-clock-o"></i>
						</span>
						<input type='text' class="form-control m-input" readonly placeholder="Select time" type="text"/>
					</div>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Preset Time</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class='input-group timepicker' id='m_timepicker_4'>
						<span class="input-group-addon">
						<i class="la la-exclamation-circle"></i>
						</span>
						<input type='text' class="form-control m-input" readonly value="10:30:20 AM" type="text"/>
					</div>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Modal Demos</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<a href="" class="btn btn-outline-success m-btn m-btn--pill" data-toggle="modal" data-target="#m_timepicker_modal">Launch modal timepickers</a>
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
<div class="modal fade" id="m_timepicker_modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="">Bootstrap Time Picker Examples</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" class="la la-remove"></span>
				</button>
			</div>
			<form class="m-form m-form--fit m-form--label-align-right">
				<div class="modal-body">
					<div class="form-group m-form__group row m--margin-top-20">
						<label class="col-form-label col-lg-3 col-sm-12">Minimum Setup</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<input type='text' class="form-control" id="m_timepicker_1_modal" readonly placeholder="Select time" type="text"/>
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">Current Time</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<div class='input-group timepicker' id='m_timepicker_2_modal'>
								<input type='text' class="form-control m-input" readonly placeholder="Select time" type="text"/>
								<span class="input-group-addon">
								<i class="la la-clock-o"></i>
								</span>
							</div>
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">Default Time</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<div class='input-group timepicker' id='m_timepicker_3_modal' >
								<span class="input-group-addon">
								<i class="la la-clock-o"></i>
								</span>
								<input type='text' class="form-control m-input" readonly placeholder="Select time" type="text"/>
							</div>
						</div>
					</div>
					<div class="form-group m-form__group row m--margin-bottom-20">
						<label class="col-form-label col-lg-3 col-sm-12">Preset Time</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<div class='input-group timepicker' id='m_timepicker_4_modal'>
								<span class="input-group-addon">
								<i class="la la-exclamation-circle"></i>
								</span>
								<input type='text' class="form-control m-input" readonly value="10:30:20 AM" type="text"/>
							</div>
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

<!--begin::Portlet-->
<div class="m-portlet">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Validation State Examples
				</h3>
			</div>
		</div>
	</div>
	<!--begin::Form-->
	<form class="m-form m-form--fit m-form--label-align-right">
		<div class="m-portlet__body">
			<div class="form-group m-form__group row has-success">
				<label class="col-form-label col-lg-3 col-sm-12">Success State</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class='input-group timepicker' id='m_timepicker_1_validate'>
						<input type='text' class="form-control m-input" readonly placeholder="Select time" type="text"/>
						<span class="input-group-addon"><i class="la la-clock-o"></i></span>
					</div>
					<div class="form-control-feedback">Success! You've done it.</div>
					<span class="m-form__help">Example help text that remains unchanged.</span>
				</div>
			</div>
			<div class="form-group m-form__group row has-danger">
				<label class="col-form-label col-lg-3 col-sm-12">Danger State</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class='input-group timepicker' id='m_timepicker_2_validate'>
						<input type='text' class="form-control m-input" readonly placeholder="Select time" type="text"/>
						<span class="input-group-addon"><i class="la la-clock-o"></i></span>
					</div>
					<div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
					<span class="m-form__help">Example help text that remains unchanged.</span>
				</div>
			</div>
			<div class="form-group m-form__group row has-warning">
				<label class="col-form-label col-lg-3 col-sm-12">Warning State</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class='input-group timepicker' id='m_timepicker_3_validate'>
						<input type='text' class="form-control m-input" readonly placeholder="Select time" type="text"/>
						<span class="input-group-addon"><i class="la la-clock-o"></i></span>
					</div>
					<div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
					<span class="m-form__help">Example help text that remains unchanged.</span>
				</div>
			</div>
		</div>
		<div class="m-portlet__foot m-portlet__foot--fit">
			<div class="m-form__actions m-form__actions">
				<div class="row">
					<div class="col-lg-9 ml-lg-auto">
						<button type="reset" class="btn btn-primary">Submit</button>
						<button type="reset" class="btn btn-secondary">Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<!--end::Form-->
</div>
<!--end::Portlet-->