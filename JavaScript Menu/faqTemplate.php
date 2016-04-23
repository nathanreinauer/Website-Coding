<?php
/*
Template Name: FAQ Page
*/
?>

<html>
<head>
<title>FAQ</title>

<!-- CSS -->
	<style>
	
		button, article {
			font-family: Helvetica;
		}
	
		button {
			background-color: #699999;
			color: white;
			height: 30px;
			width: 100px;
			border: none;
			border-radius: 5px;
			
		}
		
		#div1 {
			float: left;
			border: 2px solid black;
			margin: 10px;
			background-color: #699999;
			border-radius: 5px;
			
		}
		
		a {
			color: white;
			text-decoration: none;
		}
		
		a:hover {
			color: #afcec9;
		}
		
		article {
			width: 400px;
			float: left;
			padding-left: 20px;
			}
			
		img {
			margin-top: 15px;
			display: block;
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 15px;
		}

		
	</style>	
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
</head>
<body>
	<header>

	
	<div id="div1">
		<button type="button" id="button1"><strong>MENU</strong></button><br>
		
		<div id="div2">
			<button type="button" id="button2">
				<a href="http://nathanreinauer.prosperitacademy.com">HOME</a>
			</button><br>
			<button type="button" id="button3">
				<a href="http://nathanreinauer.prosperitacademy.com/about/">ABOUT</a>
			</button><br>
			<button type="button" id="button4">
				<a href="http://nathanreinauer.prosperitacademy.com/services/">SERVICES</a>
			</button>
			
			<div>
				<img src="http://nathanreinauer.prosperitacademy.com/wp-content/uploads/2016/04/reallogo.png" height="40" width="40">
			</div>
		</div>
	</div>
	
	</header>

	<article>
	
		<h1>
			Frequently Asked Questions
		</h1>
		
		<h3>
			What's the point of this website?
		</h3>			
		<p>
			We recognized a need for beautiful photographs of people turned around, and we filled it.
		</p>
		
		<h3>
			Isn't that weird?
		</h3>
			
		<p>
			Once man's weird is another man's Rembrandt.
		</p>
			
		<h3>
			What does that even mean?
		</h3>
			
		<p>
			It means if you don't appreciate our amazing faceless photographs, you can go to another website and find plenty of pictures that have faces in them. Good day.
		</p>
	
	
	</article>
	
	



<!-- JavaScript -->
<script>

$(document).ready(function() {
	//hides menu with three buttons
	$("#div2").hide();
	//and when you mouseover the button...
	$("#button1").mouseover(function() {
	//...the hidden menu drops down
		$("#div2").slideDown();
	});
	
	//then, when the mouse leaves the main button AND menu together...
	$("#div1").mouseleave(function() {
	//...the menu slides back up like magic
		$("#div2").slideUp();	
	});
});
	
</script>


</body>
</html>