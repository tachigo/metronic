<!--begin:: Widgets/Top Products-->
<div class="m-portlet m-portlet--full-height m-portlet--fit <?php echo Page::getGlobalPortletClass()?>">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Top Products
				</h3>
			</div>
		</div>
		<div class="m-portlet__head-tools">
			<ul class="m-portlet__nav">
				<li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
					<a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
					All
					</a>
					<div class="m-dropdown__wrapper">
						<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 36.5px;"></span>
						<div class="m-dropdown__inner">
							<div class="m-dropdown__body">
								<div class="m-dropdown__content">
									<ul class="m-nav">
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
		<!--begin::Widget5-->
		<div class="m-widget4 m-widget4--chart-bottom" style="min-height: 480px">
			<div class="m-widget4__item">
				<div class="m-widget4__img m-widget4__img--logo">							 
					<img src="<?php echo Page::getMediaImgPath();?>client-logos/logo3.png" alt="">	
				</div>
				<div class="m-widget4__info">
					<span class="m-widget4__title">
					Phyton  
					</span><br> 
					<span class="m-widget4__sub">
					A Programming Language
					</span>		 
				</div>
				<span class="m-widget4__ext">
					<span class="m-widget4__number m--font-brand">+$17</span>
				</span>	
			</div>
			<div class="m-widget4__item">
				<div class="m-widget4__img m-widget4__img--logo">	
					<img src="<?php echo Page::getMediaImgPath();?>client-logos/logo1.png" alt="">					 
				</div>
				<div class="m-widget4__info">
					<span class="m-widget4__title">
					FlyThemes  
					</span><br> 
					<span class="m-widget4__sub">
					A Let's Fly Fast Again Language
					</span>		 
				</div>
				<span class="m-widget4__ext">
					<span class="m-widget4__number m--font-brand">+$300</span>
				</span>	
			</div>		
			<div class="m-widget4__item">
				<div class="m-widget4__img m-widget4__img--logo">									 
					<img src="<?php echo Page::getMediaImgPath();?>client-logos/logo4.png" alt="">	
				</div>
				<div class="m-widget4__info">
					<span class="m-widget4__title">
					Starbucks  
					</span><br> 
					<span class="m-widget4__sub">
					Good Coffee & Snacks
					</span>		 
				</div>
				<span class="m-widget4__ext">
					<span class="m-widget4__number m--font-brand">+$300</span>
				</span>	
			</div>		
			<div class="m-widget4__chart m-portlet-fit--sides m--margin-top-20" style="height:260px;">
				<canvas id="m_chart_trends_stats_2"></canvas>
			</div>
		</div>
		<!--end::Widget 5-->				 
	</div>
</div>
<!--end:: Widgets/Top Products-->