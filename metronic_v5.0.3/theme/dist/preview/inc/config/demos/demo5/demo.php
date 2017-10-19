<?php
//** Demo Base Config

$_CONFIG[ 'demos' ][ 'demo5' ][ 'demo' ] = array(
	// base settings
	'debug' => true,
	
	// demo assets
	'resources' => array(
		'favicon' => 'assets/demo/demo5/media/img/logo/favicon.ico',
		'fonts' => array(
			'google' => array(
				'families' => array(
					'Poppins:300,400,500,600,700',
					'Roboto:300,400,500,600,700'
				)
			)
		),
		'css' => array(
			'assets/vendors/base/vendors.bundle.css',
			'assets/demo/demo5/base/style.bundle.css',
		),
		'js' => array(
			'assets/vendors/base/vendors.bundle.js',
			'assets/demo/demo5/base/scripts.bundle.js',
		),
	)
);