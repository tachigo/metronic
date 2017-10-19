<!--begin::Portlet-->
<div class="m-portlet">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Bootstrap Notify Demo
				</h3>
			</div>
		</div>
	</div>
	<!--begin::Form-->
	<form class="m-form m-form--fit m-form--label-align-right">
		<div class="m-portlet__body">
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Placement</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-input--fixed" id="m_notify_placement_from">
						<option value="top">Top</option>
						<option value="bottom">Bottom</option>
					</select>
					<select class="form-control m-input--fixed" id="m_notify_placement_align">
						<option value="left">Left</option>
						<option value="right" selected>Right</option>
						<option value="center">Center</option>
					</select>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Animation</label>
				<div class="col-lg-4 col-md-9 col-sm-12">

					<select class="form-control m-input--fixed" id="m_notify_animate_enter">
				        <optgroup label="Attention Seekers">
				          	<option value="bounce">bounce</option>
				          	<option value="flash">flash</option>
				          <option value="pulse">pulse</option>
				          <option value="rubberBand">rubberBand</option>
				          <option value="shake">shake</option>
				          <option value="swing">swing</option>
				          <option value="tada">tada</option>
				          <option value="wobble">wobble</option>
				          <option value="jello">jello</option>
				        </optgroup>

				        <optgroup label="Bouncing Entrances">
				          <option value="bounceIn">bounceIn</option>
				          <option value="bounceInDown">bounceInDown</option>
				          <option value="bounceInLeft">bounceInLeft</option>
				          <option value="bounceInRight">bounceInRight</option>
				          <option value="bounceInUp">bounceInUp</option>
				        </optgroup>

				        <optgroup label="Bouncing Exits">
				          <option value="bounceOut">bounceOut</option>
				          <option value="bounceOutDown">bounceOutDown</option>
				          <option value="bounceOutLeft">bounceOutLeft</option>
				          <option value="bounceOutRight">bounceOutRight</option>
				          <option value="bounceOutUp">bounceOutUp</option>
				        </optgroup>

				        <optgroup label="Fading Entrances">
				          <option value="fadeIn">fadeIn</option>
				          <option value="fadeInDown">fadeInDown</option>
				          <option value="fadeInDownBig">fadeInDownBig</option>
				          <option value="fadeInLeft">fadeInLeft</option>
				          <option value="fadeInLeftBig">fadeInLeftBig</option>
				          <option value="fadeInRight">fadeInRight</option>
				          <option value="fadeInRightBig">fadeInRightBig</option>
				          <option value="fadeInUp">fadeInUp</option>
				          <option value="fadeInUpBig">fadeInUpBig</option>
				        </optgroup>

				        <optgroup label="Fading Exits">
				          <option value="fadeOut">fadeOut</option>
				          <option value="fadeOutDown">fadeOutDown</option>
				          <option value="fadeOutDownBig">fadeOutDownBig</option>
				          <option value="fadeOutLeft">fadeOutLeft</option>
				          <option value="fadeOutLeftBig">fadeOutLeftBig</option>
				          <option value="fadeOutRight">fadeOutRight</option>
				          <option value="fadeOutRightBig">fadeOutRightBig</option>
				          <option value="fadeOutUp">fadeOutUp</option>
				          <option value="fadeOutUpBig">fadeOutUpBig</option>
				        </optgroup>

				        <optgroup label="Flippers">
				          <option value="flip">flip</option>
				          <option value="flipInX">flipInX</option>
				          <option value="flipInY">flipInY</option>
				          <option value="flipOutX">flipOutX</option>
				          <option value="flipOutY">flipOutY</option>
				        </optgroup>

				        <optgroup label="Lightspeed">
				          <option value="lightSpeedIn">lightSpeedIn</option>
				          <option value="lightSpeedOut">lightSpeedOut</option>
				        </optgroup>

				        <optgroup label="Rotating Entrances">
				          <option value="rotateIn">rotateIn</option>
				          <option value="rotateInDownLeft">rotateInDownLeft</option>
				          <option value="rotateInDownRight">rotateInDownRight</option>
				          <option value="rotateInUpLeft">rotateInUpLeft</option>
				          <option value="rotateInUpRight">rotateInUpRight</option>
				        </optgroup>

				        <optgroup label="Rotating Exits">
				          <option value="rotateOut">rotateOut</option>
				          <option value="rotateOutDownLeft">rotateOutDownLeft</option>
				          <option value="rotateOutDownRight">rotateOutDownRight</option>
				          <option value="rotateOutUpLeft">rotateOutUpLeft</option>
				          <option value="rotateOutUpRight">rotateOutUpRight</option>
				        </optgroup>

				        <optgroup label="Sliding Entrances">
				          <option value="slideInUp">slideInUp</option>
				          <option value="slideInDown">slideInDown</option>
				          <option value="slideInLeft">slideInLeft</option>
				          <option value="slideInRight">slideInRight</option>

				        </optgroup>
				        <optgroup label="Sliding Exits">
				          <option value="slideOutUp">slideOutUp</option>
				          <option value="slideOutDown">slideOutDown</option>
				          <option value="slideOutLeft">slideOutLeft</option>
				          <option value="slideOutRight">slideOutRight</option>
				          
				        </optgroup>
				        
				        <optgroup label="Zoom Entrances">
				          <option value="zoomIn">zoomIn</option>
				          <option value="zoomInDown">zoomInDown</option>
				          <option value="zoomInLeft">zoomInLeft</option>
				          <option value="zoomInRight">zoomInRight</option>
				          <option value="zoomInUp">zoomInUp</option>
				        </optgroup>
				        
				        <optgroup label="Zoom Exits">
				          <option value="zoomOut">zoomOut</option>
				          <option value="zoomOutDown">zoomOutDown</option>
				          <option value="zoomOutLeft">zoomOutLeft</option>
				          <option value="zoomOutRight">zoomOutRight</option>
				          <option value="zoomOutUp">zoomOutUp</option>
				        </optgroup>

				        <optgroup label="Specials">
				          <option value="hinge">hinge</option>
				          <option value="rollIn">rollIn</option>
				          <option value="rollOut">rollOut</option>
				        </optgroup>
				      </select>

					<select class="form-control m-input--fixed" id="m_notify_animate_exit">
				        <optgroup label="Attention Seekers">
				          	<option value="bounce">bounce</option>
				          	<option value="flash">flash</option>
				          <option value="pulse">pulse</option>
				          <option value="rubberBand">rubberBand</option>
				          <option value="shake">shake</option>
				          <option value="swing">swing</option>
				          <option value="tada">tada</option>
				          <option value="wobble">wobble</option>
				          <option value="jello">jello</option>
				        </optgroup>

				        <optgroup label="Bouncing Entrances">
				          <option value="bounceIn">bounceIn</option>
				          <option value="bounceInDown">bounceInDown</option>
				          <option value="bounceInLeft">bounceInLeft</option>
				          <option value="bounceInRight">bounceInRight</option>
				          <option value="bounceInUp">bounceInUp</option>
				        </optgroup>

				        <optgroup label="Bouncing Exits">
				          <option value="bounceOut">bounceOut</option>
				          <option value="bounceOutDown">bounceOutDown</option>
				          <option value="bounceOutLeft">bounceOutLeft</option>
				          <option value="bounceOutRight">bounceOutRight</option>
				          <option value="bounceOutUp">bounceOutUp</option>
				        </optgroup>

				        <optgroup label="Fading Entrances">
				          <option value="fadeIn">fadeIn</option>
				          <option value="fadeInDown">fadeInDown</option>
				          <option value="fadeInDownBig">fadeInDownBig</option>
				          <option value="fadeInLeft">fadeInLeft</option>
				          <option value="fadeInLeftBig">fadeInLeftBig</option>
				          <option value="fadeInRight">fadeInRight</option>
				          <option value="fadeInRightBig">fadeInRightBig</option>
				          <option value="fadeInUp">fadeInUp</option>
				          <option value="fadeInUpBig">fadeInUpBig</option>
				        </optgroup>

				        <optgroup label="Fading Exits">
				          <option value="fadeOut">fadeOut</option>
				          <option value="fadeOutDown">fadeOutDown</option>
				          <option value="fadeOutDownBig">fadeOutDownBig</option>
				          <option value="fadeOutLeft">fadeOutLeft</option>
				          <option value="fadeOutLeftBig">fadeOutLeftBig</option>
				          <option value="fadeOutRight">fadeOutRight</option>
				          <option value="fadeOutRightBig">fadeOutRightBig</option>
				          <option value="fadeOutUp">fadeOutUp</option>
				          <option value="fadeOutUpBig">fadeOutUpBig</option>
				        </optgroup>

				        <optgroup label="Flippers">
				          <option value="flip">flip</option>
				          <option value="flipInX">flipInX</option>
				          <option value="flipInY">flipInY</option>
				          <option value="flipOutX">flipOutX</option>
				          <option value="flipOutY">flipOutY</option>
				        </optgroup>

				        <optgroup label="Lightspeed">
				          <option value="lightSpeedIn">lightSpeedIn</option>
				          <option value="lightSpeedOut">lightSpeedOut</option>
				        </optgroup>

				        <optgroup label="Rotating Entrances">
				          <option value="rotateIn">rotateIn</option>
				          <option value="rotateInDownLeft">rotateInDownLeft</option>
				          <option value="rotateInDownRight">rotateInDownRight</option>
				          <option value="rotateInUpLeft">rotateInUpLeft</option>
				          <option value="rotateInUpRight">rotateInUpRight</option>
				        </optgroup>

				        <optgroup label="Rotating Exits">
				          <option value="rotateOut">rotateOut</option>
				          <option value="rotateOutDownLeft">rotateOutDownLeft</option>
				          <option value="rotateOutDownRight">rotateOutDownRight</option>
				          <option value="rotateOutUpLeft">rotateOutUpLeft</option>
				          <option value="rotateOutUpRight">rotateOutUpRight</option>
				        </optgroup>

				        <optgroup label="Sliding Entrances">
				          <option value="slideInUp">slideInUp</option>
				          <option value="slideInDown">slideInDown</option>
				          <option value="slideInLeft">slideInLeft</option>
				          <option value="slideInRight">slideInRight</option>

				        </optgroup>
				        <optgroup label="Sliding Exits">
				          <option value="slideOutUp">slideOutUp</option>
				          <option value="slideOutDown">slideOutDown</option>
				          <option value="slideOutLeft">slideOutLeft</option>
				          <option value="slideOutRight">slideOutRight</option>
				          
				        </optgroup>
				        
				        <optgroup label="Zoom Entrances">
				          <option value="zoomIn">zoomIn</option>
				          <option value="zoomInDown">zoomInDown</option>
				          <option value="zoomInLeft">zoomInLeft</option>
				          <option value="zoomInRight">zoomInRight</option>
				          <option value="zoomInUp">zoomInUp</option>
				        </optgroup>
				        
				        <optgroup label="Zoom Exits">
				          <option value="zoomOut">zoomOut</option>
				          <option value="zoomOutDown">zoomOutDown</option>
				          <option value="zoomOutLeft">zoomOutLeft</option>
				          <option value="zoomOutRight">zoomOutRight</option>
				          <option value="zoomOutUp">zoomOutUp</option>
				        </optgroup>

				        <optgroup label="Specials">
				          <option value="hinge">hinge</option>
				          <option value="rollIn">rollIn</option>
				          <option value="rollOut">rollOut</option>
				        </optgroup>
				      </select>

				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Icon</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control" id="m_notify_icon">
						<option value="">None</option>
						<option value="la la-cloud-download">la la-cloud-download</option>
						<option value="la la-warning">la la-warning</option>
						<option value="fa fa-warning">fa fa-warning</option>
						<option value="fa fa-cloud-download">fa fa-cloud-download</option>
						<option value="flaticon-exclamation-2">flaticon-exclamation-2</option>
						<option value="flaticon-signs">flaticon-signs</option>
					</select>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">URL Clickable </label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<input data-switch="true" type="checkbox" data-on-color="brand"  id="m_notify_url">
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Allow dismiss</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<input data-switch="true" type="checkbox" checked data-on-color="brand"  id="m_notify_dismiss">
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Pause on hover</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<input data-switch="true" type="checkbox" data-on-color="brand" id="m_notify_pause">
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Newest on top</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<input data-switch="true" type="checkbox" data-on-color="brand" id="m_notify_top">
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Show Title</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<input data-switch="true" type="checkbox" data-on-color="brand" id="m_notify_title">
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Show Progress</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<input data-switch="true" type="checkbox" data-on-color="brand" id="m_notify_progress">
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Spacing</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<input type="number" class="form-control" value="10" id="m_notify_spacing"/>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Offset X</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<input type="number" class="form-control" value="30" id="m_notify_offset_x"/>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Offset Y</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<input type="number" class="form-control" value="30" id="m_notify_offset_y"/>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Delay</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<input type="number" class="form-control" value="1000" id="m_notify_delay"/>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Timer</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<input type="number" class="form-control" value="2000" id="m_notify_timer"/>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Z-Index</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<input type="number" class="form-control" value="10000" id="m_notify_zindex"/>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">State</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control" id="m_notify_state">
						<option value="success">Success</option>
						<option value="danger">Danger</option>
						<option value="warning">Warning</option>
						<option value="info">Info</option>
						<option value="primary">Primary</option>
						<option value="brand">Brand</option>
					</select>
				</div>
			</div>
		</div>
		<div class="m-portlet__foot m-portlet__foot--fit">
			<div class="m-form__actions m-form__actions">
				<div class="row">
					<div class="col-lg-9 ml-lg-auto">
						<a href="javascript:;" id="m_notify_btn" class="btn btn-success">Display</a>
						<button type="reset" class="btn btn-secondary">Reset</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<!--end::Form-->
</div>
<!--end::Portlet-->