<?php

//ini_set( "xdebug.var_display_max_children", -1 );
//ini_set( "xdebug.var_display_max_data", -1 );
//ini_set( "xdebug.var_display_max_depth", -1 );
set_time_limit( -1 );

include_once __DIR__ . '/lib/ThemeBuilder.php';

class AngularGenerate extends ThemeBuilder {

	// preg for auth module
	const PREG_HTML_INPUT_NAME = '/<input.*?(name="(.*?)").*?>/';
	const PREG_HTML_FORM       = '/<form.*?>/';
	const PREG_HTML_BUTTON     = '/<button.*?>/';

	// main output path
	public static $outputPath = __DIR__ . '/../../theme/dist/angular/';
	// theme folder paths inside demo
	public static $themePath = 'theme/';

	// set base url for production
	public static $baseHref = '/';
	// angular app prefix
	public static $prefix = 'app';
	// lazyload enabled
	public static $lazyload = true;
	// extra node plugins to install
	public static $nodePlugins = array(
		'dependencies'    => array(
			'jquery'       => '^3.2.1', '@types/jquery' => '^3.2.6', 'enhanced-resolve' => '^3.3.0',
			'classlist.js' => '^1.1.20150312', '@ng-bootstrap/ng-bootstrap' => '^1.0.0-beta.3', 'primeng' => '^4.1.3',
			'ng-recaptcha' => '^3.0.0',
		),
		'devDependencies' => array( 'typescript-formatter' => '^5.2.0', ),
	);
	/*public static $dependencies = array(
		'styles' => array(
			'../node_modules/primeng/resources/primeng.css',
			'../node_modules/primeng/resources/themes/bootstrap/theme.css',
		),
	);*/
	// inline js
	public static $inlineJs   = array(
		// amcharts plugins
		'//www.amcharts.com/lib/3/amcharts.js', '//www.amcharts.com/lib/3/serial.js', '//www.amcharts.com/lib/3/themes/light.js', '//www.amcharts.com/lib/3/ammap.js', '//www.amcharts.com/lib/3/pie.js', '//www.amcharts.com/lib/3/radar.js', '//www.amcharts.com/lib/3/amstock.js', '//www.amcharts.com/lib/3/plugins/animate/animate.min.js',
		'//www.amcharts.com/lib/3/maps/js/usaLow.js', '//www.amcharts.com/lib/3/maps/js/worldLow.js', '//www.amcharts.com/lib/3/maps/js/worldHigh.js',
		// google chart plugins
		'//www.google.com/jsapi', "google.load('visualization', '1', {packages: ['corechart', 'bar', 'line']});",
		// google map dependencies
		'//maps.google.com/maps/api/js?key=AIzaSyDBGVDv5fOFgfW4ixNZL_2krgkriGu6vvc',
	);
	public static $loadOnceJs = array(
		'assets/vendors/custom/fullcalendar/fullcalendar.bundle.js'
	);
	// inline custom codes specify by page url path
	public static $customCode = array(
		'default' => array(
			'charts-google-charts'       => array(
				'const'   => array( 'declare let google: any;', 'declare let GoogleChartsDemo: any;' ),
				'methods' => array( 'ngAfterViewInit' => "google.load('visualization', '1', {packages: ['corechart', 'bar', 'line'], callback: GoogleChartsDemo.runDemos()});", ),
			),
			'aside-nav'                  => array(
				'methods' => array( 'ngAfterViewInit' => 'let menu = (<any>$(\'#m_aside_left\')).mMenu(); let item = $(menu).find(\'a[href="\' + window.location.pathname + \'"]\').parent(\'.m-menu__item\'); (<any>$(menu).data(\'menu\')).setActiveItem(item);' ),
			),
			'widgets-dropzone'           => array(
				'const'   => array( 'declare let Dropzone: any;' ),
				'methods' => array( 'ngAfterViewInit' => 'Dropzone._autoDiscoverFunction();' ),
			),
			'widgets-bootstrap-markdown' => array(
				'methods' => array( 'ngAfterViewInit' => '(<any>$(\'[data-provide="markdown"]\')).markdown();' ),
			),
		),
	);

	// keep component that already been declared in app.module
	public static $imported = array();
	// routes
	public static $routes = array();
	public static $themeRoutes = array();
	public static $bodyClass = array();
	// keep component name that already created
	public static $components = array();
	// class selector for full page
	public static $pageClass = '';
	// page html content
	public static $pagesContent = array();
	// global body class
	public static $globBodyClass = '';

	public static $moduleAppFile;
	public static $moduleRoutingFile;
	public static $moduleLayoutFile;

	public static function init() {
		// set which demo to generate
		if ( isset( $_REQUEST[ 'demo' ] ) ) {
			// proceed with this demo
			self::$demo = $_REQUEST[ 'demo' ];
		}

		self::run( function ( $config ) {
			self::$moduleAppFile     = self::getComponentPath( 'app.module.ts' );
			self::$moduleRoutingFile = self::getComponentPath( self::$themePath . 'theme-routing.module.ts' );

			// reset vars
			self::$imported      = array();
			self::$routes        = array();
			self::$themeRoutes   = array();
			self::$bodyClass     = array();
			self::$components    = array();
			self::$pagesContent  = array();
			self::$pageClass     = '';
			self::$globBodyClass = '';

			self::createApp();
			self::installPlugins();
			// self::angularExternalDependencies();

			// remove all old app components
			self::rmdir( self::getComponentPath() );

			// reset module files
			self::resetSystemFiles();

			self::createUnwrapDirective();
			self::createHrefDirective();

			// create auth module
			self::authModule( self::arrayPath( $config, 'pages/snippets/pages/user' ) );

			// create extra modules
			self::extraModules();

			// iterate all pages
			self::_iterates( $config[ 'pages' ] );

			foreach ( self::$pagesContent as $url => $html ) {
				// get body class
				self::$bodyClass[ '/' . $url ] = str_get_html( $html, false )->find( 'body', 0 )->class;
			}
			self::$globBodyClass = self::getGlobalBodyClasses();

			foreach ( self::$pagesContent as $url => $html ) {
				self::parsePartials( $url, $html );
			}

			self::filePutContents( self::getComponentPath( 'app.component.ts' ), self::appComponentTemplate() );
			self::updateThemeRoutes();
		} );
	}

	/**
	 * Get Angular app output path
	 * @param string $component
	 * @param bool   $create
	 * @return string
	 */
	public static function getComponentPath( $component = '', $create = false ) {
		$path = self::$outputPath . self::$demo . '/src/app/' . $component;
		if ( $create ) {
			$pathArr = explode( '/', $path );
			array_pop( $pathArr );
			$dir = implode( '/', $pathArr );
			if ( ! file_exists( $dir ) ) {
				mkdir( $dir, 0777, true );
			}
		}

		return $path;
	}

