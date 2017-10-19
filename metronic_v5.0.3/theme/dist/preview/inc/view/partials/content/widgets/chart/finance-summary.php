<!--begin:: Widgets/Finance Summary-->
<div class="m-portlet m-portlet--full-height m-portlet--fit <?php echo Page::getGlobalPortletClass()?>">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Finance Summary
				</h3>
			</div>
		</div>
		<div class="m-portlet__head-tools">
			<ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
				<li class="nav-item m-tabs__item">
					<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget4_tab1_content" role="tab">
					Month
					</a>
				</li>
				<li class="nav-item m-tabs__item">
					<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab2_content" role="tab">
					All Time
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="m-portlet__body">
		<div class="tab-content">
			<div class="tab-pane active">
				<div class="m-widget12 m-widget12--chart-bottom m--margin-top-10" style="min-height: 450px">
					<div class="m-widget12__item">					 	 
						<span class="m-widget12__text1">Annual Companies Taxes EMS<br><span>$500,000</span></span> 			 		 
						<span class="m-widget12__text2">Next Tax Review Date<br><span>July 24,2017</span></span> 		 	 
					</div>
					<div class="m-widget12__item">
						<span class="m-widget12__text1">Avarage Product Price<br><span>$60,70</span></span> 			 		 
						<div class="m-widget12__text2">
							<div class="m-widget12__desc">Satisfication Rate</div>
							<br>
							<div class="m-widget12__progress">
								<div class="m-widget12__progress-sm progress m-progress--sm">
									<div class="m-widget12__progress-bar progress-bar bg-brand" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<span class="m-widget12__stats">
								63%
								</span>
							</div>
						</div>	
					</div>
					<div class="m-widget12__chart m-portlet-fit--sides" style="height:290px;">
						<canvas id="m_chart_finance_summary"></canvas>
					</div>
				</div>
			</div>	
			<div class="tab-pane">

			</div>
		</div>		 
	</div>
</div>
<!--end:: Widgets/Finance Summary-->