$(document).ready(function() {

	$("#q04-3").click(function() {
		console.log("clicked");
		let otherArea = $("#eq-04-3");
		if (otherArea.hasClass("hidden")) {
			otherArea.removeClass("hidden");
		}
		else {
			otherArea.addClass("hidden");
		}
	});

});