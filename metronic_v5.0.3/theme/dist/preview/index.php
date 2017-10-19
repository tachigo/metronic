<?php
session_start();

include('inc/init.php');

$request = array();
$request['dev'] = true;
$request['page'] = isset($_REQUEST['page']) ? $_REQUEST['page'] : 'index';
$request['demo'] = isset($_REQUEST['demo']) ? $_REQUEST['demo'] : 'default';
$request['type'] = 'preview';

if (isset($_REQUEST['builder'])) {
	$_SESSION['demos'][$request['demo']]['builder'] = $_REQUEST['builder'];
}

if (isset($_SESSION['demos'][$request['demo']]['builder'])) {
	$request['builder'] = $_SESSION['demos'][$request['demo']]['builder'];
}

if (isset($_REQUEST['builder_reset']) && isset($_SESSION['demos']) && isset($_SESSION['demos'][$request['demo']])) {
	unset($_SESSION['demos'][$request['demo']]);
	unset($request['builder']);
}

if ( isset( $_REQUEST[ 'builder_export_angular' ] ) ) {
	include __DIR__ . '/../../../tools/builder/angular-generate.php';
	exit;
}

if ( isset( $_REQUEST[ 'builder_export_html' ] ) ) {
	include __DIR__ . '/../../../tools/builder/html-export.php';
	HtmlExportGenerate::getZip( $request[ 'demo' ] );
}

if ( isset( $_REQUEST[ 'builder_export_html_static' ] ) ) {
	include __DIR__ . '/../../../tools/builder/html-generate.php';
	exit;
}

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	$request['ajax'] = true;
}

$_CONFIG['main']['request'] = $request;

Util::init();
Page::run();