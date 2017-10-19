<!--begin::Portlet-->
<div class="m-portlet">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Typeahead Examples
				</h3>
			</div>
		</div>
	</div>
	<!--begin::Form-->
	<form class="m-form m-form--fit m-form--label-align-right">
		<div class="m-portlet__body">
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Basic Demo</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class="m-typeahead">
						<input class="form-control m-input" id="m_typeahead_1" type="text" placeholder="States of USA">
					</div>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Bloodhound (Suggestion Engine)</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class="m-typeahead">
						<input class="form-control m-input" id="m_typeahead_2" type="text" placeholder="States of USA">
					</div>
					<div class="m-form__help">
						Bloodhound offers advanced functionalities such as prefetching and backfilling with remote data.
					</div>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Prefetch</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class="m-typeahead">
						<input class="form-control m-input" id="m_typeahead_3" type="text" placeholder="Countries">
					</div>
					<div class="m-form__help">Prefetched data is fetched and processed on initialization</div>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Custom Templates</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class="m-typeahead">
						<input class="form-control m-input" id="m_typeahead_4" type="text" placeholder="Oscar winners">
					</div>
					<div class="m-form__help">Custom templates give you full control over how suggestions get rendered</div>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Multiple Datasets</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class="m-typeahead">
						<input class="form-control m-input" id="m_typeahead_5" type="text" placeholder="Select an option">
					</div>
					<div class="m-form__help">Remote data is only used when the data provided by local and prefetch is insufficient</div>
				</div>
			</div>
			
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Modal Demos</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<a href="" class="btn btn-success m-btn m-btn--pill" data-toggle="modal" data-target="#m_typeahead_modal">Launch modal typeaheads</a>
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
<div class="modal fade" id="m_typeahead_modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="">Typeahead Examples</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" class="la la-remove"></span>
				</button>
			</div>
			<form class="m-form m-form--fit m-form--label-align-right">
				<div class="modal-body">

					<div class="form-group m-form__group row m--margin-top-20">
						<label class="col-form-label col-lg-3 col-sm-12">Basic Demo</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<div class="m-typeahead">
								<input class="form-control m-input" id="m_typeahead_1_modal" type="text" placeholder="States of USA">
							</div>
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">Bloodhound</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<div class="m-typeahead">
								<input class="form-control m-input" id="m_typeahead_2_modal" type="text" placeholder="States of USA">
							</div>
							<div class="m-form__help">
								Bloodhound offers advanced functionalities such as prefetching and backfilling with remote data.
							</div>
						</div>
					</div>
					<div class="form-group m-form__group row m--margin-bottom-20">
						<label class="col-form-label col-lg-3 col-sm-12">Prefetch</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<div class="m-typeahead">
								<input class="form-control m-input" id="m_typeahead_3_modal" type="text" placeholder="Countries">
							</div>
							<div class="m-form__help">Prefetched data is fetched and processed on initialization</div>
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
					<div class="m-typeahead">
						<input class="form-control m-input" id="m_typeahead_1_validate" type="text" placeholder="States of USA">
					</div>
					<div class="form-control-feedback">Success! You've done it.</div>
					<span class="m-form__help">Example help text that remains unchanged.</span>
				</div>
			</div>
			<div class="form-group m-form__group row has-warning">
				<label class="col-form-label col-lg-3 col-sm-12">Warning State</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class="m-typeahead">
						<input class="form-control m-input" id="m_typeahead_2_validate" type="text" placeholder="States of USA">
					</div>	
					<div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
					<span class="m-form__help">Example help text that remains unchanged.</span>
				</div>
			</div>
			<div class="form-group m-form__group row has-danger">
				<label class="col-form-label col-lg-3 col-sm-12">Danger State</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class="m-typeahead">
						<input class="form-control m-input" id="m_typeahead_3_validate" type="text" placeholder="States of USA">
					</div>
					<div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
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