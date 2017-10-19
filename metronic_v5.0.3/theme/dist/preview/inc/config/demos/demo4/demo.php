<?php
//** Demo Base Config

$_CONFIG[ 'demos' ][ 'demo4' ][ 'demo' ] = array(
	//== Base settings
	'debug' => true,

	//== Demo assets
	'resources' => array(
		'favicon' => 'assets/demo/demo4/media/img/logo/favicon.ico',
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
			'assets/demo/demo4/base/style.bundle.css',
		),
		'js' => array(
			'assets/vendors/base/vendors.bundle.js',
			'assets/demo/demo4/base/scripts.bundle.js',
		)
	)	
);