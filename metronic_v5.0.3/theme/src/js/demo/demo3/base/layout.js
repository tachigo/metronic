var mLayout = function() {
    var horMenu;
    var asideMenu;

    var initStickyHeader = function() {
        var header = $('.m-header');
        var options = {
            offset: {},
            minimize:{}       
        };

        if (header.data('minimize-mobile') == 'hide') {
            options.minimize.mobile = {};
            options.minimize.mobile.on = 'm-header--hide';
            options.minimize.mobile.off = 'm-header--show';
        } else {
            options.minimize.mobile = false;
        }

        if (header.data('minimize') == 'hide') {
            options.minimize.desktop = {};
            options.minimize.desktop.on = 'm-header--hide';
            options.minimize.desktop.off = 'm-header--show';
        } else {
            options.minimize.desktop = false;
        }

        if (header.data('minimize-offset')) {
            options.offset.desktop = header.data('minimize-offset');
        }

        if (header.data('minimize-mobile-offset')) {
            options.offset.mobile = header.data('minimize-mobile-offset');
        }        

        header.mHeader(options);
    }

    // handle horizontal menu
    var initHorMenu = function() { 
        // init aside left offcanvas
        $('#m_header_menu').mOffcanvas({
            class: 'm-aside-header-menu-mobile',
            overlay: true,
            close: '#m_aside_header_menu_mobile_close_btn',
            toggle: {
                target: '#m_aside_header_menu_mobile_toggle',
                state: 'm-brand__toggler--active'
            }            
        });
        
        horMenu = $('#m_header_menu').mMenu({
            // submenu modes
            submenu: {
                desktop: 'dropdown',
                tablet: 'accordion',
                mobile: 'accordion'
            },
            // resize menu on window resize
            resize: {
                desktop: function() {
                    var headerNavWidth = $('#m_header_nav').width();
                    var headerMenuWidth = $('#m_header_menu_container').width();
                    var headerTopbarWidth = $('#m_header_topbar').width();
                    var spareWidth = 20;

                    if ((headerMenuWidth + headerTopbarWidth + spareWidth) > headerNavWidth ) {
                        return false;
                    } else {
                        return true;
                    }
                }
            }    
        });
    }

    // handle vertical menu
    var initLeftAsideMenu = function() {
        var menu = $('#m_ver_menu');

        // init aside menu
        var menuOptions = {  
            // submenu setup
            submenu: {
                desktop: {
                    // by default the menu mode set to accordion in desktop mode
                    default: (menu.data('menu-dropdown') == true ? 'dropdown' : 'accordion'),
                    // whenever body has this class switch the menu mode to dropdown
                    state: {
                        body: 'm-aside-left--minimize',  
                        mode: 'dropdown'
                    }
                },
                tablet: 'accordion', // menu set to accordion in tablet mode
                mobile: 'accordion'  // menu set to accordion in mobile mode
            },

            //accordion setup
            accordion: {
                autoScroll: true,
                expandAll: false
            }
        };

        asideMenu = menu.mMenu(menuOptions);

        // handle fixed aside menu
        if (menu.data('menu-scrollable')) {
            function initScrollableMenu(obj) {    
                if (mUtil.isInResponsiveRange('tablet-and-mobile')) {
                    // destroy if the instance was previously created
                    mApp.destroyScroller(obj);
                    return;
                }

                var height = mUtil.getViewPort().height - $('.m-header').outerHeight()
                    - ($('.m-aside-left .m-aside__header').length != 0 ? $('.m-aside-left .m-aside__header').outerHeight() : 0)
                    - ($('.m-aside-left .m-aside__footer').length != 0 ? $('.m-aside-left .m-aside__footer').outerHeight() : 0);
                    //- $('.m-footer').outerHeight(); 

                // create/re-create a new instance
                mApp.initScroller(obj, {height: height});
            }

            initScrollableMenu(asideMenu);
            
            mUtil.addResizeHandler(function() {            
                initScrollableMenu(asideMenu);
            });   
        }        

        //var item = $("a[href='?page=components/forms/validation/states']").parent('.m-menu__item');
        //alert(item.length);
        //menu.setActiveItem(item);     
    }

    // handle vertical menu
    var initLeftAside = function() {
        // init aside left offcanvas
        var asideOffcanvasClass = ($('#m_aside_left').hasClass('m-aside-left--offcanvas-default') ? 'm-aside-left--offcanvas-default' : 'm-aside-left');

        $('#m_aside_left').mOffcanvas({
            class: asideOffcanvasClass,
            overlay: true,
            close: '#m_aside_left_close_btn',
            toggle: {
                target: '#m_aside_left_offcanvas_toggle',
                state: 'm-brand__toggler--active'               
            }            
        });        
    }

    // handle sidebar toggle
    var initLeftAsideToggle = function() {
        $('#m_aside_left_minimize_toggle').mToggle({
            target: 'body',
            targetState: 'm-brand--minimize m-aside-left--minimize',
            togglerState: 'm-brand__toggler--active'
        }).on('toggle', function() {
            horMenu.pauseDropdownHover(800);
            asideMenu.pauseDropdownHover(800);
        });

        $('#m_aside_left_hide_toggle').mToggle({
            target: 'body',
            targetState: 'm-aside-left--hide',
            togglerState: 'm-brand__toggler--active'
        }).on('toggle', function() {
            horMenu.pauseDropdownHover(800);
            asideMenu.pauseDropdownHover(800);
        })
    }

    var initTopbar = function() {
        $('#m_aside_header_topbar_mobile_toggle').click(function() {
            $('body').toggleClass('m-topbar--on');
        });                                  

        // Animated Notification Icon 
        setInterval(function() {
            $('#m_topbar_notification_icon .m-nav__link-icon').addClass('m-animate-shake');
            $('#m_topbar_notification_icon .m-nav__link-badge').addClass('m-animate-blink');
        }, 3000);

        setInterval(function() {
            $('#m_topbar_notification_icon .m-nav__link-icon').removeClass('m-animate-shake');
            $('#m_topbar_notification_icon .m-nav__link-badge').removeClass('m-animate-blink');
        }, 6000);
    }

    // handle quick search
    var initQuicksearch = function() {
        var qs = $('#m_quicksearch');

        qs.mQuicksearch({
            type: qs.data('search-type'), // quick search type
            source: 'inc/api/quick_search.php',            
            spinner: 'm-spinner m-spinner--skin-light m-spinner--right',

            input: '#m_quicksearch_input',
            iconClose: '#m_quicksearch_close',
            iconCancel: '#m_quicksearch_cancel',
            iconSearch: '#m_quicksearch_search',

            hasResultClass: 'm-list-search--has-result',
            minLength: 1,            
            templates: {
                error: function(qs) {
                    return '<div class="m-search-results m-search-results--skin-light"><span class="m-search-result__message">Something went wrong</div></div>';
                }                            
            }
        });      
    }

    var initScrollTop = function() {
        $('[data-toggle="m-scroll-top"]').mScrollTop({
            offset: 300,
            speed: 600
        });
    }

    return {
        init: function() {  
            this.initHeader();
            this.initAside();
        },

        initHeader: function() {
            initStickyHeader();
            initHorMenu();
            initTopbar();
            initQuicksearch();
            initScrollTop();
        },

        initAside: function() {
            initLeftAside();
            initLeftAsideMenu();            
            initLeftAsideToggle();
        }
    };
}();

$(document).ready(function() {
    if (mUtil.isAngularVersion() === false) {
        mLayout.init();
    }
});
