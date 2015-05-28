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
	$("#datepicker-autoClose1").datepicker({
		todayHighlight: true,
		autoclose: true
	});
	$("#datepicker-autoClose2").datepicker({
		todayHighlight: true,
		autoclose: true
	});
	$("#datepicker-autoClose3").datepicker({
		todayHighlight: true,
		autoclose: true
	});
	$("#datepicker-autoClose4").datepicker({
		todayHighlight: true,
		autoclose: true
	});
	$("#datepicker-autoClose5").datepicker({
		todayHighlight: true,
		autoclose: true
	});
	$("#datepicker-autoClose6").datepicker({
		todayHighlight: true,
		autoclose: true
	});
	$("#datepicker-autoClose7").datepicker({
		todayHighlight: true,
		autoclose: true
	});
	$("#datepicker-autoClose8").datepicker({
		todayHighlight: true,
		autoclose: true
	});
	$("#datepicker-autoClose9").datepicker({
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