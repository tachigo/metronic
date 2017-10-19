<!--begin::Portlet-->
<div class="m-portlet">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Clipboard Examples
				</h3>
			</div>
		</div>
	</div>
	<!--begin::Form-->
	<form class="m-form m-form--fit m-form--label-align-right">
		<div class="m-portlet__body">
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Basic Demo</label>
				<div class="col-lg-6 col-md-9 col-sm-12">
					<div class="input-group">
						<input type="text" class="form-control" id="m_clipboard_1" placeholder="Type some value to copy">
						<span class="input-group-btn">
							<a href="#" class="btn btn-secondary" data-clipboard="true" data-clipboard-target="#m_clipboard_1"><i class="la la-copy"></i></a>
						</span>
					</div>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Copy From Textarea</label>
				<div class="col-lg-6 col-md-9 col-sm-12">
					<textarea class="form-control" id="m_clipboard_2" rows="6">Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga.</textarea>
					<div class="m--space-10"></div>
					<a href="#" class="btn btn-secondary" data-clipboard="true" data-clipboard-target="#m_clipboard_2"><i class="la la-clipboard"></i> Copy to clipboard</a>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Cut From Textarea</label>
				<div class="col-lg-6 col-md-9 col-sm-12">
					<textarea class="form-control" id="m_clipboard_3" rows="6">Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga.</textarea>
					<div class="m--space-10"></div>
					<a href="#" class="btn btn-brand" data-clipboard="true" data-clipboard-action="cut" data-clipboard-target="#m_clipboard_3"><i class="la la-cut"></i>  Cut to clipboard</a>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Copy From Element</label>
				<div class="col-lg-6 col-md-9 col-sm-12">
					<div id="m_clipboard_4" style="border: 4px solid #eaeaea; padding: 10px;">Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga.</div>
					<div class="m--space-10"></div>
					<a href="#" class="btn btn-primary" data-clipboard="true" data-clipboard-target="#m_clipboard_4"><i class="la la-cut"></i>  Copy to clipboard</a>
				</div>
			</div>
		</div>
		<div class="m-portlet__foot m-portlet__foot--fit">
			<div class="m-form__actions m-form__actions">
				<div class="row">
					<div class="col-lg-9 ml-lg-auto">
						<button type="reset" class="btn btn-success">Submit</button>
						<button type="reset" class="btn btn-secondary">Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<!--end::Form-->
</div>
<!--end::Portlet-->