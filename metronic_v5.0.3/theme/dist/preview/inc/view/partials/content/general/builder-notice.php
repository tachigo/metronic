<div class="m-alert m-alert--icon m-alert--air alert alert-info alert-dismissible m--margin-bottom-30 <?php Util::echoIf(!Page::getOption('layout', 'content/portlet/rounded'), 'm-alert--square')?>" role="alert">
	<div class="m-alert__icon m-alert__icon--top">
		<i class="flaticon-cogwheel-2 m--font-light"></i>
	</div>
	<div class="m-alert__text">
		<p>
		The layout builder helps to configure the layout with below listed options and features and preview the result in real time.
		The configured layout options will be saved until you change or reset them. </p>
		<p>
		Also the layout builder allows to easily apply your configured layout for HTML and Angular versions.
		For the HTML version you will just need to import the HTML template of the configured layout by choosing <code>Export as HTML Layout Package</code> option from the export menu to
		download a zip folder with well organized HTML master template with separated includable partials.</p>
		<p>
		For the Angular version you will need to choose <code>Generate Angular Version</code> option to get the Angular version app source code updated automatically in <code>theme/dist/angular/[demo]</code>.
		</p>
		<p>
		For the Static HTML version you will need to choose <code>Generate Static HTML</code> option to get the static HTML version updated automatically in <code>theme/dist/html/[demo]</code>.
		</p>
	</div>
</div>