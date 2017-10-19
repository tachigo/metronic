<div class="m-portlet">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Bootstrap noUiSlider Examples
				</h3>
			</div>
		</div>
	</div>
	<!--begin::Form-->
	<form class="m-form m-form--fit m-form--label-align-right">
		<div class="m-portlet__body">
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Basic Setup</label>
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="row align-items-center">
						<div class="col-4">
							<input type="text" class="form-control" id="m_nouislider_1_input"  placeholder="Quantity">
						</div>
						<div class="col-8">
							<div id="m_nouislider_1" class="m-nouislider--drag-danger"></div>
						</div> 
					</div>
					<span class="m-form__help">Input control is attached to slider</span>
				</div>
			</div>
			<div class="m-form__seperator m-form__seperator--dashed"></div> 			

			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Currency Formatting</label>
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="row align-items-center">
						<div class="col-4">
							<input type="text" class="form-control" id="m_nouislider_2_input"  placeholder="Currency">
						</div>
						<div class="col-8">
							<div id="m_nouislider_2" class="m-nouislider m-nouislider--handle-danger"></div>
						</div>
					</div>
					<span class="m-form__help">To format the slider output, noUiSlider offers a  format option.</span>
				</div>
			</div>
			<div class="m-form__seperator m-form__seperator--dashed"></div>

			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Slider With Tooltip</label>
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="row align-items-center">
						<div class="col-2">
							<input type="text" class="form-control" id="m_nouislider_3_input"  placeholder="Quantity">
						</div>
						<div class="col-2">
							<input type="text" class="form-control" id="m_nouislider_3.1_input"  placeholder="Quantity">
						</div>
						<div class="col-8">
							<div id="m_nouislider_3" class="m-nouislider"></div>
						</div>
					</div>
					<span class="m-form__help">Slider with tooltips to show slider values.</span>
				</div>
			</div>	 
			<div class="m-form__seperator m-form__seperator--dashed"></div>

			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Slider State Colors</label>
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="row align-items-center">
						<div class="col-2">
							<select class="form-control" id="m_nouislider_input_select"></select>
						</div>
						<div class="col-2">
							<input type="number" class="form-control" id="m_nouislider_input_number"  placeholder="Quantity">
						</div>
						<div class="col-8">
							<div id="m_nouislider_4" class="m-nouislider m-nouislider--handle-primary m-nouislider--connect-warning"></div>
						</div>
					</div>
					<span class="m-form__help">Use state classes to change the slider's connect path and handle colors.</span>
				</div>
			</div>
			<div class="m-form__seperator m-form__seperator--dashed"></div>

			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Soft Limits</label>
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="row align-items-center">
						<div class="col-4">
							<input type="text" class="form-control" id="m_nouislider_5_input"  placeholder="Quantity">
						</div>
						<div class="col-8">
							<div id="m_nouislider_5"></div>
						</div>
					</div>
					<span class="m-form__help m--margin-top-20">Disables the edges of slider where handler bounces back when released</span>
				</div>
			</div>
			<div class="m-form__seperator m-form__seperator--dashed"></div>

			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Vertical Slider</label>
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="row">
						<div class="col-4">
							<input type="text" class="form-control" id="m_nouislider_6_input"  placeholder="Quantity">
						</div>
						<div class="col-8">
							<div id="m_nouislider_6"></div>
						</div> 
					</div>
					<span class="m-form__help">Vertical orientation slider example</span>
				</div>
			</div>	
			<div class="m-form__seperator m-form__seperator--dashed"></div>

			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Modal Demos</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<a href="" class="btn btn-success m-btn m-btn--pill" data-toggle="modal" data-target="#m_nouislider_modal">Launch modal examples</a>
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
		</div>		 	
	</form>
	<!--end::Form-->
</div>

<!--begin::Modal-->
<div class="modal fade" id="m_nouislider_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
						<label class="col-form-label col-lg-3 col-sm-12">Basic Setup</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<div class="row align-items-center">
								<div class="col-6">
									<input type="text" class="form-control" id="m_nouislider_modal1_input"  placeholder="Quantity">
								</div>
								<div class="col-6">
									<div id="m_nouislider_modal1" class="m-nouislider--drag-danger"></div>
								</div> 
							</div>
						</div>
					</div>

					<div class="form-group m-form__group row m--margin-top-20">
						<label class="col-form-label col-lg-3 col-sm-12">Currency Formatting</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<div class="row align-items-center">
								<div class="col-6">
									<input type="text" class="form-control" id="m_nouislider_modal2_input"  placeholder="Quantity">
								</div>
								<div class="col-6">
									<div id="m_nouislider_modal2" class="m-nouislider--drag-danger"></div>
								</div> 
							</div>
						</div>
					</div>	

					<div class="form-group m-form__group row m--margin-top-20">
						<label class="col-form-label col-lg-3 col-sm-12">Slider With Tooltip</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<div class="row align-items-center">								
								<div class="col-3">
									<input type="text" class="form-control" id="m_nouislider_modal1.1_input"  placeholder="Quantity">
								</div>
								<div class="col-3">
									<input type="text" class="form-control" id="m_nouislider_modal1.2_input"  placeholder="Quantity">
								</div>	 
								<div class="col-6">
									<div id="m_nouislider_modal3" class="m-nouislider"></div>
								</div>								
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
					 