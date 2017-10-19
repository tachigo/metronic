<?php
//** Menu Configs

$_CONFIG['demos']['demo5']['menu'] = array(
	// Header menu
	'header' => array(
		'self' => array(
			//'bullet' => 'line',
		),

		'items' => array(
			array(
				'title' => 'Dashboard',
				'root' => true,
				'icon-' => 'flaticon-notes',
				'page' => 'index',
				'here' => true
			),

			array(
				'title' => 'Actions',
				'root' => true,
				'icon-' => 'flaticon-add',
				'toggle' => 'click',
				'here' => true,
				'submenu' => array(
					'type' => 'classic', 
					'alignment' => 'left',
					'pull' => false,
					'items' => array(
						array(
							'title' => 'Layout Builder',
							'page' => 'builder',
							'icon' => 'flaticon-file',
							'custom-class' => 'm-animate-blink',
							'visible' => 'preview'
						),
						array(
							'title' => 'Generate Reports',
							'page' => 'inner',
							'icon' => 'flaticon-diagram',
							'badge' => array(
								'type' => 'm-badge--success',
								'value' => '2'
							)
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
										'page' => 'inner',
										'redirect' => true,
										'icon' => '',
									),
									array(
										'title' => 'Pending Orders',
										'page' => 'inner',
										'redirect' => true,
										'icon' => '',
									),
									array(
										'title' => 'Processed Orders',
										'page' => 'inner',
										'redirect' => true,
										'icon' => '',
									),
									array(
										'title' => 'Delivery Reports',
										'page' => 'inner',
										'redirect' => true,
										'icon' => '',
									),
									array(
										'title' => 'Payments',
										'page' => 'inner',
										'redirect' => true,
										'icon' => '',
									),
									array(
										'title' => 'Customers',
										'page' => 'inner',
										'redirect' => true,
										'icon' => '',
									)
								)
							)
						),
						array(
							'title' => 'Customer Feedbacks',
							'icon' => 'flaticon-chat-1',
							'redirect' => true,
							'submenu' => array(
								'type' => 'classic',
								'alignment' => 'right',
								'bullet' => 'dot',								
								'items' => array(
									array(
										'title' => 'Customer Feedbacks',
										'page' => 'inner',
										'icon' => '',
										'redirect' => true,
									),
									array(
										'title' => 'Supplier Feedbacks',
										'page' => 'inner',
										'icon' => '',
										'redirect' => true,
									),
									array(
										'title' => 'Reviewed Feedbacks',
										'page' => 'inner',
										'icon' => '',
										'redirect' => true,
									),
									array(
										'title' => 'Resolved Feedbacks',
										'page' => 'inner',
										'icon' => '',
										'redirect' => true,
									),
									array(
										'title' => 'Feedback Reports',
										'page' => 'inner',
										'icon' => '',
										'redirect' => true,
									)
								)
							)
						),
						array(
							'title' => 'Register Member',
							'page' => 'inner',
							'redirect' => true,
							'icon' => 'flaticon-users',
						)
					)
				)
			),

			array(
				'title' => 'Reports',
				'root' => true,
				'icon-' => 'flaticon-line-graph',
				'toggle' => 'click',
				'here' => true,
				'redirect' => true,
				'submenu' => array(
					'type' => 'mega',
					'width' => '600px',  // e.g: 600px|fixed-xl|fixed-xxl|auto
					'alignment' => 'left',
					'pull' => false,
					'columns' => array(
						array(
							'heading' => array(
								'heading' => true,
								'title' => 'Finance Reports',
							),
							'items' => array(
								array(
									'title' => 'Annual Reports',
									'page' => 'inner',
									'redirect' => true,
									'icon' => 'flaticon-map'
								),
								array(
									'title' => 'HR Reports',
									'page' => 'inner',
									'redirect' => true,
									'icon' => 'flaticon-user'
								),
								array(
									'title' => 'IPO Reports',
									'page' => 'inner',
									'redirect' => true,
									'icon' => 'flaticon-clipboard'
								),
								array(
									'title' => 'Finance Margins',
									'page' => 'inner',
									'redirect' => true,
									'icon' => 'flaticon-graphic-1'
								),
								array(
									'title' => 'Revenue Reports',
									'page' => 'inner',
									'redirect' => true,
									'icon' => 'flaticon-graphic-2'
								)
							)
						),
						array(
							'bullet' => 'line',
							'heading' => array(
								'heading' => true,
								'title' => 'Project Reports'
							),
							'items' => array(
								array(
									'title' => 'Coca Cola CRM',
									'page' => 'inner',
									'redirect' => true,
									'icon' => ''
								),
								array(
									'title' => 'Delta Airlines Booking Site',
									'page' => 'inner',
									'redirect' => true,
									'icon' => 'icons8-calendar'
								),
								array(
									'title' => 'Malibu Accounting',
									'page' => 'inner',
									'redirect' => true,
									'icon' => 'icons8-calendar'
								),
								array(
									'title' => 'Vineseed Website Rewamp',
									'page' => 'inner',
									'redirect' => true,
									'icon' => 'icons8-calendar'
								),
								array(
									'title' => 'Zircon Mobile App',
									'page' => 'inner',
									'redirect' => true,
									'icon' => 'icons8-calendar'
								),
								array(
									'title' => 'Mercury CMS',
									'page' => 'inner',
									'redirect' => true,
									'icon' => 'icons8-calendar'
								)
							)
						)
					)
				)
			),

			array(
				'title' => 'Orders',
				'root' => true,
				'icon-' => 'flaticon-line-graph',
				'toggle' => 'click',
				'here' => true,
				'redirect' => true,
				'submenu' => array(
					'type' => 'mega',
					'width' => 'fixed-xl',
					'alignment' => 'center',
					'columns' => array(
						array(
							'heading' => array(
								'heading' => true,
								'title' => 'Finance Reports',
							),
							'items' => array(
								array(
									'title' => 'Annual Reports',
									'page' => 'inner',
									'redirect' => true,
									'icon' => 'flaticon-map'
								),
								array(
									'title' => 'HR Reports',
									'page' => 'inner',
									'redirect' => true,
									'icon' => 'flaticon-user'
								),
								array(
									'title' => 'IPO Reports',
									'page' => 'inner',
									'redirect' => true,
									'icon' => 'flaticon-clipboard'
								),
								array(
									'title' => 'Finance Margins',
									'page' => 'inner',
									'redirect' => true,
									'icon' => 'flaticon-graphic-1'
								),
								array(
									'title' => 'Revenue Reports',
									'page' => 'inner',
									'redirect' => true,
									'icon' => 'flaticon-graphic-2'
								)
							)
						),
						array(
							'bullet' => 'line',
							'heading' => array(
								'heading' => true,
								'title' => 'Project Reports'
							),
							'items' => array(
								array(
									'title' => 'Coca Cola CRM',
									'page' => 'inner',
									'redirect' => true,
									'icon' => ''
								),
								array(
									'title' => 'Delta Airlines Booking Site',
									'page' => 'inner',
									'redirect' => true,
									'icon' => 'icons8-calendar'
								),
								array(
									'title' => 'Malibu Accounting',
									'page' => 'inner',
									'redirect' => true,
									'icon' => 'icons8-calendar'
								),
								array(
									'title' => 'Vineseed Website Rewamp',
									'page' => 'inner',
									'redirect' => true,
									'icon' => 'icons8-calendar'
								),
								array(
									'title' => 'Zircon Mobile App',
									'page' => 'inner',
									'redirect' => true,
									'icon' => 'icons8-calendar'
								),
								array(
									'title' => 'Mercury CMS',
									'page' => 'inner',
									'redirect' => true,
									'icon' => 'icons8-calendar'
								)
							)
						),
						array(
							'bullet' => 'dot',
							'heading' => array(
								'heading' => true,
								'title' => 'HR Reports'
							),
							'items' => array(
								array(
									'title' => 'Staff Directory',
									'page' => 'inner',
									'redirect' => true,
									'icon' => ''
								),
								array(
									'title' => 'Client Directory',
									'page' => 'inner',
									'redirect' => true,
									'icon' => ''
								),
								array(
									'title' => 'Salary Reports',
									'page' => 'inner',
									'redirect' => true,
									'icon' => ''
								),
								array(
									'title' => 'Staff Payslips',
									'page' => 'inner',
									'redirect' => true,
									'icon' => ''
								),
								array(
									'title' => 'Corporate Expenses',
									'page' => 'inner',
									'redirect' => true,
									'icon' => ''
								),
								array(
									'title' => 'Project Expenses',
									'page' => 'inner',
									'redirect' => true,
									'icon' => ''
								)
							)
						),
						array(
							'heading' => array(
								'heading' => true,
								'title' => 'Reporting Apps',
								'icon' => ''
							),
							'items' => array(
								array(
									'title' => 'Report Adjusments',
									'page' => 'inner',
									'redirect' => true,
									'icon' => ''
								),
								array(
									'title' => 'Sources & Mediums',
									'page' => 'inner',
									'redirect' => true,
									'icon' => ''
								),
								array(
									'title' => 'Reporting Settings',
									'page' => 'inner',
									'redirect' => true,
									'icon' => ''
								),
								array(
									'title' => 'Conversions',
									'page' => 'inner',
									'redirect' => true,
									'icon' => ''
								),
								array(
									'title' => 'Report Flows',
									'page' => 'inner',
									'redirect' => true,
									'icon' => ''
								),
								array(
									'title' => 'Audit & Logs',
									'page' => 'inner',
									'redirect' => true,
									'icon' => ''
								)
							)
						)
					)
				)
			),

			array(
				'title' => '',
				'root' => true,
				'icon' => 'flaticon-more-v3',
				'toggle' => 'click',
				'arrow' => false,
				'custom-class' => 'm-menu__item--more',
				'icon-only' => true,
				'here' => true,
				'redirect' => true,
				'submenu' => array(
					'type' => 'classic',
					'alignment' => 'left',
					'pull' => true,
					'items' => array(
						array(
							'title' => 'eCommerce',
							'page' => 'inner',
							'icon' => 'flaticon-business',
							'redirect' => true,
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
										'page' => 'inner',
										'redirect' => true,
										'icon' => 'flaticon-users',
									),
									array(
										'title' => 'User Explorer',
										'page' => 'inner',
										'redirect' => true,
										'icon' => 'flaticon-interface-1',
									),
									array(
										'title' => 'Users Flows',
										'page' => 'inner',
										'redirect' => true,
										'icon' => 'flaticon-lifebuoy',
									),
									array(
										'title' => 'Market Segments',
										'page' => 'inner',
										'redirect' => true,
										'icon' => 'flaticon-graphic-1',
									),
									array(
										'title' => 'User Reports',
										'page' => 'inner',
										'redirect' => true,
										'icon' => 'flaticon-graphic',
									)
								)
							)
						),
						array(
							'title' => 'Marketing',
							'page' => 'inner',
							'redirect' => true,
							'icon' => 'flaticon-map',
						),
						array(
							'title' => 'Campaigns',
							'page' => 'inner',
							'redirect' => true,
							'icon' => 'flaticon-graphic-2',
							'badge' => array(
								'type' => 'm-badge--success',
								'value' => '3'
							)
						),
						array(
							'title' => 'Cloud Manager',
							'redirect' => true,
							'icon' => 'flaticon-infinity',
							'submenu' => array(
								'type' => 'classic',
								'alignment' => 'left',
								'items' => array(
									array(
										'title' => 'File Upload',
										'page' => 'inner',
										'redirect' => true,
										'icon' => 'flaticon-add',
										'badge' => array(
											'type' => 'm-badge--danger',
											'value' => '3'
										)
									),
									array(
										'title' => 'File Attributes',
										'page' => 'inner',
										'redirect' => true,
										'icon' => 'flaticon-signs-1',
									),
									array(
										'title' => 'Folders',
										'page' => 'inner',
										'redirect' => true,
										'icon' => 'flaticon-folder',
									),
									array(
										'title' => 'System Settings',
										'page' => 'inner',
										'redirect' => true,
										'icon' => 'flaticon-cogwheel-2',
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
			'bullet' => 'dot',
		),

		'items' => array(
			array(
				'section' => 'Departments',
			),
			array(
				'title' => 'Resources',
				'desc' => '',
				'icon' => 'flaticon-layers',
				'bullet' => 'dot',
				'root' => true,
				'submenu' => array(
					array(
						'title' => 'Layout Builder',
						'page' => 'builder',
						'icon' => 'flaticon-file',
						'custom-class' => 'm-animate-blink',
						'visible' => 'preview'
					),					
					array(
						'title' => 'Timesheet',
						'page' => 'inner',
						'redirect' => true,
					),
					array(
						'title' => 'Payroll',
						'page' => 'inner',
						'redirect' => true,
					),
					array(
						'title' => 'Contacts',
						'page' => 'inner',
						'redirect' => true,
					)
				)
			),
			array(
				'title' => 'Finance',
				'root' => true,
				'icon' => 'flaticon-suitcase',
				'page' => 'inner',
				'redirect' => true,
			),
			array(
				'title' => 'Support',
				'root' => true,
				'icon' => 'flaticon-graphic-1',
				'redirect' => true,
				'submenu' => array(
					array(
						'title' => 'Reports',
						'page' => 'inner',
						'redirect' => true,
					),
					array(
						'title' => 'Cases',
						'redirect' => true,
						'submenu' => array(
							array(
								'title' => 'Pending',
								'page' => 'inner',
								'redirect' => true,
							),
							array(
								'title' => 'Urgent',
								'page' => 'inner',
								'redirect' => true,
							),
							array(
								'title' => 'Done',
								'page' => 'inner',
								'redirect' => true,
							),
							array(
								'title' => 'Archive',
								'page' => 'inner',
								'redirect' => true,
							)
						)
					),
					array(
						'title' => 'Clients',
						'page' => 'inner',
						'redirect' => true,
					),
					array(
						'title' => 'Audit',
						'page' => 'inner',
						'redirect' => true,
					)
				)
			),
			array(
				'title' => 'Administration',
				'root' => true,
				'icon' => 'flaticon-light',
				'page' => 'inner',
				'redirect' => true,
			),
			array(
				'title' => 'Management',
				'root' => true,
				'icon' => 'flaticon-share',
				'page' => 'inner',
				'redirect' => true,
			),
			array(
				'section' => 'Reports',
			),
			array(
				'title' => 'Accounting',
				'root' => true,
				'icon' => 'flaticon-graphic',
				'page' => 'inner',
				'redirect' => true,
			),
			array(
				'title' => 'Products',
				'root' => true,
				'icon' => 'flaticon-network',
				'page' => 'inner',
				'redirect' => true,
			),
			array(
				'title' => 'Sales',
				'root' => true,
				'icon' => 'flaticon-network',
				'page' => 'inner',
				'redirect' => true,
			),
			array(
				'title' => 'IPO',
				'root' => true,
				'icon' => 'flaticon-technology',
				'page' => 'inner',
				'redirect' => true
			)
		)
	)
);