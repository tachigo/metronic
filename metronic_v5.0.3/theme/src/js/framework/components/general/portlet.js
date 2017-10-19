(function ($) {
    // Plugin function
    $.fn.mPortlet = function (options) {
        // Plugin scope variable
        var portlet = {};
        var element = $(this);

        // Plugin class
        var Plugin = {
            /**
             * Run
             */
            run: function (options) {
                if (!element.data('portlet')) {                      
                    // create instance
                    Plugin.init(options);
                    Plugin.build();
                    
                    // assign instance to the element                    
                    element.data('portlet', portlet);
                } else {
                    // get instance from the element
                    portlet = element.data('portlet');
                }               

                return portlet;
            },

            /**
             * Initialize
             */
            init: function(options) {
                portlet.options = $.extend(true, {}, $.fn.mPortlet.defaults, options);
                portlet.events = [];
                portlet.eventOne = false;       

                portlet.body = element.find('> .m-portlet__body');       
            },

            /**
             * Build DOM and init event handlers
             */
            build: function () {
                // remove
                var remove = element.find('[data-portlet-tool=remove]');
                if (remove.length === 1) {
                    remove.click(function(e) {
                        e.preventDefault();
                        Plugin.remove();
                    });
                }                 

                // reload
                var reload = element.find('[data-portlet-tool=reload]')
                if (reload.length === 1) {
                    reload.click(function(e) {
                        e.preventDefault();
                        Plugin.reload();
                    });
                }

                // toggle
                var toggle = element.find('[data-portlet-tool=toggle]');
                if (toggle.length === 1) {
                    toggle.click(function(e) {
                        e.preventDefault();
                        Plugin.toggle();
                    });
                }

                // fullscreen
                var fullscreen = element.find('[data-portlet-tool=fullscreen]');
                if (fullscreen.length === 1) {
                    fullscreen.click(function(e) {
                        e.preventDefault();
                        Plugin.fullscreen();
                    });
                }                    

                Plugin.setupTooltips();
            }, 

            /**
             * Remove portlet
             */
            remove: function () {
                if (Plugin.eventTrigger('beforeRemove') === false) {
                    return;
                }

                element.remove();

                Plugin.eventTrigger('afterRemove');
            }, 

            /**
             * Set content
             */
            setContent: function (html) {
                if (html) {
                    portlet.body.html(html);
                }               
            },

            /**
             * Get body
             */
            getBody: function () {
                return portlet.body;
            },

            /**
             * Get self
             */
            getSelf: function () {
                return element;
            },

            /**
             * Setup tooltips
             */
            setupTooltips: function () {
                if (portlet.options.tooltips) {
                    var collapsed = element.hasClass('collapsed');
                    var fullscreenOn = $('body').hasClass('m-portlet--fullscreen') && element.hasClass('m-portlet--fullscreen');

                    var remove = element.find('[data-portlet-tool=remove]');
                    if (remove.length === 1) {
                        remove.attr('title', portlet.options.tools.remove);
                        remove.data('placement', fullscreenOn ? 'bottom' : 'top');
                        remove.data('offset', fullscreenOn ? '0 10px 0 0' : '0 5px');
                        remove.tooltip('dispose');
                        mApp.initTooltip(remove);
                    }

                    var reload = element.find('[data-portlet-tool=reload]');
                    if (reload.length === 1) {
                        reload.attr('title', portlet.options.tools.reload);
                        reload.data('placement', fullscreenOn ? 'bottom' : 'top');
                        reload.data('offset', fullscreenOn ? '0 10px 0 0' : '0 5px');
                        reload.tooltip('dispose');
                        mApp.initTooltip(reload);
                    }

                    var toggle = element.find('[data-portlet-tool=toggle]');
                    if (toggle.length === 1) {
                        if (collapsed) {
                            toggle.attr('title', portlet.options.tools.toggle.expand);
                        } else {
                            toggle.attr('title', portlet.options.tools.toggle.collapse);
                        }
                        toggle.data('placement', fullscreenOn ? 'bottom' : 'top');
                        toggle.data('offset', fullscreenOn ? '0 10px 0 0' : '0 5px');
                        toggle.tooltip('dispose');
                        mApp.initTooltip(toggle);
                    }

                    var fullscreen = element.find('[data-portlet-tool=fullscreen]');
                    if (fullscreen.length === 1) {
                        if (fullscreenOn) {
                            fullscreen.attr('title', portlet.options.tools.fullscreen.off);
                        } else {
                            fullscreen.attr('title', portlet.options.tools.fullscreen.on);
                        }
                        fullscreen.data('placement', fullscreenOn ? 'bottom' : 'top');
                        fullscreen.data('offset', fullscreenOn ? '0 10px 0 0' : '0 5px');
                        fullscreen.tooltip('dispose');
                        mApp.initTooltip(fullscreen);
                    }                
                }                   
            },

            /**
             * Reload
             */
            reload: function () {
                Plugin.eventTrigger('reload');                
            },

            /**
             * Toggle
             */
            toggle: function (mode) {
                if (mode === 'collapse' || element.hasClass('m-portlet--collapse') || element.hasClass('m-portlet--collapsed')) {
                    if (Plugin.eventTrigger('beforeExpand') === false) {
                        return;
                    } 

                    element.removeClass('m-portlet--collapse');
                    element.removeClass('m-portlet--collapsed');
                    Plugin.setupTooltips();

                    portlet.body.slideDown(portlet.options.bodyToggleSpeed, function(){                        
                        Plugin.eventTrigger('afterExpand');                         
                    });
                } else {
                    if (Plugin.eventTrigger('beforeCollapse') === false) {
                        return;
                    } 

                    element.addClass('m-portlet--collapse');
                    Plugin.setupTooltips();

                    portlet.body.slideUp(portlet.options.bodyToggleSpeed, function() {                        
                        Plugin.eventTrigger('afterCollapse');    
                    });
                }                  
            },

            /**
             * Toggle
             */
            fullscreen: function (mode) {
                var d = {};
                var speed = 300;

                if (mode === 'off' || ($('body').hasClass('m-portlet--fullscreen') && element.hasClass('m-portlet--fullscreen'))) {
                    Plugin.eventTrigger('beforeFullscreenOff');

                    $('body').removeClass('m-portlet--fullscreen');
                    element.removeClass('m-portlet--fullscreen');

                    Plugin.setupTooltips();
                    
                    Plugin.eventTrigger('afterFullscreenOff');
                } else {
                    Plugin.eventTrigger('beforeFullscreenOn');

                    element.addClass('m-portlet--fullscreen');
                    $('body').addClass('m-portlet--fullscreen');

                    Plugin.setupTooltips();
                    
                    Plugin.eventTrigger('afterFullscreenOn');
                }                  
            }, 

            /**
             * sync 
             */
            sync: function () {
                $(element).data('portlet', portlet);
            },

            /**
             * Trigger events
             */
            eventTrigger: function(name) {
                for (i = 0; i < portlet.events.length; i++) {
                    var event = portlet.events[i];
                    if (event.name == name) {
                        if (event.one == true) {
                            if (event.fired == false) {
                                portlet.events[i].fired = true;
                                return event.handler.call(this, portlet);
                            }
                        } else {
                            return  event.handler.call(this, portlet);
                        }
                    }
                }
            },

            /**
             * Add event
             */
            addEvent: function(name, handler, one) {
                portlet.events.push({
                    name: name,
                    handler: handler,
                    one: one,
                    fired: false
                });

                Plugin.sync();

                return portlet;
            }
        };

        // Run plugin
        Plugin.run.apply(this, [options]);

        //////////////////////
        // ** Public API ** //
        //////////////////////
       
        /**
         * Remove portlet
         * @returns {mPortlet}
         */
        portlet.remove = function () {
            return Plugin.remove(html);
        };

        /**
         * Reload portlet
         * @returns {mPortlet}
         */
        portlet.reload = function () {
            return Plugin.reload();
        };

        /**
         * Set portlet content
         * @returns {mPortlet}
         */
        portlet.setContent = function (html) {
            return Plugin.setContent(html);
        };

        /**
         * Collapse portlet
         * @returns {mPortlet}
         */
        portlet.collapse = function () {
            return Plugin.toggle('collapse');
        };

        /**
         * Expand portlet
         * @returns {mPortlet}
         */
        portlet.expand = function () {
            return Plugin.toggle('expand');
        };

        /**
         * Fullscreen portlet
         * @returns {mPortlet}
         */
        portlet.fullscreen = function () {
            return Plugin.fullscreen('on');
        };

        /**
         * Fullscreen portlet
         * @returns {mPortlet}
         */
        portlet.unFullscreen = function () {
            return Plugin.fullscreen('off');
        };

        /**
         * Get portletbody 
         * @returns {jQuery}
         */
        portlet.getBody = function () {
            return Plugin.getBody();
        };

         /**
         * Get portletbody 
         * @returns {jQuery}
         */
        portlet.getSelf = function () {
            return Plugin.getSelf();
        };

        /**
         * Set portlet content
         * @returns {mPortlet}
         */
        portlet.on =  function (name, handler) {
            return Plugin.addEvent(name, handler);
        };

        /**
         * Set portlet content
         * @returns {mPortlet}
         */
        portlet.one =  function (name, handler) {
            return Plugin.addEvent(name, handler, true);
        };        

        return portlet;
    };

    // default options
    $.fn.mPortlet.defaults = {
        bodyToggleSpeed: 400,
        tooltips: true,
        tools: {
            toggle: {
                collapse: 'Collapse', 
                expand: 'Expand'
            },
            reload: 'Reload',
            remove: 'Remove',
            fullscreen: {
                on: 'Fullscreen',
                off: 'Exit Fullscreen'
            }        
        }
    };
}(jQuery));