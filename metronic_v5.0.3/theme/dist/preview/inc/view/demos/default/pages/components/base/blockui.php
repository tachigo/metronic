<div class="row">
    <div class="col-xl-6">
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
                    <span class="m-section__sub">
                        Click below buttons to block below content area:
                    </span>
                    <div class="m-section__content">

                        <p style="padding: 20px; margin: 10px 0 30px 0; border: 4px solid #efefef" id="m_blockui_1_content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inceptos imperdiet magna! Sed fusce fames tempus litora venenatis ad: Ac aliquet leo hendrerit taciti viverra? Nisl suscipit potenti accumsan quis ipsum purus cursus. Suspendisse ultrices morbi in purus lectus dictum porta; Commodo penatibus nec.
                        </p>

                        <button type="button" class="btn btn-success" id="m_blockui_1_1">Default</button>
                        <button type="button" class="btn btn-brand" id="m_blockui_1_2">Overlay color</button>
                        <button type="button" class="btn btn-primary" id="m_blockui_1_3">Custom spinner</button>
                        <button type="button" class="btn btn-info" id="m_blockui_1_4">Custom text 1</button>
                        <button type="button" class="btn btn-danger" id="m_blockui_1_5">Custom text 2</button>
                    </div>                    
                </div>
                <!--end::Section-->

                <div class="m-separator m-separator--dashed"></div>
        	</div>
        </div>
        <!--end::Portlet-->

        <!--begin::Portlet-->
        <div class="m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Modal Blocking
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <!--begin::Section-->
                <div class="m-section">
                    <span class="m-section__sub">
                        Click below buttons to block modal content:
                    </span>
                    <div class="m-section__content">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#m_blockui_4_1_modal">Default</button>
                        <button type="button" class="btn btn-brand" data-toggle="modal" data-target="#m_blockui_4_2_modal">Overlay color</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m_blockui_4_3_modal">Custom spinner</button>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#m_blockui_4_4_modal">Custom text 1</button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#m_blockui_4_5_modal">Custom text 2</button>
                    </div>                    
                </div>
                <!--end::Section-->

                <div class="m-separator m-separator--dashed"></div>
            </div>
        </div>
        <!--end::Portlet-->
    </div>
    <div class="col-xl-6">
        <!--begin::Portlet-->
        <div class="m-portlet" id="m_blockui_2_portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Portlet Blocking
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <!--begin::Section-->
                <div class="m-section">
                    <span class="m-section__sub">
                        Click below buttons to block this portlet:
                    </span>
                    <div class="m-section__content">
                        <button type="button" class="btn btn-success" id="m_blockui_2_1">Default</button>
                        <button type="button" class="btn btn-brand" id="m_blockui_2_2">Overlay color</button>
                        <button type="button" class="btn btn-primary" id="m_blockui_2_3">Custom spinner</button>
                        <button type="button" class="btn btn-info" id="m_blockui_2_4">Custom text 1</button>
                        <button type="button" class="btn btn-danger" id="m_blockui_2_5">Custom text 2</button>
                    </div>                    
                </div>
                <!--end::Section-->

                <div class="m-separator m-separator--dashed"></div>
            </div>
        </div>
        <!--end::Portlet-->

        <!--begin::Portlet-->
        <div class="m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Page Blocking
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <!--begin::Section-->
                <div class="m-section">
                    <span class="m-section__sub">
                        Click below buttons to block current page:
                    </span>
                    <div class="m-section__content">
                        <button type="button" class="btn btn-success" id="m_blockui_3_1">Default</button>
                        <button type="button" class="btn btn-brand" id="m_blockui_3_2">Overlay color</button>
                        <button type="button" class="btn btn-primary" id="m_blockui_3_3">Custom spinner</button>
                        <button type="button" class="btn btn-info" id="m_blockui_3_4">Custom text 1</button>
                        <button type="button" class="btn btn-danger" id="m_blockui_3_5">Custom text 2</button>
                    </div>                    
                </div>
                <!--end::Section-->

                <div class="m-separator m-separator--dashed"></div>
            </div>
        </div>
        <!--end::Portlet-->
    </div>
</div>

<!--begin::Modal-->
<div class="modal fade" id="m_blockui_4_1_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="form-control-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"  >Close</button>
        <button type="button" class="btn btn-primary" id="m_blockui_4_1">Block modal</button>
      </div>
    </div>
  </div>
</div>
<!--end::Modal-->

<!--begin::Modal-->
<div class="modal fade" id="m_blockui_4_2_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="form-control-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="m_blockui_4_2">Block modal</button>
      </div>
    </div>
  </div>
</div>
<!--end::Modal-->

<!--begin::Modal-->
<div class="modal fade" id="m_blockui_4_3_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="form-control-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="m_blockui_4_3">Block modal</button>
      </div>
    </div>
  </div>
</div>
<!--end::Modal-->

<!--begin::Modal-->
<div class="modal fade" id="m_blockui_4_4_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="form-control-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="m_blockui_4_4">Block modal</button>
      </div>
    </div>
  </div>
</div>
<!--end::Modal-->

<!--begin::Modal-->
<div class="modal fade" id="m_blockui_4_5_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="form-control-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="m_blockui_4_5">Block modal</button>
      </div>
    </div>
  </div>
</div>
<!--end::Modal-->