	/**
	 * Create Angular app using Angular CLI
	 */
	public static function createApp() {
		$dir = self::$outputPath . self::$demo;

		if ( ! file_exists( $dir ) ) {
			mkdir( $dir, 0777, true );
		}

		// create temp node_modules folder
		if ( ! file_exists( $dir . '/node_modules' ) ) {
			mkdir( $dir . '/node_modules', 0777, true );
		}

		exec( sprintf( 'cd %s && ng new %s -p="%s" -v -st -sg -si --routing=true --style="scss" --minimal=true 2>&1', self::$outputPath, self::$demo, self::$prefix ), $output );
		//var_dump( $output );
	}

	/**
	 * Install additional plugins
	 */
	public static function installPlugins() {
		$packageFile = self::$outputPath . self::$demo . '/package.json';
		$package     = json_decode( file_get_contents( $packageFile ) );
		if ( ! empty( $package ) ) {
			foreach ( self::$nodePlugins as $dev => $plugins ) {
				foreach ( $plugins as $plugin => $version ) {
					$package->dependencies->$plugin = $version;
				}
			}
			$package->scripts->postinstall = 'npm run tsformat';
			$package->scripts->tsformat    = 'tsfmt -r';
			self::filePutContents( $packageFile, json_encode( $package, JSON_PRETTY_PRINT ) );
		}
	}

	public static function angularExternalDependencies() {
		$jsonFile = self::$outputPath . self::$demo . '/.angular-cli.json';
		$json     = json_decode( file_get_contents( $jsonFile ) );
		if ( ! empty( $json ) ) {
			foreach ( self::$dependencies[ 'styles' ] as $file ) {
				if ( ! array_search( $file, $json->apps[ 0 ]->styles ) ) {
					$json->apps[ 0 ]->styles[] = $file;
				}
			}
			self::filePutContents( $jsonFile, json_encode( $json, JSON_PRETTY_PRINT ) );
		}
	}

	/**
	 * Reset current routes file to default
	 * self::$demo must be set to current demo
	 */
	public static function resetSystemFiles() {
		self::rmdir(self::getComponentPath( '../../app' ) );
		self::filePutContents( self::getComponentPath( '_services/script-loader.service.ts', true ), self::appScriptServiceTemplate() );
		self::filePutContents( self::getComponentPath( '_services/error-handler.service.ts' ), self::errorHandlerTemplate() );
		self::filePutContents( self::getComponentPath( 'app-routing.module.ts' ), self::appRouteTemplate() );
		self::filePutContents( self::getComponentPath( 'helpers.ts' ), self::appHelpersTemplate() );
		self::filePutContents( self::getComponentPath( '../typings.d.ts' ), self::typingsTemplate() );
		self::filePutContents( self::getComponentPath( '../../app/index.html' , true), self::aotBuildTemplate() );
		self::filePutContents( self::$moduleAppFile, self::appModuleTemplate() );

		// layout module
		self::$moduleLayoutFile = self::getComponentPath( self::$themePath . 'layouts/layout.module.ts', true );
		self::filePutContents( self::$moduleLayoutFile, self::layoutModuleTemplate() );
		self::import( self::$themePath . 'layouts', 'layout.module', 'LayoutModule', self::$moduleAppFile );
		self::appendFile( self::$moduleAppFile, 'LayoutModule' . ",\n", 'imports: [' );

		// theme routes module
		self::filePutContents( self::getComponentPath( self::$themePath . 'theme-routing.module.ts', true ), self::routeTemplate( 'theme' ) );
		self::import( '', 'theme.component', 'ThemeComponent', self::$moduleRoutingFile );
	}

	public static function appScriptServiceTemplate() {
		return <<<EOD
import {Injectable} from "@angular/core";
import * as $ from 'jquery';

declare let document: any;

interface Script {
	src: string;
	loaded: boolean;
}

@Injectable()
export class ScriptLoaderService {
	private _scripts: Script[] = [];
	private tag: any;

	load(tag, ...scripts: string[]) {
		this.tag = tag;
		scripts.forEach((script: string) => this._scripts[script] = {src: script, loaded: false});

		let promises: any[] = [];
		scripts.forEach((script) => promises.push(this.loadScript(script)));
		return Promise.all(promises);
	}

	loadScript(src: string) {
		return new Promise((resolve, reject) => {

			//resolve if already loaded
			if (this._scripts[src].loaded) {
				resolve({script: src, loaded: true, status: 'Already Loaded'});
			}
			else {
				//load script
				let script = $('<script/>')
					.attr('type', 'text/javascript')
					.attr('src', this._scripts[src].src);

				$(this.tag).append(script);
				resolve({script: src, loaded: true, status: 'Loaded'});
			}
		});
	}
}
EOD;
	}

	public static function errorHandlerTemplate() {
		return <<<EOD
import {Injectable, ErrorHandler} from "@angular/core";

@Injectable()
export class GlobalErrorHandler implements ErrorHandler {

	constructor() {
	}

	handleError(error: any): void {
	}
}
EOD;
	}

	public static function appRouteTemplate() {
		return <<<EOD
import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

const routes: Routes = [
	{path: '', redirectTo: 'index', pathMatch: 'full'},
];

@NgModule({
	imports: [RouterModule.forRoot(routes)],
	exports: [RouterModule]
})
export class AppRoutingModule { }
EOD;
	}

	public static function appHelpersTemplate() {
		$prefix = self::$prefix;
		return <<<EOD
import * as $ from "jquery";

export class Helpers {
	static loadStyles(tag, src) {
		if (Array.isArray(src)) {
			$.each(src, function (k, s) {
				$(tag).append($('<link/>').attr('href', s).attr('rel', 'stylesheet').attr('type', 'text/css'));
			});
		} else {
			$(tag).append($('<link/>').attr('href', src).attr('rel', 'stylesheet').attr('type', 'text/css'));
		}
	}

	static unwrapTag(element) {
		$(element).removeAttr('{$prefix}unwraptag').unwrap();
	}

	/**
	 * Set title markup
	 * @param title
	 */
	static setTitle(title) {
		$('.m-subheader__title').text(title);
	}

	/**
	 * Breadcrumbs markup
	 * @param breadcrumbs
	 */
	static setBreadcrumbs(breadcrumbs) {
		if (breadcrumbs) $('.m-subheader__title').addClass('m-subheader__title--separator');

		let ul = $('.m-subheader__breadcrumbs');

		if ($(ul).length === 0) {
			ul = $('<ul/>').addClass('m-subheader__breadcrumbs m-nav m-nav--inline')
				.append($('<li/>').addClass('m-nav__item')
					.append($('<a/>').addClass('m-nav__link m-nav__link--icon')
						.append($('<i/>').addClass('m-nav__link-icon la la-home'))));
		}

		$(ul).find('li:not(:first-child)').remove();
		$.each(breadcrumbs, function (k, v) {
			let li = $('<li/>').addClass('m-nav__item')
				.append($('<a/>').addClass('m-nav__link m-nav__link--icon').attr('routerLink', v.href).attr('title', v.title)
					.append($('<span/>').addClass('m-nav__link-text').text(v.text)));
			$(ul).append($('<li/>').addClass('m-nav__separator').text('-')).append(li);
		});
		$('.m-subheader .m-stack__item:first-child').append(ul);
	}

	static setLoading(enable) {
		let body = $('body');
		if (enable) {
			$(body).addClass('m-page--loading-non-block')
		} else {
			$(body).removeClass('m-page--loading-non-block')
		}
	}
	
	static bodyClass(strClass) {
		$('body').attr('class', strClass);
	}
}
EOD;
	}

