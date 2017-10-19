<!--begin:: Widgets/Adwords Stats-->
<div class="m-portlet m-portlet--full-height m-portlet--skin-light m-portlet--fit <?php echo Page::getGlobalPortletClass()?>">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					AdWords Stats
				</h3>
			</div>
		</div>
		<div class="m-portlet__head-tools">
			<ul class="m-portlet__nav">
				<li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover">
					<a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
					Today
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
		<div class="m-widget21" style="min-height: 420px">
			<div class="row">
				<div class="col">
					<div class="m-widget21__item m--pull-right">
						<span class="m-widget21__icon">        
							<a href="#" class="btn btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
								<i class="fa flaticon-alert-2 m--font-light"></i>
							</a> 
						</span>
						<div class="m-widget21__info">
							<span class="m-widget21__title">
							Sales
							</span><br> 
							<span class="m-widget21__sub">
							IPO, Margins, Transactions
							</span>    
						</div>
					</div>
				</div>
				<div class="col m--align-left">
					<div class="m-widget21__item m--pull-left">
						<span class="m-widget21__icon">               
							<a href="#" class="btn btn-accent m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
								<i class="fa flaticon-coins m--font-light m--font-light"></i>
							</a>  
						</span>
						<div class="m-widget21__info">
							<span class="m-widget21__title">
								Profit
							</span><br> 
							<span class="m-widget21__sub">
								Expenses, Loses, Profits
							</span>    
						</div>
					</div>
				</div>
			</div>
			<div class="m-widget21__chart m-portlet-fit--sides" style="height:310px;">
				<canvas id="m_chart_adwords_stats"></canvas>
			</div>
		</div>
	</div>
</div>
<!--end:: Widgets/Adwords Stats-->