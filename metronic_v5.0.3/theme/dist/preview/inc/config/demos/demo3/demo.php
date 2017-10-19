<?php
//** Demo Base Config

$_CONFIG[ 'demos' ][ 'demo3' ][ 'demo' ] = array(
	// base settings
	'debug' => true,
	
	// demo assets
	'resources' => array(
		'favicon' => 'assets/demo/demo3/media/img/logo/favicon.ico',
		'fonts' => array(
			'google' => array(
				'families' => array(
					'Montserrat:300,400,500,600,700',
					'Roboto:300,400,500,600,700'
				)
			)
		),
		'css' => array(
			'assets/vendors/base/vendors.bundle.css',
			'assets/demo/demo3/base/style.bundle.css',
		),
		'js' => array(
			'assets/vendors/base/vendors.bundle.js',
			'assets/demo/demo3/base/scripts.bundle.js',
		),
	)
);