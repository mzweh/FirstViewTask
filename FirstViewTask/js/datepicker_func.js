(function ($) {

	"use strict";
	
	var nowTemp = new Date();
	var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

	var select_date = $('#select_date').datepicker({
		format: 'dd/mm/yyyy',
		onRender: function(date) {
			return date.valueOf() < now.valueOf() ? 'disabled' : '';
	  }
	}).data('datepicker');
	
	
})(window.jQuery); // JavaScript Document