<!--begin::Portlet-->
<div class="m-portlet">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Dropzone File Upload Examples
				</h3>
			</div>
		</div>
	</div>
	<!--begin::Form-->
	<form class="m-form m-form--fit m-form--label-align-right">
		<div class="m-portlet__body">
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Single File Upload</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class="m-dropzone dropzone" action="inc/api/dropzone/upload.php" id="m-dropzone-one">
						<div class="m-dropzone__msg dz-message needsclick">
						    <h3 class="m-dropzone__msg-title">Drop files here or click to upload.</h3>
						    <span class="m-dropzone__msg-desc">This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.</span>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Multiple File Upload</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class="m-dropzone dropzone m-dropzone--primary" action="inc/api/dropzone/upload.php" id="m-dropzone-two">
						<div class="m-dropzone__msg dz-message needsclick">
						    <h3 class="m-dropzone__msg-title">Drop files here or click to upload.</h3>
						    <span class="m-dropzone__msg-desc">Upload up to 10 files</span>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">File Type Validation</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class="m-dropzone dropzone m-dropzone--success" action="inc/api/dropzone/upload.php" id="m-dropzone-three">
						<div class="m-dropzone__msg dz-message needsclick">
						    <h3 class="m-dropzone__msg-title">Drop files here or click to upload.</h3>
						    <span class="m-dropzone__msg-desc">Only image, pdf and psd files are allowed for upload</span>
						</div>
					</div>
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