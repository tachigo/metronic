//== Class definition
var LayoutBuilder = function () {

	//== Private functions
	var exportHtml = function () {
		$('#builder_export_html').click(function (e) {
			e.preventDefault();
			var _self = $(this);
			$('#builder_export').addClass('m-loader m-loader--light m-loader--right')
				.find('> span > span').text('Exporting...')
				.closest('.m-form__actions').find('.btn').prop('disabled', true);

			$('<iframe/>').attr({
				src: 'index.php?builder_export_html&demo=' + $(_self).data('demo'),
				style: "visibility:hidden;display:none"
			}).ready(function () {
				$.notify({
					title: 'Export HTML Version Layout',
					message: 'HTML version exported.'
				}, {type: 'success'});
				$('#builder_export').removeClass('m-loader m-loader--light m-loader--right')
					.find('> span > span').text('Export')
					.closest('.m-form__actions').find('.btn').prop('disabled', false);
			}).appendTo(_self);
		});
	};

	var exportHtmlStatic = function () {
		$('#builder_export_html_static').click(function (e) {
			e.preventDefault();
			var _self = $(this);
			$('#builder_export').addClass('m-loader m-loader--light m-loader--right')
				.find('> span > span').text('Exporting...')
				.closest('.m-form__actions').find('.btn').prop('disabled', true);

			$.notify({
				title: 'Generate HTML Static Version',
				message: 'Processes started and it may take a several seconds...'
			});

			$.ajax('index.php?demo=' + $(_self).data('demo'), {
				method: 'POST',
				data: {
					builder_export_html_static: 1,
					demo: $(_self).data('demo')
				}
			})
				.done(function (r) {
					$.notify({
						title: 'Generate HTML Static Version',
						message: 'Static HTML has been updated with current configured layout.'
					}, {type: 'success'});
				})
				.always(function () {
					$('#builder_export').removeClass('m-loader m-loader--light m-loader--right')
						.find('> span > span').text('Export')
						.closest('.m-form__actions').find('.btn').prop('disabled', false);
				});
		});
	};

	var exportAngular = function () {
		$('#builder_export_angular').click(function (e) {
			e.preventDefault();
			var _self = $(this);
			$('#builder_export').addClass('m-loader m-loader--light m-loader--right')
				.find('> span > span').text('Exporting...')
				.closest('.m-form__actions').find('.btn').prop('disabled', true);

			$.notify({
				title: 'Generate Angular Version Layout',
				message: 'Processes started and it may take a several seconds...'
			});

			$.ajax('index.php?demo=' + $(_self).data('demo'), {
				method: 'POST',
				data: {
					builder_export_angular: 1,
					demo: $(_self).data('demo')
				}
			})
				.done(function (r) {
					$.notify({
						title: 'Generate Angular Version Layout',
						message: 'Angular App has been updated with current configured layout. ' +
						'To view it please run the angular app.'
					}, {type: 'success'});
				})
				.always(function () {
					$('#builder_export').removeClass('m-loader m-loader--light m-loader--right')
						.find('> span > span').text('Export')
						.closest('.m-form__actions').find('.btn').prop('disabled', false);
				});
		});
	};

	var preview = function () {
		$('[name="builder_submit"]').click(function (e) {
			e.preventDefault();
			var _self = $(this);
			$(_self).addClass('m-loader m-loader--light m-loader--right')
				.closest('.m-form__actions').find('.btn').prop('disabled', true);

			$.ajax('index.php?demo=' + $(_self).data('demo'), {
				method: 'POST',
				data: $('[name]').serialize()
			})
				.done(function (r) {
					$.notify({
						title: 'Preview updated',
						message: 'Preview has been updated with current configured layout.'
					}, {type: 'success'});
				})
				.always(function () {
					setTimeout(function () {
						location.reload();
					}, 600);
				});
		});
	};

	var reset = function () {
		$('[name="builder_reset"]').click(function (e) {
			e.preventDefault();
			var _self = $(this);
			$(_self).addClass('m-loader m-loader--primary m-loader--right')
				.closest('.m-form__actions').find('.btn').prop('disabled', true);

			$.ajax('index.php?demo=' + $(_self).data('demo'), {
				method: 'POST',
				data: {
					builder_reset: 1,
					demo: $(_self).data('demo')
				}
			})
				.done(function (r) {
				})
				.always(function () {
					location.reload();
				});
		});
	};

	var keepActiveTab = function () {
		$('[href^="#m_builder_"]').click(function (e) {
			var which = $(this).attr('href');
			var btn = $('[name="builder_submit"]');
			var tab = $('[name="builder[tab]"]');
			if ($(tab).length === 0) {
				$('<input/>').attr('type', 'hidden').attr('name', 'builder[tab]').val(which).insertBefore(btn);
			} else {
				$(tab).val(which);
			}
		}).each(function () {
			if ($(this).hasClass('active')) {
				var which = $(this).attr('href');
				var btn = $('[name="builder_submit"]');
				var tab = $('[name="builder[tab]"]');
				if ($(tab).length === 0) {
					$('<input/>').attr('type', 'hidden').attr('name', 'builder[tab]').val(which).insertBefore(btn);
				} else {
					$(tab).val(which);
				}
			}
		});
	};

	// basic demo
	var init = function () {
		keepActiveTab();
		exportHtml();
		exportAngular();
		exportHtmlStatic();
		preview();
		reset();
	};

	return {
		// public functions
		init: function () {
			init();
		}
	};
}();

jQuery(document).ready(function () {
	LayoutBuilder.init();
});