<?php

class TsModule extends TsFile {
	public $import = array();
	public $metaname = 'NgModule';
	public $metadata = array();
	public $filename;
	public $name = '';
	public $suffix = 'Module';

	function __construct( $filename = '' ) {
		$this->filename = $filename;
		$this->import   = array(
			'@angular/core' => array( 'NgModule' ),
		);
		$this->metadata = array(
			'imports'   => array(),
			'exports'   => array( 'RouterModule' ),
			'providers' => array(),
		);
	}
}