var mQuickSidebar = function() {
    var topbarAside = $('#m_quick_sidebar');
    var topbarAsideTabs = $('#m_quick_sidebar_tabs');    
    var topbarAsideClose = $('#m_quick_sidebar_close');
    var topbarAsideToggle = $('#m_quick_sidebar_toggle');
    var topbarAsideContent = topbarAside.find('.m-quick-sidebar__content');

    var initMessages = function() {
        var init = function() {
            var messenger = $('#m_quick_sidebar_tabs_messenger');  
            var messengerMessages = messenger.find('.m-messenger__messages');

            var height = topbarAside.outerHeight(true) - 
                topbarAsideTabs.outerHeight(true) - 
                messenger.find('.m-messenger__form').outerHeight(true) - 120;
            
            // init messages scrollable content
            messengerMessages.css('height', height);
            mApp.initScroller(messengerMessages, {});
        }

        init();        
        
        // reinit on window resize
        mUtil.addResizeHandler(init);
    }

    var initSettings = function() { 
        // init dropdown tabbable content
        var init = function() {
            var settings = $('#m_quick_sidebar_tabs_settings');
            var height = mUtil.getViewPort().height - topbarAsideTabs.outerHeight(true) - 60;

            // init settings scrollable content
            settings.css('height', height);
            mApp.initScroller(settings, {});
        }

        init();

        // reinit on window resize
        mUtil.addResizeHandler(init);
    }

    var initLogs = function() {
        // init dropdown tabbable content
        var init = function() {
            var logs = $('#m_quick_sidebar_tabs_logs');
            var height = mUtil.getViewPort().height - topbarAsideTabs.outerHeight(true) - 60;

            // init settings scrollable content
            logs.css('height', height);
            mApp.initScroller(logs, {});
        }

        init();

        // reinit on window resize
        mUtil.addResizeHandler(init);
    }

    var initOffcanvasTabs = function() {
        initMessages();
        initSettings();
        initLogs();
    }

    var initOffcanvas = function() {
        topbarAside.mOffcanvas({
            class: 'm-quick-sidebar',
            //overlay: false,  
            close: topbarAsideClose,
            toggle: topbarAsideToggle
        });   

        // run once on first time dropdown shown
        topbarAside.mOffcanvas().one('afterShow', function() {
            mApp.block(topbarAside);

            setTimeout(function() {
                mApp.unblock(topbarAside);
                
                topbarAsideContent.removeClass('m--hide');

                initOffcanvasTabs();
            }, 1000);                         
        });
    }

    return {     
        init: function() {  
            initOffcanvas(); 
        }
    };
}();

$(document).ready(function() {
    mQuickSidebar.init();
});