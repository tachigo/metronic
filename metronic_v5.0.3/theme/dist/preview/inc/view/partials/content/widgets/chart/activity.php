<!--begin:: Widgets/Activity-->
<div class="m-portlet m-portlet--bordered-semi m-portlet--widget-fit m-portlet--full-height m-portlet--skin-light <?php echo Page::getGlobalPortletClass()?>">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text m--font-light">
					Activity
				</h3>
			</div>
		</div>
		<div class="m-portlet__head-tools">
			<ul class="m-portlet__nav">
				<li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover">
					<a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl">
						<i class="fa fa-genderless m--font-light"></i>
					</a>
					<div class="m-dropdown__wrapper">
						<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
						<div class="m-dropdown__inner">
							<div class="m-dropdown__body">
								<div class="m-dropdown__content">
									<ul class="m-nav">
										<li class="m-nav__section m-nav__section--first">
											<span class="m-nav__section-text">Quick Actions</span>
										</li>
										<li class="m-nav__item">
											<a href="" class="m-nav__link">
											<i class="m-nav__link-icon flaticon-share"></i>
											<span class="m-nav__link-text">Activity</span>
											</a>
										</li>
										<li class="m-nav__item">
											<a href="" class="m-nav__link">
											<i class="m-nav__link-icon flaticon-chat-1"></i>
											<span class="m-nav__link-text">Messages</span>
											</a>
										</li>
										<li class="m-nav__item">
											<a href="" class="m-nav__link">
											<i class="m-nav__link-icon flaticon-info"></i>
											<span class="m-nav__link-text">FAQ</span>
											</a>
										</li>
										<li class="m-nav__item">
											<a href="" class="m-nav__link">
											<i class="m-nav__link-icon flaticon-lifebuoy"></i>
											<span class="m-nav__link-text">Support</span>
											</a>
										</li>
										<li class="m-nav__separator m-nav__separator--fit">
										</li>
										<li class="m-nav__item">
											<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Cancel</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="m-portlet__body">
		<div class="m-widget17">
			<div class="m-widget17__visual m-widget17__visual--chart m-portlet-fit--top m-portlet-fit--sides m--bg-danger">
				<div class="m-widget17__chart" style="height:320px;">
					<canvas id="m_chart_activities"></canvas>
				</div>
			</div>
			<div class="m-widget17__stats">
				<div class="m-widget17__items m-widget17__items-col1">
					<div class="m-widget17__item">
						<span class="m-widget17__icon">
							<i class="flaticon-truck m--font-brand"></i>             
						</span> 
						<span class="m-widget17__subtitle">
							Delivered
						</span> 
						<span class="m-widget17__desc">
							15 New Paskages
						</span>  
					</div>
					<div class="m-widget17__item">
						<span class="m-widget17__icon">
							<i class="flaticon-paper-plane m--font-info"></i>             
						</span>  
						<span class="m-widget17__subtitle">
							Reporeted
						</span> 
						<span class="m-widget17__desc">
							72 Support Cases
						</span>  
					</div>
				</div>
				<div class="m-widget17__items m-widget17__items-col2">			     
					<div class="m-widget17__item">
						<span class="m-widget17__icon">
							<i class="flaticon-pie-chart m--font-success"></i>
						</span>  
						<span class="m-widget17__subtitle">
							Ordered
						</span> 
						<span class="m-widget17__desc">
							72 New Items
						</span>  
					</div>
					<div class="m-widget17__item">
						<span class="m-widget17__icon">
							<i class="flaticon-time m--font-danger"></i>
						</span>  
						<span class="m-widget17__subtitle">
							Arrived
						</span> 
						<span class="m-widget17__desc">
							34 Upgraded Boxes
						</span>  
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--end:: Widgets/Activity-->
