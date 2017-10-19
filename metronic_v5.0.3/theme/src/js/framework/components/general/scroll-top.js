(function($) {
    // plugin setup
    $.fn.mScrollTop = function(options) {
        // main object
        var scrollTop = this;
        var element = $(this);

        /********************
         ** PRIVATE METHODS
         ********************/
        var Plugin = {
            /**
             * Run
             */
            run: function (options) {
                if (!element.data('scrollTop')) {                      
                    // create instance
                    Plugin.init(options);
                    Plugin.build();
                    
                    // assign instance to the element                    
                    element.data('scrollTop', scrollTop);
                } else {
                    // get instance from the element
                    scrollTop = element.data('scrollTop');
                }               

                return scrollTop;
            },

            /**
             * Handles subscrollTop click scrollTop
             */
            init: function(options) {
                scrollTop.element = element;    
                scrollTop.events = [];

                // merge default and user defined options
                scrollTop.options = $.extend(true, {}, $.fn.mScrollTop.defaults, options);
            },

            /**
             * Setup scrollTop
             */
            build: function() {
                // handle window scroll
                if (navigator.userAgent.match(/iPhone|iPad|iPod/i)) {
                    $(window).bind("touchend touchcancel touchleave", function() {
                        Plugin.handle();
                    });
                } else {
                    $(window).scroll(function() {
                        Plugin.handle();
                    });
                }

                // handle button click 
                element.on('click', Plugin.scroll);
            },

            /**
             * sync 
             */
            sync: function () {
                $(element).data('scrollTop', scrollTop);
            }, 

            /**
             * Handles offcanvas click scrollTop
             */
            handle: function() {
                var pos = $(window).scrollTop(); // current vertical position
                if (pos > scrollTop.options.offset) {
                    $("body").addClass('m-scroll-top--shown');
                } else {
                    $("body").removeClass('m-scroll-top--shown');
                }
            },

            /**
             * Handles offcanvas click scrollTop
             */
            scroll: function(e) {
                e.preventDefault();

                $("html, body").animate({
                    scrollTop: 0
                }, scrollTop.options.speed);
            },

            /**
             * Trigger events
             */
            eventTrigger: function(name) {
                for (i = 0; i < scrollTop.events.length; i++) {
                    var event = scrollTop.events[i];
                    if (event.name == name) {
                        if (event.one == true) {
                            if (event.fired == false) {
                                scrollTop.events[i].fired = true;
                                return event.handler.call(this, scrollTop);
                            }
                        } else {
                            return  event.handler.call(this, scrollTop);
                        }
                    }
                }
            },

            addEvent: function(name, handler, one) {
                scrollTop.events.push({
                    name: name,
                    handler: handler,
                    one: one,
                    fired: false
                });

                Plugin.sync();
            }
        };

        // main variables
        var the = this;
        
        // init plugin
        Plugin.run.apply(this, [options]);

        /********************
         ** PUBLIC API METHODS
         ********************/

        /**
         * Get subscrollTop mode
         */
        scrollTop.on =  function (name, handler) {
            return Plugin.addEvent(name, handler);
        };

        /**
         * Set scrollTop content
         * @returns {mScrollTop}
         */
        scrollTop.one =  function (name, handler) {
            return Plugin.addEvent(name, handler, true);
        };   

        return scrollTop;
    };

    // default options
    $.fn.mScrollTop.defaults = {
        offset: 300,
        speed: 600
    }; 
}(jQuery));