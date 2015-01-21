var handleDatepicker = function () {
	$("#datepicker-default").datepicker({
		todayHighlight: true
	});
	$("#datepicker-inline").datepicker({
		todayHighlight: true
	});
	$(".input-daterange").datepicker({
		todayHighlight: true
	});
	$("#datepicker-disabled-past").datepicker({
		todayHighlight: true
	});
	$("#datepicker-autoClose").datepicker({
		todayHighlight: true,
		autoclose: true
	});
	$("#datepicker-autoClose2").datepicker({
		todayHighlight: true,
		autoclose: true
	})
};


var FormPlugins = function () {
	"use strict";
	return {
		init: function () {
			handleDatepicker();						
		}
	}
}()