//== Class definition

var DatatableHtmlTableDemo = function () {
	//== Private functions

	// demo initializer
	var demo = function () {

		var datatable = $('.m-datatable').mDatatable({
			columns: [
				{
					field: "Deposit Paid",
					type: "number"
				},
				{
					field: "Order Date",
					type: "date",
					format: "YYYY-MM-DD"
				}
			]
		});

		var query = datatable.getDataSourceQuery();

		$('#m_form_search').on('keyup', function (e) {
			datatable.search($(this).val().toLowerCase());
		}).val(query.generalSearch);

	};

	return {
		//== Public functions
		init: function () {
			// init dmeo
			demo();
		}
	};
}();

jQuery(document).ready(function () {
	DatatableHtmlTableDemo.init();
});