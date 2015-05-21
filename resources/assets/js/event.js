$( document ).ready(function() {


	if($('#start_date_string').length && $('#end_date_string').length){
		 $('#start_date_string').datepicker({
		    format: 'yyyy-mm-dd',
		    todayBtn: "linked",
		    clearBtn: true,
		    orientation: "bottom auto",
		    todayHighlight: true
		});

		$('#end_date_string').datepicker({ 
		    format: 'yyyy-mm-dd',
		    todayBtn: "linked",
		    clearBtn: true,
		    orientation: "bottom auto",
		    todayHighlight: true
		});
	}

	

});
