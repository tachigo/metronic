(function($) {
    // plugin setup
    $.fn.mToggle = function(options) {
        // main object
        var toggle = this;
        var element = $(this);

        /********************
         ** PRIVATE METHODS
         ********************/
        var Plugin = {
            /**
             * Run
             */
            run: function (options) {
                if (!element.data('toggle')) {                      
                    // create instance
                    Plugin.init(options);
                    Plugin.build();
                    
                    // assign instance to the element                    
                    element.data('toggle', toggle);
                } else {
                    // get instance from the element
                    toggle = element.data('toggle');
                }               

                return toggle;
            },

            /**
             * Handles subtoggle click toggle
             */
            init: function(options) {
                toggle.element = element;    
                toggle.events = [];

                // merge default and user defined options
                toggle.options = $.extend(true, {}, $.fn.mToggle.defaults, options);

                toggle.target = $(toggle.options.target);
                toggle.targetState = toggle.options.targetState;
                toggle.togglerState = toggle.options.togglerState;

                toggle.state = mUtil.hasClasses(toggle.target, toggle.targetState) ? 'on' : 'off';
            },

            /**
             * Setup toggle
             */
            build: function() {
                element.on('click', Plugin.toggle);
            },

            /**
             * sync 
             */
            sync: function () {
                $(element).data('toggle', toggle);
            }, 

            /**
             * Handles offcanvas click toggle
             */
            toggle: function() {
                if (toggle.state == 'off') {
                    Plugin.on();
                } else {
                    Plugin.off();
                }
            },

            /**
             * Handles toggle click toggle
             */
            on: function() {
                Plugin.eventTrigger('beforeOn');
                
                toggle.target.addClass(toggle.targetState);

                if (toggle.togglerState) {
                    element.addClass(toggle.togglerState);
                }

                toggle.state = 'on';

                Plugin.eventTrigger('afterOn');

                return toggle;
            },

            /**
             * Handles toggle click toggle
             */
            off: function() {
                Plugin.eventTrigger('beforeOff');

                toggle.target.removeClass(toggle.targetState);

                if (toggle.togglerState) {
                    element.removeClass(toggle.togglerState);
                }

                toggle.state = 'off';

                Plugin.eventTrigger('afterOff');

                return toggle;
            },

            /**
             * Trigger events
             */
            eventTrigger: function(name) {
                for (i = 0; i < toggle.events.length; i++) {
                    var event = toggle.events[i];
                    if (event.name == name) {
                        if (event.one == true) {
                            if (event.fired == false) {
                                toggle.events[i].fired = true;
                                return event.handler.call(this, toggle);
                            }
                        } else {
                            return  event.handler.call(this, toggle);
                        }
                    }
                }
            },

            addEvent: function(name, handler, one) {
                toggle.events.push({
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
         * Get subtoggle mode
         */
        toggle.on =  function (name, handler) {
            return Plugin.addEvent(name, handler);
        };

        /**
         * Set toggle content
         * @returns {mToggle}
         */
        toggle.one =  function (name, handler) {
            return Plugin.addEvent(name, handler, true);
        };   

        return toggle;
    };

    // default options
    $.fn.mToggle.defaults = {

        togglerState: '',
        targetState: ''
    }; 
}(jQuery));