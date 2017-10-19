<!--begin::Portlet-->
<div class="m-portlet">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Bootstrap Date Range Picker Examples
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
					<input type='text' class="form-control" id="m_daterangepicker_1" readonly placeholder="Select time" type="text"/>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Input Group Setup</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class='input-group' id='m_daterangepicker_2'>
						<input type='text' class="form-control m-input" readonly  placeholder="Select date range"/>
						<span class="input-group-addon"><i class="la la-calendar-check-o"></i></span>
					</div>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Icon Input</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class="m-input-icon pull-right" id='m_daterangepicker_3'>
						<input type="text" class="form-control m-input" placeholder="Email">
						<span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-calendar-check-o"></i></span></span>
					</div>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Date & Time Picker</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class='input-group pull-right' id='m_daterangepicker_4'>
						<input type='text' class="form-control m-input" readonly  placeholder="Select date & time range"/>
						<span class="input-group-addon"><i class="la la-calendar-check-o"></i></span>
					</div>
				</div>
			</div>

			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Date Picker</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class='input-group pull-right' id='m_daterangepicker_5'>
						<input type='text' class="form-control m-input" readonly  placeholder="Select date range"/>
						<span class="input-group-addon"><i class="la la-calendar-check-o"></i></span>
					</div>
				</div>
			</div>

			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Predefined Ranges</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class='input-group pull-right' id='m_daterangepicker_6'>
						<input type='text' class="form-control m-input" readonly  placeholder="Select date range"/>
						<span class="input-group-addon"><i class="la la-calendar-check-o"></i></span>
					</div>
				</div>
			</div>

			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Modal Demos</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<a href="" class="btn btn-danger m-btn m-btn--pill" data-toggle="modal" data-target="#m_daterangepicker_modal">Launch modal Date Range Pickers</a>
				</div>
			</div>
		</div>
		<div class="m-portlet__foot m-portlet__foot--fit">
			<div class="m-form__actions m-form__actions">
				<div class="row">
					<div class="col-lg-9 ml-lg-auto">
						<button type="submit" class="btn btn-brand">Submit</button>
						<button type="submit" class="btn btn-secondary">Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<!--end::Form-->
</div>
<!--end::Portlet-->

<!--begin::Modal-->
<div class="modal fade" id="m_daterangepicker_modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="">Bootstrap Date Range Picker Examples</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" class="la la-remove"></span>
				</button>
			</div>
			<form class="m-form m-form--fit m-form--label-align-right">
				<div class="modal-body">
					<div class="form-group m-form__group row m--margin-top-20">
						<label class="col-form-label col-lg-3 col-sm-12">Minimum Setup</label>
						<div class="col-lg-4 col-md-9 col-sm-12">
							<input type='text' class="form-control" id="m_daterangepicker_1_modal" readonly placeholder="Select time" type="text"/>
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">Input Group Setup</label>
						<div class="col-lg-4 col-md-9 col-sm-12">
							<div class='input-group' id='m_daterangepicker_2_modal'>
								<input type='text' class="form-control m-input" readonly  placeholder="Select date range"/>
								<span class="input-group-addon"><i class="la la-calendar-check-o"></i></span>
							</div>
						</div>
					</div>
					<div class="form-group m-form__group row m--margin-bottom-20">
						<label class="col-form-label col-lg-3 col-sm-12">Icon Input</label>
						<div class="col-lg-4 col-md-9 col-sm-12">
							<div class="m-input-icon pull-right" id='m_daterangepicker_3_modal'>
								<input type="text" class="form-control m-input" placeholder="Email">
								<span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-calendar-check-o"></i></span></span>
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
					<div class='input-group' id='m_daterangepicker_1_validate'>
						<input type='text' class="form-control m-input" readonly  placeholder="Select date range"/>
						<span class="input-group-addon"><i class="la la-calendar-check-o"></i></span>
					</div>
					<div class="form-control-feedback">Success! You've done it.</div>
					<span class="m-form__help">Example help text that remains unchanged.</span>
				</div>
			</div>
			<div class="form-group m-form__group row has-danger">
				<label class="col-form-label col-lg-3 col-sm-12">Danger State</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class='input-group' id='m_daterangepicker_2_validate'>
						<input type='text' class="form-control m-input" readonly  placeholder="Select date range"/>
						<span class="input-group-addon"><i class="la la-calendar-check-o"></i></span>
					</div>
					<div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
					<span class="m-form__help">Example help text that remains unchanged.</span>
				</div>
			</div>
			<div class="form-group m-form__group row has-warning">
				<label class="col-form-label col-lg-3 col-sm-12">Warning State</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class='input-group' id='m_daterangepicker_3_validate'>
						<input type='text' class="form-control m-input" readonly  placeholder="Select date range"/>
						<span class="input-group-addon"><i class="la la-calendar-check-o"></i></span>
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
						<button type="submit" class="btn btn-primary">Submit</button>
						<button type="submit" class="btn btn-secondary">Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<!--end::Form-->
</div>
<!--end::Portlet-->