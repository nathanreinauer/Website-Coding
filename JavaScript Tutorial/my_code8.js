$(document).ready(function() {
	$("h1").click(function() {
		$("p").eq(2).css("background-color", "red");
	});
});
