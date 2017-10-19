(function($) {
    // Plugin function
    $.fn.mQuicksearch = function(options) {

        // Plugin scope variables
        var qs = this;
        var element = $(this);
        
        // Plugin class        
        var Plugin = {
            /**
             * Run plugin 
             */
            run: function(options) {
                if (!element.data('qs')) {
                    // init plugin
                    Plugin.init(options);
                    // build dom
                    Plugin.build();                   
                    // store the instance in the element's data
                    element.data('qs', qs);
                } else {
                    // retrieve the instance fro the element's data
                    qs = element.data('qs'); 
                }

                return qs;
            },

            /**
             * Init plugin
             */
            init: function(options) {
                // merge default and user defined options
                qs.options = $.extend(true, {}, $.fn.mQuicksearch.defaults, options);

                // form
                qs.form = element.find('form');

                // input element
                qs.input = $(qs.options.input);

                 // close icon
                qs.iconClose = $(qs.options.iconClose);

                if (qs.options.type == 'default') {
                    // search icon
                    qs.iconSearch = $(qs.options.iconSearch);
                        
                    // cancel icon
                    qs.iconCancel = $(qs.options.iconCancel);
                }               

                // dropdown
                qs.dropdown = element.mDropdown({mobileOverlay: false});

                // cancel search timeout
                qs.cancelTimeout;

                // ajax processing state
                qs.processing = false;
            }, 

            /**
             * Build plugin
             */
            build: function() {
                // attach input keyup handler
                qs.input.keyup(Plugin.handleSearch);
                
                if (qs.options.type == 'default') {
                    qs.input.focus(Plugin.showDropdown);
                    
                    qs.iconCancel.click(Plugin.handleCancel);

                    qs.iconSearch.click(function() {
                        if (mUtil.isInResponsiveRange('tablet-and-mobile')) {
                            $('body').addClass('m-header-search--mobile-expanded');
                            qs.input.focus();
                        }
                    });

                    qs.iconClose.click(function() {
                        if (mUtil.isInResponsiveRange('tablet-and-mobile')) {
                            $('body').removeClass('m-header-search--mobile-expanded');
                            Plugin.closeDropdown();
                        }
                    });

                } else if (qs.options.type == 'dropdown') {
                    qs.dropdown.on('afterShow', function() {
                        qs.input.focus();
                    });
                    qs.iconClose.click(Plugin.closeDropdown);
                }               
            },

            /**
             * Search handler
             */ 
            handleSearch: function(e) { 
                var query = qs.input.val();

                if (query.length === 0) {
                    qs.dropdown.hide();
                    Plugin.handleCancelIconVisibility('on');
                    Plugin.closeDropdown();
                    element.removeClass(qs.options.hasResultClass);
                }

                if (query.length < qs.options.minLength || qs.processing == true) {
                    return;
                }

                qs.processing = true;
                qs.form.addClass(qs.options.spinner);
                Plugin.handleCancelIconVisibility('off');
                
                $.ajax({
                    url: qs.options.source,
                    data: {query: query},
                    dataType: 'html',
                    success: function(res) {
                        qs.processing = false;
                        qs.form.removeClass(qs.options.spinner);
                        Plugin.handleCancelIconVisibility('on');
                        qs.dropdown.setContent(res).show();
                        element.addClass(qs.options.hasResultClass);    
                    },
                    error: function(res) {
                        qs.processing = false;
                        qs.form.removeClass(qs.options.spinner);
                        Plugin.handleCancelIconVisibility('on');
                        qs.dropdown.setContent(qs.options.templates.error.apply(qs, res)).show();  
                        element.addClass(qs.options.hasResultClass);   
                    }
                });
            }, 

            /**
             * Handle cancel icon visibility
             */ 
            handleCancelIconVisibility: function(status) {
                if (qs.options.type == 'dropdown') {
                    return;
                }

                if (status == 'on') {
                    if (qs.input.val().length === 0) {                       
                        qs.iconCancel.css('visibility', 'hidden');
                        qs.iconClose.css('visibility', 'hidden');
                    } else {
                        clearTimeout(qs.cancelTimeout);
                        qs.cancelTimeout = setTimeout(function() {
                            qs.iconCancel.css('visibility', 'visible');
                            qs.iconClose.css('visibility', 'visible');
                        }, 500);                        
                    }
                } else {
                    qs.iconCancel.css('visibility', 'hidden');
                    qs.iconClose.css('visibility', 'hidden');
                }
            },

            /**
             * Cancel handler
             */ 
            handleCancel: function(e) {
                qs.input.val('');
                qs.iconCancel.css('visibility', 'hidden');
                element.removeClass(qs.options.hasResultClass);   
                qs.input.focus();

                Plugin.closeDropdown();
            },

            /**
             * Cancel handler
             */ 
            closeDropdown: function() {
                qs.dropdown.hide();
            },

            /**
             * Show dropdown
             */ 
            showDropdown: function(e) { 
                if (qs.dropdown.isShown() == false && qs.input.val().length > qs.options.minLength && qs.processing == false) {
                    qs.dropdown.show();
                    e.preventDefault();
                    e.stopPropagation();
                }
            }
        };

        // Run plugin
        Plugin.run.apply(qs, [options]);

        //////////////////////
        // ** Public API ** //
        //////////////////////

        /**
         * Public method
         * @returns {mQuicksearch}
         */
        qs.test = function(time) {
        	//Plugin.method(time);
        };

        // Return plugin object
        return qs;
    };

    // Plugin default options
    $.fn.mQuicksearch.defaults = {
    	minLength: 1,
        maxHeight: 300,
    };

}(jQuery));