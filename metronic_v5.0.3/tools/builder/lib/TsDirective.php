<?php

class TsDirective extends TsFile {
	public $const = array();
	public $import = array();
	public $metaname = 'Directive';
	public $metadata = array();
	public $filename;
	public $name = '';
	public $suffix = 'Directive';

	function __construct( $filename = '' ) {
		$this->filename   = $filename;
		$this->import     = array(
			'@angular/core' => array( 'AfterViewInit', 'Directive', 'ElementRef' ),
		);
		$this->metadata   = array(
			'selector' => '', // wrap with []
		);
		$this->implements = array( 'AfterViewInit' );
		$this->methods    = array(
			'constructor'     => array(
				'params'  => 'private el: ElementRef',
				'content' => '',
				'return'  => '',
			),
			'ngAfterViewInit' => array(
				'content' => '',
				'return'  => '',
			),
		);
	}
}