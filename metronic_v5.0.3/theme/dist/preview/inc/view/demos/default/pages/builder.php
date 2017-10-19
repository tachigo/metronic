<?php Page::getGlobalPartialView('content/general/builder-notice');?>

<?php $tabId = Page::getBuilderTabSession( '#m_builder_page' ); ?>

<!--begin::Portlet-->
<div class="m-portlet m-portlet--tabs">
	<div class="m-portlet__head">
		<div class="m-portlet__head-tools">
			<ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
				<li class="nav-item m-tabs__item">
					<a class="nav-link m-tabs__link <?php Page::classValue( $tabId, '#m_builder_page' ); ?>" data-toggle="tab" href="#m_builder_page" role="tab">
						Page
					</a>
				</li>
				<li class="nav-item m-tabs__item">
					<a class="nav-link m-tabs__link <?php Page::classValue( $tabId, '#m_builder_header' ) ?>" data-toggle="tab" href="#m_builder_header" role="tab">
						Header
					</a>
				</li>
				<li class="nav-item m-tabs__item">
					<a class="nav-link m-tabs__link <?php Page::classValue( $tabId, '#m_builder_left_aside' ) ?>" data-toggle="tab" href="#m_builder_left_aside" role="tab">
						Left Aside
					</a>
				</li>
				<li class="nav-item m-tabs__item">
					<a class="nav-link m-tabs__link <?php Page::classValue( $tabId, '#m_builder_right_aside' ) ?>" data-toggle="tab" href="#m_builder_right_aside" role="tab">
						Right Aside
					</a>
				</li>
				<li class="nav-item m-tabs__item">
					<a class="nav-link m-tabs__link <?php Page::classValue( $tabId, '#m_builder_footer' ) ?>" data-toggle="tab" href="#m_builder_footer" role="tab">
						Footer
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!--begin::Form-->
	<form class="m-form m-form--label-align-right m-form--fit" action="" method="POST">
		<div class="m-portlet__body">
			<div class="tab-content">
				<div class="tab-pane <?php Page::classValue( $tabId, '#m_builder_page' ); ?>" id="m_builder_page">
					<div class="form-group m-form__group row">
						<label class="col-lg-4 col-form-label">Layout Type:</label>
						<div class="col-lg-8 col-xl-4">
							<select class="form-control" name="builder[layout][self][layout]">
								<option value="fluid" <?php Util::echoIf(Page::getOption('layout', 'self/layout') == 'fluid', 'selected');?> >Fluid</option>
								<option value="boxed" <?php Util::echoIf(Page::getOption('layout', 'self/layout') == 'boxed', 'selected');?> >Boxed</option>
							</select>
							<span class="m-form__help">Select page layout type</span>
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-lg-4 col-form-label">Page Loader:</label>
						<div class="col-lg-8 col-xl-4">
							<select class="form-control" name="builder[layout][loader][type]">
								<option value="" <?php Util::echoIf(Page::hasOption('layout', 'loader/type') == false, 'selected');?> >Disabled</option>
								<option value="default" <?php Util::echoIf(Page::getOption('layout', 'loader/type') == 'default', 'selected');?> >Default</option>
								<option value="spinner-message" <?php Util::echoIf(Page::getOption('layout', 'loader/type') == 'spinner-message', 'selected');?> >Spinner Message</option>
							</select>
							<div class="m-form__help">Select page loading indicator</div>
						</div>
					</div>
					<div class="m-form__group form-group row">
						<label class="col-lg-4 col-form-label">Content Skin:</label>
						<div class="col-lg-8 col-xl-4">
							<select class="form-control" name="builder[layout][content][skin]">
								<option value="light" <?php Util::echoIf(Page::getOption('layout', 'content/skin') == 'light', 'selected');?>>White</option>
								<option value="light2" <?php Util::echoIf(Page::getOption('layout', 'content/skin') == 'light2', 'selected');?> >Light Grey</option>
							</select>
							<span class="m-form__help">Please select content skin</span>
						</div>
					</div>
				</div>
				<div class="tab-pane <?php Page::classValue( $tabId, '#m_builder_header' ) ?>" id="m_builder_header">
					<div class="form-group m-form__group row">
						<label class="col-lg-4 col-form-label">Desktop Fixed Header:</label>
						<div class="col-lg-8 col-xl-4">
							<span class="m-switch m-switch--icon-check">
								<label>
									<input type="hidden" name="builder[layout][header][self][fixed][desktop]" value="false">
							        <input type="checkbox" name="builder[layout][header][self][fixed][desktop]" value="true" <?php Util::echoIf(Page::getOption('layout', 'header/self/fixed/desktop'), 'checked');?> />
							        <span></span>
							    </label>
							</span>
							<div class="m-form__help">Enable fixed header for desktop mode</div>
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-lg-4 col-form-label">Desktop Minimize Mode:</label>
						<div class="col-lg-8 col-xl-4">
							<select class="form-control" name="builder[layout][header][self][fixed][minimize][desktop]">
								<option value="false" <?php Util::echoIf(Page::getOption('layout', 'header/self/fixed/minimize/desktop') == false, 'selected');?> >None</option>
								<option value="hide" <?php Util::echoIf(Page::getOption('layout', 'header/self/fixed/minimize/desktop') == 'hide', 'selected');?> >Hide</option>
							</select>
							<div class="m-form__help">Set fixed header minimize mode on scroll for desktop mode</div>
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-lg-4 col-form-label">Mobile Fixed Header:</label>
						<div class="col-lg-8 col-xl-4">
							<input type="hidden" name="builder[layout][header][self][fixed][mobile]" value="false">
							<span class="m-switch m-switch--icon-check">
								<label>
									<input type="checkbox" name="builder[layout][header][self][fixed][mobile]" value="true" <?php Util::echoIf(Page::getOption('layout', 'header/self/fixed/mobile'), 'checked');?> />
							        <span></span>
							    </label>
							</span>
							<div class="m-form__help">Enable fixed header for mobile mode</div>
						</div>
					</div>
					<div class="form-group m-form__group row m--hide">
						<label class="col-lg-4 col-form-label">Mobile Minimize Mode:</label>
						<div class="col-lg-8 col-xl-4">
							<select class="form-control" name="builder[layout][header][self][fixed][minimize][mobile]">
								<option value="false" <?php Util::echoIf(Page::getOption('layout', 'header/self/fixed/minimize/mobile') == false, 'selected');?> >None</option>
								<option value="hide" <?php Util::echoIf(Page::getOption('layout', 'header/self/fixed/minimize/mobile') == 'hide', 'selected');?> >Hide</option>
							</select>
							<div class="m-form__help">Set fixed header minimize mode on scroll for mobile mode</div>
						</div>
					</div>


					<div class="m-separator m-separator--dashed"></div>

					<div class="form-group m-form__group row">
						<label class="col-lg-4 col-form-label">Display Header Menu:</label>
						<div class="col-lg-8 col-xl-4">
							<input type="hidden" name="builder[layout][menu][header_desktop][display]" value="false">
							<span class="m-switch m-switch--icon-check">
								<label>
									<input type="checkbox" name="builder[layout][menu][header_desktop][display]" value="true" <?php Util::echoIf(Page::getOption('layout', 'menu/header_desktop/display'), 'checked');?> />
							        <span></span>
							    </label>
							</span>
							<div class="m-form__help">Display header menu</div>
						</div>
					</div>
					<div class="m-form__group form-group row">
						<label class="col-lg-4 col-form-label">Dropdown Skin(Desktop):</label>
						<div class="col-lg-8 col-xl-4">
							<select class="form-control" name="builder[layout][menu][header_desktop][submenu][skin]">
								<option value="light" <?php Util::echoIf(Page::getOption('layout', 'menu/header_desktop/submenu/skin') == 'light', 'selected');?> >Light</option>
								<option value="dark" <?php Util::echoIf(Page::getOption('layout', 'menu/header_desktop/submenu/skin') == 'dark', 'selected');?> >Dark</option>
							</select>
							<span class="m-form__help">Please select header menu dropdown skin</span>
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-lg-4 col-form-label">Display Submenu Arrow(Desktop):</label>
						<div class="col-lg-8 col-xl-4">
							<input type="hidden" name="builder[layout][menu][header_desktop][arrow]" value="false">
							<span class="m-switch m-switch--icon-check">
								<label>
									<input type="checkbox" name="builder[layout][menu][header_desktop][arrow]" value="true" <?php Util::echoIf(Page::getOption('layout', 'menu/header_desktop/arrow'), 'checked');?>/>
							        <span></span>
							    </label>
							</span>
							<div class="m-form__help">Display header menu dropdown arrows on desktop mode</div>
						</div>
					</div>

					<div class="m-separator m-separator--dashed"></div>

					<div class="m-form__group form-group row">
						<label class="col-lg-4 col-form-label">Search Type:</label>
						<div class="col-lg-8 col-xl-4">
							<select class="form-control" name="builder[layout][header][search][type]">
								<option value="search-default" <?php Util::echoIf(Page::getOption('layout', 'header/search/type') == 'search-default', 'selected');?> >Expandable Search</option>
								<option value="search-dropdown" <?php Util::echoIf(Page::getOption('layout', 'header/search/type') == 'search-dropdown', 'selected');?> >Dropdown Search</option>
							</select>
							<span class="m-form__help">Please header search type</span>
						</div>
					</div>
					<div class="m-form__group form-group row">
						<label class="col-lg-4 col-form-label">Dropdown Skin:</label>
						<div class="col-lg-8 col-xl-4">
							<select class="form-control" name="builder[layout][header][search][dropdown][skin]">
								<option value="light" <?php Util::echoIf(Page::getOption('layout', 'header/search/dropdown/skin') == 'light', 'selected');?> >Light</option>
								<option value="dark" <?php Util::echoIf(Page::getOption('layout', 'header/search/dropdown/skin') == 'dark', 'selected');?> >Dark</option>
							</select>
							<span class="m-form__help">Please select search results dropdown skin for dropdown search type</span>
						</div>
					</div>
				</div>
				<div class="tab-pane <?php Page::classValue( $tabId, '#m_builder_left_aside' ) ?>" id="m_builder_left_aside">
					<div class="form-group m-form__group row m--hide">
						<label class="col-lg-4 col-form-label">Display Aside:</label>
						<div class="col-lg-8 col-xl-4">
							<input type="hidden" name="builder[layout][aside][left][display]" value="false">
							<span class="m-switch m-switch--icon-check">
								<label>
									<input type="checkbox" name="builder[layout][aside][left][display]" value="true" <?php Util::echoIf(Page::getOption('layout', 'aside/left/display'), 'checked');?> />
							        <span></span>
							    </label>
							</span>
							<div class="m-form__help">Display left aside</div>
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-lg-4 col-form-label">Aside Skin:</label>
						<div class="col-lg-8 col-xl-4">
							<select class="form-control" name="builder[layout][aside][left][skin]">
								<option value="dark" <?php Util::echoIf(Page::getOption('layout', 'aside/left/skin') == 'dark', 'selected');?>>Dark</option>
								<option value="light" <?php Util::echoIf(Page::getOption('layout', 'aside/left/skin') == 'light', 'selected');?> >Light</option>
							</select>
							<div class="m-form__help">Set left aside skin</div>
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-lg-4 col-form-label">Fixed Aside:</label>
						<div class="col-lg-8 col-xl-4">
							<input type="hidden" name="builder[layout][aside][left][fixed]" value="false">
							<span class="m-switch m-switch--icon-check">
								<label>
									<input type="checkbox" name="builder[layout][aside][left][fixed]" value="true" <?php Util::echoIf(Page::getOption('layout', 'aside/left/fixed'), 'checked');?> />
							        <span></span>
							    </label>
							</span>
							<div class="m-form__help">Set fixed aside layout</div>
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-lg-4 col-form-label">Allow Aside Minimizing:</label>
						<div class="col-lg-8 col-xl-4">
							<input type="hidden" name="builder[layout][aside][left][minimize][toggle]" value="false">
							<span class="m-switch m-switch--icon-check">
								<label>
									<input type="checkbox" name="builder[layout][aside][left][minimize][toggle]" value="true" <?php Util::echoIf(Page::getOption('layout', 'aside/left/minimize/toggle'), 'checked');?> />
							        <span></span>
							    </label>
							</span>
							<div class="m-form__help">Allow aside minimizing</div>
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-lg-4 col-form-label">Dafault Minimized Aside:</label>
						<div class="col-lg-8 col-xl-4">
							<input type="hidden" name="builder[layout][aside][left][minimize][default]" value="false">
							<span class="m-switch m-switch--icon-check">
								<label>
									<input type="checkbox" name="builder[layout][aside][left][minimize][default]" value="true" <?php Util::echoIf(Page::getOption('layout', 'aside/left/minimize/default'), 'checked');?> />
							        <span></span>
							    </label>
							</span>
							<div class="m-form__help">Set aside minimized by default</div>
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-lg-4 col-form-label">Allow Aside Hiding:</label>
						<div class="col-lg-8 col-xl-4">
							<span class="m-switch m-switch--icon-check">
								<input type="hidden" name="builder[layout][aside][left][hide][toggle]" value="false">
							    <label>
									<input type="checkbox" name="builder[layout][aside][left][hide][toggle]" value="true" <?php Util::echoIf(Page::getOption('layout', 'aside/left/hide/toggle'), 'checked');?> />
							        <span></span>
							    </label>
							</span>
							<div class="m-form__help">Allow aside hiding</div>
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-lg-4 col-form-label">Dafault Hidden Aside:</label>
						<div class="col-lg-8 col-xl-4">
							<span class="m-switch m-switch--icon-check">
								<input type="hidden" name="builder[layout][aside][left][hide][default]" value="false">
							    <label>	
									<input type="checkbox" name="builder[layout][aside][left][hide][default]" value="true" <?php Util::echoIf(Page::getOption('layout', 'aside/left/hide/default'), 'checked');?> />
							        <span></span>
							    </label>
							</span>
							<div class="m-form__help">Set aside hidden by default</div>
						</div>
					</div>

					<div class="m-separator m-separator--dashed"></div>

					<div class="form-group m-form__group row">
						<label class="col-lg-4 col-form-label">Submenu Toggle:</label>
						<div class="col-lg-8 col-xl-4">
							<select class="form-control" name="builder[layout][menu][aside][dropdown]">
								<option value="true" <?php Util::echoIf(Page::getOption('layout', 'menu/aside/dropdown') == true, 'selected');?> >Dropdown</option>
								<option value="false" <?php Util::echoIf(Page::getOption('layout', 'menu/aside/dropdown') == false, 'selected');?> >Accordion</option>
							</select>
							<div class="m-form__help">Select submenu toggle mode</div>
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-lg-4 col-form-label">Dropdown Submenu Skin:</label>
						<div class="col-lg-8 col-xl-4">
							<select class="form-control" name="builder[layout][menu][aside][submenu][skin]">
								<option value="inherit" <?php Util::echoIf(Page::getOption('layout', 'menu/aside/submenu/skin') == 'inherit', 'selected');?> >Inherit</option>
								<option value="dark" <?php Util::echoIf(Page::getOption('layout', 'menu/aside/submenu/skin') == 'dark', 'selected');?> >Dark</option>
								<option value="light" <?php Util::echoIf(Page::getOption('layout', 'menu/aside/submenu/skin') == 'light', 'selected');?> >Light</option>
							</select>
							<div class="m-form__help">Select submenu skin. If <code>Inherit</code> is selected it will use the left aside's skin.</div>
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-lg-4 col-form-label">Dropdown Submenu Arrow:</label>
						<div class="col-lg-8 col-xl-4">
							<span class="m-switch m-switch--icon-check">
								<input type="hidden" name="builder[layout][menu][aside][submenu][dropdown][arrow]" value="false">
							    <label>	
									<input type="checkbox" name="builder[layout][menu][aside][submenu][dropdown][arrow]" value="true" <?php Util::echoIf(Page::getOption('layout', 'menu/aside/submenu/dropdown/arrow'), 'checked');?> />
							        <span></span>
							    </label>
							</span>
							<div class="m-form__help">Enable dropdown submenu arrow</div>
						</div>
					</div>
				</div>
				<div class="tab-pane <?php Page::classValue( $tabId, '#m_builder_right_aside' ) ?>" id="m_builder_right_aside">
					<div class="form-group m-form__group row">
						<label class="col-lg-4 col-form-label">Display Right Aside:</label>
						<div class="col-lg-8 col-xl-4">
							<span class="m-switch m-switch--icon-check">
								<input type="hidden" name="builder[layout][aside][right][display]" value="false">
							    <label>
									<input type="checkbox" name="builder[layout][aside][right][display]" value="true" <?php Util::echoIf(Page::getOption('layout', 'aside/right/display'), 'checked');?> />
							        <span></span>
							    </label>
							</span>
							<div class="m-form__help">Display right aside</div>
						</div>
					</div>
				</div>
				<div class="tab-pane <?php Page::classValue( $tabId, '#m_builder_footer' ) ?>" id="m_builder_footer">
					<div class="form-group m-form__group row">
						<label class="col-lg-4 col-form-label">Fixed Footer:</label>
						<div class="col-lg-8 col-xl-4">
							<span class="m-switch m-switch--icon-check">
								<input type="hidden" name="builder[layout][footer][fixed]" value="false">
							    <label>
									<input type="checkbox" name="builder[layout][footer][fixed]" value="true" <?php Util::echoIf(Page::getOption('layout', 'footer/fixed'), 'checked');?> />
							        <span></span>
							    </label>
							</span>
							<div class="m-form__help">Set fixed header</div>
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-lg-4 col-form-label">Push Footer:</label>
						<div class="col-lg-8 col-xl-4">
							<input type="hidden" name="builder[layout][aside][left][push_footer]" value="false">
							<span class="m-switch m-switch--icon-check">
								<label>
									<input type="checkbox" name="builder[layout][aside][left][push_footer]" value="true" <?php Util::echoIf(Page::getOption('layout', 'aside/left/push_footer'), 'checked');?> />
							        <span></span>
							    </label>
							</span>
							<div class="m-form__help">Push footer to the right</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="m-portlet__foot m-portlet__foot--fit">
			<div class="m-form__actions">
				<div class="row">
					<div class="col-lg-4"></div>
					<div class="col-lg-8 ">
						<button type="submit" name="builder_submit" data-demo="<?php echo Page::$demo ?>" class="btn btn-primary m-btn m-btn--icon m-btn--wide m-btn--air m-btn--custom">
							<span>
								<i class="la la-eye"></i>
								<span>Preview</span>
							</span>
						</button>
						<?php if (Page::getOption( 'main', 'request/release' ) !== 'preview'): ?>
						<div class="dropdown m-dropdown--inline dropup">
							<button type="submit" id="builder_export" class="dropdown-toggle1 btn btn-accent m-btn m-btn--icon m-btn--wide m-btn--air m-btn--custom" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								<span>
									<i class="la la-cog"></i>
									<span>Export</span>
									<i class="la la-angle-down m-dropdown__arrow"></i>
								</span>
							</button>
						  	<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						    	<a class="dropdown-item" id="builder_export_html" data-demo="<?php echo Page::$demo ?>" href="#"><i class="la la-download"></i> Export as HTML Layout Package</a>
						    	<a class="dropdown-item" id="builder_export_angular" data-demo="<?php echo Page::$demo ?>" href="#"><i class="la la-cog"></i> Generate Angular Version</a>
						    	<a class="dropdown-item" id="builder_export_html_static" data-demo="<?php echo Page::$demo ?>" href="#"><i class="la la-cog"></i> Generate Static HTML Version</a>
						  	</div>
						</div>
						<?php endif; ?>
						<button type="submit" name="builder_reset" data-demo="<?php echo Page::$demo ?>" class="btn btn-secondary m-btn m-btn--icon m-btn--wide m-btn--air m-btn--custom">
							<span>
								<i class="la la-recycle"></i>
								<span>Reset</span>
							</span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<!--end::Form-->
</div>
<!--end::Portlet-->