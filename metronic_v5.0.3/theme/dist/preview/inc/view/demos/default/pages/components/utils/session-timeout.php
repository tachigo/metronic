<div class="alert alert-brand m-alert m-alert--icon m-alert--air m-alert--square m--margin-bottom-30" role="alert">
    <div class="m-alert__icon">
        <i class="flaticon-exclamation-1"></i>
    </div>
    <div class="m-alert__text">
    	Session timeout and keep-alive control with a nice Bootstrap warning dialog.
        To learn more please check out 
        	<a href="https://github.com/maxfierke/jquery-sessionTimeout-bootstrap" class="m-link m-link--warning m--font-bold" target="_blank">
            the plugin's official homepage 
            </a>
    </div>         
</div>

<!--begin::Portlet-->
<div class="m-portlet m-portlet--tab">
    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <span class="m-portlet__head-icon m--hide">
                    <i class="la la-gear"></i>
                </span>
                <h3 class="m-portlet__head-text">
                    Session Timeout Demo
                </h3>
            </div>
        </div>
    </div>
    <div class="m-portlet__body">
        After a set amount of time(10 seconds set for demo), a dialog is shown to the user with the option to either log out now, or stay connected. 
		If log out now is selected, the page is redirected to a logout URL. If stay connected is selected, a keep-alive URL is requested through AJAX. 
		If no options is selected after another set amount of time, the page is automatically redirected to a timeout URL. 
   	</div>
</div>
<!--end::Portlet-->


		
