//== Class definition

var DatatableChildRemoteDataDemo = function () {
	//== Private functions

	// demo initializer
	var demo = function () {

		var datatable = $('.m_datatable').mDatatable({
			// datasource definition
			data: {
				type: 'remote',
				source: {
					read: {
						url: 'inc/api/datatables/demos/employees.php'
					}
				},
				pageSize: 10, // display 20 records per page
				saveState: {
					cookie: true,
					webstorage: true
				},
				serverPaging: true,
				serverFiltering: false,
				serverSorting: true
			},

			// layout definition
			layout: {
				theme: 'default',
				scroll: false,
				height: null,
				footer: false
			},

			// column sorting
			sortable: true,

			pagination: true,

			detail: {
				title: 'Load sub table',
				content: subTableInit
			},

			// columns definition
			columns: [{
				field: "RecordID",
				title: "",
				sortable: false,
				width: 50,
				textAlign: 'center'
			}, {
				field: "FirstName",
				title: "First Name",
				sortable: 'asc'
				// responsive: {hidden: 'md'}
			}, {
				field: "LastName",
				title: "Last Name"
			}, {
				field: "Company",
				title: "Company"
			}, {
				field: "Email",
				title: "Email"
			}, {
				field: "Actions",
				width: 110,
				title: "Actions",
				sortable: false,
				overflow: 'visible',
				template: function (row) {
					var dropup = (row.getDatatable().getPageSize() - row.getIndex()) <= 4 ? 'dropup' : '';
					
					return '\
						<div class="dropdown '+ dropup +'">\
							<a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">\
                                <i class="la la-ellipsis-h"></i>\
                            </a>\
						  	<div class="dropdown-menu dropdown-menu-right">\
						    	<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>\
						    	<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>\
						    	<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>\
						  	</div>\
						</div>\
						<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">\
							<i class="la la-edit"></i>\
						</a>\
						<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">\
							<i class="la la-trash"></i>\
						</a>\
					';
				}
			}]
		});

		function subTableInit(e) {
			$('<div/>').attr('id', 'child_data_ajax_' + e.data.RecordID).appendTo(e.detailCell)
				.mDatatable({
					data: {
						type: 'remote',
						source: {
							read: {
								url: 'inc/api/datatables/demos/orders.php',
								headers: { 'x-my-custom-header': 'some value', 'x-test-header': 'the value'},
								params: {
									// custom query params
									query: {
										generalSearch: '',
										EmployeeID: e.data.RecordID
									}
								}
							}
						},
						pageSize: 10,
						saveState: {
							cookie: true,
							webstorage: true
						},
						serverPaging: true,
						serverFiltering: false,
						serverSorting: true
					},

					// layout definition
					layout: {
						theme: 'default',
						scroll: true,
						height: 300,
						footer: false,

						// enable/disable datatable spinner.
						spinner: {
							type: 1,
							theme: 'default'
						}
					},

					sortable: true,

					// columns definition
					columns: [{
						field: "RecordID",
						title: "#",
						sortable: false,
						width: 50,
						responsive: {hide: 'xl'}
					}, {
						field: "OrderID",
						title: "Order ID",
						template: function (row) {
							return '<span>' + row.OrderID + ' - ' + row.ShipCountry + '</span>';
						}
					}, {
						field: "ShipCountry",
						title: "Country",
						width: 100
					}, {
						field: "ShipAddress",
						title: "Ship Address"
					}, {
						field: "ShipName",
						title: "Ship Name"
					}]
				});
		}

		var query = datatable.getDataSourceQuery();

		$('#m_form_search').on('keyup', function (e) {
			// shortcode to datatable.getDataSourceParam('query');
			var query = datatable.getDataSourceQuery();
			query.generalSearch = $(this).val().toLowerCase();
			// shortcode to datatable.setDataSourceParam('query', query);
			datatable.setDataSourceQuery(query);
			datatable.load();
		}).val(query.generalSearch);

		$('#m_form_status, #m_form_type').selectpicker();

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
	DatatableChildRemoteDataDemo.init();
});