<?php
//** Menu Configs

$_CONFIG['demos']['default']['menu'] = array(

	// Header menu
	'header' => array(
		'self' => array(
			//'bullet' => 'line',
		),

		'items' => array(
			array(
				'title' => 'Actions',
				'root' => true,
				'icon' => 'flaticon-add',
				'toggle' => 'click',
				'redirect' => true,
				'submenu' => array(
					'type' => 'classic',
					'alignment' => 'left',
					'items' => array(
						array(
							'title' => 'Create New Post',
							'page' => 'header/actions',
							'icon' => 'flaticon-file',
						),
						array(
							'title' => 'Generate Reports',
							'page' => 'header/actions',
							'icon' => 'flaticon-diagram',
							'badge' => array(
								'type' => 'm-badge--success',
								'value' => '2'
							),
							'redirect' => true
						),
						array(
							'title' => 'Manage Orders',
							'icon' => 'flaticon-business',
							'redirect' => true,
							'submenu' => array(
								'type' => 'classic',
								'alignment' => 'right',
								'bullet' => 'line',
								'items' => array(
									array(
										'title' => 'Latest Orders',
										'page' => 'header/actions',
										'icon' => '',
										'redirect' => true
									),
									array(
										'title' => 'Pending Orders',
										'page' => 'header/actions',
										'icon' => '',
										'redirect' => true
									),
									array(
										'title' => 'Processed Orders',
										'page' => 'header/actions',
										'icon' => '',
										'redirect' => true
									),
									array(
										'title' => 'Delivery Reports',
										'page' => 'header/actions',
										'icon' => '',
										'redirect' => true
									),
									array(
										'title' => 'Payments',
										'page' => 'header/actions',
										'icon' => '',
										'redirect' => true
									),
									array(
										'title' => 'Customers',
										'page' => 'header/actions',
										'icon' => '',
										'redirect' => true
									)
								)
							)
						),
						array(
							'title' => 'Customer Feedbacks',
							'page' => '#',
							'icon' => 'flaticon-chat-1',
							'redirect' => true,
							'submenu' => array(
								'type' => 'classic',
								'alignment' => 'right',
								'bullet' => 'dot',
								'items' => array(
									array(
										'title' => 'Customer Feedbacks',
										'page' => 'header/actions',
										'icon' => '',
										'redirect' => true
									),
									array(
										'title' => 'Supplier Feedbacks',
										'page' => 'header/actions',
										'icon' => '',
										'redirect' => true
									),
									array(
										'title' => 'Reviewed Feedbacks',
										'page' => 'header/actions',
										'icon' => '',
										'redirect' => true
									),
									array(
										'title' => 'Resolved Feedbacks',
										'page' => 'header/actions',
										'icon' => '',
										'redirect' => true
									),
									array(
										'title' => 'Feedback Reports',
										'page' => 'header/actions',
										'icon' => '',
										'redirect' => true
									)
								)
							)
						),
						array(
							'title' => 'Register Member',
							'page' => 'header/actions',
							'icon' => 'flaticon-users',
							'redirect' => true
						)
					)
				)
			),

			array(
				'title' => 'Reports',
				'root' => true,
				'icon' => 'flaticon-line-graph',
				'toggle' => 'click',
				'redirect' => true,
				'submenu' => array(
					'type' => 'mega',
					'width' => '1000px',
					'alignment' => 'left',
					'columns' => array(
						array(
							'heading' => array(
								'heading' => true,
								'title' => 'Finance Reports',
								'redirect' => true,
							),
							'items' => array(
								array(
									'title' => 'Annual Reports',
									'page' => 'header/actions',
									'icon' => 'flaticon-map',
									'redirect' => true
								),
								array(
									'title' => 'HR Reports',
									'page' => 'header/actions',
									'icon' => 'flaticon-user',
									'redirect' => true
								),
								array(
									'title' => 'IPO Reports',
									'page' => 'header/actions',
									'icon' => 'flaticon-clipboard',
									'redirect' => true
								),
								array(
									'title' => 'Finance Margins',
									'page' => 'header/actions',
									'icon' => 'flaticon-graphic-1',
									'redirect' => true
								),
								array(
									'title' => 'Revenue Reports',
									'page' => 'header/actions',
									'icon' => 'flaticon-graphic-2',
									'redirect' => true
								)
							)
						),
						array(
							'bullet' => 'line',
							'heading' => array(
								'heading' => true,
								'title' => 'Project Reports',
								'redirect' => true,
							),
							'items' => array(
								array(
									'title' => 'Coca Cola CRM',
									'page' => 'header/actions',
									'icon' => '',
									'redirect' => true
								),
								array(
									'title' => 'Delta Airlines Booking Site',
									'page' => 'header/actions',
									'icon' => 'icons8-calendar',
									'redirect' => true
								),
								array(
									'title' => 'Malibu Accounting',
									'page' => 'header/actions',
									'icon' => 'icons8-calendar',
									'redirect' => true
								),
								array(
									'title' => 'Vineseed Website Rewamp',
									'page' => 'header/actions',
									'icon' => 'icons8-calendar',
									'redirect' => true
								),
								array(
									'title' => 'Zircon Mobile App',
									'page' => 'header/actions',
									'icon' => 'icons8-calendar',
									'redirect' => true
								),
								array(
									'title' => 'Mercury CMS',
									'page' => 'header/actions',
									'icon' => 'icons8-calendar',
									'redirect' => true
								)
							)
						),
						array(
							'bullet' => 'dot',
							'heading' => array(
								'heading' => true,
								'title' => 'HR Reports',
								'redirect' => true,
							),
							'items' => array(
								array(
									'title' => 'Staff Directory',
									'page' => 'header/actions',
									'icon' => '',
									'redirect' => true
								),
								array(
									'title' => 'Client Directory',
									'page' => 'header/actions',
									'icon' => '',
									'redirect' => true
								),
								array(
									'title' => 'Salary Reports',
									'page' => 'header/actions',
									'icon' => '',
									'redirect' => true
								),
								array(
									'title' => 'Staff Payslips',
									'page' => 'header/actions',
									'icon' => '',
									'redirect' => true
								),
								array(
									'title' => 'Corporate Expenses',
									'page' => 'header/actions',
									'icon' => '',
									'redirect' => true
								),
								array(
									'title' => 'Project Expenses',
									'page' => 'header/actions',
									'icon' => '',
									'redirect' => true
								)
							)
						),
						array(
							'heading' => array(
								'heading' => true,
								'title' => 'Reporting Apps',
								'icon' => '',
								'redirect' => true,
							),
							'items' => array(
								array(
									'title' => 'Report Adjusments',
									'page' => 'header/actions',
									'icon' => '',
									'redirect' => true
								),
								array(
									'title' => 'Sources & Mediums',
									'page' => 'header/actions',
									'icon' => '',
									'redirect' => true
								),
								array(
									'title' => 'Reporting Settings',
									'page' => 'header/actions',
									'icon' => '',
									'redirect' => true
								),
								array(
									'title' => 'Conversions',
									'page' => 'header/actions',
									'icon' => '',
									'redirect' => true
								),
								array(
									'title' => 'Report Flows',
									'page' => 'header/actions',
									'icon' => '',
									'redirect' => true
								),
								array(
									'title' => 'Audit & Logs',
									'page' => 'header/actions',
									'icon' => '',
									'redirect' => true
								)
							)
						)
					)
				)
			),

			array(
				'title' => 'Apps',
				'root' => true,
				'icon' => 'flaticon-paper-plane',
				'toggle' => 'click',
				'redirect' => true,
				'badge' => array(
					'type' => 'm-badge--brand m-badge--wide',
					'value' => 'new'
				),
				'submenu' => array(
					'type' => 'classic',
					'alignment' => 'left',
					'items' => array(
						array(
							'title' => 'eCommerce',
							'page' => 'header/actions',
							'icon' => 'flaticon-business',
							'redirect' => true
						),
						array(
							'title' => 'Audience',
							'page' => 'crud/datatable_v1',
							'icon' => 'flaticon-computer',
							'redirect' => true,
							'submenu' => array(
								'type' => 'classic',
								'alignment' => 'right',
								'items' => array(
									array(
										'title' => 'Active Users',
										'page' => 'header/actions',
										'icon' => 'flaticon-users',
										'redirect' => true
									),
									array(
										'title' => 'User Explorer',
										'page' => 'header/actions',
										'icon' => 'flaticon-interface-1',
										'redirect' => true
									),
									array(
										'title' => 'Users Flows',
										'page' => 'header/actions',
										'icon' => 'flaticon-lifebuoy',
										'redirect' => true
									),
									array(
										'title' => 'Market Segments',
										'page' => 'header/actions',
										'icon' => 'flaticon-graphic-1',
										'redirect' => true
									),
									array(
										'title' => 'User Reports',
										'page' => 'header/actions',
										'icon' => 'flaticon-graphic',
										'redirect' => true
									)
								)
							)
						),
						array(
							'title' => 'Marketing',
							'page' => 'header/actions',
							'icon' => 'flaticon-map',
							'redirect' => true
						),
						array(
							'title' => 'Campaigns',
							'page' => 'header/actions',
							'icon' => 'flaticon-graphic-2',
							'redirect' => true,
							'badge' => array(
								'type' => 'm-badge--success',
								'value' => '3'
							)
						),
						array(
							'title' => 'Cloud Manager',
							'page' => '',
							'icon' => 'flaticon-infinity',
							'redirect' => true,
							'submenu' => array(
								'type' => 'classic',
								'alignment' => 'left',
								'items' => array(
									array(
										'title' => 'File Upload',
										'page' => 'header/actions',
										'icon' => 'flaticon-add',
										'redirect' => true,
										'badge' => array(
											'type' => 'm-badge--danger',
											'value' => '3'
										)
									),
									array(
										'title' => 'File Attributes',
										'page' => 'header/actions',
										'icon' => 'flaticon-signs-1',
										'redirect' => true
									),
									array(
										'title' => 'Folders',
										'page' => 'header/actions',
										'icon' => 'flaticon-folder',
										'redirect' => true
									),
									array(
										'title' => 'System Settings',
										'page' => 'header/actions',
										'icon' => 'flaticon-cogwheel-2',
										'redirect' => true
									)
								)
							)
						)
					)
				)
			)
		)
	),

	// Aside menu
	'aside' => array(
		'self' => array(
			//'bullet' => 'dot',
		),

		'items' => array(
			// Dashboard
			array(
				'title' => 'Dashboard',
				'desc' => 'Some description goes here',
				'root' => true,
				'icon' => 'flaticon-line-graph',
				'page' => 'index',
				'badge' => array(
					'type' => 'm-badge--danger',
					'value' => '2'
				),
				'submenu1' => array(
					array(
						'title' => 'Dashboard v1',
						'page' => 'index',
						'icon' => 'flaticon-lifebuoy',
					),
					array(
						'title' => 'Dashboard v2',
						'page' => 'index2',
						'icon' => 'flaticon-graphic-2',
					),
					array(
						'title' => 'Dashboard v3',
						'page' => 'index3',
						'icon' => 'flaticon-calendar',
					)
				)
			),

			array(
				'section' => 'Angular',
				'visible' => 'angular'
			),

			// Angular
			array(
				'title' => 'Ng-Bootstrap',
				'root' => true,
				'icon' => 'flaticon-settings',
				'page' => 'angular/ng-bootstrap',
				'visible' => 'angular'
			),
			array(
				'title' => 'PrimeNG',
				'root' => true,
				'bullet' => 'dot',
				'icon' => 'flaticon-settings',
				'visible' => 'angular',
				'submenu' => array(
					array(
						'title' => 'Input',
						'page' => 'angular/primeng/input'
					),
					array(
						'title' => 'Button',
						'page' => 'angular/primeng/button'
					),
					array(
						'title' => 'Panel',
						'page' => 'angular/primeng/panel'
					),
				)
			),

			// Components
			array(
				'section' => 'Components',
			),
			array(
				'title' => 'Base',
				'desc' => '',
				'icon' => 'flaticon-layers',
				'bullet' => 'dot',
				'root' => true,
				'submenu' => array(
					array(
						'title' => 'State Colors',
						'page' => 'components/base/state'
					),
					array(
						'title' => 'Typography',
						'page' => 'components/base/typography'
					),
					array(
						'title' => 'Stack',
						'page' => 'components/base/stack'
					),
					array(
						'title' => 'Tables',
						'page' => 'components/base/tables'
					),
					array(
						'title' => 'Progress',
						'page' => 'components/base/progress'
					),
					array(
						'title' => 'Modal',
						'page' => 'components/base/modal'
					),
					array(
						'title' => 'Alerts',
						'page' => 'components/base/alerts'
					),
					array(
						'title' => 'Popover',
						'page' => 'components/base/popover'
					),
					array(
						'title' => 'Tooltip',
						'page' => 'components/base/tooltip'
					),
					array(
						'title' => 'Block UI',
						'page' => 'components/base/blockui'
					),
					array(
						'title' => 'Spinners',
						'page' => 'components/base/spinners'
					),
					array(
						'title' => 'Scrollable',
						'page' => 'components/base/scrollable'
					),
					array(
						'title' => 'Dropdown',
						'page' => 'components/base/dropdown'
					),
					array(
						'title' => 'Tabs',
						'desc' => '',
						'bullet' => 'dot',
						'submenu' => array(
							array(
								'title' => 'Bootstrap Tabs',
								'page' => 'components/base/tabs/bootstrap'
							),
							array(
								'title' => 'Line Tabs',
								'page' => 'components/base/tabs/line'
							)
						)
					),
					array(
						'title' => 'Navs',
						'page' => 'components/base/navs'
					),
					array(
						'title' => 'Lists',
						'page' => 'components/base/lists'
					),
					array(
						'title' => 'Tree View',
						'page' => 'components/base/treeview'
					),
					array(
						'title' => 'Bootstrap Notify',
						'page' => 'components/base/bootstrap-notify'
					),
					array(
						'title' => 'Toastr',
						'page' => 'components/base/toastr'
					)
				)
			),
			array(
				'title' => 'Icons',
				'desc' => '',
				'icon' => 'flaticon-share',
				'bullet' => 'dot',
				'submenu' => array(
					array(
						'title' => 'Flaticon',
						'page' => 'components/icons/flaticon'
					),
					array(
						'title' => 'Fontawesome',
						'page' => 'components/icons/fontawesome'
					),
					array(
						'title' => 'Lineawesome',
						'page' => 'components/icons/lineawesome'
					),
					array(
						'title' => 'Socicons',
						'page' => 'components/icons/socicons'
					)
				)
			),
			array(
				'title' => 'Buttons',
				'desc' => '',
				'icon' => 'flaticon-multimedia-1',
				'bullet' => 'dot',
				'root' => true,
				'submenu' => array(
					array(
						'title' => 'Button Base',
						'bullet' => 'dot',
						'submenu' => array(
							array(
								'title' => 'Default Style',
								'page' => 'components/buttons/base/default'
							),
							array(
								'title' => 'Square Style',
								'page' => 'components/buttons/base/square'
							),
							array(
								'title' => 'Pill Style',
								'page' => 'components/buttons/base/pill'
							),
							array(
								'title' => 'Air Style',
								'page' => 'components/buttons/base/air'
							)
						)
					),
					array(
						'title' => 'Button Group',
						'page' => 'components/buttons/group'
					),
					array(
						'title' => 'Button Dropdown',
						'page' => 'components/buttons/dropdown'
					),
					array(
						'title' => 'Button Icon',
						'bullet' => 'dot',
						'submenu' => array(
							array(
								'title' => 'Lineawesome Icons',
								'page' => 'components/buttons/icon/lineawesome'
							),
							array(
								'title' => 'Fontawesome Icons',
								'page' => 'components/buttons/icon/fontawesome'
							),
							array(
								'title' => 'Flaticon Icons',
								'page' => 'components/buttons/icon/flaticon'
							)
						)
					)
				)
			),
			array(
				'title' => 'Forms',
				'desc' => 'Massive crud examples',
				'icon' => 'flaticon-interface-7',
				'root' => true,
				'bullet' => 'dot',
				'submenu' => array(
					array(
						'title' => 'Form Controls',
						'desc' => '',
						'icon' => 'flaticon-interface-3',
						'bullet' => 'dot',
						'submenu' => array(
							array(
								'title' => 'Base Inputs',
								'page' => 'components/forms/controls/base'
							),
							array(
								'title' => 'Checkbox & Radio',
								'page' => 'components/forms/controls/checkbox-radio'
							),
							array(
								'title' => 'Switch',
								'page' => 'components/forms/controls/switch'
							),
							array(
								'title' => 'Input Groups',
								'page' => 'components/forms/controls/input-group'
							)
						)
					),
					array(
						'title' => 'Form Widgets',
						'desc' => '',
						'icon' => 'flaticon-interface-1',
						'bullet' => 'dot',
						'submenu' => array(
							array(
								'title' => 'Datepicker',
								'page' => 'components/forms/widgets/bootstrap-datepicker'
							),
							array(
								'title' => 'Datetimepicker',
								'page' => 'components/forms/widgets/bootstrap-datetimepicker'
							),
							array(
								'title' => 'Timepicker',
								'page' => 'components/forms/widgets/bootstrap-timepicker'
							),
							array(
								'title' => 'Daterangepicker',
								'page' => 'components/forms/widgets/bootstrap-daterangepicker'
							),
							array(
								'title' => 'Touchspin',
								'page' => 'components/forms/widgets/bootstrap-touchspin'
							),
							array(
								'title' => 'Maxlength',
								'page' => 'components/forms/widgets/bootstrap-maxlength'
							),
							array(
								'title' => 'Switch',
								'page' => 'components/forms/widgets/bootstrap-switch'
							),
							array(
								'title' => 'Multiple Select Splitter',
								'page' => 'components/forms/widgets/bootstrap-multipleselectsplitter'
							),
							array(
								'title' => 'Bootstrap Select',
								'page' => 'components/forms/widgets/bootstrap-select'
							),
							array(
								'title' => 'Select2',
								'page' => 'components/forms/widgets/select2'
							),
							array(
								'title' => 'Typeahead',
								'page' => 'components/forms/widgets/typeahead'
							),
							array(
								'title' => 'noUiSlider',
								'page' => 'components/forms/widgets/nouislider'
							),
							array(
								'title' => 'Ion Range Slider',
								'page' => 'components/forms/widgets/ion-range-slider'
							),
							array(
								'title' => 'Input Masks',
								'page' => 'components/forms/widgets/input-mask'
							),
							array(
								'title' => 'Summernote WYSIWYG',
								'page' => 'components/forms/widgets/summernote'
							),
							array(
								'title' => 'Markdown Editor',
								'page' => 'components/forms/widgets/bootstrap-markdown'
							),
							array(
								'title' => 'Autosize',
								'page' => 'components/forms/widgets/autosize'
							),
							array(
								'title' => 'Clipboard',
								'page' => 'components/forms/widgets/clipboard'
							),
							array(
								'title' => 'Dropzone',
								'page' => 'components/forms/widgets/dropzone'
							),
							array(
								'title' => 'Google reCaptcha',
								'page' => 'components/forms/widgets/recaptcha'
							)
						)
					),
					array(
						'title' => 'Form Layouts',
						'desc' => '',
						'icon' => 'flaticon-web',
						'bullet' => 'dot',
						'submenu' => array(
							array(
								'title' => 'Default Forms',
								'page' => 'components/forms/layouts/default-forms'
							),
							array(
								'title' => 'Multi Column Forms',
								'page' => 'components/forms/layouts/multi-column-forms'
							),
							array(
								'title' => 'Action Bars',
								'page' => 'components/forms/layouts/action-bars'
							)
						)
					),
					array(
						'title' => 'Form Validation',
						'desc' => '',
						'icon' => 'flaticon-calendar-2',
						'bullet' => 'dot',
						'submenu' => array(
							array(
								'title' => 'Validation States',
								'page' => 'components/forms/validation/states'
							),
							array(
								'title' => 'Form Controls',
								'page' => 'components/forms/validation/form-controls'
							),
							array(
								'title' => 'Form Widgets',
								'page' => 'components/forms/validation/form-widgets'
							)
						)
					)
				)
			),
			array(
				'title' => 'Datatables',
				'desc' => '',
				'icon' => 'flaticon-tabs',
				'bullet' => 'dot',
				'root' => true,
				'submenu' => array(
					array(
						'title' => 'Base',
						'desc' => '',
						'bullet' => 'dot',
						'submenu' => array(
							array(
								'title' => 'Local Data',
								'page' => 'components/datatables/base/data-local',
								'icon' => '',
							),	
							array(
								'title' => 'JSON Data',
								'page' => 'components/datatables/base/data-json',
								'icon' => '',
							),
							array(
								'title' => 'Ajax Data',
								'page' => 'components/datatables/base/data-ajax',
								'icon' => '',
							),													
							array(
								'title' => 'HTML Table',
								'page' => 'components/datatables/base/html-table',
								'icon' => '',
							),
							array(
								'title' => 'Record Selection',
								'page' => 'components/datatables/base/record-selection',
								'icon' => '',
							),
							array(
								'title' => 'Local Sort',
								'page' => 'components/datatables/base/local-sort',
								'icon' => '',
							),
							array(
								'title' => 'Column Rendering',
								'page' => 'components/datatables/base/column-rendering',
								'icon' => '',
							),
							array(
								'title' => 'Column Width',
								'page' => 'components/datatables/base/column-width',
								'icon' => '',
							),
							array(
								'title' => 'Responsive Columns',
								'page' => 'components/datatables/base/responsive-columns',
								'icon' => '',
							),
							array(
								'title' => 'Translation',
								'page' => 'components/datatables/base/translation',
								'icon' => '',
							)
							/*
							array(
								'title' => 'Themes',
								'page' => 'components/datatables/base/themes',
								'icon' => '',
							)
							*/
						)
					),
					array(
						'title' => 'Scrolling',
						'desc' => '',
						'bullet' => 'dot',
						'submenu' => array(
							array(
								'title' => 'Vertical Scrolling',
								'page' => 'components/datatables/scrolling/vertical',
								'icon' => ''
							),
							array(
								'title' => 'Horizontal Scrolling',
								'page' => 'components/datatables/scrolling/horizontal',
								'icon' => ''
							),
							array(
								'title' => 'Both Scrolling',
								'page' => 'components/datatables/scrolling/both',
								'icon' => ''
							)
						)
					),
					array(
						'title' => 'Locked Columns',
						'desc' => '',
						'bullet' => 'dot',
						'submenu' => array(
							array(
								'title' => 'Left Locked Columns',
								'page' => 'components/datatables/locked/left',
								'icon' => ''
							),
							array(
								'title' => 'Right Locked Columns',
								'page' => 'components/datatables/locked/right',
								'icon' => ''
							),
							array(
								'title' => 'Both Locked Columns',
								'page' => 'components/datatables/locked/both',
								'icon' => ''
							)
						)
					),
					array(
						'title' => 'Child Datatables',
						'desc' => '',
						'bullet' => 'dot',
						'submenu' => array(
							array(
								'title' => 'Local Data',
								'page' => 'components/datatables/child/data-local',
								'icon' => ''
							),
							array(
								'title' => 'Remote Data',
								'page' => 'components/datatables/child/data-ajax',
								'icon' => ''
							)
						)
					),
					array(
						'title' => 'API',
						'desc' => '',
						'bullet' => 'dot',
						'submenu' => array(
							array(
								'title' => 'API Methods',
								'page' => 'components/datatables/api/methods',
								'icon' => ''
							),
							array(
								'title' => 'Events',
								'page' => 'components/datatables/api/events',
								'icon' => ''
							)
						)
					)
				)
			),
			array(
				'title' => 'Portlets',
				'desc' => '',
				'icon' => 'flaticon-interface-1',
				'bullet' => 'dot',
				'root' => true,
				'submenu' => array(
					array(
						'title' => 'Base Portlets',
						'page' => 'components/portlets/base'
					),
					array(
						'title' => 'Advanced Portlets',
						'page' => 'components/portlets/advanced'
					),					
					array(
						'title' => 'Creative Portlets',
						'page' => 'components/portlets/creative'
					),
					array(
						'title' => 'Tabbed Portlets',
						'page' => 'components/portlets/tabbed'
					),
					array(
						'title' => 'Draggable Portlets',
						'page' => 'components/portlets/draggable'
					),
					array(
						'title' => 'Portlet Tools',
						'page' => 'components/portlets/tools'
					)
				)
			),
			array(
				'title' => 'Widgets',
				'desc' => 'dashboard widget examples',
				'icon' => 'flaticon-network',
				'root' => true,
				'bullet' => 'dot',
				'submenu' => array(
					array(
						'title' => 'General Widgets',
						'page' => 'components/widgets/general'
					),
					array(
						'title' => 'Chart Widgets',
						'page' => 'components/widgets/chart'
					)
				)
			),
			array(
				'title' => 'Calendar',
				'desc' => '',
				'icon' => 'flaticon-calendar',
				'bullet' => 'dot',
				'root' => true,
				'submenu' => array(
					array(
						'title' => 'Basic Calendar',
						'page' => 'components/calendar/basic'
					),
					array(
						'title' => 'List Views',
						'page' => 'components/calendar/list-view'
					),
					array(
						'title' => 'Google Calendar',
						'page' => 'components/calendar/google'
					),
					array(
						'title' => 'External Events',
						'page' => 'components/calendar/external-events'
					),
					array(
						'title' => 'Background Events',
						'page' => 'components/calendar/background-events'
					)
				)
			),
			array(
				'title' => 'Charts',
				'icon' => 'flaticon-diagram',
				'root' => true,
				'bullet' => 'dot',
				'submenu' => array(
					array(
						'title' => 'amCharts',
						'bullet' => 'dot',
						'submenu' => array(
							array(
								'title' => 'amCharts Charts',
								'page' => 'components/charts/amcharts/charts'
							),
							array(
								'title' => 'amCharts Stock Charts',
								'page' => 'components/charts/amcharts/stock-charts'
							),
							array(
								'title' => 'amCharts Maps',
								'page' => 'components/charts/amcharts/maps'
							)
						)
					),
					array(
						'title' => 'Flot Charts',
						'page' => 'components/charts/flotcharts'
					),
					array(
						'title' => 'Google Charts',
						'page' => 'components/charts/google-charts'
					),
					array(
						'title' => 'Morris Charts',
						'page' => 'components/charts/morris-charts'
					)
				)
			),
			array(
				'title' => 'Maps',
				'icon' => 'flaticon-placeholder-1',
				'root' => true,
				'bullet' => 'dot',
				'submenu' => array(
					array(
						'title' => 'Google Maps',
						'page' => 'components/maps/google-maps'
					),
					array(
						'title' => 'JQVMap',
						'page' => 'components/maps/jqvmap'
					),
					/*
					array(
						'title' => 'jVectorMap',
						'page' => 'components/maps/jvectormap'
					)
					*/
				)
			),
			array(
				'title' => 'Utils',
				'desc' => '',
				'icon' => 'flaticon-signs-2',
				'bullet' => 'dot',
				'root' => true,
				'submenu' => array(
					array(
						'title' => 'Session Timeout',
						'page' => 'components/utils/session-timeout'
					),
					array(
						'title' => 'Idle Timer',
						'page' => 'components/utils/idle-timer'
					)
				)
			),

			// Tools			
			array(
				'section' => 'Tools',
				'visible' => 'preview'
			),
			array(
				'title' => 'Layout Builder',
				'root' => true,
				'icon' => 'flaticon-settings',
				'page' => 'builder',
				'visible' => 'preview',
			),

			// Snippets
			array(
				'section' => 'Snippets',
			),
			/*
			array(
				'title' => 'Forms',
				'desc' => 'Datatables examples',
				'root' => true,
				'icon' => 'flaticon-interface-3',
				'bullet' => 'dot',
				'submenu' => array(
					array(
						'title' => 'Basic Forms',
						'page' => 'crud/forms/basic',
						'icon' => '',
					),
					array(
						'title' => 'Advanced Forms',
						'page' => 'crud/forms/advanced',
						'icon' => '',
					),
					array(
						'title' => 'Step Forms',
						'page' => 'crud/forms/step',
						'icon' => '',
					)
				)
			),
			*/
			array(
				'title' => 'Custom Pages',
				'desc' => 'Custom page samples',
				'root' => true,
				'icon' => 'flaticon-suitcase',
				'bullet' => 'dot',
				'submenu' => array(
					array(
						'title' => 'User Pages',
						'bullet' => 'dot',
						'submenu' => array(
							array(
								'title' => 'Login - 1',
								'page' => 'snippets/pages/user/login-1',
								'new-tab' => true 
							),
							array(
								'title' => 'Login - 2',
								'page' => 'snippets/pages/user/login-2',
								'new-tab' => true
							),
							array(
								'title' => 'Login - 3',
								'page' => 'snippets/pages/user/login-3',
								'new-tab' => true
							),
							array(
								'title' => 'Login - 4',
								'page' => 'snippets/pages/user/login-4',
								'new-tab' => true
							),
							array(
								'title' => 'Login - 5',
								'page' => 'snippets/pages/user/login-5',
								'new-tab' => true
							)
						)
					),
					array(
						'title' => 'Error Pages',
						'bullet' => 'dot',
						'submenu' => array(
							array(
								'title' => 'Error 1',
								'page' => 'snippets/pages/errors/error-1',
								'new-tab' => true 
							),
							array(
								'title' => 'Error 2',
								'page' => 'snippets/pages/errors/error-2',
								'new-tab' => true 
							),
							array(
								'title' => 'Error 3',
								'page' => 'snippets/pages/errors/error-3',
								'new-tab' => true 
							),
							array(
								'title' => 'Error 4',
								'page' => 'snippets/pages/errors/error-4',
								'new-tab' => true 
							),
							array(
								'title' => 'Error 5',
								'page' => 'snippets/pages/errors/error-5',
								'new-tab' => true 
							),
							array(
								'title' => 'Error 6',
								'page' => 'snippets/pages/errors/error-6',
								'new-tab' => true 
							)
						)
					)
				)
			)
		)
	)
);