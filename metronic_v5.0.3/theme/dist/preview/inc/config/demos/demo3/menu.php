<?php
//** Menu Configs

$_CONFIG['demos']['demo3']['menu'] = array(

	// Header menu
	'header' => array(
		'self' => array(
			//'bullet' => 'line',
		),

		'items' => array(
			array(
				'title' => 'Actions',
				'root' => true,
				//'icon' => 'flaticon-add',
				'toggle' => 'click',
				'submenu' => array(
					'type' => 'classic',
					'alignment' => 'left',
					'items' => array(
						array(
							'title' => 'Create New Post',
							'page' => 'inner',
							'icon' => 'flaticon-file',
						),
						array(
							'title' => 'Generate Reports',
							'page' => 'inner',
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
										'page' => 'inner',
										'icon' => '',
										'redirect' => true
									),
									array(
										'title' => 'Pending Orders',
										'page' => 'inner',
										'icon' => '',
										'redirect' => true
									),
									array(
										'title' => 'Processed Orders',
										'page' => 'inner',
										'icon' => '',
										'redirect' => true
									),
									array(
										'title' => 'Delivery Reports',
										'page' => 'inner',
										'icon' => '',
										'redirect' => true
									),
									array(
										'title' => 'Payments',
										'page' => 'inner',
										'icon' => '',
										'redirect' => true
									),
									array(
										'title' => 'Customers',
										'page' => 'inner',
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
										'page' => 'inner',
										'icon' => '',
										'redirect' => true
									),
									array(
										'title' => 'Supplier Feedbacks',
										'page' => 'inner',
										'icon' => '',
										'redirect' => true
									),
									array(
										'title' => 'Reviewed Feedbacks',
										'page' => 'inner',
										'icon' => '',
										'redirect' => true
									),
									array(
										'title' => 'Resolved Feedbacks',
										'page' => 'inner',
										'icon' => '',
										'redirect' => true
									),
									array(
										'title' => 'Feedback Reports',
										'page' => 'inner',
										'icon' => '',
										'redirect' => true
									)
								)
							)
						),
						array(
							'title' => 'Register Member',
							'page' => 'inner',
							'icon' => 'flaticon-users',
							'redirect' => true
						)
					)
				)
			),
			array(
				'title' => 'Reports',
				'root' => true,
				//'icon' => 'flaticon-line-graph',
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
							),
							'items' => array(
								array(
									'title' => 'Annual Reports',
									'page' => 'inner',
									'icon' => 'flaticon-map',
									'redirect' => true
								),
								array(
									'title' => 'HR Reports',
									'page' => 'inner',
									'icon' => 'flaticon-user',
									'redirect' => true
								),
								array(
									'title' => 'IPO Reports',
									'page' => 'inner',
									'icon' => 'flaticon-clipboard',
									'redirect' => true
								),
								array(
									'title' => 'Finance Margins',
									'page' => 'inner',
									'icon' => 'flaticon-graphic-1',
									'redirect' => true
								),
								array(
									'title' => 'Revenue Reports',
									'page' => 'inner',
									'icon' => 'flaticon-graphic-2',
									'redirect' => true
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
									'icon' => '',
									'redirect' => true
								),
								array(
									'title' => 'Delta Airlines Booking Site',
									'page' => 'inner',
									'icon' => 'icons8-calendar',
									'redirect' => true
								),
								array(
									'title' => 'Malibu Accounting',
									'page' => 'inner',
									'icon' => 'icons8-calendar',
									'redirect' => true
								),
								array(
									'title' => 'Vineseed Website Rewamp',
									'page' => 'inner',
									'icon' => 'icons8-calendar',
									'redirect' => true
								),
								array(
									'title' => 'Zircon Mobile App',
									'page' => 'inner',
									'icon' => 'icons8-calendar',
									'redirect' => true
								),
								array(
									'title' => 'Mercury CMS',
									'page' => 'inner',
									'icon' => 'icons8-calendar',
									'redirect' => true
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
									'icon' => '',
									'redirect' => true
								),
								array(
									'title' => 'Client Directory',
									'page' => 'inner',
									'icon' => '',
									'redirect' => true
								),
								array(
									'title' => 'Salary Reports',
									'page' => 'inner',
									'icon' => '',
									'redirect' => true
								),
								array(
									'title' => 'Staff Payslips',
									'page' => 'inner',
									'icon' => '',
									'redirect' => true
								),
								array(
									'title' => 'Corporate Expenses',
									'page' => 'inner',
									'icon' => '',
									'redirect' => true
								),
								array(
									'title' => 'Project Expenses',
									'page' => 'inner',
									'icon' => '',
									'redirect' => true
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
									'icon' => '',
									'redirect' => true
								),
								array(
									'title' => 'Sources & Mediums',
									'page' => 'inner',
									'icon' => '',
									'redirect' => true
								),
								array(
									'title' => 'Reporting Settings',
									'page' => 'inner',
									'icon' => '',
									'redirect' => true
								),
								array(
									'title' => 'Conversions',
									'page' => 'inner',
									'icon' => '',
									'redirect' => true
								),
								array(
									'title' => 'Report Flows',
									'page' => 'inner',
									'icon' => '',
									'redirect' => true
								),
								array(
									'title' => 'Audit & Logs',
									'page' => 'inner',
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
				//'icon' => 'flaticon-paper-plane',
				'toggle' => 'click',
				'badge' => array(
					'type' => 'm-badge--brand',
					'value' => '3'
				),
				'redirect' => true,
				'submenu' => array(
					'type' => 'classic',
					'alignment' => 'left',
					'items' => array(
						array(
							'title' => 'eCommerce',
							'page' => 'inner',
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
										'page' => 'inner',
										'icon' => 'flaticon-users',
										'redirect' => true
									),
									array(
										'title' => 'User Explorer',
										'page' => 'inner',
										'icon' => 'flaticon-interface-1',
										'redirect' => true
									),
									array(
										'title' => 'Users Flows',
										'page' => 'inner',
										'icon' => 'flaticon-lifebuoy',
										'redirect' => true
									),
									array(
										'title' => 'Market Segments',
										'page' => 'inner',
										'icon' => 'flaticon-graphic-1',
										'redirect' => true
									),
									array(
										'title' => 'User Reports',
										'page' => 'inner',
										'icon' => 'flaticon-graphic',
										'redirect' => true
									)
								)
							)
						),
						array(
							'title' => 'Marketing',
							'page' => 'inner',
							'icon' => 'flaticon-map',
							'redirect' => true
						),
						array(
							'title' => 'Campaigns',
							'page' => 'inner',
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
										'page' => 'inner',
										'icon' => 'flaticon-add',
										'redirect' => true,
										'badge' => array(
											'type' => 'm-badge--danger',
											'value' => '3'
										)
									),
									array(
										'title' => 'File Attributes',
										'page' => 'inner',
										'icon' => 'flaticon-signs-1',
										'redirect' => true
									),
									array(
										'title' => 'Folders',
										'page' => 'inner',
										'icon' => 'flaticon-folder',
										'redirect' => true
									),
									array(
										'title' => 'System Settings',
										'page' => 'inner',
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
				'here' => true
			),
			array(
				'title' => 'Layouts',
				'desc' => '',
				'icon' => 'flaticon-open-box',
				'bullet' => 'dot',
				'root' => true,
				'here' => true,
				'submenu' => array(
					array(
						'title' => 'Layout Builder',
						'page' => 'builder'
					),
					array(
						'title' => 'Boxed Layout',
						'page' => 'builder',
						'redirect' => true
					),
					array(
						'title' => 'Right Sidebar',
						'page' => 'builder',
						'redirect' => true
					),
					array(
						'title' => 'Fixed Footer',
						'page' => 'builder',
						'redirect' => true
					)
				)
			),
			array(
				'title' => 'Reports',
				'desc' => '',
				'icon' => 'flaticon-layers',
				'root' => true,
				'badge' => array(
					'type' => 'm-badge--danger',
					'value' => '2'
				),
				
				'here' => true,
				'submenu' => array(
					array(
						'title' => 'Finance Reports',
						'page' => 'inner',
						'icon' => 'flaticon-pie-chart'
					),
					array(
						'title' => 'Accouning Audit',
						'page' => 'inner',
						'redirect' => true,
						'icon' => 'flaticon-line-graph'
					),
					array(
						'title' => 'Investments',
						'page' => 'inner',
						'redirect' => true,
						'icon' => 'flaticon-statistics'
					),
					array(
						'title' => 'Sales',
						'page' => 'inner',
						'redirect' => true,
						'icon' => 'flaticon-coins'
					)
				)
			),
			array(
				'title' => 'Support',
				'desc' => '',
				'icon' => 'flaticon-lifebuoy',
				'bullet' => 'dot',
				'root' => true,
				'here' => true,
				
				'redirect' => true,
				'submenu' => array(
					array(
						'title' => 'Reports',
						'page' => 'inner',
						'redirect' => true
					),
					array(
						'title' => 'Cases',
						'redirect' => true,
						'submenu' => array(
							array(
								'title' => 'Pending',
								'page' => 'inner',
								'redirect' => true,
								'icon' => 'flaticon-computer',
								'badge' => array(
									'type' => 'm-badge--warning m-badge--wide',
									'value' => '10'
								)
							),
							array(
								'title' => 'Urgent',
								'page' => 'inner',
								'redirect' => true,
								'icon' => 'flaticon-signs-2',
								'badge' => array(
									'type' => 'm-badge--danger m-badge--wide',
									'value' => '6'
								)
							),
							array(
								'title' => 'Done',
								'page' => 'inner',
								'redirect' => true,
								'icon' => 'flaticon-clipboard',
								'badge' => array(
									'type' => 'm-badge--success m-badge--wide',
									'value' => '2'
								)
							),
							array(
								'title' => 'Archive',
								'page' => 'inner',
								'redirect' => true,
								'icon' => 'flaticon-multimedia-2',
								'badge' => array(
									'type' => 'm-badge--info m-badge--wide',
									'value' => '245'
								)
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
				'title' => 'Feedbacks',
				'desc' => '',
				'icon' => 'flaticon-share',
				'bullet' => 'dot',
				'here' => true,
				
				'redirect' => true,
				'submenu' => array(
					array(
						'title' => 'Product Feedbacks',
						'page' => 'inner',
						'redirect' => true,
						'badge' => array(
							'type' => 'm-badge--accent',
							'value' => '3'
						),
					),
					array(
						'title' => 'Customer Reviews',
						'page' => 'inner',
						'redirect' => true,
					),
					array(
						'title' => 'Product Ratings',
						'page' => 'inner',
						'redirect' => true,
					),
					array(
						'title' => 'Customer Support',
						'page' => 'inner',
						'redirect' => true,
					)
				)
			),
			array(
				'title' => 'Conversions',
				'desc' => '',
				'icon' => 'flaticon-network',
				'root' => true,
				'bullet' => 'line',
				'here' => true,
				
				'redirect' => true,
				'submenu' => array(
					array(
						'title' => 'Goals',
						'page' => 'inner',
						'redirect' => true,
					),
					array(
						'title' => 'Ecommerce',
						'page' => 'inner',
						'redirect' => true,
						'badge' => array(
							'type' => 'm-badge--warning m-badge--wide m-badge--rounded',
							'value' => 'new'
						),
					),
					array(
						'title' => 'Transactions',
						'page' => 'inner',
						'redirect' => true,
					),
					array(
						'title' => 'Funnels',
						'page' => 'inner',
						'redirect' => true,
					)
				)
			)
		)
	)
);