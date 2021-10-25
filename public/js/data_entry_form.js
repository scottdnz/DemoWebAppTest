$(document).ready(function() {

	$( "#date1" ).datepicker();


	$( "#dialog1").dialog({
		autoOpen: false,
		buttons: {
          OK: function() {
          	$(this).dialog("close");}
        },
        title: "Success",
        position: {
          my: "center",
          at: "center"
     	}
	});

	
	$( "#btn-show-dialog1").click(function() {
		$( "#dialog1" ).dialog( "open" );
		return false;
    });




	// $( "#testSlider" ).slider({
	// 	// orientation: "vertical"
	//     min: 0,
	//     max: 150,
	//     value: 50
	// });
});