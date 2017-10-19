<!--begin::Portlet-->
<div class="m-portlet">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Toastr Notifications Examples
				</h3>
			</div>
		</div>
	</div>
	<!--begin::Form-->
	<form class="m-form m-form--fit m-form--label-align-right">
		<div class="m-portlet__body">
			<div class="row">
	            <div class="col-lg-4">
	                <div class="form-group m-form__group">
	                    <label  for="title">Title</label>
	                    <input id="title" type="text" class="form-control" placeholder="Enter a title ..." />
	                </div>
	                <div class="form-group m-form__group">
						<label  for="message">Message</label>
	                    <textarea class="form-control" id="message" rows="3" placeholder="Enter a message ..."></textarea>
	                </div>
	                <div class="form-group m-form__group">
	                	<div class="m-checkbox-list">
	                		<label class="m-checkbox">
	                            <input id="closeButton" type="checkbox" value="checked"  />Close Button
	                            <span></span>
	                        </label>
	                		<label class="m-checkbox">
	                            <input id="addBehaviorOnToastClick" type="checkbox" value="checked"  />Add behavior on toast click
	                            <span></span>
	                        </label>
	                        <label class="m-checkbox">
	                            <input id="debugInfo" type="checkbox" value="checked"  />Debug
	                            <span></span>
	                        </label>
	                        <label class="m-checkbox">
	                            <input id="progressBar" type="checkbox" value="checked"  />Progress Bar
	                            <span></span>
	                        </label>
	                        <label class="m-checkbox">
	                            <input id="preventDuplicates" type="checkbox" value="checked"  />Prevent Duplicates
	                            <span></span>
	                        </label>
	                        <label class="m-checkbox">
	                            <input id="addClear" type="checkbox" value="checked"  />Add button to force clearing a toast, ignoring focus
	                            <span></span>
	                        </label>
	                        <label class="m-checkbox">
	                            <input id="newestOnTop" type="checkbox" value="checked"  />Newest on top
	                            <span></span>
	                        </label>
	                	</div>
	                </div>
	            </div>
	            <div class="col-lg-2">
	                <div class="form-group m-form__group">
	                	<label>Toast Type</label>
	                	<div class="m-radio-list" id="toastTypeGroup">
	                		<label class="m-radio">
	                            <input type="radio" name="toasts" checked value="success"  />Success
	                            <span></span>
	                        </label>
	                        <label class="m-radio">
	                            <input type="radio" name="toasts" value="info"  />Info
	                            <span></span>
	                        </label>
	                        <label class="m-radio">
	                            <input type="radio" name="toasts" value="warning"  />Warning
	                            <span></span>
	                        </label>
	                        <label class="m-radio">
	                            <input type="radio" name="toasts" value="error"  />Error
	                            <span></span>
	                        </label>
	                   	</div>
	                </div>
	                <div class="form-group m-form__group">
	                    <label>Position</label>
	                    <div class="m-radio-list" id="positionGroup">
		                		<label class="m-radio">
		                            <input type="radio" name="positions" value="toast-top-right" checked />Top Right
		                            <span></span>
		                        </label>
		                        <label class="m-radio">
		                            <input type="radio" name="positions" value="toast-bottom-right" />Bottom Right
		                            <span></span>
		                        </label>
		                        <label class="m-radio">
		                            <input type="radio" name="positions" value="toast-bottom-left" />Bottom Left
		                            <span></span>
		                        </label>
		                        <label class="m-radio">
		                            <input type="radio" name="positions" value="toast-top-left" />Top Left
		                            <span></span>
		                        </label>
		                        <label class="m-radio">
		                            <input type="radio" name="positions" value="toast-top-full-width" />Top Full Width
		                            <span></span>
		                        </label>
		                        <label class="m-radio">
		                             <input type="radio" name="positions" value="toast-bottom-full-width" />Bottom Full Width
		                            <span></span>
		                        </label>
		                        <label class="m-radio">
		                            <input type="radio" name="positions" value="toast-top-center" />Top Center
		                            <span></span>
		                        </label>
		                        <label class="m-radio">
		                            <input type="radio" name="positions" value="toast-bottom-center" />Bottom Center
		                            <span></span>
		                        </label>
		                </div>
	                </div>
	            </div>
	            <div class="col-lg-2">
	                <div class="form-group m-form__group">
	                    <label for="showEasing">Show Easing</label>
	                    <input id="showEasing" type="text" class="form-control" placeholder="swing, linear"  value="swing" />
	                </div>
	                <div class="form-group m-form__group">
	                    <label  for="hideEasing">Hide Easing</label>
	                    <input id="hideEasing" type="text" class="form-control" placeholder="swing, linear"  value="linear" />
	                </div>
	                <div class="form-group m-form__group">
	                    <label  for="showMethod">Show Method</label>
	                    <input id="showMethod" type="text" class="form-control" placeholder="show, fadeIn, slideDown"  value="fadeIn" />
	                </div>
	                <div class="form-group m-form__group">
	                    <label  for="hideMethod">Hide Method</label>
	                    <input id="hideMethod" type="text" class="form-control" placeholder="hide, fadeOut, slideUp"  value="fadeOut" />
	                </div>
	            </div>
	            <div class="col-lg-2">
	                <div class="form-group m-form__grou">
	                       <label  for="showDuration">Show Duration</label>
	                        <input id="showDuration" type="text" class="form-control" placeholder="ms"  value="300" />
	                </div>
	                <div class="form-group m-form__grou">

	                        <label  for="hideDuration">Hide Duration</label>
	                        <input id="hideDuration" type="text" class="form-control" placeholder="ms"  value="1000" />
	                </div>
	                <div class="form-group m-form__grou">

	                        <label  for="timeOut">Time out</label>
	                        <input id="timeOut" type="text" class="form-control" placeholder="ms"  value="5000" />
	                </div>
	                <div class="form-group m-form__grou">
						<label  for="extendedTimeOut">Extended time out</label>
	                    <input id="extendedTimeOut" class="form-control" type="text" placeholder="ms"  value="1000" />
	                </div>
	            </div>
        	</div>			
        	<div class="row">
        		<div class="col-lg-12">
        			<div class="form-group m-form__group">
        				<pre id='toastrOptions' style="border:4px solid #efefef;padding:15px; margin:20px 0;">Output:</pre>
        			</div>
        		</div>
        	</div>
		</div>
		<div class="m-portlet__foot m-portlet__foot--fit">
			<div class="m-form__actions m-form__actions">
				<div class="row">
					<div class="col-lg-8 offset-lg-4">
						<a href="javascript:;"  class="btn btn-primary" id="showtoast">Show Toast</a>
			            <a href="javascript:;"  class="btn btn-danger"  id="cleartoasts">Clear Toasts</a>
			            <a href="javascript:;"  class="btn btn-danger"  id="clearlasttoast">Clear Last Toast</a>
					</div>
				</div>
			</div>
		</div>
	</form>
	<!--end::Form-->
</div>
<!--end::Portlet-->