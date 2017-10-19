<div class="row">
    <div class="col-lg-6">
        <!--begin::Portlet-->
        <div class="m-portlet">
        	<div class="m-portlet__head">
        		<div class="m-portlet__head-caption">
        			<div class="m-portlet__head-title">
        				<h3 class="m-portlet__head-text">
        					Basic Examples
        				</h3>
        			</div>
        		</div>
        	</div>
        	<div class="m-portlet__body">
        		<!--begin::Section-->
                <div class="m-section">
                    <h3 class="m-section__heading">
                        Basic Usage
                    </h3>
                    <span class="m-section__sub">
                        Click below button to toggle popover:
                    </span>
                    <div class="m-section__content">
                        <button type="button" class="btn btn-danger" data-toggle="m-popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Click me</button>
                    </div>                    
                </div>
                <!--end::Section-->

                <div class="m-separator m-separator--dashed"></div>

                <!--begin::Section-->
                <div class="m-section">
                    <h3 class="m-section__heading">
                        Directions
                    </h3>
                    <span class="m-section__sub">
                        Four direction options are available: top, right, bottom, and left aligned:
                    </span>
                    <div class="m-section__content m-demo-buttons">
                       <button type="button" class="btn btn-brand" data-container="body" data-toggle="m-popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                          Popover on top
                        </button>

                        <button type="button" class="btn btn-primary" data-container="body" data-toggle="m-popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                          Popover on right
                        </button>

                        <button type="button" class="btn btn-warning" data-container="body" data-toggle="m-popover" data-placement="bottom" data-content="Vivamus
                        sagittis lacus vel augue laoreet rutrum faucibus.">
                          Popover on bottom
                        </button>

                        <button type="button" class="btn btn-success" data-container="body" data-toggle="m-popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                          Popover on left
                        </button>
                    </div>
                </div>
                <!--end::Section-->

                <div class="m-separator m-separator--dashed"></div>

                <!--begin::Section-->
                <div class="m-section">
                    <h3 class="m-section__heading">
                        Dismiss on next click
                    </h3>
                    <span class="m-section__sub">
                        Use the focus trigger to dismiss popovers on the next click that the user makes.
                    </span>
                    <div class="m-section__content">
                       <a tabindex="0" class="btn btn-success" role="button" data-toggle="m-popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</a>
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
                            Advanced Examples
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <!--begin::Section-->
                <div class="m-section">
                    <h3 class="m-section__heading">
                        HTML Content
                    </h3>
                    <span class="m-section__sub">
                        Insert HTML into the popover:
                    </span>
                    <div class="m-section__content">
                        <button type="button" class="btn btn-primary" data-toggle="m-popover" data-trigger="focus" title="Popover title" data-html="true" data-content="And here's some amazing <b>HTML</b> content. It's very <code>engaging</code>. Right?">Click me</button>
                    </div>                    
                </div>
                <!--end::Section-->

                <div class="m-separator m-separator--dashed"></div>

                <!--begin::Section-->
                <div class="m-section">
                    <h3 class="m-section__heading">
                        Offset
                    </h3>
                    <span class="m-section__sub">
                        Offset of the popover relative to its target. For more information refer to <a class="m-link" href="http://tether.io/#offset" target="_blank">Tether's offset docs.</a>
                    </span>
                    <div class="m-section__content">
                       <button type="button" class="btn btn-brand" data-container="body" data-trigger="focus" data-offset="20px 20px" data-toggle="m-popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                          Example 1
                        </button>
                        <button type="button" class="btn btn-success" data-container="body" data-trigger="focus" data-offset="-20px -20px" data-toggle="m-popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                          Example 2
                        </button>
                        <button type="button" class="btn btn-danger" data-container="body" data-trigger="focus" data-offset="60px 0px" data-toggle="m-popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                          Example 3
                        </button>
                    </div>
                </div>
                <!--end::Section-->

                 <!--begin::Section-->
                <div class="m-section">
                    <h3 class="m-section__heading">
                        Skin
                    </h3>
                    <span class="m-section__sub">
                        Use <code>data-skin="light"</code> or <code>data-skin="dark"</code> parameters to set popover skin. Default skin is light.
                    </span>
                    <div class="m-section__content">
                       <button type="button" class="btn btn-brand" data-trigger="focus"  data-toggle="m-popover" data-placement="top" title="Default light skin" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                          Light skin
                        </button>
                        <button type="button" class="btn btn-success" data-trigger1="focus"  data-skin="dark" data-toggle="m-popover" data-placement="top" title="Dark skin" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                          Dark skin
                        </button>
                    </div>
                </div>
                <!--end::Section-->
            </div>
        </div>
        <!--end::Portlet-->
    </div>
</div>