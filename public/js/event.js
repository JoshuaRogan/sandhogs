$( document ).ready(function() {
    $('#start_date').datepicker({
	    format: 'yyyy-mm-dd',
	    todayBtn: "linked",
	    clearBtn: true,
	    orientation: "bottom auto",
	    todayHighlight: true
	});

	$('#end_date').datepicker({ 
	    format: 'yyyy-mm-dd',
	    todayBtn: "linked",
	    clearBtn: true,
	    orientation: "bottom auto",
	    todayHighlight: true
	});
});
