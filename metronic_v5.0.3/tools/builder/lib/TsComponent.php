<?php

class TsComponent extends TsFile {
	public $const = array();
	public $import = array();
	public $metaname = 'Component';
	public $metadata = array();
	public $filename;
	public $name = '';
	public $suffix = 'Component';

	function __construct( $filename = '' ) {
		$this->filename   = $filename;
		$this->import     = array(
			'@angular/core' => array( 'Component, OnInit', 'ViewEncapsulation' ),
		);
		$this->metadata   = array(
			'selector'      => '',
			'templateUrl'   => '', // must start with dot './'
			'styleUrls'     => array(),
			'encapsulation' => 'ViewEncapsulation.None',
		);
		$this->implements = array( 'OnInit' );
		$this->methods    = array(
			'constructor' => array(
				'params'  => '',
				'content' => '',
				'return'  => '',
			),
			'ngOnInit'    => array(
				'content' => '',
				'return'  => '',
			),
		);
	}
}