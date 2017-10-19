<!--begin::Portlet-->
<div class="m-portlet">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Google reCaptcha Examples
				</h3>
			</div>
		</div>
	</div>
	<!--begin::Form-->
	<form class="m-form m-form--fit m-form--label-align-right">
		<div class="m-portlet__body">
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Google reCaptcha 1</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class="g-recaptcha" data-sitekey="6LdnLwgUAAAAAAIb9L3PQlHQgvSCi16sYgbMIMFR"></div>
					<div class="m-form__help">
						To learn more about Google reCaptcha please visit <a class="m-link" href="http://www.google.com/recaptcha" target="_blank">
						http://www.google.com/recaptcha </a>
					</div>
				</div>
				<script src='https://www.google.com/recaptcha/api.js'></script>
			</div>	
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Google reCaptcha 2</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<!--begin: GOOGLE REPCAPTCHA -->
					<div id="recaptcha_widget" class="m-recaptcha">
						<div class="m-recaptcha__img">
							<a id="recaptcha_image" href="javascript:;"></a>
							<div class="recaptcha_only_if_incorrect_sol display-none">
								Incorrect please try again
							</div>
						</div>
						<div class="input-group">
							<input type="text" class="form-control" id="recaptcha_response_field" name="recaptcha_response_field">
							<span class="input-group-btn">
								<a class="btn btn-secondary" href="javascript:Recaptcha.reload()">
									<i class="la la-refresh"></i>
								</a>
							</span>
							<span class="input-group-btn">
								<a class="btn btn-secondary recaptcha_only_if_image" href="javascript:Recaptcha.switch_type('audio')">
									<i title="Get an audio CAPTCHA" class="la la-headphones"></i>
								</a>
							</span>
							<span class="input-group-btn">
								<a class="btn btn-secondary recaptcha_only_if_audio" href="javascript:Recaptcha.switch_type('image')">
									<i title="Get an image CAPTCHA" class="la la-picture-o"></i>
								</a>
							</span>
							<span class="input-group-btn">
								<a class="btn btn-secondary" href="javascript:Recaptcha.showhelp()">
									<i class="la la-question-circle"></i>
								</a>
							</span>
						</div>
						<div class="m-form__help">
							<span class="recaptcha_only_if_image">Enter the words above</span>
							<span class="recaptcha_only_if_audio">Enter the numbers you hear </span>
						</div>
					</div>
					<div class="m-form__help">
						<span class="label label-sm label-danger">Note:&nbsp;</span>
						Please visit <a class="m-link"  href="http://www.google.com/recaptcha" target="_blank">
						http://www.google.com/recaptcha </a>
						to learn more about the Google reCaptcha
					</div>
					<script type="text/javascript">
						var RecaptchaOptions = {
					    	theme : 'custom',
					    	custom_theme_widget: 'recaptcha_widget'
					    };
					</script>
					<script type="text/javascript" src="https://www.google.com/recaptcha/api/challenge?k=6LcrK9cSAAAAALEcjG9gTRPbeA0yAVsKd8sBpFpR"></script>
					<!--end: GOOGLE REPCAPTCHA -->
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