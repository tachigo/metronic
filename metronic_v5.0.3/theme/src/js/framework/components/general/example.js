(function ($) {
    // Plugin function
    $.fn.mExample = function (options) {
        // Plugin scope variable
        var example = {};
        var element = $(this);

        // Plugin class
        var Plugin = {
            /**
             * Run
             */
            run: function (options) {
                if (!element.data('example')) {                      
                    // create instance
                    Plugin.init(options);
                    Plugin.build();
                    Plugin.setup();
                    
                    // assign instance to the element                    
                    element.data('example', example);
                } else {
                    // get instance from the element
                    example = element.data('example');
                }               

                return example;
            },

            /**
             * Initialize
             */
            init: function(options) {
                example.events = [];
                example.scrollable = element.find('.m-example__scrollable');
                example.options = $.extend(true, {}, $.fn.mExample.defaults, options);
                if (example.scrollable.length > 0) {
                    if (example.scrollable.data('data-min-height')) {
                        example.options.minHeight = example.scrollable.data('data-min-height');
                    }

                    if (example.scrollable.data('data-max-height')) {
                        example.options.maxHeight = example.scrollable.data('data-max-height');
                    }
                }                
            },

            /**
             * Build DOM and init event handlers
             */
            build: function () {
                if (mUtil.isMobileDevice()) {
                    
                } else {
                    
                }                
            }, 

            /**
             * Setup example
             */
            setup: function () {
               
            },

            /**
             * Trigger events
             */
            eventTrigger: function(name) {
                for (i = 0; i < example.events.length; i++) {
                    var event = example.events[i];
                    if (event.name == name) {
                        if (event.one == true) {
                            if (event.fired == false) {
                                example.events[i].fired = true;
                                return event.handler.call(this, example);
                            }
                        } else {
                            return  event.handler.call(this, example);
                        }
                    }
                }
            },

            addEvent: function(name, handler, one) {
                example.events.push({
                    name: name,
                    handler: handler,
                    one: one,
                    fired: false
                });

                Plugin.sync();
            }
        };

        // Run plugin
        Plugin.run.apply(this, [options]);

        //////////////////////
        // ** Public API ** //
        //////////////////////
       

        /**
         * Set example content
         * @returns {mExample}
         */
        example.on =  function (name, handler) {
            return Plugin.addEvent(name, handler);
        };

        /**
         * Set example content
         * @returns {mExample}
         */
        example.one =  function (name, handler) {
            return Plugin.addEvent(name, handler, true);
        };        

        return example;
    };

    // default options
    $.fn.mExample.defaults = {
       
    };
}(jQuery));