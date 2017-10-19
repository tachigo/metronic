<?php 
	//$m_portlet_class = 'm-portlet--bordered m-portlet--unair1 m-portlet--rounded1';
	$m_portlet_class = '';

	$m_profile_menu_class = 'col-xl-3 col-lg-4';
	$m_profile_content_class = 'col-xl-9 col-lg-8';

	if (Page::getOption('layout', 'self/layout') != 'fluid') {
		$m_profile_menu_class = 'col-lg-4';
		$m_profile_content_class = 'col-lg-8';
	}
?>
<div class="row">
	<div class="<?php echo $m_profile_menu_class?>">
		<div class="m-portlet m-portlet--full-height <?php echo $m_portlet_class?> <?php echo Page::getGlobalPortletClass()?>">
			<div class="m-portlet__body">
				<div class="m-card-profile">
					<div class="m-card-profile__title m--hide">
						Your Profile
					</div>
					<div class="m-card-profile__pic">
						<div class="m-card-profile__pic-wrapper">	
							<img src="<?php echo Page::getMediaImgPath();?>users/user4.jpg" alt=""/>
						</div>
					</div>
					<div class="m-card-profile__details">
						<span class="m-card-profile__name">Mark Andre</span>
						<a href="" class="m-card-profile__email m-link">mark.andre@gmail.com</a>
					</div>
				</div>	
				<ul class="m-nav m-nav--hover-bg m-portlet-fit--sides">
					<li class="m-nav__separator m-nav__separator--fit"></li>
					<li class="m-nav__section m--hide">
						<span class="m-nav__section-text">Section</span>
					</li>
					<li class="m-nav__item">
						<a href="?page=header/profile&amp;demo=default" class="m-nav__link">
							<i class="m-nav__link-icon flaticon-profile-1"></i>
							<span class="m-nav__link-title">  
								<span class="m-nav__link-wrap">      
									<span class="m-nav__link-text">My Profile</span>      
									<span class="m-nav__link-badge"><span class="m-badge m-badge--success">2</span></span>  
								</span>
							</span>
						</a>
					</li>
					<li class="m-nav__item">
						<a href="?page=header/profile&amp;demo=default" class="m-nav__link">
						<i class="m-nav__link-icon flaticon-share"></i>
							<span class="m-nav__link-text">Activity</span>
						</a>
					</li>
					<li class="m-nav__item">
						<a href="?page=header/profile&amp;demo=default" class="m-nav__link">
							<i class="m-nav__link-icon flaticon-chat-1"></i>
							<span class="m-nav__link-text">Messages</span>
						</a>
					</li>
					<li class="m-nav__item">
						<a href="?page=header/profile&amp;demo=default" class="m-nav__link">
							<i class="m-nav__link-icon flaticon-graphic-2"></i>
							<span class="m-nav__link-text">Sales</span>
						</a>
					</li>
					<li class="m-nav__item">
						<a href="?page=header/profile&amp;demo=default" class="m-nav__link">
							<i class="m-nav__link-icon flaticon-time-3"></i>
							<span class="m-nav__link-text">Events</span>
						</a>
					</li>
					<li class="m-nav__item">
						<a href="?page=header/profile&amp;demo=default" class="m-nav__link">
							<i class="m-nav__link-icon flaticon-lifebuoy"></i>
							<span class="m-nav__link-text">Support</span>
						</a>
					</li>
				</ul>

				<div class="m-portlet__body-separator"></div>

				<div class="m-widget1 m-widget1--paddingless">
					<div class="m-widget1__item">
						<div class="row m-row--no-padding align-items-center">
							<div class="col">
								<h3 class="m-widget1__title">Member Profit</h3>
								<span class="m-widget1__desc">Awerage Weekly Profit</span>
							</div>
							<div class="col m--align-right">
								<span class="m-widget1__number m--font-brand">+$17,800</span>
							</div>
						</div>
					</div>
					<div class="m-widget1__item">
						<div class="row m-row--no-padding align-items-center">
							<div class="col">
								<h3 class="m-widget1__title">Orders</h3>
								<span class="m-widget1__desc">Weekly Customer Orders</span>
							</div>
							<div class="col m--align-right">
								<span class="m-widget1__number m--font-danger">+1,800</span>
							</div>
						</div>
					</div>
					<div class="m-widget1__item">
						<div class="row m-row--no-padding align-items-center">
							<div class="col">
								<h3 class="m-widget1__title">Issue Reports</h3>
								<span class="m-widget1__desc">System bugs and issues</span>
							</div>
							<div class="col m--align-right">
								<span class="m-widget1__number m--font-success">-27,49%</span>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</div>	
	</div>
	<div class="<?php echo $m_profile_content_class?>">
		<div class="m-portlet m-portlet--full-height m-portlet--tabs <?php echo $m_portlet_class?> <?php echo Page::getGlobalPortletClass()?>">
			<div class="m-portlet__head">
				<div class="m-portlet__head-tools">
					<ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
						<li class="nav-item m-tabs__item">
							<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_user_profile_tab_1" role="tab">
								<i class="flaticon-share m--hide"></i>
								Update Profile
							</a>
						</li>
						<li class="nav-item m-tabs__item">
							<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_user_profile_tab_2" role="tab">
								Messages
							</a>
						</li>
						<li class="nav-item m-tabs__item">
							<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_user_profile_tab_3" role="tab">
								Settings
							</a>
						</li>
					</ul>
				</div>
				<div class="m-portlet__head-tools">
					<ul class="m-portlet__nav">
						<li class="m-portlet__nav-item m-portlet__nav-item--last">
							<?php Page::getGlobalPartialView('content/general/action-dropdown-2');?>
						</li>
					</ul>
				</div>
			</div>
			<div class="tab-content">
				<div class="tab-pane active" id="m_user_profile_tab_1">
					<form class="m-form m-form--fit m-form--label-align-right">
						<div class="m-portlet__body">
							<div class="form-group m-form__group m--margin-top-10 m--hide">
								<div class="alert m-alert m-alert--default" role="alert">
									The example form below demonstrates common HTML form elements that receive updated styles from Bootstrap with additional classes.
								</div>
							</div>

							<div class="form-group m-form__group row">
								<div class="col-10 ml-auto">
									<h3 class="m-form__section">1. Personal Details</h3>
								</div>
							</div>

							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-2 col-form-label">Full Name</label>
								<div class="col-7">
									<input class="form-control m-input" type="text" value="Mark Andre">
								</div>
							</div>
							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-2 col-form-label">Occupation</label>
								<div class="col-7">
									<input class="form-control m-input" type="text" value="CTO">
								</div>
							</div>
							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-2 col-form-label">Company Name</label>
								<div class="col-7">
									<input class="form-control m-input" type="text" value="Keenthemes">
									<span class="m-form__help">If you want your invoices addressed to a company. Leave blank to use your full name.</span>
								</div>
							</div>
							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-2 col-form-label">Phone No.</label>
								<div class="col-7">
									<input class="form-control m-input" type="text" value="+456669067890">
								</div>
							</div>
							
							<div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>

							<div class="form-group m-form__group row">
								<div class="col-10 ml-auto">
									<h3 class="m-form__section">2. Address</h3>
								</div>
							</div>

							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-2 col-form-label">Address</label>
								<div class="col-7">
									<input class="form-control m-input" type="text" value="L-12-20 Vertex, Cybersquare">
								</div>
							</div>
							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-2 col-form-label">City</label>
								<div class="col-7">
									<input class="form-control m-input" type="text" value="San Francisco">
								</div>
							</div>
							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-2 col-form-label">State</label>
								<div class="col-7">
									<input class="form-control m-input" type="text" value="California">
								</div>
							</div>
							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-2 col-form-label">Postcode</label>
								<div class="col-7">
									<input class="form-control m-input" type="text" value="45000">
								</div>
							</div>

							<div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>

							<div class="form-group m-form__group row">
								<div class="col-10 ml-auto">
									<h3 class="m-form__section">3. Social Links</h3>
								</div>
							</div>

							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-2 col-form-label">Linkedin</label>
								<div class="col-7">
									<input class="form-control m-input" type="text" value="www.linkedin.com/Mark.Andre">
								</div>
							</div>
							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-2 col-form-label">Facebook</label>
								<div class="col-7">
									<input class="form-control m-input" type="text" value="www.facebook.com/Mark.Andre">
								</div>
							</div>
							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-2 col-form-label">Twitter</label>
								<div class="col-7">
									<input class="form-control m-input" type="text" value="www.twitter.com/Mark.Andre">
								</div>
							</div>
							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-2 col-form-label">Instagram</label>
								<div class="col-7">
									<input class="form-control m-input" type="text" value="www.instagram.com/Mark.Andre">
								</div>
							</div>


						</div>
						<div class="m-portlet__foot m-portlet__foot--fit">
							<div class="m-form__actions">
								<div class="row">
									<div class="col-2">
									</div>
									<div class="col-7">
										<button type="reset" class="btn btn-accent m-btn m-btn--air m-btn--custom">Save changes</button>&nbsp;&nbsp;
										<button type="reset" class="btn btn-secondary m-btn m-btn--air m-btn--custom">Cancel</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="tab-pane active" id="m_user_profile_tab_2">

				</div>
			</div>
		</div>
	</div>
</div>