	public static function typingsTemplate() {
		return <<<EOD
/* SystemJS module definition */
declare var module: NodeModule;
interface NodeModule {
	id: string;
}
interface JQuery {
	mMenu(options: any): JQuery;
	animateClass(options: any): JQuery;
	setActiveItem(item: any): JQuery;
	getPageTitle(item: any): JQuery;
	getBreadcrumbs(item: any): JQuery;
	validate(options: any): JQuery;
	valid(): JQuery;
	resetForm(): JQuery;
	markdown(): JQuery;
}
EOD;
	}

	public static function appModuleTemplate() {
		$themePath = self::$themePath;
		return <<<EOD
import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { BrowserAnimationsModule } from "@angular/platform-browser/animations";

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { ScriptLoaderService } from "./_services/script-loader.service";
import { ThemeRoutingModule } from "./{$themePath}theme-routing.module";
import { AuthModule } from "./auth/auth.module";

@NgModule({
  declarations: [
    AppComponent,
  ],
  imports: [
    BrowserModule,
    BrowserAnimationsModule,
    AppRoutingModule,
    ThemeRoutingModule,
    AuthModule,
  ],
  providers: [ScriptLoaderService],
  bootstrap: [AppComponent]
})
export class AppModule { }
EOD;
	}

	public static function layoutModuleTemplate() {
		return <<<EOD
import {NgModule} from '@angular/core';
import {CommonModule} from '@angular/common';
import {RouterModule} from '@angular/router';
import {HrefPreventDefaultDirective} from '../../_directives/href-prevent-default.directive';
import {UnwrapTagDirective} from '../../_directives/unwrap-tag.directive';

@NgModule({
	declarations: [
		HrefPreventDefaultDirective,
		UnwrapTagDirective,
	],
	exports: [
		HrefPreventDefaultDirective,
	],
	imports: [
		CommonModule,
		RouterModule,
	]
})
export class LayoutModule {
}
EOD;
	}

	/**
	 * @param $path
	 * @param $reference
	 * @param $componentName
	 * @param $modulePath
	 */
	public static function import( $path, $reference, $componentName, $modulePath ) {
		if ( empty( $path ) ) {
			$path = '.';
		} else {
			if ( strpos( $path, '..' ) === false ) {
				$path = './' . $path;
			}
		}
		$path   = rtrim( $path, '/' ) . '/';
		$import = "import { $componentName } from '$path$reference';\n";
		self::appendFile( $modulePath, $import, '\'@angular/core\';' );
	}

	/**
	 * Helper function to append file after specified text line
	 * @param $filename
	 * @param $insert
	 * @param $after
	 */
	public static function appendFile( $filename, $insert, $after = '' ) {
		$newline        = '';
		$insertPosition = 0;
		$file = fopen( $filename, 'r+' ) or exit( 'Unable to open file!' );
		while ( ! feof( $file ) ) {
			$line = fgets( $file );
			if ( strpos( $line, $after ) !== false ) {
				// ftell will tell the position where the pointer moved, here is the new line after Routes.
				$insertPosition = ftell( $file );
				$newline        = $insert;
			} else {
				// append existing data with new data of user
				$newline .= $line;
			}
		}

		// move pointer to the file position where we saved above
		fseek( $file, $insertPosition );
		fwrite( $file, $newline );

		fclose( $file );
	}

	public static function routeTemplate( $name, $routes = '[]' ) {
		$name = self::getComponentName( $name );
		return <<<EOD
import {NgModule} from '@angular/core';
import {Routes, RouterModule} from '@angular/router';
import {AuthGuard} from "../auth/_guards/auth.guard";

const routes: Routes = {$routes};

@NgModule({
	imports: [RouterModule.forChild(routes)],
	exports: [RouterModule]
})
export class {$name}RoutingModule {}
EOD;
	}

	/**
	 * Convert selector name to component name
	 * @param $selector
	 * @return string
	 */
	public static function getComponentName( $selector ) {
		$componentName = implode( '', array_map( 'ucwords', preg_split( '/(-|\/)/', $selector ) ) );
		return $componentName;
	}

	public static function createUnwrapDirective() {
		$directive       = new TsDirective( self::getComponentPath( '_directives/unwrap-tag.directive.ts', true ) );
		$directive->name = 'UnwrapTag';
		$directive->addImport( '../helpers', 'Helpers' );
		$directive->metadata = array( 'selector' => '[' . self::$prefix . 'unwraptag]', );

		$directive->methods[ 'ngAfterViewInit' ] = array(
			'content' => 'let nativeElement: HTMLElement = this.el.nativeElement;
		Helpers.unwrapTag(nativeElement);',
			'return'  => '',
		);

		$directive->create();
	}

	/**
	 * Directive handler to prevent link with hashtag (#)
	 */
	public static function createHrefDirective() {
		$directive           = new TsDirective( self::getComponentPath( '_directives/href-prevent-default.directive.ts', true ) );
		$directive->name     = 'HrefPreventDefault';
		$directive->metadata = array(
			'selector' => '[href]',
			'host'     => "{'(click)': 'preventDefault(\$event)'}",
		);

		$directive->addImport( '@angular/core', 'Input' );

		$directive->variables = array( '@Input() href: string;' );

		$directive->methods[ 'preventDefault' ] = array(
			'params'  => 'event',
			'content' => "if (this.href.length === 0 || this.href === '#') {
			event.preventDefault();
		}",
		);

