$(document).ready(function() {
	$("#testbutton, strong").click(function() {
		// 'this' changes whatever you clicked (#testbutton or strong)to bgcolor red
		$(this).css("background-color","red");
	});
});
