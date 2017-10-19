<?php
//** Pages Configs

$_CONFIG[ 'demos' ][ 'demo4' ][ 'pages' ] = array(
	'index' => array(
		'page' => array(
			'title' => 'Dashboard',
			'desc' => 'latest updates and statistic charts'
		),
		'layout' => array(// override here
			'aside' => array(
				'left' => array(
					'display' => false
				)
			)
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

	'inner' => array(
		'page' => array(
			'title' => 'Dashboard',
			'desc' => 'latest updates and statistic charts'
		),
		// demo custom scripts
		'app' => array(
			'js' => array(
				'js/dashboard.js'
			)
		),
		'view' => 'inner'
	),

	'profile' => array(
		'page' => array(
			'title' => 'My Profile',
			'desc' => 'user profile view and edit'
		),
		'view' => 'profile'
	), 

	'builder' => array(
		'visible' => 'preview',
		'page' => array(
			'title' => 'Layout Builder',
			'desc' => 'layout builder'
		),
		'app' => array(
			'js' => array(
				'js/layout-builder.js'
			)
		),
		'view' => 'builder',
	)
);