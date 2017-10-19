<?php
//** Demo Layout Configs

$_CONFIG['demos']['demo4']['layout'] = array(
	//**begin:: Mandatory Config **//
	//== Base Layout
	'self' => array(
		'layout' => 'boxed'
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
				'desktop' => false,
				'mobile' => false
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
			'push_footer' => false, // push footer bottom below the left aside

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
			'skin' => 'light',
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
		'fixed' => array(
			'mobile' => false,
			'desktop' => true
		),
		'portlet' => array(
			'air' => true,
			'rounded' => true
		)
	),

	//== Footer
	'footer' => array(
		'type' => 'default'
	),

	//== Quick Sidebar
	'quick-sidebar' => array(
		'display' => true, // display or hide
		'skin' => 'light',
		'layout' => 'layout/quick-sidebar'		
	)	
);
