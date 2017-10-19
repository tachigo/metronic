<div class="alert alert-brand m-alert m-alert--icon m-alert--air m-alert--square m--margin-bottom-30" role="alert">
    <div class="m-alert__icon">
        <i class="flaticon-exclamation-1"></i>
    </div>
    <div class="m-alert__text">
    	jQuery Idle Timer fires a custom event when the user is "idle". To learn more please check out 
        <a href="https://github.com/thorst/jquery-idletimer" class="m-link m-link--warning m--font-bold" target="_blank">
        the plugin's official homepage 
        </a>
    </div>         
</div>

<!--begin::Portlet-->
<div class="m-portlet m-portlet--tab">
    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <span class="m-portlet__head-icon m--hide">
                    <i class="la la-gear"></i>
                </span>
                <h3 class="m-portlet__head-text">
                    jQuery Idle Timer
                </h3>
            </div>
        </div>
    </div>
    <div class="m-portlet__body">
        The idle timer is built on jQuery and provides two events: <code>idle.idleTimer</code> and <code>active.idleTimer</code>, 
        which fire when the user's idle state has changed.
        When you move your mouse over the page or start typing, you're considered <code>active</code>.
        On this page we have two idle timers. One for the entire document. Another for the text area on the right (or bottom if your on mobile).
    </div>
</div>
<!--end::Portlet-->

<div class="row">
    <div class="col-lg-6">
        <!--begin::Portlet-->
        <div class="m-portlet m-portlet--tab">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <span class="m-portlet__head-icon m--hide">
                            <i class="la la-gear"></i>
                        </span>
                        <h3 class="m-portlet__head-text">
                            Document <small><span id="docTimeout"></span> second timeout</small>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <div class="btn-group m--margin-bottom-10">
                    <a href="javascript:;" id="btPause" class="btn btn-secondary">Pause</a>
                    <a href="javascript:;" id="btResume" class="btn btn-secondary">Resume</a>
                    <a href="javascript:;" id="btElapsed" class="btn btn-secondary">Elapsed</a>
                    <a href="javascript:;" id="btInit" class="btn btn-secondary">Init</a>
                    <a href="javascript:;" id="btDestroy" class="btn btn-secondary">Destroy</a>
                </div>
                <textarea rows="10" cols="30" id="docStatus" class="form-control"></textarea><br />
            </div>
        </div>
        <!--end::Portlet-->
    </div>
    <div class="col-lg-6">
        <!--begin::Portlet-->
        <div class="m-portlet m-portlet--tab">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <span class="m-portlet__head-icon m--hide">
                            <i class="la la-gear"></i>
                        </span>
                        <h3 class="m-portlet__head-text">
                            Element <small><span id="elTimeout"></span> second timeout</small>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <div class="btn-group m--margin-bottom-10">
                    <a href="javascript:;" id="btReset" class="btn btn-secondary">Reset</a>
                    <a href="javascript:;" id="btLastActive" class="btn btn-secondary">Last Active</a>
                    <a href="javascript:;" id="btRemaining" class="btn btn-secondary">Remaining</a>
                    <a href="javascript:;" id="btState" class="btn btn-secondary">State</a>
                </div>
                <textarea rows="10" cols="30" id="elStatus" class="form-control"></textarea><br />
            </div>
        </div>
        <!--end::Portlet-->
   	</div>
</div>
<!--end::Portlet-->