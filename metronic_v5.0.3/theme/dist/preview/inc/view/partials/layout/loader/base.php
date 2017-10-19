<!-- begin::Page loader -->
<?php if ( Page::getOption('layout', 'loader/type') == 'default' ):?>
	<div class="m-page-loader">
		<div class="m-spinner m-spinner--brand"></div>
	</div>
<?php elseif( Page::getOption('layout', 'loader/type') == 'spinner-message' ):?>
	<div class="m-page-loader">
		<div class="m-blockui">
			<span>Please wait...</span>
			<span><div class="m-loader m-loader--brand"></div></span>
		</div>
	</div>
<?php endif?>	
<!-- end::Page Loader -->