(function($) {
    // plugin setup
    $.fn.mOffcanvas = function(options) {
        // main object
        var offcanvas = this;
        var element = $(this);

        /********************
         ** PRIVATE METHODS
         ********************/
        var Plugin = {
            /**
             * Run
             */
            run: function (options) {
                if (!element.data('offcanvas')) {                      
                    // create instance
                    Plugin.init(options);
                    Plugin.build();
                    
                    // assign instance to the element                    
                    element.data('offcanvas', offcanvas);
                } else {
                    // get instance from the element
                    offcanvas = element.data('offcanvas');
                }               

                return offcanvas;
            },

            /**
             * Handles suboffcanvas click toggle
             */
            init: function(options) {
                offcanvas.events = [];

                // merge default and user defined options
                offcanvas.options = $.extend(true, {}, $.fn.mOffcanvas.defaults, options);

                offcanvas.overlay;
                
                offcanvas.classBase = offcanvas.options.class;
                offcanvas.classShown = offcanvas.classBase + '--on';
                offcanvas.classOverlay = offcanvas.classBase + '-overlay';
                
                offcanvas.state = element.hasClass(offcanvas.classShown) ? 'shown' : 'hidden';
                offcanvas.close = offcanvas.options.close;

                if (offcanvas.options.toggle && offcanvas.options.toggle.target) {
                    offcanvas.toggleTarget = offcanvas.options.toggle.target;
                    offcanvas.toggleState = offcanvas.options.toggle.state;
                } else {
                    offcanvas.toggleTarget = offcanvas.options.toggle; 
                    offcanvas.toggleState = '';
                }
            },

            /**
             * Setup offcanvas
             */
            build: function() {
                // offcanvas toggle
                $(offcanvas.toggleTarget).on('click', Plugin.toggle);

                if (offcanvas.close) {
                    $(offcanvas.close).on('click', Plugin.hide);
                }
            },

            /**
             * sync 
             */
            sync: function () {
                $(element).data('offcanvas', offcanvas);
            }, 

            /**
             * Handles offcanvas click toggle
             */
            toggle: function() {
                if (offcanvas.state == 'shown') {
                    Plugin.hide();
                } else {
                    Plugin.show();
                }
            },

            /**
             * Handles offcanvas click toggle
             */
            show: function() {
                if (offcanvas.state == 'shown') {
                    return;
                }

                Plugin.eventTrigger('beforeShow');

                if (offcanvas.toggleState != '') {
                    $(offcanvas.toggleTarget).addClass(offcanvas.toggleState);
                }
                
                $('body').addClass(offcanvas.classShown);
                element.addClass(offcanvas.classShown);

                offcanvas.state = 'shown';

                if (offcanvas.options.overlay) {
                    var overlay = $('<div class="' + offcanvas.classOverlay + '"></div>');                
                    element.after(overlay);
                    offcanvas.overlay = overlay;
                    offcanvas.overlay.on('click', function(e) {
                        e.stopPropagation();
                        e.preventDefault();
                        Plugin.hide();
                    });
                } 

                Plugin.eventTrigger('afterShow');

                return offcanvas;
            },

            /**
             * Handles offcanvas click toggle
             */
            hide: function() {
                if (offcanvas.state == 'hidden') {
                    return;
                }

                Plugin.eventTrigger('beforeHide');

                if (offcanvas.toggleState != '') {
                    $(offcanvas.toggleTarget).removeClass(offcanvas.toggleState);
                }

                $('body').removeClass(offcanvas.classShown)
                element.removeClass(offcanvas.classShown);

                offcanvas.state = 'hidden';

                if (offcanvas.options.overlay) {
                    offcanvas.overlay.remove();
                } 

                Plugin.eventTrigger('afterHide');

                return offcanvas;
            },

            /**
             * Trigger events
             */
            eventTrigger: function(name) {
                for (i = 0; i < offcanvas.events.length; i++) {
                    var event = offcanvas.events[i];
                    if (event.name == name) {
                        if (event.one == true) {
                            if (event.fired == false) {
                                offcanvas.events[i].fired = true;
                                return event.handler.call(this, offcanvas);
                            }
                        } else {
                            return  event.handler.call(this, offcanvas);
                        }
                    }
                }
            },

            addEvent: function(name, handler, one) {
                offcanvas.events.push({
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
         * Hide 
         */
        offcanvas.hide =  function () {
            return Plugin.hide();
        };

        /**
         * Show 
         */
        offcanvas.show =  function () {
            return Plugin.show();
        };

        /**
         * Get suboffcanvas mode
         */
        offcanvas.on =  function (name, handler) {
            return Plugin.addEvent(name, handler);
        };

        /**
         * Set offcanvas content
         * @returns {mOffcanvas}
         */
        offcanvas.one =  function (name, handler) {
            return Plugin.addEvent(name, handler, true);
        };   

        return offcanvas;
    };

    // default options
    $.fn.mOffcanvas.defaults = {
        
    }; 
}(jQuery));