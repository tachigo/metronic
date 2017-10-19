<!--begin::Portlet-->
<div class="m-portlet">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Bootstrap Date Picker Examples
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
					<input type='text' class="form-control" id="m_datepicker_1" readonly placeholder="Select date"/>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Input Group Setup</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class='input-group date' id='m_datepicker_2'>
						<input type='text' class="form-control m-input" readonly  placeholder="Select date"/>
						<span class="input-group-addon">
						<i class="la la-calendar-check-o"></i>
						</span>
					</div>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Enable Helper Buttons</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class='input-group date' id='m_datepicker_3'>
						<input type='text' class="form-control m-input" readonly  value="05/20/2017"/>
						<span class="input-group-addon">
						<i class="la la-calendar"></i>
						</span>
					</div>
					<span class="m-form__help">Enable clear and today helper buttons</span>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Orientation</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class='input-group date' id='m_datepicker_4_1'>
						<input type='text' class="form-control m-input" placeholder="Top left"/>
						<span class="input-group-addon">
						<i class="la la-bullhorn"></i>
						</span>
					</div>
					<div class="m--space-10"></div>
					<div class='input-group date' id='m_datepicker_4_2'>
						<input type='text' class="form-control m-input" placeholder="Top right"/>
						<span class="input-group-addon">
						<i class="la la-clock-o"></i>
						</span>
					</div>
					<div class="m--space-10"></div>
					<div class='input-group date' id='m_datepicker_4_3'>
						<input type='text' class="form-control m-input" placeholder="Bottom left"/>
						<span class="input-group-addon">
						<i class="la la-check"></i>
						</span>
					</div>
					<div class="m--space-10"></div>
					<div class='input-group date' id='m_datepicker_4_4'>
						<input type='text' class="form-control m-input" placeholder="Bottom right"/>
						<span class="input-group-addon">
						<i class="la la-check-circle-o"></i>
						</span>
					</div>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Range Picker</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class="input-daterange input-group" id="m_datepicker_5">
						<input type="text" class="form-control m-input" name="start" />
						<span class="input-group-addon"><i class="la la-ellipsis-h"></i></span>
						<input type="text" class="form-control" name="end" />
					</div>
					<span class="m-form__help">Linked pickers for date range selection</span>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Inline Mode</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class id="m_datepicker_6"></div>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Modal Demos</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<a href="" class="btn btn-success m-btn m-btn--pill" data-toggle="modal" data-target="#m_datepicker_modal">Launch modal datepickers</a>
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
<div class="modal fade" id="m_datepicker_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Bootstrap Date Picker Examples</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" class="la la-remove"></span>
				</button>
			</div>
			<form class="m-form m-form--fit m-form--label-align-right">
				<div class="modal-body">
					<div class="form-group m-form__group row m--margin-top-20">
						<label class="col-form-label col-lg-3 col-sm-12">Minimum Setup</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<input type='text' class="form-control" id="m_datepicker_1_modal" readonly placeholder="Select date"/>
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">Input Group Setup</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<div class='input-group date' id='m_datepicker_2_modal'>
								<input type='text' class="form-control m-input" readonly  placeholder="Select date"/>
								<span class="input-group-addon">
								<i class="la la-calendar-check-o"></i>
								</span>
							</div>
						</div>
					</div>
					<div class="form-group m-form__group row m--margin-bottom-20">
						<label class="col-form-label col-lg-3 col-sm-12">Enable Helper Buttons</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<div class='input-group date' id='m_datepicker_3_modal'>
								<input type='text' class="form-control m-input" value="05/20/2017"/>
								<span class="input-group-addon">
								<i class="la la-calendar"></i>
								</span>
							</div>
							<span class="m-form__help">Enable clear and today helper buttons</span>
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
					<div class='input-group date' id='m_datepicker_1_validate'>
						<input type='text' class="form-control m-input" readonly  placeholder="Select date"/>
						<span class="input-group-addon">
						<i class="la la-calendar-check-o"></i>
						</span>
					</div>
					<div class="form-control-feedback">Success! You've done it.</div>
					<span class="m-form__help">Example help text that remains unchanged.</span>
				</div>
			</div>
			<div class="form-group m-form__group row has-danger">
				<label class="col-form-label col-lg-3 col-sm-12">Danger State</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class='input-group date' id='m_datepicker_2_validate'>
						<input type='text' class="form-control m-input" readonly  placeholder="Select date"/>
						<span class="input-group-addon">
						<i class="la la-calendar-check-o"></i>
						</span>
					</div>
					<div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
					<span class="m-form__help">Example help text that remains unchanged.</span>
				</div>
			</div>
			<div class="form-group m-form__group row has-warning">
				<label class="col-form-label col-lg-3 col-sm-12">Warning State</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class='input-group date' id='m_datepicker_3_validate'>
						<input type='text' class="form-control m-input" readonly  placeholder="Select date"/>
						<span class="input-group-addon">
						<i class="la la-calendar-check-o"></i>
						</span>
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