<?php
//** Demo Base Config

$_CONFIG[ 'demos' ][ 'default' ][ 'demo' ] = array(
	// base settings
	'debug' => true,
	'generate_icon_pages' => true,
	// demo assets
	'resources' => array(
		'favicon' => 'assets/demo/default/media/img/logo/favicon.ico',
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
			'assets/demo/default/base/style.bundle.css',
		),
		'js' => array(
			'assets/vendors/base/vendors.bundle.js',
			'assets/demo/default/base/scripts.bundle.js',
		),
	),
	'regenerate_icon_pages' => true,
);