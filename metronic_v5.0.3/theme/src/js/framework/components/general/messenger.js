(function ($) {
    // Plugin function
    $.fn.mMessenger = function (options) {
        // Plugin scope variable
        var messenger = {};
        var element = $(this);

        // Plugin class
        var Plugin = {
            /**
             * Run
             */
            run: function (options) {
                if (!element.data('messenger')) {                      
                    // create instance
                    Plugin.init(options);
                    Plugin.build();
                    Plugin.setup();
                    
                    // assign instance to the element                    
                    element.data('messenger', messenger);
                } else {
                    // get instance from the element
                    messenger = element.data('messenger');
                }               

                return messenger;
            },

            /**
             * Initialize
             */
            init: function(options) {
                messenger.events = [];
                messenger.scrollable = element.find('.m-messenger__scrollable');
                messenger.options = $.extend(true, {}, $.fn.mMessenger.defaults, options);
                if (messenger.scrollable.length > 0) {
                    if (messenger.scrollable.data('data-min-height')) {
                        messenger.options.minHeight = messenger.scrollable.data('data-min-height');
                    }

                    if (messenger.scrollable.data('data-max-height')) {
                        messenger.options.maxHeight = messenger.scrollable.data('data-max-height');
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
             * Setup messenger
             */
            setup: function () {
               
            },

            /**
             * Trigger events
             */
            eventTrigger: function(name) {
                for (i = 0; i < messenger.events.length; i++) {
                    var event = messenger.events[i];
                    if (event.name == name) {
                        if (event.one == true) {
                            if (event.fired == false) {
                                messenger.events[i].fired = true;
                                return event.handler.call(this, messenger);
                            }
                        } else {
                            return  event.handler.call(this, messenger);
                        }
                    }
                }
            },

            addEvent: function(name, handler, one) {
                messenger.events.push({
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
         * Set messenger content
         * @returns {mMessenger}
         */
        messenger.on =  function (name, handler) {
            return Plugin.addEvent(name, handler);
        };

        /**
         * Set messenger content
         * @returns {mMessenger}
         */
        messenger.one =  function (name, handler) {
            return Plugin.addEvent(name, handler, true);
        };        

        return messenger;
    };

    // default options
    $.fn.mMessenger.defaults = {
       
    };
}(jQuery));