		$directive->create();
	}

	/**
	 * Auth module
	 * @param $configs
	 */
	public static function authModule( $configs ) {
		$path = self::getComponentPath( 'auth', true );
		self::copy( __DIR__ . '/templates/angular/auth', $path );
		self::appendFile( self::getComponentPath( 'app-routing.module.ts' ), "{path: 'login', loadChildren: './auth/auth.module#AuthModule'},\n{path: 'logout', component: LogoutComponent},\n", 'const routes: Routes = [' );
		self::appendFile( self::getComponentPath( 'app-routing.module.ts' ), "import { LogoutComponent } from \"./auth/logout/logout.component\";\n", 'from \'@angular/router\';' );

		if ( empty( $configs ) ) return;

		// generate login view
		foreach ( $configs as $name => $config ) {
			// assume $config[ 'view' ] is same with page url
			$output = self::getPageContent( array( 'page' => $config[ 'view' ], 'demo' => self::$demo, 'type' => 'angular' ) );
			if ( ! empty( $output ) ) {
				$buffer = explode( "\n", $output );
				$marker = self::_getMarker( $buffer );
				if ( ! isset( $marker[ 'page' ] ) ) continue;
				$marked = $marker[ 'page' ];
				$param  = array_merge( array( 'page' => '' ), $marked[ 'params' ] );

				$buffer = array_slice( $buffer, $marked[ 'begin' ], $marked[ 'end' ] - $marked[ 'begin' ] + 1, true );
				$output = implode( '', $buffer );
				$output = self::sanitizeOutput( $output );

				// form module
				$output = preg_replace_callback( self::PREG_HTML_INPUT_NAME, function ( $match ) {
					$match[ 0 ] = str_replace( $match[ 1 ], sprintf( '%s [(ngModel)]="model.%s" #%s="ngModel"', $match[ 1 ], $match[ 2 ], $match[ 2 ] ), $match[ 0 ] );
					return $match[ 0 ];
				}, $output );

				$i      = 0;
				$output = preg_replace_callback( self::PREG_HTML_FORM, function ( $match ) use ( &$i ) {
					$order      = array( 'signin', 'signup', 'forgotPass' );
					$match[ 0 ] = str_replace( '<form', sprintf( '<form (ngSubmit)="f.form.valid && %s()" #f="ngForm"', $order[ $i ] ), $match[ 0 ] );
					$match[ 0 ] .= '<ng-template #alert' . ucfirst( $order[ $i ] ) . '></ng-template>';
					$i++;
					return $match[ 0 ];
				}, $output );

				$output = preg_replace_callback( self::PREG_HTML_BUTTON, function ( $match ) {
					$ngClass = '';
					if ( strpos( $match[ 0 ], 'submit' ) !== false ) {
						$ngClass = '[ngClass]="{\'m-loader m-loader--right m-loader--light\': loading}"';
					}
					$match[ 0 ] = str_replace( '<button', sprintf( '<button [disabled]="loading" %s', $ngClass ), $match[ 0 ] );
					return $match[ 0 ];
				}, $output );

				self::filePutContents( $path . '/templates/' . $name . '.component.html', $output );
			}
		}
	}

	public static function extraModules() {
		$path = self::getComponentPath( self::$themePath, true );
        $skip = array( 'default/angular' );
        if ( self::$demo === 'default' ) {
            $skip = array();
	        $urls = array( 'angular/ng-bootstrap', 'angular/primeng' );
			foreach ( $urls as $url ) {
				$selector = self::getLast( $url, '/' );
				$name     = self::getComponentName( $selector . 'Module' );
				// register new page to theme routing
				self::$themeRoutes[] = array(
					'path'         => $url,
					'loadChildren' => './pages/default/' . $url . '/' . $selector . '.module#' . $name,
				);
			}
		}

        self::copyFolder( __DIR__ . '/templates/angular/theme', $path, $skip );
    }

	/**
	 * Helper function to get last element of arrays
	 * @param        $array
	 * @param string $delimeter
	 * @return string
	 */
	public static function getLast( $array, $delimeter = '/' ) {
		$el = explode( $delimeter, $array );
		return end( $el );
	}

	/**
	 * Iterate every each page refering to config page
	 * @param $config
	 */
	private static function _iterates( $config ) {
		if ( empty( self::$demos ) ) {
			throw new InvalidArgumentException( 'No demos found in the demo list' );
		}
		foreach ( $config as $conf ) {
			if ( isset( $conf[ 'view' ] )
				&& ! in_array( $conf[ 'view' ], self::$pages )
				&& ! empty( $conf[ 'view' ] ) ) {
				// remove /_index special view path
				$conf[ 'view' ] = preg_replace( '/\/_.*/', '', $conf[ 'view' ] );
				// check visibility of page in angular context
				if ( ! isset( $conf[ 'visible' ] ) || ( isset( $conf[ 'visible' ] ) && strpos( $conf[ 'visible' ], 'angular' ) !== false ) ) {
					$output = self::getPageContent( array( 'page' => $conf[ 'view' ], 'demo' => self::$demo, 'type' => 'angular' ) );
					if ( ! empty( $output ) ) {
						self::$pages[] = $conf[ 'view' ];

						self::$pagesContent[ $conf[ 'view' ] ] = $output;
					}
				}
			}
			if ( is_array( $conf ) ) {
				self::_iterates( $conf );
			}
		}
	}

	/**
	 * @return array|mixed|string
	 */
	public static function getGlobalBodyClasses() {
		$globBodyClass = '';
		if ( ! empty( self::$bodyClass ) ) {
			$dupClasses    = array_count_values( self::$bodyClass );
			$globBodyClass = array_keys( $dupClasses, max( $dupClasses ), true );
			$globBodyClass = array_pop( $globBodyClass );
		}
		return $globBodyClass;
	}

	private static function parsePartials( $url, $html ) {
		$buffer = explode( "\n", $html );
		$marker = self::_getMarker( $buffer );

		$pageConfig   = self::getPageConfig( $url );
		$layoutConfig = self::arrayPath( $pageConfig, 'layout' );

		$ns = self::getComponentNamespace( $url );

		foreach ( $marker as $id => $mark ) {
			$param    = array_merge( array( 'type' => '', 'router' => '', 'init' => '' ), $mark[ 'params' ] );
			$selector = $param[ 'id' ];

			// component tag
			$tag = '<' . self::$prefix . '-' . $selector . '></' . self::$prefix . '-' . $selector . '>';

			if ( $param[ 'router' ] === 'outlet' || $param[ 'type' ] === 'layout' ) {
				$tag = '<router-outlet></router-outlet>';
			}

			$length      = $mark[ 'end' ] - $mark[ 'begin' ];
			$replacement = array( "\n" . $tag . "\n" );
			// replace temporary empty array count to maintain buffer index
			for ( $i = 0; $i < $length; $i++ ) {
				$replacement[] = '';
			}
			$output = array_splice( $buffer, $mark[ 'begin' ], $length + 1, $replacement );
			// combine lines
			$output = implode( '', $output );
			// sanitize output
			$output = self::sanitizeAngular( $output );
			// remove unused comments
			$output = self::sanitizeOutput( $output );

			if ( $param[ 'type' ] === 'base' ) {
				// skip already created components
				if ( in_array( $param[ 'type' ], self::$components ) ) continue;
				self::$components[] = $param[ 'type' ];
				// add directive attribute to remove host tag
				$output = self::addUnwrapTag( $output );
				// index.html
				self::baseComponent( $output );
			} elseif ( $param[ 'type' ] === 'layout' && self::arrayPath( $layoutConfig, 'self/layout' ) !== 'blank' ) {
				// skip already created components
				if ( in_array( $param[ 'type' ], self::$components ) ) continue;
				self::$components[] = $param[ 'type' ];
				// theme.component
				self::layoutComponent( $output, $param );
			} else {
				$bodyType = 'default';
				if ( $param[ 'router' ] === 'outlet' ) {
					if ( ! empty( $layoutConfig ) ) {
						$bodyType = implode( '-', self::arrayMultiKeys( $layoutConfig ) );
					}
					if ( $param[ 'type' ] === 'page' ) {
						if ( isset( self::$bodyClass[ '/' . $url ] ) && self::$globBodyClass !== self::$bodyClass[ '/' . $url ] ) {
							$param[ 'body_class' ] = self::$bodyClass[ '/' . $url ];
						}

						// path manipulation
						$paths = explode( '/', $param[ 'page' ] );
						array_pop( $paths );
						$paths = ! empty( $paths ) ? implode( '/', $paths ) . '/' : '';
						$path  = 'pages/' . $bodyType . '/' . $paths . $ns;

						$param[ 'layout' ] = $layoutConfig;

						// create page module
						self::createModule( $path, $param );
						// setup routing
						if ( self::arrayPath( $param[ 'layout' ], 'self/layout' ) === 'blank' ) {
							// keep routes for blank layout
							self::$routes[] = array(
								'path'         => $param[ 'page' ],
								'loadChildren' => './' . $path . '/' . $ns . '.module#' . self::getComponentName( $ns . 'Module' ),
							);
						} else {
							// keep theme routes
							self::$themeRoutes[] = array(
								'path'         => $param[ 'page' ],
								'loadChildren' => './' . $path . '/' . $ns . '.module#' . self::getComponentName( $ns . 'Module' ),
							);
						}
					} else {
						$path = 'pages/' . $bodyType;
					}
				} else {
					$path = 'layouts/' . $param[ 'id' ];
				}

				// skip already created components
				if ( in_array( $path, self::$components ) ) continue;
				self::$components[] = $path;

				if ( $param[ 'type' ] !== 'page' ) {
					$importPath = $name = $param[ 'id' ];
					if ( $param[ 'router' ] === 'outlet' ) {
						$importPath = self::resolveRelativePath( self::$moduleLayoutFile, self::getComponentPath( self::$themePath . 'pages/' . $bodyType ) );
						$name       = $bodyType;
					}
					// layout.module components declaration
					$layoutComponentName = self::getComponentName( $name . 'Component' );
					if ( ! self::isImported( $layoutComponentName, self::$moduleLayoutFile ) ) {
						self::appendFile( self::$moduleLayoutFile, $layoutComponentName . ",\n", 'declarations: [' );
						self::appendFile( self::$moduleLayoutFile, $layoutComponentName . ",\n", 'exports: [' );
						self::import( $importPath, $name . '.component', $layoutComponentName, self::$moduleLayoutFile );
						self::setImported( $layoutComponentName, self::$moduleLayoutFile );
					}
				}

				if ( isset( $param[ 'selector' ] ) ) {
					// if selector set, unwrap html
					$html     = str_get_html( $output, false );
					$selected = $html->find( $param[ 'selector' ], 0 );
					$classes  = $selected->class;
					$output   = $selected->nodes;
					// update full class selector
					$param[ 'selector' ] = '.' . implode( '.', array_filter( explode( ' ', $classes ) ) );
				} else {
					// add directive attribute to remove host tag
					$output = self::addUnwrapTag( $output );
				}

				$output = self::customHtmlModify( $path, $output, $param );

				self::partialComponent( self::$themePath . $path, $param[ 'page' ], $output, $param );
			}
		}
	}

	/**
	 * Sanitize output
	 * @param $output
	 * @return mixed
	 */
	private static function sanitizeAngular( $output ) {
		// remove script tags from index html
		$output = preg_replace( '#<script src="./assets/(.*?)"(.*?)>(.*?)</script>#is', '', $output );
		// html attr data binding
		$output = preg_replace_callback( '/data-on-(.*?)="(.*?)"/', function ( $match ) {
			return sprintf( '[attr.data-on-%s]="\'%s\'"', $match[ 1 ], $match[ 2 ] );
		}, $output );
		return $output;
	}

	/**
	 * Add custom atrribute to html
	 * @param $output
	 * @return string
	 */
	private static function addUnwrapTag( $output ) {
		if ( ! empty( $output ) ) {
			$html = str_get_html( $output, false );
			foreach ( $html->root->children as &$child ) {
				// check if root node is not component tag
				if ( $child->nodetype === 1 && strpos( $child->tag, self::$prefix . '-' ) === false ) {
					$child->setAttribute( self::$prefix . 'unwraptag', '' );
					break;
				}
			}
			ob_start();
			echo $html->save();
			$output = ob_get_clean();
		}

		return $output;
	}

	/**
	 * Update existing index.html as main
	 * @param $output
	 */
	public static function baseComponent( $output ) {
		// some plugin dependencies cannot lazyload, add them in index.html
		$eagerJs = '';
		foreach ( self::$inlineJs as $js ) {
			if ( Util::isExternalURL( $js ) || strpos( $js, 'assets/' ) !== false ) {
				$eagerJs .= "\n" . '<script src="' . $js . '" type="text/javascript"></script>';
			} else {
				$eagerJs .= "\n" . '<script>' . $js . '</script>';
			}
		}

		// add <base href="/">
		$output = str_replace( array(
			'</title>',
			'</head>',
			'<body class="',
		), array(
			'</title>' . "\n" . '<base href="' . self::$baseHref . '">',
			$eagerJs . '</head>',
			'<body class="m-page--loading-non-block ',
		), $output );

		$output = preg_replace_callback( '/<body.*?>(.*?)<\/body>/s', function ( $match ) {
			$match[ 0 ] = str_replace( $match[ 1 ], '', $match[ 0 ] );
			self::filePutContents( self::getComponentPath( 'app.component.html' ), $match[ 1 ] );
			return $match[ 0 ];
		}, $output );

		// modify component html file
		self::filePutContents( self::getComponentPath( '../index.html' ), $output );
	}

	/**
	 * Layout component edit app.component.ts and app.component.html
	 * @param $output
	 * @param $param
	 */
	public static function layoutComponent( $output, $param ) {
		$layout = '';
		if ( isset( $param[ 'selector' ] ) ) {
			// if selector set, unwrap html
			$html     = str_get_html( $output, false );
			$selected = $html->find( $param[ 'selector' ], 0 );
			$classes  = $selected->class;
			$layout   = $selected->nodes;
			// update full class selector
			self::$pageClass = '.' . implode( '.', array_filter( explode( ' ', $classes ) ) );
		}

		self::filePutContents( self::getComponentPath( self::$themePath . 'theme.component.html' ), $layout );

		// create theme component
		$component           = new TsComponent( self::getComponentPath( self::$themePath . 'theme.component.ts' ) );
		$component->name     = 'Theme';
		$component->import   = array(
			'@angular/core'                      => array( 'Component', 'OnInit', 'ViewEncapsulation' ),
			'@angular/router'                    => array( 'Router', 'NavigationStart', 'NavigationEnd' ),
			'../helpers'                         => array( 'Helpers' ),
			'../_services/script-loader.service' => array( 'ScriptLoaderService' ),
		);
		$component->const    = array( 'declare let mApp: any;', 'declare let mUtil: any;', 'declare let mLayout: any;' );
		$component->metadata = array(
			'selector'      => self::$pageClass,
			'templateUrl'   => './theme.component.html',
			'encapsulation' => 'ViewEncapsulation.None',
		);

		// add global bundle scripts after view init
		$src = '';
		if ( isset( self::$demos[ self::$demo ][ 'demo' ][ 'resources' ][ 'js' ] ) ) {
			$src = "'" . implode( "','", self::$demos[ self::$demo ][ 'demo' ][ 'resources' ][ 'js' ] ) . "'";
		}

		$loadOnceJs = '';
		if( ! empty( self::$loadOnceJs ) ) {
			$loadOnceJs = sprintf("this._script.load('head', %s)", '\''.implode("','",self::$loadOnceJs) .  '\'');
		}

		$sidebarInit = '';
		if(self::$demo === 'default') {
			$sidebarInit = '(<any>mLayout).closeMobileAsideMenuOffcanvas();' . "\n" . '(<any>mLayout).closeMobileHorMenuOffcanvas();';
		}

		$bundleLoaded = <<<EOD
		this._script.load('body', {$src})
			.then(result => {
				Helpers.setLoading(false);
				{$loadOnceJs}
			});
		this._router.events.subscribe((route) => {
			if (route instanceof NavigationStart) {
				{$sidebarInit}
				(<any>mApp).scrollTop();
				Helpers.setLoading(true);
				// hide visible popover
				(<any>$('[data-toggle="m-popover"]')).popover('hide');
			}
			if (route instanceof NavigationEnd) {
				// init required js
				(<any>mApp).init();
				(<any>mUtil).init();
				Helpers.setLoading(false);
				// content m-wrapper animation
				let animation = 'm-animate-fade-in-up';
				$('.m-wrapper').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function (e) {
					$('.m-wrapper').removeClass(animation);
				}).removeClass(animation).addClass(animation);
			}
		});
