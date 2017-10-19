jQuery.validator.setDefaults({
	errorElement: 'div', //default input error message container
    errorClass: 'form-control-feedback', // default input error message class
    focusInvalid: false, // do not focus the last invalid input
    ignore: "",  // validate all fields including form hidden input

    errorPlacement: function(error, element) { // render error placement for each input type
    	var group = $(element).closest('.form-group');
        var help = group.find('.m-form__help');
        if (help.length > 0) {
            help.before(error); 
        } else {
            $(element).after(error);
        }
    },

    highlight: function(element) { // hightlight error inputs
    	$(element).closest('.form-group').addClass('has-danger'); // set error class to the control group
        if ($(element).hasClass('form-control')) {
        	//$(element).addClass('form-control-danger');
        }
    },

    unhighlight: function(element) { // revert the change done by hightlight
        $(element).closest('.form-group').removeClass('has-danger'); // set error class to the control group
        //$(element).removeClass('form-control-danger');
    },

    success: function(label, element) {
    	$(label).closest('.form-group').addClass('has-success').removeClass('has-danger'); // set success class to the control group
        $(label).closest('.form-group').find('.form-control-feedback').remove();
        //$(element).removeClass('form-control-danger');
        //$(element).addClass('form-control-success');
    }
});