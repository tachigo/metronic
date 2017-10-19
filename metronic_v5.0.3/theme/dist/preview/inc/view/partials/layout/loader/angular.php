<!-- begin::Page loader -->
<?php if ( Page::getOption('layout', 'angular/loader/type') == 'default' ):?>
	<div class="m-page-loader m-page-loader--non-block" style="margin-left: -20px; margin-top: -20px;">
		<div class="m-spinner m-spinner--brand"></div>
	</div>
<?php elseif( Page::getOption('layout', 'angular/loader/type') == 'spinner-message' ):?>
	<div class="m-page-loader m-page-loader--non-block" style="margin-left: -80px; margin-top: -20px;">
		<div class="m-blockui">
			<span>Please wait...</span>
			<span><div class="m-loader m-loader--brand"></div></span>
		</div>
	</div>
<?php endif;?>
<!-- end::Page loader -->