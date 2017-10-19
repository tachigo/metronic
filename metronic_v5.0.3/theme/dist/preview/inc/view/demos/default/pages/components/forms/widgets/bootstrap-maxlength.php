<!--begin::Portlet-->
<div class="m-portlet">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Bootstrap Maxlength Examples
				</h3>
			</div>
		</div>
	</div>
	<!--begin::Form-->
	<form class="m-form m-form--fit m-form--label-align-right">
		<div class="m-portlet__body">
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Default Usage</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<input type='text' class="form-control" id="m_maxlength_1" maxlength="3"  placeholder="" type="text"/>
					<span class="m-form__help">The badge will show up by default when the remaining chars are 3 or less</span>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Threshold Demo</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<input type='text' class="form-control" id="m_maxlength_2" maxlength="7"  placeholder="" type="text"/>
					<span class="m-form__help">Set threshold value to show there are 5 chars or less</span>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Always Show</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<input type='text' class="form-control" id="m_maxlength_3" maxlength="6"  placeholder="" type="text"/>
					<span class="m-form__help">Show the counter on input focus</span>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Custom Text</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<input type='text' class="form-control" id="m_maxlength_4" maxlength="8"  placeholder="" type="text"/>
					<span class="m-form__help">Display custom text on input focus</span>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Textarea Example</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<textarea class="form-control" id="m_maxlength_5" maxlength="8"  placeholder="" rows="6"></textarea>
					<span class="m-form__help">Bootstrap maxlength supports textarea as well as inputs</span>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Positions</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<input type='text' class="form-control" id="m_maxlength_6_1" maxlength="8"  placeholder="Top left" type="text"/>
					<div class="m--space-10"></div>
					<input type='text' class="form-control" id="m_maxlength_6_2" maxlength="8"  placeholder="Top right" type="text"/>
					<div class="m--space-10"></div>
					<input type='text' class="form-control" id="m_maxlength_6_3" maxlength="8"  placeholder="Bottom left" type="text"/>
					<div class="m--space-10"></div>
					<input type='text' class="form-control" id="m_maxlength_6_4" maxlength="8"  placeholder="Bottom right" type="text"/>
					<span class="m-form__help">The field counter can be positioned at the top, bottom, left or right.</span>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Modal Demos</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<a href="" class="btn btn-brand m-btn m-btn--pill" data-toggle="modal" data-target="#m_maxlength_modal">Launch maxlength inputs on modal</a>
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

<!--begin::Modal-->
<div class="modal fade" id="m_maxlength_modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="">Bootstrap Maxlength Examples</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" class="la la-remove"></span>
				</button>
			</div>
			<form class="m-form m-form--fit m-form--label-align-right">
				<div class="modal-body">
					<div class="form-group m-form__group row m--margin-top-20">
						<label class="col-form-label col-lg-3 col-sm-12">Default Usage</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<input type='text' class="form-control" id="m_maxlength_1_modal" maxlength="3"  placeholder="" type="text"/>
							<span class="m-form__help">The badge will show up by default when the remaining chars are 3 or less</span>
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">Threshold Demo</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<input type='text' class="form-control" id="m_maxlength_2_modal" maxlength="7"  placeholder="" type="text"/>
							<span class="m-form__help">Set threshold value to show there are 5 chars or less</span>
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">Textarea Example</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<textarea class="form-control" id="m_maxlength_5_modal" maxlength="8"  placeholder="" rows="6"></textarea>
							<span class="m-form__help">Bootstrap maxlength supports textarea as well as inputs</span>
						</div>
					</div>
					<div class="form-group m-form__group row m--margin-bottom-20">
						<label class="col-form-label col-lg-3 col-sm-12">Custom Text</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<input type='text' class="form-control" id="m_maxlength_4_modal" maxlength="8"  placeholder="" type="text"/>
							<span class="m-form__help">Display custom text on input focus</span>
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