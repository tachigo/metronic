<!--begin::Portlet-->
<div class="m-portlet">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Bootstrap Multiple Select Splitter Examples
				</h3>
			</div>
		</div>
	</div>
	<!--begin::Form-->
	<form class="m-form m-form--fit m-form--label-align-right">
		<div class="m-portlet__body">
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Standard Group Select</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control">
					 	<optgroup label="Category 1">
					    	<option value="1">Choice 1</option>
					    	<option value="2">Choice 2</option>
					    	<option value="3">Choice 3</option>
					    	<option value="4">Choice 4</option>
					  	</optgroup>
					  	<optgroup label="Category 2">
					    	<option value="5">Choice 5</option>
					    	<option value="6">Choice 6</option>
					    	<option value="7">Choice 7</option>
					    	<option value="8">Choice 8</option>
					  	</optgroup>
					  	<optgroup label="Category 3">
					    	<option value="5">Choice 9</option>
					    	<option value="6">Choice 10</option>
					    	<option value="7">Choice 11</option>
					    	<option value="8">Choice 12</option>
					  	</optgroup>
					</select>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Select Splitter 1</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control" id="m_multipleselectsplitter_1">
					 	<optgroup label="Category 1">
					    	<option value="1" >Choice 1</option>
					    	<option value="2">Choice 2</option>
					    	<option value="3">Choice 3</option>
					    	<option value="4">Choice 4</option>
					  	</optgroup>
					  	<optgroup label="Category 2">
					    	<option value="5">Choice 5</option>
					    	<option value="6" selected>Choice 6</option>
					    	<option value="7">Choice 7</option>
					    	<option value="8">Choice 8</option>
					  	</optgroup>
					  	<optgroup label="Category 3">
					    	<option value="5">Choice 9</option>
					    	<option value="6">Choice 10</option>
					    	<option value="7">Choice 11</option>
					    	<option value="8">Choice 12</option>
					  	</optgroup>
					</select>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Select Splitter 2</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control" id="m_multipleselectsplitter_2">
					 	<optgroup label="Group 1">
					    	<option value="1" selected>Option 1</option>
					    	<option value="2">Option 2</option>
					    	<option value="3">Option 3</option>
					    	<option value="4">Option 4</option>
					  	</optgroup>
					  	<optgroup label="Group 2">
					    	<option value="5">Option 5</option>
					    	<option value="6">Option 6</option>
					    	<option value="7">Option 7</option>
					    	<option value="8">Option 8</option>
					  	</optgroup>
					  	<optgroup label="Group 3">
					    	<option value="5">Option 9</option>
					    	<option value="6">Option 10</option>
					    	<option value="7">Option 11</option>
					    	<option value="8">Option 12</option>
					  	</optgroup>
					  	<optgroup label="Group 4">
					    	<option value="5">Option 13</option>
					    	<option value="6">Option 14</option>
					    	<option value="7">Option 15</option>
					    	<option value="8">Option 16</option>
					  	</optgroup>
					  	<optgroup label="Group 5">
					    	<option value="5">Option 17</option>
					    	<option value="6">Option 18</option>
					    	<option value="7">Option 19</option>
					    	<option value="8">Option 20</option>
					  	</optgroup>
					</select>
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