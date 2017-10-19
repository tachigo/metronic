<!--begin::Portlet-->
<div class="m-portlet">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Bootstrap Date Time Picker Examples
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
					<input type='text' class="form-control" id="m_datetimepicker_1" readonly placeholder="Select date & time"/>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Input Group Setup</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class='input-group date' id='m_datetimepicker_2'>
						<input type='text' class="form-control m-input" readonly placeholder="Select date & time"/>
						<span class="input-group-addon"><i class="la la-calendar-check-o glyphicon-th"></i></span>
					</div>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Enable Helper Buttons</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class='input-group date' id='m_datetimepicker_3'>
						<input type='text' class="form-control m-input" readonly value="1899-11-29 00:30"/>
						<span class="input-group-addon">
						<i class="la la-calendar glyphicon-th"></i>
						</span>
					</div>
					<span class="m-form__help">Enable clear and today helper buttons</span>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Orientation</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class='input-group date' id='m_datetimepicker_4_1'>
						<input type='text' class="form-control m-input" placeholder="Top left"/>
						<span class="input-group-addon">
						<i class="la la-check-circle-o glyphicon-th"></i>
						</span>
					</div>
					<div class="m--space-10"></div>
					<div class='input-group date' id='m_datetimepicker_4_2'>
						<input type='text' class="form-control m-input" placeholder="Top right"/>
						<span class="input-group-addon">
						<i class="la la-clock-o glyphicon-th"></i>
						</span>
					</div>
					<div class="m--space-10"></div>
					<div class='input-group date' id='m_datetimepicker_4_3'>
						<input type='text' class="form-control m-input" placeholder="Bottom left"/>
						<span class="input-group-addon">
						<i class="la la-check glyphicon-th"></i>
						</span>
					</div>
					<div class="m--space-10"></div>
					<div class='input-group date' id='m_datetimepicker_4_4'>
						<input type='text' class="form-control m-input" placeholder="Bottom right"/>
						<span class="input-group-addon">
						<i class="la la-download glyphicon-th"></i>
						</span>
					</div>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Meridian Format</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class='input-group date' id='m_datetimepicker_5'>
						<input type='text' class="form-control m-input" placeholder="Select date and time" />
						<span class="input-group-addon">
						<i class="la la-calendar glyphicon-th"></i>
						</span>
					</div>
					<span class="m-form__help">Linked pickers for date range selection</span>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Date Only</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class='input-group date' id='m_datetimepicker_6'>
						<input type='text' class="form-control m-input" placeholder="Select date" />
						<span class="input-group-addon">
						<i class="la la-calendar glyphicon-th"></i>
						</span>
					</div>
					<span class="m-form__help">Only date selection</span>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Time Only</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class='input-group date' id='m_datetimepicker_7'>
						<input type='text' class="form-control m-input" placeholder="Select time" />
						<span class="input-group-addon">
						<i class="la la-calendar glyphicon-th"></i>
						</span>
					</div>
					<span class="m-form__help">Only time selection</span>
				</div>
			</div>

			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Modal Demos</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<a href="" class="btn btn-primary m-btn m-btn--pill" data-toggle="modal" data-target="#m_datetimepicker_modal">Launch Modal Date Time pickers</a>
				</div>
			</div>
		</div>
		<div class="m-portlet__foot m-portlet__foot--fit">
			<div class="m-form__actions m-form__actions">
				<div class="row">
					<div class="col-lg-9 ml-lg-auto">
						<button type="submit" class="btn btn-success">Submit</button>
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
<div class="modal fade" id="m_datetimepicker_modal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Bootstrap Date Time Picker Examples</h5>
				<button type="reset" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" class="la la-remove"></span>
				</button>
			</div>
			<form class="m-form m-form--fit m-form--label-align-right">
				<div class="modal-body">
					<div class="form-group m-form__group row m--margin-top-20">
						<label class="col-form-label col-lg-3 col-sm-12">Minimum Setup</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<input type='text' class="form-control" id="m_datetimepicker_1_modal" readonly  data-z-index="1100" placeholder="Select date & time"/>
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">Input Group Setup</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<div class='input-group date' id='m_datetimepicker_2_modal' data-z-index="1100">
								<input type='text' class="form-control m-input" readonly  placeholder="Select date & time"/>
								<span class="input-group-addon"><i class="la la-calendar-check-o glyphicon-th"></i></span>
							</div>
						</div>
					</div>
					<div class="form-group m-form__group row m--margin-bottom-20">
						<label class="col-form-label col-lg-3 col-sm-12">Enable Helper Buttons</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<div class='input-group date' id='m_datetimepicker_3_modal' data-z-index="1100">
								<input type='text' class="form-control m-input" readonly  value="1899-11-29 00:30"/>
								<span class="input-group-addon">
								<i class="la la-calendar-plus-o glyphicon-th"></i>
								</span>
							</div>
							<span class="m-form__help">Enable clear and today helper buttons</span>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="reset" class="btn btn-brand m-btn" data-dismiss="modal">Close</button>
					<button type="reset" class="btn btn-secondary m-btn">Submit</button>
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
					<div class='input-group date' id='m_datetimepicker_1_validate'>
						<input type='text' class="form-control m-input" readonly placeholder="Select date & time"/>
						<span class="input-group-addon"><i class="la la-calendar-check-o glyphicon-th"></i></span>
					</div>
					<div class="form-control-feedback">Success! You've done it.</div>
					<span class="m-form__help">Example help text that remains unchanged.</span>
				</div>
			</div>
			<div class="form-group m-form__group row has-danger">
				<label class="col-form-label col-lg-3 col-sm-12">Danger State</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class='input-group date' id='m_datetimepicker_2_validate'>
						<input type='text' class="form-control m-input" readonly placeholder="Select date & time"/>
						<span class="input-group-addon"><i class="la la-calendar-check-o glyphicon-th"></i></span>
					</div>
					<div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
					<span class="m-form__help">Example help text that remains unchanged.</span>
				</div>
			</div>
			<div class="form-group m-form__group row has-warning">
				<label class="col-form-label col-lg-3 col-sm-12">Warning State</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class='input-group date' id='m_datetimepicker_3_validate'>
						<input type='text' class="form-control m-input" readonly placeholder="Select date & time"/>
						<span class="input-group-addon"><i class="la la-calendar-check-o glyphicon-th"></i></span>
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