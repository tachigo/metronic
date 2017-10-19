<?php
//** Demo Base Config

$_CONFIG[ 'demos' ][ 'demo2' ][ 'demo' ] = array(
	//== Base settings
	'debug' => true,

	//== Demo assets
	'resources' => array(
		'favicon' => 'assets/demo/demo2/media/img/logo/favicon.ico',
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
			'assets/demo/demo2/base/style.bundle.css',
		),
		'js' => array(
			'assets/vendors/base/vendors.bundle.js',
			'assets/demo/demo2/base/scripts.bundle.js',
		)
	)	
);