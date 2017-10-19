<li class="
	m-nav__item m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center m-dropdown--mobile-full-width m-dropdown--skin-<?php echo Page::getOption('layout', 'header/search/dropdown/skin');?>
	m-list-search m-list-search--skin-<?php echo Page::getOption('layout', 'header/search/skin')?>" 
	data-dropdown-toggle="click" data-dropdown-persistent="true" id="m_quicksearch" data-search-type="dropdown">

	<a href="#" class="m-nav__link m-dropdown__toggle">
		<span class="m-nav__link-icon"><i class="flaticon-search-1"></i></span>
	</a>
	<div class="m-dropdown__wrapper">					
		<span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
		<div class="m-dropdown__inner ">
			<div class="m-dropdown__header">
				<form  class="m-list-search__form">
					<div class="m-list-search__form-wrapper">
						<span class="m-list-search__form-input-wrapper">
							<input id="m_quicksearch_input" autocomplete="off" type="text" name="q" class="m-list-search__form-input" value="" placeholder="Search...">
						</span>
						<span class="m-list-search__form-icon-close" id="m_quicksearch_close">
							<i class="la la-remove"></i>
						</span>
					</div>
				</form>  
			</div>
			<div class="m-dropdown__body">
				<div class="m-dropdown__scrollable m-scrollable" data-scrollable="true" data-max-height="300" data-mobile-max-height="200">
					<div class="m-dropdown__content">
					</div>
				</div>
			</div>
		</div>
	</div>
</li>