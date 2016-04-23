$(document).ready(function() {
	var imageName = [
	"http://www.littlewebhut.com/javascript/variables/floatingball.gif",
	"http://www.littlewebhut.com/javascript/variables/redball.gif",
	"http://www.littlewebhut.com/javascript/variables/eightball.gif"
	];
	var indexNum = 0;
		
	$("#picture").click(function() {
		
		$("#picture").fadeOut(300, function() {
			$("#picture").attr("src", imageName[indexNum]);	
			indexNum++;
			if (indexNum > 2) {indexNum = 0;}
			$("#picture").fadeIn(500);	
		});
	});
});
