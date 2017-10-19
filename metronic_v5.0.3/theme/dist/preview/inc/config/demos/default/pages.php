<?php
//** Pages Configs

$_CONFIG[ 'demos' ][ 'default' ][ 'pages' ] = array(
	// sidebar menu pages
	'index' => array(
		'page' => array(
			'title' => 'Dashboard',
			'desc' => 'Latest updates and statistic charts'
		),
		'vendors' => array(
			'css' => array(
				'fullcalendar/fullcalendar.bundle.css'
			),
			'js' => array(
				'fullcalendar/fullcalendar.bundle.js'
			)
		),
		'app' => array(
			'js' => array(
				'js/dashboard.js'
			)
		),
		'view' => 'index',
		'display-daterangepicker' => true
	),

	'builder' => array(
		'visible' => 'preview',
		'page' => array(
			'title' => 'Layout Builder',
			'desc' => 'Layout builder'
		),
		'app' => array(
			'js' => array(
				'js/layout-builder.js'
			)
		),
		'view' => 'builder',
	),

	'components' => array(
		'base' => array(
			'typography' => array(
				'page' => array(
					'title' => 'Typography',
					'desc' => 'Headings, badges, links and more',
				),
				'view' => 'components/base/typography'
			),
			'state' => array(
				'page' => array(
					'title' => 'State Colors',
					'desc' => 'State colors',
				),
				'view' => 'components/base/state'
			),
			'stack' => array(
				'page' => array(
					'title' => 'Stack',
					'desc' => 'Metronic stack layouts',
				),
				'view' => 'components/base/stack'
			),
			'tables' => array(
				'page' => array(
					'title' => 'Tables',
					'desc' => 'Static table examples',
				),
				'view' => 'components/base/tables'
			),
			'modal' => array(
				'page' => array(
					'title' => 'Modal',
					'desc' => 'modal examples',
				),
				'view' => 'components/base/modal'
			),
			'alerts' => array(
				'page' => array(
					'title' => 'Alerts',
					'desc' => 'Bootstrap alert examples',
				),
				'view' => 'components/base/alerts'
			),
			'progress' => array(
				'page' => array(
					'title' => 'Progress',
					'desc' => 'Progress bar examples',
				),
				'view' => 'components/base/progress'
			),
			'popover' => array(
				'page' => array(
					'title' => 'Popover',
					'desc' => 'Bootstrap popover examples',
				),
				'view' => 'components/base/popover'
			),
			'tooltip' => array(
				'page' => array(
					'title' => 'Tooltip',
					'desc' => 'Bootstrap tooltip examples',
				),
				'view' => 'components/base/tooltip'
			),
			'blockui' => array(
				'page' => array(
					'title' => 'BlockUI',
					'desc' => 'Blockui examples',
				),
				'resources' => array(
					'js' => array(
						'components/base/blockui.js'
					)
				),
				'view' => 'components/base/blockui'
			),
			'spinners' => array(
				'page' => array(
					'title' => 'spinners',
					'desc' => 'Spinners examples',
				),
				'view' => 'components/base/spinners'
			),
			'scrollable' => array(
				'page' => array(
					'title' => 'Scrollable',
					'desc' => 'Scrollable examples',
				),
				'view' => 'components/base/scrollable'
			),
			'dropdown' => array(
				'page' => array(
					'title' => 'Dropdown',
					'desc' => 'metronic dropdown examples',
				),
				'resources' => array(
					'js' => array(
						'components/base/dropdown.js'
					)
				),
				'view' => 'components/base/dropdown'
			),
			'tabs' => array(
				'bootstrap' => array(
					'page' => array(
						'title' => 'Bootstrap Tabs',
						'desc' => 'Bootstrap tabs examples',
					),
					'view' => 'components/base/tabs/bootstrap'
				),
				'line' => array(
					'page' => array(
						'title' => 'Line Tabs',
						'desc' => 'Custom line tabs examples',
					),
					'view' => 'components/base/tabs/line'
				)
			),
			'navs' => array(
				'page' => array(
					'title' => 'Navs',
					'desc' => 'multi-purpose nav examples',
				),
				'view' => 'components/base/navs'
			),
			'lists' => array(
				'page' => array(
					'title' => 'Lists',
					'desc' => 'list examples',
				),
				'view' => 'components/base/lists'
			),
			'treeview' => array(
				'page' => array(
					'title' => 'Treeview',
					'desc' => 'treeview examples',
				),
				'resources' => array(
					'js' => array(
						'components/base/treeview.js'
					)
				),
				'view' => 'components/base/treeview'
			),
			'bootstrap-notify' => array(
				'page' => array(
					'title' => 'Bootstrap Notify',
					'desc' => 'bootstrap notify examples',
				),
				'resources' => array(
					'js' => array(
						'components/base/bootstrap-notify.js'
					)
				),
				'view' => 'components/base/bootstrap-notify'
			),
			'toastr' => array(
				'page' => array(
					'title' => 'Toastr',
					'desc' => 'toastr notification examples',
				),
				'resources' => array(
					'js' => array(
						'components/base/toastr.js'
					)
				),
				'view' => 'components/base/toastr'
			)
		),
		'icons' => array(
			'flaticon' => array(
				'page' => array(
					'title' => 'Flaticon',
					'desc' => 'flaticon icons',
				),
				'view' => 'components/icons/flaticon'
			),
			'fontawesome' => array(
				'page' => array(
					'title' => 'Fontawesome Icons',
					'desc' => '',
				),
				'view' => 'components/icons/fontawesome'
			),
			'lineawesome' => array(
				'page' => array(
					'title' => 'Lineawesome Icons',
					'desc' => '',
				),
				'view' => 'components/icons/lineawesome'
			),
			'socicons' => array(
				'page' => array(
					'title' => 'Socicons',
					'desc' => '',
				),
				'view' => 'components/icons/socicons'
			)
		),
		'buttons' => array(
			'base' => array(
				'default' => array(
					'page' => array(
						'title' => 'Default Style',
						'desc' => 'base button default style',
					),
					'view' => 'components/buttons/base/default'					
				),
				'square' => array(
					'page' => array(
						'title' => 'Square Style',
						'desc' => 'base button square style',
					),
					'view' => 'components/buttons/base/square'					
				),
				'pill' => array(
					'page' => array(
						'title' => 'Pill Style',
						'desc' => 'base button pill style',
					),
					'view' => 'components/buttons/base/pill'					
				),
				'air' => array(
					'page' => array(
						'title' => 'Air Style',
						'desc' => 'base button air style',
					),
					'view' => 'components/buttons/base/air'					
				)
			),
			'group' => array(
				'page' => array(
					'title' => 'Button Group',
					'desc' => 'Button group for multi-purpose use',
				),
				'view' => 'components/buttons/group/_index'
			),
			'dropdown' => array(
				'page' => array(
					'title' => 'Button Group',
					'desc' => 'Button dropdown for multi-purpose use',
				),
				'view' => 'components/buttons/dropdown/_index'
			),
			'icon' => array(
				'lineawesome' => array(
					'page' => array(
						'title' => 'Lineawesome Icons',
						'desc' => 'lineawesome icon buttons',
					),
					'view' => 'components/buttons/icon/lineawesome'					
				),
				'fontawesome' => array(
					'page' => array(
						'title' => 'Fontawesome Icons',
						'desc' => 'fontawesome icon buttons',
					),
					'view' => 'components/buttons/icon/fontawesome'					
				),				
				'flaticon' => array(
					'page' => array(
						'title' => 'Flaticon Icons',
						'desc' => 'flaticon icon buttons',
					),
					'view' => 'components/buttons/icon/flaticon'					
				)
			),
			'spinner' => array(
				'page' => array(
					'title' => 'Button Spinner',
					'desc' => 'Button spinner examples',
				),
				'view' => 'components/buttons/spinner'
			)
		),
		'forms' => array(
			'controls' => array(
				'base' => array(
					'page' => array(
						'title' => 'Base Controls',
						'desc' => 'Base form control examples',
					),
					'view' => 'components/forms/controls/base'
				),
				'checkbox-radio' => array(
					'page' => array(
						'title' => 'Checkbox & Radios',
						'desc' => 'custom checkbox and radio controls',
					),
					'view' => 'components/forms/controls/checkbox-radio'
				),
				'switch' => array(
					'page' => array(
						'title' => 'Switch',
						'desc' => 'custom switch controls',
					),
					'view' => 'components/forms/controls/switch'
				),
				'input-group' => array(
					'page' => array(
						'title' => 'Input Groups',
						'desc' => 'Base form control examples',
					),
					'view' => 'components/forms/controls/input-group'
				)
			),
			'widgets' => array(
				'bootstrap-datepicker' => array(
					'page' => array(
						'title' => 'Bootstrap Datepicker',
						'desc' => 'bootstrap datepicker examples',
					),
					'resources' => array(
						'js' => array(
							'components/forms/widgets/bootstrap-datepicker.js'
						)
					),
					'view' => 'components/forms/widgets/bootstrap-datepicker'
				),
				'bootstrap-datetimepicker' => array(
					'page' => array(
						'title' => 'Bootstrap Datetimepicker',
						'desc' => 'bootstrap datetimepicker examples',
					),
					'resources' => array(
						'js' => array(
							'components/forms/widgets/bootstrap-datetimepicker.js'
						)
					),
					'view' => 'components/forms/widgets/bootstrap-datetimepicker'
				),
				'bootstrap-timepicker' => array(
					'page' => array(
						'title' => 'Bootstrap Timepicker',
						'desc' => 'Bootstrap timepicker examples',
					),
					'resources' => array(
						'js' => array(
							'components/forms/widgets/bootstrap-timepicker.js'
						)
					),
					'view' => 'components/forms/widgets/bootstrap-timepicker'
				),
				'bootstrap-daterangepicker' => array(
					'page' => array(
						'title' => 'Bootstrap Daterangepicker',
						'desc' => 'bootstrap daterangepicker examples',
					),
					'resources' => array(
						'js' => array(
							'components/forms/widgets/bootstrap-daterangepicker.js'
						)
					),
					'view' => 'components/forms/widgets/bootstrap-daterangepicker'
				),
				'bootstrap-touchspin' => array(
					'page' => array(
						'title' => 'Bootstrap Touchspin',
						'desc' => 'bootstrap touchspin examples',
					),
					'resources' => array(
						'js' => array(
							'components/forms/widgets/bootstrap-touchspin.js'
						)
					),
					'view' => 'components/forms/widgets/bootstrap-touchspin'
				),
				'bootstrap-maxlength' => array(
					'page' => array(
						'title' => 'Bootstrap Maxlength',
						'desc' => 'bootstrap maxlength examples',
					),
					'resources' => array(
						'js' => array(
							'components/forms/widgets/bootstrap-maxlength.js'
						)
					),
					'view' => 'components/forms/widgets/bootstrap-maxlength'
				),
				'bootstrap-switch' => array(
					'page' => array(
						'title' => 'Bootstrap Switch',
						'desc' => 'bootstrap switch examples',
					),
					'resources' => array(
						'js' => array(
							'components/forms/widgets/bootstrap-switch.js'
						)
					),
					'view' => 'components/forms/widgets/bootstrap-switch'
				),
				'bootstrap-multipleselectsplitter' => array(
					'page' => array(
						'title' => 'Bootstrap Multiple Select Splitter',
						'desc' => 'bootstrap multiple select splitter examples',
					),
					'resources' => array(
						'js' => array(
							'components/forms/widgets/bootstrap-multipleselectsplitter.js'
						)
					),
					'view' => 'components/forms/widgets/bootstrap-multipleselectsplitter'
				),
				'bootstrap-select' => array(
					'page' => array(
						'title' => 'Bootstrap Select',
						'desc' => 'bootstrap select examples',
					),
					'resources' => array(
						'js' => array(
							'components/forms/widgets/bootstrap-select.js'
						)
					),
					'view' => 'components/forms/widgets/bootstrap-select'
				),
				'select2' => array(
					'page' => array(
						'title' => 'Select2',
						'desc' => 'select2 dropdown examples',
					),
					'resources' => array(
						'js' => array(
							'components/forms/widgets/select2.js'
						)
					),
					'view' => 'components/forms/widgets/select2'
				),
				'typeahead' => array(
					'page' => array(
						'title' => 'Typeahead',
						'desc' => 'select2 dropdown examples',
					),
					'resources' => array(
						'js' => array(
							'components/forms/widgets/typeahead.js'
						)
					),
					'view' => 'components/forms/widgets/typeahead'
				),
				'nouislider' => array(
					'page' => array(
						'title' => 'noUiSlider',
						'desc' => 'noUiSlider - input range slider examples',
					),
					'resources' => array(
						'js' => array(
							'components/forms/widgets/nouislider.js'
						)
					),
					'view' => 'components/forms/widgets/nouislider'
				),
				'ion-range-slider' => array(
					'page' => array(
						'title' => 'ion Range Slider',
						'desc' => 'ion range slider examples',
					),
					'resources' => array(
						'js' => array(
							'components/forms/widgets/ion-range-slider.js'
						)
					),
					'view' => 'components/forms/widgets/ion-range-slider'
				),
				'input-mask' => array(
					'page' => array(
						'title' => 'Input Masks',
						'desc' => 'input masks examples',
					),
					'resources' => array(
						'js' => array(
							'components/forms/widgets/input-mask.js'
						)
					),
					'view' => 'components/forms/widgets/input-mask'
				),
				'autosize' => array(
					'page' => array(
						'title' => 'Autosize',
						'desc' => 'automatically adjust textarea height',
					),
					'resources' => array(
						'js' => array(
							'components/forms/widgets/autosize.js'
						)
					),
					'view' => 'components/forms/widgets/autosize'
				),
				'clipboard' => array(
					'page' => array(
						'title' => 'Clipboard',
						'desc' => 'clipboard examples',
					),
					'resources' => array(
						'js' => array(
							'components/forms/widgets/clipboard.js'
						)
					),
					'view' => 'components/forms/widgets/clipboard'
				),
				'dropzone' => array(
					'page' => array(
						'title' => 'Dropzone',
						'desc' => 'drag’n’drop file uploads with image previews',
					),
					'resources' => array(
						'js' => array(
							'components/forms/widgets/dropzone.js'
						)
					),
					'view' => 'components/forms/widgets/dropzone'
				),
				'recaptcha' => array(
					'page' => array(
						'title' => 'Google reCaptcha',
						'desc' => 'google recaptcha examples',
					),
					'view' => 'components/forms/widgets/recaptcha'
				),
				'summernote' => array(
					'page' => array(
						'title' => 'Summernote WYSIWYG',
						'desc' => 'wysiwyg editor for bootstrap',
					),
					'resources' => array(
						'js' => array(
							'components/forms/widgets/summernote.js'
						)
					),
					'view' => 'components/forms/widgets/summernote'
				),
				'bootstrap-markdown' => array(
					'page' => array(
						'title' => 'Bootstrap Markdown',
						'desc' => 'bootstrap markdown examples',
					),
					'resources' => array(
						'js' => array(
							'components/forms/widgets/bootstrap-markdown.js'
						)
					),
					'view' => 'components/forms/widgets/bootstrap-markdown'
				),
			),
			'layouts' => array(
				'default-forms' => array(
					'page' => array(
						'title' => 'Default Forms',
						'desc' => 'default form examples',
					),
					'view' => 'components/forms/layouts/default-forms'
				),
				'multi-column-forms' => array(
					'page' => array(
						'title' => 'Multi Column Forms',
						'desc' => 'multi column form examples',
					),
					'view' => 'components/forms/layouts/multi-column-forms'
				),
				'action-bars' => array(
					'page' => array(
						'title' => 'Action Bars',
						'desc' => 'form action bar examples',
					),
					'view' => 'components/forms/layouts/action-bars'
				),
			),
			'validation' => array(
				'states' => array(
					'page' => array(
						'title' => 'Validation States',
						'desc' => 'validation state examples',
					),
					'view' => 'components/forms/validation/states'
				),
				'form-controls' => array(
					'page' => array(
						'title' => 'Form Controls',
						'desc' => 'form controls validation',
					),
					'resources' => array(
						'js' => array(
							'components/forms/validation/form-controls.js'
						)
					),
					'view' => 'components/forms/validation/form-controls'
				),
				'form-widgets' => array(
					'page' => array(
						'title' => 'Form Widgets',
						'desc' => 'form widget validation examples',
					),
					'resources' => array(
						'js' => array(
							'components/forms/validation/form-widgets.js'
						)
					),
					'view' => 'components/forms/validation/form-widgets'
				),
			)
		),
		'datatables' => array(
			'base' => array(
				'data-local' => array(
					'page' => array(
						'title' => 'Local Data',
						'desc' => 'initialized with local json data'
					),
					'resources' => array(
						'js' => array(
							'components/datatables/base/data-local.js'
						)
					),
					'view' => 'components/datatables/base/data-local'
				),
				'data-json' => array(
					'page' => array(
						'title' => 'Local Data',
						'desc' => 'initialized with local json data'
					),
					'resources' => array(
						'js' => array(
							'components/datatables/base/data-json.js'
						)
					),
					'view' => 'components/datatables/base/data-json'
				),
				'data-ajax' => array(
					'page' => array(
						'title' => 'Remote Data',
						'desc' => 'initialized via remote ajax json data'
					),
					'resources' => array(
						'js' => array(
							'components/datatables/base/data-ajax.js'
						)
					),
					'view' => 'components/datatables/base/data-ajax'
				),
				'record-selection' => array(
					'page' => array(
						'title' => 'Record Selection',
						'desc' => 'single and group record selection'
					),
					'resources' => array(
						'js' => array(
							'components/datatables/base/record-selection.js'
						)
					),
					'view' => 'components/datatables/base/record-selection'
				),
				'column-rendering' => array(
					'page' => array(
						'title' => 'Column Rendering',
						'desc' => 'column rendering examples'
					),
					'resources' => array(
						'js' => array(
							'components/datatables/base/column-rendering.js'
						)
					),
					'view' => 'components/datatables/base/column-rendering'
				),
				'column-width' => array(
					'page' => array(
						'title' => 'Column Width',
						'desc' => 'column width examples'
					),
					'resources' => array(
						'js' => array(
							'components/datatables/base/column-width.js'
						)
					),
					'view' => 'components/datatables/base/column-width'
				),
				'responsive-columns' => array(
					'page' => array(
						'title' => 'Responsive Columns',
						'desc' => 'responsive columns examples'
					),
					'resources' => array(
						'js' => array(
							'components/datatables/base/responsive-columns.js'
						)
					),
					'view' => 'components/datatables/base/responsive-columns'
				),
				'translation' => array(
					'page' => array(
						'title' => 'Translation',
						'desc' => 'datatable translations'
					),
					'resources' => array(
						'js' => array(
							'components/datatables/base/translation.js'
						)
					),
					'view' => 'components/datatables/base/translation'
				),
				'local-sort' => array(
					'page' => array(
						'title' => 'Local Sort',
						'desc' => 'datatable local sorting'
					),
					'resources' => array(
						'js' => array(
							'components/datatables/base/local-sort.js'
						)
					),
					'view' => 'components/datatables/base/local-sort'
				),
				'html-table' => array(
					'page' => array(
						'title' => 'HTML Table',
						'desc' => 'datatable HTML table'
					),
					'resources' => array(
						'js' => array(
							'components/datatables/base/html-table.js'
						)
					),
					'view' => 'components/datatables/base/html-table'
				),
				/*
				'themes' => array(
					'page' => array(
						'title' => 'Themes',
						'desc' => 'datatable themes'
					),
					'resources' => array(
						'js' => array(
							'components/datatables/base/themes.js'
						)
					),
					'view' => 'components/datatables/base/themes'
				)
				*/
			),
			'scrolling' => array(
				'vertical' => array(
					'page' => array(
						'title' => 'Vertical Scrolling',
						'desc' => 'datatable with vertical scrolling'
					),
					'resources' => array(
						'js' => array(
							'components/datatables/scrolling/vertical.js'
						)
					),
					'view' => 'components/datatables/scrolling/vertical'
				),
				'horizontal' => array(
					'page' => array(
						'title' => 'Horizontal Scrolling',
						'desc' => 'datatable with horizontal scrolling'
					),
					'resources' => array(
						'js' => array(
							'components/datatables/scrolling/horizontal.js'
						)
					),
					'view' => 'components/datatables/scrolling/horizontal'
				),
				'both' => array(
					'page' => array(
						'title' => 'Both Scrolling',
						'desc' => 'datatable with both scrolling'
					),
					'resources' => array(
						'js' => array(
							'components/datatables/scrolling/both.js'
						)
					),
					'view' => 'components/datatables/scrolling/both'
				)
			),
			'locked' => array(
				'left' => array(
					'page' => array(
						'title' => 'Left Locked Columns',
						'desc' => 'datatable with left locked columns'
					),
					'resources' => array(
						'js' => array(
							'components/datatables/locked/left.js'
						)
					),
					'view' => 'components/datatables/locked/left'
				),
				'right' => array(
					'page' => array(
						'title' => 'Right Locked Columns',
						'desc' => 'datatable with right locked columns'
					),
					'resources' => array(
						'js' => array(
							'components/datatables/locked/right.js'
						)
					),
					'view' => 'components/datatables/locked/right'
				),
				'both' => array(
					'page' => array(
						'title' => 'Both Locked Columns',
						'desc' => 'datatable with left and right locked columns'
					),
					'resources' => array(
						'js' => array(
							'components/datatables/locked/both.js'
						)
					),
					'view' => 'components/datatables/locked/both'
				)
			),
			'child' => array(
				'data-local' => array(
					'page' => array(
						'title' => 'Local Data',
						'desc' => 'child datatable from local data'
					),
					'resources' => array(
						'js' => array(
							'components/datatables/child/data-local.js'
						)
					),
					'view' => 'components/datatables/child/data-local'
				),
				'data-ajax' => array(
					'page' => array(
						'title' => 'Remote Data',
						'desc' => 'child datatable from remote data'
					),
					'resources' => array(
						'js' => array(
							'components/datatables/child/data-ajax.js'
						)
					),
					'view' => 'components/datatables/child/data-ajax'
				)
			),
			'api' => array(
				'methods' => array(
					'page' => array(
						'title' => 'Methods',
						'desc' => 'api methods examples'
					),
					'resources' => array(
						'js' => array(
							'components/datatables/api/methods.js'
						)
					),
					'view' => 'components/datatables/api/methods'
				),
				'events' => array(
					'page' => array(
						'title' => 'Events',
						'desc' => 'api events examples'
					),
					'resources' => array(
						'js' => array(
							'components/datatables/api/events.js'
						)
					),
					'view' => 'components/datatables/api/events'
				)
			)				
		),
		'portlets' => array(
			'base' => array(
				'page' => array(
					'title' => 'Base Portlets',
					'desc' => 'base portlet examples',
				),
				'view' => 'components/portlets/base'
			),
			'advanced' => array(
				'page' => array(
					'title' => 'Advanced Portlets',
					'desc' => 'advanced portlet examples',
				),
				'view' => 'components/portlets/advanced'
			),
			'creative' => array(
				'page' => array(
					'title' => 'Creative Portlets',
					'desc' => 'creative portlet examples',
				),
				'view' => 'components/portlets/creative'
			),
			'tabbed' => array(
				'page' => array(
					'title' => 'Tabbed Portlets',
					'desc' => 'tabbed portlet examples',
				),
				'view' => 'components/portlets/tabbed'
			),
			'draggable' => array(
				'page' => array(
					'title' => 'Draggable Portlets',
					'desc' => 'draggable porlets',
				),
				'vendors' => array(
					'js' => array(
						'//code.jquery.com/ui/1.12.1/jquery-ui.js'
					)
				),
				'resources' => array(
					'js' => array(
						'components/portlets/draggable.js'
					)
				),
				'view' => 'components/portlets/draggable'
			),
			'tools' => array(
				'page' => array(
					'title' => 'Portlet Tools',
					'desc' => 'portlet tools examples',
				),
				'resources' => array(
					'js' => array(
						'components/portlets/tools.js'
					)
				),
				'view' => 'components/portlets/tools'
			)
		),
		'widgets' => array(
			'general' => array(
				'page' => array(
					'title' => 'General Widgets',
					'desc' => 'general widget examples',
				),				
				'view' => 'components/widgets/general'
			),
			'chart' => array(
				'page' => array(
					'title' => 'Chart Widgets',
					'desc' => 'chart widgets examples',
				),
				'vendors' => array(
					'js' => array(
						'//maps.google.com/maps/api/js?key=AIzaSyDBGVDv5fOFgfW4ixNZL_2krgkriGu6vvc',
						'gmaps/gmaps.js'
					)
				),
				'app' => array(
					'js' => array(
						'js/dashboard.js'
					)
				),
				'view' => 'components/widgets/chart'
			)
		),
		'calendar' => array(
			'basic' => array(
				'page' => array(
					'title' => 'Basic Calendar',
					'desc' => 'basic calendar examples',
				),
				'vendors' => array(
					'css' => array(
						'fullcalendar/fullcalendar.bundle.css'
					),
					'js' => array(
						'fullcalendar/fullcalendar.bundle.js'
					)
				),
				'resources' => array(
					'js' => array(
						'components/calendar/basic.js'
					)
				),
				'view' => 'components/calendar/basic'
			),
			'list-view' => array(
				'page' => array(
					'title' => 'List View',
					'desc' => 'calendar list view example',
				),
				'vendors' => array(
					'css' => array(
						'fullcalendar/fullcalendar.bundle.css'
					),
					'js' => array(
						'fullcalendar/fullcalendar.bundle.js'
					)
				),
				'resources' => array(
					'js' => array(
						'components/calendar/list-view.js'
					)
				),
				'view' => 'components/calendar/list-view'
			),
			'google' => array(
				'page' => array(
					'title' => 'Google Calendar',
					'desc' => 'google calendar examples',
				),
				'vendors' => array(
					'css' => array(
						'fullcalendar/fullcalendar.bundle.css'
					),
					'js' => array(
						'fullcalendar/fullcalendar.bundle.js'
					)
				),
				'resources' => array(
					'js' => array(
						'components/calendar/google.js'
					)
				),
				'view' => 'components/calendar/google'
			),
			'external-events' => array(
				'page' => array(
					'title' => 'External Events',
					'desc' => 'external events examples',
				),
				'vendors' => array(
					'css' => array(
						'jquery-ui/jquery-ui.bundle.css',
						'fullcalendar/fullcalendar.bundle.css'
					),
					'js' => array(
						'jquery-ui/jquery-ui.bundle.js',
						'fullcalendar/fullcalendar.bundle.js'
					)
				),
				'resources' => array(
					'js' => array(
						'components/calendar/external-events.js'
					)
				),
				'view' => 'components/calendar/external-events'
			),
			'background-events' => array(
				'page' => array(
					'title' => 'Background Events',
					'desc' => 'background events examples',
				),
				'vendors' => array(
					'css' => array(
						'fullcalendar/fullcalendar.bundle.css'
					),
					'js' => array(
						'fullcalendar/fullcalendar.bundle.js'
					)
				),
				'resources' => array(
					'js' => array(
						'components/calendar/background-events.js'
					)
				),
				'view' => 'components/calendar/background-events'
			)
		),
		'charts' => array(
			'amcharts' => array(
				'charts' => array(
					'page' => array(
						'title' => 'amCharts Charts',
						'desc' => 'amcharts charts examples',
					),
					'vendors' => array(
						'css' => array(
							'//www.amcharts.com/lib/3/plugins/export/export.css'
						),
						'js' => array(
							'//www.amcharts.com/lib/3/amcharts.js',
							'//www.amcharts.com/lib/3/serial.js',
							'//www.amcharts.com/lib/3/radar.js',
							'//www.amcharts.com/lib/3/pie.js',
							'//www.amcharts.com/lib/3/plugins/tools/polarScatter/polarScatter.min.js',
							'//www.amcharts.com/lib/3/plugins/animate/animate.min.js',
							'//www.amcharts.com/lib/3/plugins/export/export.min.js',
							'//www.amcharts.com/lib/3/themes/light.js',
						)
					),
					'resources' => array(
						'js' => array(
							'components/charts/amcharts/charts.js'
						)
					),
					'view' => 'components/charts/amcharts/charts'
				),
				'stock-charts' => array(
					'page' => array(
						'title' => 'amCharts Stock Charts',
						'desc' => 'amcharts stock charts examples',
					),
					'vendors' => array(
						'css' => array(
							'//www.amcharts.com/lib/3/plugins/export/export.css'
						),
						'js' => array(
							'//www.amcharts.com/lib/3/amcharts.js',
							'//www.amcharts.com/lib/3/serial.js',
							'//www.amcharts.com/lib/3/amstock.js',
							'//www.amcharts.com/lib/3/plugins/animate/animate.min.js',
							'//www.amcharts.com/lib/3/plugins/export/export.min.js',
							'//www.amcharts.com/lib/3/themes/light.js',
						)
					),
					'resources' => array(
						'js' => array(
							'components/charts/amcharts/stock-charts.js'
						)
					),
					'view' => 'components/charts/amcharts/stock-charts'
				),
				'maps' => array(
					'page' => array(
						'title' => 'amCharts Maps',
						'desc' => 'amcharts maps examples',
					),
					'vendors' => array(
						'css' => array(
							'//www.amcharts.com/lib/3/plugins/export/export.css'
						),
						'js' => array(
							'//www.amcharts.com/lib/3/ammap.js',
							'//www.amcharts.com/lib/3/maps/js/usaLow.js',
							'//www.amcharts.com/lib/3/maps/js/worldLow.js',
							'//www.amcharts.com/lib/3/maps/js/worldHigh.js',
							'//www.amcharts.com/lib/3/plugins/export/export.min.js',
							'//www.amcharts.com/lib/3/themes/light.js',
						)
					),
					'resources' => array(
						'js' => array(
							'components/charts/amcharts/maps.js'
						)
					),
					'view' => 'components/charts/amcharts/maps'
				)
			),
			'flotcharts' => array(
				'page' => array(
					'title' => 'Flotcharts',
					'desc' => 'flotcharts examples',
				),
				'vendors' => array(
					'js' => array(
						'flot/flot.bundle.js'
					)
				),
				'resources' => array(
					'js' => array(
						'components/charts/flotcharts.js'
					)
				),
				'view' => 'components/charts/flotcharts',
			),
			'google-charts' => array(
				'page' => array(
					'title' => 'Google Charts',
					'desc' => 'google charts examples',
				),
				'vendors' => array(
					'js' => array(
						'//www.google.com/jsapi'
					)
				),
				'resources' => array(
					'js' => array(
						'components/charts/google-charts.js'
					)
				),
				'view' => 'components/charts/google-charts'
			),
			'morris-charts' => array(
				'page' => array(
					'title' => 'Morris Charts',
					'desc' => 'morris charts examples',
				),
				'resources' => array(
					'js' => array(
						'components/charts/morris-charts.js'
					)
				),
				'view' => 'components/charts/morris-charts'
			)
		),
		'maps' => array(
			'google-maps' => array(
				'page' => array(
					'title' => 'Google Maps',
					'desc' => 'google maps examples',
				),
				'vendors' => array(
					'js' => array(
						'//maps.google.com/maps/api/js?key=AIzaSyDBGVDv5fOFgfW4ixNZL_2krgkriGu6vvc',
						'gmaps/gmaps.js'
					)
				),
				'resources' => array(
					'js' => array(
						'components/maps/google-maps.js'
					)
				),
				'view' => 'components/maps/google-maps'
			),
			'jqvmap' => array(
				'page' => array(
					'title' => 'JQVMap',
					'desc' => 'jqvmap examples',
				),
				'vendors' => array(
					'css' => array(
						'jqvmap/jqvmap.bundle.css'
					),
					'js' => array(
						'jqvmap/jqvmap.bundle.js'
					)
				),
				'resources' => array(
					'js' => array(
						'components/maps/jqvmap.js'
					)
				),
				'view' => 'components/maps/jqvmap'
			),
			/*
			'jvectormap' => array(
				'page' => array(
					'title' => 'jVectorMap',
					'desc' => 'jvectormap examples',
				),
				'resources' => array(
					'js' => array(
						'components/maps/jvectormap.js' 
					)
				),
				'view' => 'components/maps/jvectormap'		
			),
			*/
		),
		'utils' => array(
			'idle-timer' => array(
				'page' => array(
					'title' => 'jQuery Idle',
					'desc' => 'user idle callback',
				),
				'resources' => array(
					'js' => array(
						'components/utils/idle-timer.js'
					)
				),
				'view' => 'components/utils/idle-timer'
			),
			'session-timeout' => array(
				'page' => array(
					'title' => 'JQVMap',
					'desc' => 'jqvmap examples',
				),
				'resources' => array(
					'js' => array(
						'components/utils/session-timeout.js'
					)
				),
				'view' => 'components/utils/session-timeout'
			)
		)
	),

	'snippets' => array(
		'pages' => array(
			'user' => array(
				'login-1' => array(
					'page' => array(
						'title' => 'Login Page - 1',
						'desc' => 'latest updates and statistic charts'
					),
					'layout' => array(
						'self' => array(
							'layout' => 'blank' // set blank layout for login page
						)
					),
					'snippets' => array(
						'js' => array(
							'pages/user/login.js'
						)
					),
					'view' => 'snippets/pages/user/login-1'
				),
				'login-2' => array(
					'page' => array(
						'title' => 'Login Page - 2',
						'desc' => 'latest updates and statistic charts'
					),
					'layout' => array(
						'self' => array(
							'layout' => 'blank' // set blank layout for login page
						)
					),
					'snippets' => array(
						'js' => array(
							'pages/user/login.js'
						)
					),
					'view' => 'snippets/pages/user/login-2'
				),
				'login-3' => array(
					'page' => array(
						'title' => 'Login Page - 3',
						'desc' => 'latest updates and statistic charts'
					),
					'layout' => array(
						'self' => array(
							'layout' => 'blank' // set blank layout for login page
						)
					),
					'snippets' => array(
						'js' => array(
							'pages/user/login.js'
						)
					),
					'view' => 'snippets/pages/user/login-3'
				),
				'login-4' => array(
					'page' => array(
						'title' => 'Login Page - 4',
						'desc' => 'latest updates and statistic charts'
					),
					'layout' => array(
						'self' => array(
							'layout' => 'blank' // set blank layout for login page
						)
					),
					'snippets' => array(
						'js' => array(
							'pages/user/login.js'
						)
					),
					'view' => 'snippets/pages/user/login-4'
				),
				'login-5' => array(
					'page' => array(
						'title' => 'Login Page - 5',
						'desc' => 'latest updates and statistic charts'
					),
					'layout' => array(
						'self' => array(
							'layout' => 'blank' // set blank layout for login page
						)
					),
					'snippets' => array(
						'js' => array(
							'pages/user/login.js'
						)
					),
					'view' => 'snippets/pages/user/login-5'
				),				 
			),
			'errors' => array(
				'error-1' => array(
					'page' => array(
						'title' => 'Error Page - 1',
						'desc' => 'latest updates and statistic charts'
					),
					'layout' => array(
						'self' => array(
							'layout' => 'blank' // set blank layout for login page
						)
					),
					'view' => 'snippets/pages/errors/error-1'
				),
				'error-2' => array(
					'page' => array(
						'title' => 'Error Page - 2',
						'desc' => 'latest updates and statistic charts'
					),
					'layout' => array(
						'self' => array(
							'layout' => 'blank' // set blank layout for login page
						)
					),
					'view' => 'snippets/pages/errors/error-2'
				),
				'error-3' => array(
					'page' => array(
						'title' => 'Error Page - 3',
						'desc' => 'latest updates and statistic charts'
					),
					'layout' => array(
						'self' => array(
							'layout' => 'blank' // set blank layout for login page
						)
					),
					'view' => 'snippets/pages/errors/error-3'
				),
				'error-4' => array(
					'page' => array(
						'title' => 'Error Page - 4',
						'desc' => 'latest updates and statistic charts'
					),
					'layout' => array(
						'self' => array(
							'layout' => 'blank' // set blank layout for login page
						)
					),
					'view' => 'snippets/pages/errors/error-4'
				),
				'error-5' => array(
					'page' => array(
						'title' => 'Error Page - 5',
						'desc' => 'latest updates and statistic charts'
					),
					'layout' => array(
						'self' => array(
							'layout' => 'blank' // set blank layout for login page
						)
					),
					'view' => 'snippets/pages/errors/error-5'
				),
				'error-6' => array(
					'page' => array(
						'title' => 'Error Page - 6',
						'desc' => 'latest updates and statistic charts'
					),
					'layout' => array(
						'self' => array(
							'layout' => 'blank' // set blank layout for login page
						)
					),
					'view' => 'snippets/pages/errors/error-6'
				)
			)
		)
	),

	// header menu pages
	'header' => array(
		'actions' => array(
			'page' => array(
				'title' => 'Actions',
				'desc' => 'actions example page'
			),
			'view' => 'header/actions',
			'resources' => array(
				'js' => array(
					'header/actions.js'
				)
			)
		),
		'profile' => array(
			'page' => array(
				'title' => 'My Profile',
				'desc' => 'user profile example page'
			),
			'view' => 'header/profile'
		)
	) 
);