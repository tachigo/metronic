<div class="row">
    <div class="col-lg-6">
    	<!--begin::Portlet-->
		<div class="m-portlet">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<h3 class="m-portlet__head-text">
							Basic Progress Bars
						</h3>
					</div>
				</div>
			</div>
			<div class="m-portlet__body">
				<!--begin::Section-->
				<div class="m-section m-section--last">
					<span class="m-section__sub">
						Progress components are built with two HTML elements, some CSS to set the width, and a few attributes.
					</span>
					<div class="m-section__content">
						<div class="progress">
						  	<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						
						<div class="m--space-10"></div>

						<div class="progress">
						  	<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
						</div>

						<div class="m--space-10"></div>

						<div class="progress">
						  	<div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						
						<div class="m--space-10"></div>

						<div class="progress">
						  	<div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						
						<div class="m--space-10"></div>

						<div class="progress">
						  	<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
				</div>
				<!--end::Section-->
			</div>
		</div>
		<!--end::Portlet-->

		<!--begin::Portlet-->
		<div class="m-portlet">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<h3 class="m-portlet__head-text">
							Customizing
						</h3>
					</div>
				</div>
			</div>
		</div>
		<!--end::Portlet-->

		<!--begin::Portlet-->
		<div class="m-portlet">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<h3 class="m-portlet__head-text">
							Sizing
						</h3>
					</div>
				</div>
			</div>
			<div class="m-portlet__body">
				<!--begin::Section-->
				<div class="m-section">

					<h3 class="m-section__heading">Sizing</h3>
					<span class="m-section__sub">
						Use <code>.m-progress--sm</code> class to change progress size to small:
					</span>
					<div class="m-section__content">
						<div class="progress m-progress--sm">
						  	<div class="progress-bar m--bg-primary" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						
						<div class="m--space-10"></div>

						<div class="progress m-progress--sm">
						  	<div class="progress-bar m--bg-accent" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
						</div>

						<div class="m--space-10"></div>

						<div class="progress m-progress--sm">
						  	<div class="progress-bar m--bg-warning" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
						</div>

						<div class="m--space-10"></div>

						<div class="progress m-progress--sm">
						  	<div class="progress-bar m--bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>

					<div class="m-separator m-separator--dashed"></div>

					<span class="m-section__sub">
						Use <code>.m-progress--lg</code> class to change progress size to large:
					</span>
					<div class="m-section__content">
						<div class="progress m-progress--lg">
						  	<div class="progress-bar m--bg-primary" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						
						<div class="m--space-10"></div>

						<div class="progress m-progress--lg">
						  	<div class="progress-bar m--bg-accent" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
						</div>

						<div class="m--space-10"></div>

						<div class="progress m-progress--lg">
						  	<div class="progress-bar m--bg-warning" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
						</div>

						<div class="m--space-10"></div>

						<div class="progress m-progress--lg">
						  	<div class="progress-bar m--bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>

					<div class="m-separator m-separator--dashed"></div>
				
					<h3 class="m-section__heading">Custom Height</h3>
					<span class="m-section__sub">
						Set a height value on the <code>.progress-bar</code>, so if you change that value the outer <code>.progress</code> will automatically resize accordingly.
					</span>
					<div class="m-section__content">
						<div class="progress">
						  	<div class="progress-bar m--bg-info" role="progressbar" style="width: 65%; height: 1px;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						
						<div class="m--space-10"></div>

						<div class="progress">
						  	<div class="progress-bar m--bg-success" role="progressbar" style="width: 65%; height: 5px;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						
						<div class="m--space-10"></div>

						<div class="progress">
						  	<div class="progress-bar m--bg-accent" role="progressbar" style="width: 65%; height: 10px;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						
						<div class="m--space-10"></div>

						<div class="progress">
						  	<div class="progress-bar m--bg-brand" role="progressbar" style="width: 65%; height: 20px;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
				</div>
				<!--end::Section-->
			</div>
		</div>
		<!--end::Portlet-->
	</div>
	<div class="col-lg-6">
		<!--begin::Portlet-->
		<div class="m-portlet">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<h3 class="m-portlet__head-text">
							Progress States
						</h3>
					</div>
				</div>
			</div>
			<div class="m-portlet__body">
				<!--begin::Section-->
				<div class="m-section">
					<h3 class="m-section__heading">Backgrounds</h3>
					<span class="m-section__sub">
						Use state utility classes to change the appearance of individual progress bars.
					</span>
					<div class="m-section__content">
						<div class="progress">
						  	<div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<div class="m--space-10"></div>
						<div class="progress">
						  	<div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<div class="m--space-10"></div>
						<div class="progress">
						  	<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<div class="m--space-10"></div>
						<div class="progress">
						  	<div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
				</div>
				<!--end::Section-->

				<!--begin::Section-->
				<div class="m-section m-section--last">
					<h3 class="m-section__heading">Multiple bars</h3>
					<span class="m-section__sub">
						Include multiple progress bars in a progress component if you need.
					</span>
					<div class="m-section__content">
						<div class="progress">
						  	<div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
						  	<div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
						  	<div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						
						<div class="m--space-10"></div>

						<div class="progress">
						  	<div class="progress-bar" role="progressbar" style="width: 35%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
						  	<div class="progress-bar bg-warning" role="progressbar" style="width: 10%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
						  	<div class="progress-bar bg-danger" role="progressbar" style="width: 40%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
				</div>
				<!--end::Section-->
			</div>
		</div>
		<!--end::Portlet-->

		<!--begin::Portlet-->
		<div class="m-portlet">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<h3 class="m-portlet__head-text">
							Striped
						</h3>
					</div>
				</div>
			</div>
			<div class="m-portlet__body">
				<!--begin::Section-->
				<div class="m-section ">
					<span class="m-section__sub">
						Add <code>.progress-bar-striped</code> to any <code>.progress-bar</code> to apply a stripe via CSS gradient over the progress bar’s background color.
					</span>
					<div class="m-section__content">
						<div class="progress">
						  	<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<div class="m--space-10"></div>
						<div class="progress">
						  	<div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
						  		
						  	</div>
						</div>
						<div class="m--space-10"></div>
						<div class="progress">
						  <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<div class="m--space-10"></div>
						<div class="progress">
						  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<div class="m--space-10"></div>
						<div class="progress">
						  <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
				</div>
				<!--end::Section-->

				<!--begin::Section-->
				<div class="m-section m-section--last">
					<span class="m-section__sub">
						The striped gradient can also be animated. Add <code>.progress-bar-animated</code> to <code>.progress-bar</code> to animate the stripes right to left via CSS3 animations.
					</span>
					<div class="m-section__content">
						<div class="progress">
						  <div class="progress-bar progress-bar-striped progress-bar-animated " role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
						</div>
						
						<div class="m--space-10"></div>

						<div class="progress">
						  <div class="progress-bar progress-bar-striped progress-bar-animated  bg-warning" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%"></div>
						</div>

						<div class="m--space-10"></div>

						<div class="progress">
						  <div class="progress-bar progress-bar-striped progress-bar-animated  bg-success" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
						</div>
					</div>
				</div>
				<!--end::Section-->
			</div>
		</div>
		<!--end::Portlet-->
	</div>
</div>
