<?php
//** Demo Layout Configs

$_CONFIG['demos']['demo5']['layout'] = array(
	//**begin:: Mandatory Config **//
	//== Base Layout
	'self' => array(
		'layout' => 'wide'
	),

	//== Page Loader
	'loader' => array(
		'enabled' => false,
		'type' => ''
	),

	//== Angular version
	'angular' => array(
		'loader' => array(
			'type' => 'spinner-message'  //default|spinner-message
		),
		'content' => array(
			'animation' => 'm-fade-in-up'
		)
	),
	//**end:: Mandatory Config **//

	//== Header
	'header' => array(
		'self' => array(
			'fixed' => array(
				'desktop' => true,
				'mobile' => true,

				// minimize mode
				'minimize' => array(
					'desktop' => 'minimize',
					'mobile' => false
				),			

				// minimize offset
				'minimize-offset' => array(
					'desktop' => '200',
					'mobile' => '200'
				)
			)
		),

		'search' => array(
			'type' => 'search-dropdown', // options: search-default|search-dropdown
			'skin' => 'light',
			'dropdown' => array(
				'skin' => 'light',
			)
		)
	),

	//== Aside
	'aside' => array(
		'left' => array(
			'display' => true, // display or hide
			'fixed' => false, // fixed layout
			'skin' => 'light', // aside skin: dark|light
			'push_footer' => true, // push footer bottom below the left aside

			// minimize toggle
			'minimize' => array( 
				'toggle' => true, // allow toggle
				'default' => false // default state
			),

			// hide toggle
			'hide' => array(
				'toggle' => false, // allow toggle
				'default' => false // default state
			),

			// offcanvas mode
			'offcanvas' => array(
				'default' => false // default state
			)
		),
		'right' => array(
			'display' => false, // display or hide
		),
		'mobile' => array(
			'display' => true, // display or hide
			'skin' => 'dark',
		)
	),

	//== Menus
	'menu' => array(
		// header menu desktop mode
		'header_desktop' => array(
			'display' => true,
			'skin' => 'dark',
			'arrow' => true,
			'submenu' => array(				
				'skin' => 'light',
				'arrow' => true,
			)
		),

		// header menu mobile mode
		'header_mobile' => array(
			'display' => true,
			'skin' => 'light',
			'submenu' => array(
				'skin' => 'light',
				'arrow' => 'default', // default/plus-minus/plus-minus-square, plus-minus-circle
				'bullet' => 'line', //false/dot/line,
				'accordion' => true
			),
		),

		// left aside menu
		'aside' => array(
			'display' => true,
			'dropdown' => false, // ok
			'scrollable' => false, // ok
			'submenu' => array(
				'arrow' => 'default', // default/plus-minus/plus-minus-square, plus-minus-circle
				'bullet' => 'line', //false/dot/line,
				'skin' => 'inherit', // default/light
				//'accordion' => true, //
				'dropdown' => array(
					'arrow' => true,
					'hover-timeout' => 500 // in milliseconds
				)
			),
			'minimize' => array(
				'submenu-type' => 'default' // default/compact
			)
		)
	),

	//== Content
	'content' => array(
		'portlet' => array(
			'air' => true
		)
	),

	//== Footer
	'footer' => array(
		'type' => 'default',
		'skin' => 'light',
		'fixed' => false
	),

	//== Quick Sidebar
	'quick-sidebar' => array(
		'display' => true, // display or hide
		'skin' => 'light',
		'layout' => 'layout/quick-sidebar'		
	)	
);