EOD;

		$component->methods = array(
			'constructor' => array(
				'params' => 'private _script: ScriptLoaderService, private _router: Router',
			),
			'ngOnInit'    => array(
				'content' => $bundleLoaded,
			),
		);

		// create component .ts file
		$component->create();

		if ( ! self::isImported( 'theme.component' ) ) {
			self::moduleDeclare( substr( self::$themePath, 0, -1 ), 'theme.component', 'ThemeComponent' );
			self::setImported( 'theme.component' );
		}
	}

	public static function isImported( $componentName, $module = 'app.module.ts' ) {
		if ( ! isset( self::$imported[ $module ] ) ) self::$imported[ $module ] = array();
		return in_array( $componentName, self::$imported[ $module ] );
	}

	/**
	 * @param        $path
	 * @param        $reference
	 * @param        $componentName
	 * @param string $module
	 */
	public static function moduleDeclare( $path, $reference, $componentName, $module = 'app.module.ts' ) {
		if ( self::isImported( $path . '/' . $reference, $module ) ) return;
		self::setImported( $path . '/' . $reference, $module );

		// register to app.module.ts
		$modulePath = self::getComponentPath( $module );
		self::appendFile( $modulePath, $componentName . ",\n", 'declarations: [' );
		self::import( $path, $reference, $componentName, $modulePath );
	}

	public static function setImported( $componentName, $module = 'app.module.ts' ) {
		self::$imported[ $module ][] = $componentName;
	}

	/**
	 * @param $path
	 * @param $param
	 */
	private static function createModule( $path, $param ) {
		$selector = self::longPathToSelector( $param[ 'page' ] );

		$bodyType = 'default';
		if ( ! empty( $param[ 'layout' ] ) ) {
			$bodyType = implode( '-', self::arrayMultiKeys( $param[ 'layout' ] ) );
		}

		$name           = self::getComponentName( $selector );
		$moduleFilename = self::getComponentPath( self::$themePath . $path . '/' . $selector . '.module.ts', true );
		$module         = new TsModule( $moduleFilename );
		$module->name   = $name;

		$layoutModule = self::resolveRelativePath( $moduleFilename, substr( self::$moduleLayoutFile, 0, -3 ) );
		$module->addImports( array(
			'@angular/common'               => array( 'CommonModule' ),
			'@angular/router'               => array( 'Routes', 'RouterModule' ),
			'./' . $selector . '.component' => array( $name . 'Component' ),
			// import layout module
			$layoutModule                   => array( 'LayoutModule' ),
		) );

		$bodyLayout = array(
			'path'      => '',
			'component' => '',
			'children'  => array(),
		);

		$pageComponent = array(
			'path'      => '',
			'component' => $name . 'Component',
		);

		$routes = array();
		if ( self::arrayPath( $param[ 'layout' ], 'self/layout' ) === 'blank' ) {
			// blank layout
			$routes[] = $pageComponent;
		} else {
			// default layout
			$bodyLayout[ 'children' ] = array( $pageComponent );

			$bodyName = self::getComponentName( $bodyType . 'Component' );

			$bodyLayout[ 'component' ] = $bodyName;

			$bodyPath = self::resolveRelativePath( $moduleFilename, self::getComponentPath( self::$themePath . 'pages/' . $bodyType . '/' . $bodyType . '.component' ) );
			$module->addImport( $bodyPath, $bodyName );
			$routes[] = $bodyLayout;
		}

		$routes = 'const routes: Routes = ' . self::strEncode( $routes, array( 'component' ) ) . ';';

		$module->metadata = array(
			'imports'      => array(
				'CommonModule',
				'RouterModule.forChild(routes)',
				'LayoutModule',
			),
			'exports'      => array( 'RouterModule' ),
			'declarations' => array( $name . 'Component' ),
		);

		// create module file with routes variable
		self::filePutContents( $moduleFilename, $module->import() . "\n" . $routes . "\n" . $module->metadata( true ) . "\n" . $module->classStructure() );
	}

	/**
	 * @param $path
	 * @return string
	 */
	private static function longPathToSelector( $path ) {
		return implode( '-', array_slice( explode( '/', $path ), -2, 2 ) );
	}

	public static function customHtmlModify( $page, $output, $param ) {
		// modify url to routerLink for all files
		$output = self::updateUrl( $output );

		if ( $param[ 'page' ] === 'components/forms/widgets/recaptcha' ) {
			$output = preg_replace_callback( '/<div class="g-recaptcha".*?<\/div>/', function ( $match ) {
				return str_replace( array( '<div', 'data-sitekey', '</div>' ), array(
					'<re-captcha',
					'siteKey',
					'</re-captcha>',
				), $match[ 0 ] );
			}, $output );

			$selector   = self::longPathToSelector( $param[ 'page' ] );
			$modulePath = self::getComponentPath( self::$themePath . $page . '/' . $selector . '.module.ts' );
			self::appendFile( $modulePath, 'RecaptchaModule.forRoot(),' . "\n", 'imports: [' );
			self::appendFile( $modulePath, 'import { RecaptchaModule } from \'ng-recaptcha\';' . "\n", '\'@angular/common\';' );
		}

		return $output;
	}

	/**
	 * Convert all URL links to work with angular router
	 * @param $output
	 * @return string
	 */
	public static function updateUrl( $output ) {
		if ( ! empty( $output ) ) {
			if ( is_array( $output ) ) {
				// combine lines
				$output = implode( '', $output );
			}

			$output = preg_replace_callback( '/href="(.*?)"/', function ( $match ) {
				// convert link to router link
				$url = parse_url( $match[ 1 ] );
				if ( isset( $url[ 'query' ] ) ) {
					parse_str( $url[ 'query' ], $query );
					if ( isset( $query[ 'page' ] ) && $query[ 'page' ] !== '' ) {
						return 'routerLink="/' . $query[ 'page' ] . '"';
					}
				}
				//if ( preg_match( '/^#\w+/', $match[ 1 ] ) || $match[ 1 ] === '#' ) {}
				return $match[ 0 ];
			}, $output );

			$output = str_replace( array( 'm-menu__item--active', '>Logout</a>', 'target="_blank"' ), array( '', ' routerLink="/logout">Logout</a>', '' ), $output );

			$put    = false;
			$output = preg_replace_callback( '/<li.*?(class="m-menu__item.*?").*?>/', function ( $match ) use ( &$put ) {
				if ( strpos( $match[ 0 ], 'data-redirect="true"' ) === false ) {
					$match[ 0 ] = str_replace( $match[ 1 ], $match[ 1 ] . ' routerLinkActive="m-menu__item--active" routerLinkActiveOptions="{ exact: true }" ', $match[ 0 ] );
				}
				return $match[ 0 ];
			}, $output );
		}
		return $output;
	}

	/**
	 * Create layout component
	 * @param        $path
	 * @param string $url
	 * @param        $content
	 * @param array  $param
	 */
	public static function partialComponent( $path, $url, $content, $param = array() ) {
		$componentDir = self::getComponentPath( $path );
		if ( ! file_exists( $componentDir ) ) {
			mkdir( $componentDir, 0777, true );
		}

		$selector = self::getLast( $path );

		self::createPageComponent( $path, $url, $param );

		// add content to component html file
		self::filePutContents( $componentDir . '/' . $selector . '.component.html', $content );
	}

	/**
	 * Create page component
	 * @param       $path
	 * @param       $url
	 * @param array $param
	 * @internal param string $customSelector
	 * @internal param string $init
	 */
	public static function createPageComponent( $path, $url, $param = array() ) {
		$customSelector = isset( $param[ 'selector' ] ) ? $param[ 'selector' ] : '';
		if ( self::arrayPath( $param[ 'layout' ], 'self/layout' ) === 'blank' ) {
			$customSelector = self::$pageClass;
		}
		$componentDir = self::getComponentPath( $path, true );

		$name          = explode( '/', $path );
		$selector      = end( $name );
		$componentName = self::getComponentName( $selector );

		$componentFilename   = $componentDir . '/' . $selector . '.component.ts';
		$component           = new TsComponent( $componentFilename );
		$component->name     = $componentName;
		$component->import   = array( '@angular/core' => array( 'Component', 'OnInit', 'ViewEncapsulation' ), );
		$component->metadata = array(
			'selector'      => $customSelector ?: self::$prefix . '-' . $selector,
			'templateUrl'   => './' . $selector . '.component.html',
			'encapsulation' => 'ViewEncapsulation.None',
		);

		// page has custom scripts/styles to load
		$page    = self::getPageConfig( $url );
		$jsFiles = $cssFiles = array();
		if ( isset( $page[ 'vendors' ][ 'css' ] ) ) {
			foreach ( $page[ 'vendors' ][ 'css' ] as $i => $css ) {
				if( ! Util::isExternalURL( $css ) ) {
					unset( $page[ 'vendors' ][ 'css' ][ $i ] );
				}
			}
			self::resolvePaths( $page[ 'vendors' ][ 'css' ], "'assets/vendors/custom/%s'", $cssFiles );
		}
		if ( isset( $page[ 'resources' ][ 'css' ] ) ) {
			self::resolvePaths( $page[ 'resources' ][ 'css' ], "'assets/demo/" . self::$demo . "/custom/%s'", $cssFiles );
		}
		if ( isset( $page[ 'vendors' ][ 'js' ] ) ) {
			$jsFiles = array_merge( $jsFiles, array_map( function ( $js ) use ( $page ) {
				// remove eager js from lazyload, was included in index.html
				if ( in_array( $js, self::$inlineJs ) || in_array( 'assets/vendors/custom/' . $js, self::$loadOnceJs ) ) {
					return null;
				}
				if ( Util::isExternalURL( $js ) ) {
					return sprintf( "'%s'", $js );
				}
				return sprintf( "'assets/vendors/custom/%s'", $js );
			}, $page[ 'vendors' ][ 'js' ] ) );
		}
		if ( isset( $page[ 'resources' ][ 'js' ] ) ) {
			self::resolvePaths( $page[ 'resources' ][ 'js' ], "'assets/demo/" . self::$demo . "/custom/%s'", $jsFiles );
		}
		if ( isset( $page[ 'snippets' ][ 'js' ] ) ) {
			self::resolvePaths( $page[ 'snippets' ][ 'js' ], "'assets/snippets/%s'", $jsFiles );
		}
		if ( isset( $page[ 'app' ][ 'js' ] ) ) {
			self::resolvePaths( $page[ 'app' ][ 'js' ], "'assets/app/%s'", $jsFiles );
		}
		$jsFiles = array_filter( $jsFiles );

		$helperPath = self::resolveRelativePath( $componentFilename, self::getComponentPath( 'helpers' ) );

		$component->import[ $helperPath ] = array( 'Helpers' );

		$jsFunc = $cssFunc = '';
		if ( ! empty( $cssFiles ) ) {
			// add scripts to end page only, not in the layout components
			if ( strpos( $path, self::$themePath . 'pages' ) !== false ) {
				$cssFunc = "Helpers.loadStyles('" . $component->metadata[ 'selector' ] . "',[\n" . implode( ",\n", $cssFiles ) . "]);";
			}
		}
		if ( ! empty( $jsFiles ) ) {
			$scriptLoaderPath = self::resolveRelativePath( $componentFilename, self::getComponentPath( '_services/script-loader.service' ) );
			// add scripts to end page only, not in the layout components
			if ( strpos( $path, self::$themePath . 'pages' ) !== false ) {
				$component->import[ $scriptLoaderPath ] = array( 'ScriptLoaderService' );

				$jsFunc = "this._script.load('" . $component->metadata[ 'selector' ] . "',\n" . implode( ",\n", $jsFiles ) . ");";
			}
		}

		$ngAfterViewInit = '';
		if ( ! empty( $jsFunc ) || ! empty( $cssFiles ) ) {
			// add scripts to end page only, not in the layout components
			if ( $param[ 'type' ] === 'page' ) {
				$component->methods[ 'constructor' ] = array(
					'params' => 'private _script: ScriptLoaderService',
				);

				$ngAfterViewInit = $jsFunc . "\n" . $cssFunc;
			}
		}

		if ( ! empty( $param[ 'init' ] ) ) {
			$component->const = array( 'declare let mLayout: any;' );
			$ngAfterViewInit  .= "\n" . $param[ 'init' ] . "\n";
		}

		if ( isset( $param[ 'body_class' ] ) ) {
			$ngAfterViewInit .= "\n" . 'Helpers.bodyClass(\'' . $param[ 'body_class' ] . '\');' . "\n";
		}

		if ( ! empty( $ngAfterViewInit ) ) {
			$component->implements[]                = 'AfterViewInit';
			$component->import[ '@angular/core' ][] = 'AfterViewInit';

			$component->methods[ 'ngAfterViewInit' ] = array(
				'return'  => '',
				'content' => $ngAfterViewInit,
			);
		}

		// custom codes for google maps
		if ( isset( self::$customCode[ self::$demo ][ $selector ] ) ) {
			if ( isset( self::$customCode[ self::$demo ][ $selector ][ 'const' ] ) ) {
				$component->const = array_merge( $component->const, self::$customCode[ self::$demo ][ $selector ][ 'const' ] );
			}
			foreach ( self::$customCode[ self::$demo ][ $selector ][ 'methods' ] as $func => $method ) {
				if ( ! isset( $component->methods[ $func ] ) ) {
					$component->methods[ $func ] = array( 'content' => '' );
				}
				$component->methods[ $func ][ 'content' ] .= $method;
			}
		}

		// create component .ts file
		$component->create();
	}

	public static function appComponentTemplate() {
		$globBodyClass = 'm-page--loading-non-block ' . self::getGlobalBodyClasses();
		return <<<EOD
import {Component, OnInit, ViewEncapsulation} from '@angular/core';
import {Router, NavigationStart, NavigationEnd} from '@angular/router';
import {Helpers} from "./helpers";

@Component({
	selector: 'body',
	templateUrl: './app.component.html',
	encapsulation: ViewEncapsulation.None,
})
export class AppComponent implements OnInit {
	title = 'app';
	globalBodyClass = '{$globBodyClass}';

	constructor(private _router: Router) {
	}

	ngOnInit() {
		this._router.events.subscribe((route) => {
			if (route instanceof NavigationStart) {
				Helpers.setLoading(true);
				Helpers.bodyClass(this.globalBodyClass);
			}
			if (route instanceof NavigationEnd) {
				Helpers.setLoading(false);
			}
		});
	}
}
EOD;
	}

	public static function updateThemeRoutes() {
		array_unshift( self::$routes, array(
			'path'        => '',
			'component'   => 'ThemeComponent',
			'canActivate' => '[AuthGuard]',
		) );

		self::$routes[ 0 ][ 'children' ] = self::resetArrayKeys( self::$themeRoutes );

		// default 404:not-found page
		self::$routes[ 0 ][ 'children' ] = array_merge( self::$routes[ 0 ][ 'children' ], array(
			array( 'path' => '404', 'loadChildren' => './pages/default/not-found/not-found/not-found.module#NotFoundModule', ),
			array( 'path' => '', 'redirectTo' => 'index', 'pathMatch' => 'full', ),
		) );

		self::$routes[] = array( 'path' => '**', 'redirectTo' => '404', 'pathMatch' => 'full', );

		$routesStr = self::strEncode( self::$routes, array( 'component', 'canActivate' ) );
		self::strReplaceFileContent( 'const routes: Routes = [];', 'const routes: Routes = ' . $routesStr . ';', self::$moduleRoutingFile );
	}

	public static function getZip( $demo = '', $filename = '' ) {
		ThemeBuilder::$outputPath = self::$outputPath;
		ThemeBuilder::$demo       = $demo ?: self::$demo;

		if ( empty( $filename ) ) {
			$filename = 'angular-' . self::$demo . '.zip';
		}

		parent::getZip( $demo, $filename );
	}

	public static function aotBuildTemplate() {
		$demo = self::$demo;
		return <<<EOD
<p>To preview Angular Integrated Version you will need to compile and build it as production with AOT.</p>
<ul>
<li>Open cmd console in theme/dist/angular/{$demo}/</li> 
<li>Run this command to build: ng build --prod -op="app"</li>
</ul>
<p>For more info please check the documentation.</p>
EOD;
	}
}

$start = microtime( true );
AngularGenerate::init();
$time_elapsed_secs = microtime( true ) - $start;
//var_dump( 'Total execution time: ' . $time_elapsed_secs );