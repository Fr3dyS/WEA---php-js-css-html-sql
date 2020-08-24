<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap" rel="stylesheet" />
	<style>
		.button {
			border-radius: 4px;
			background-color: #f4511e;
			border: none;
			color: #FFFFFF;
			text-align: center;
			font-size: 28px;
			padding: 20px;
			width: 200px;
			transition: all 0.5s;
			cursor: pointer;
			margin: 5px;
		}

		.button span {
			cursor: pointer;
			display: inline-block;
			position: relative;
			transition: 0.5s;
		}

		.button span:after {
			content: '\00bb';
			position: absolute;
			opacity: 0;
			top: 0;
			right: -20px;
			transition: 0.5s;
		}

		.button:hover span {
			padding-right: 25px;
		}

		.button:hover span:after {
			opacity: 1;
			right: 0;
		}


		img {
			margin-top: 40px;
			width: 80%;
		}

		.autor {
			color: green;
			font-style: oblique;
			text-align: center;
		}

		.kosikautor {
			color: white;
			font-style: oblique;
			text-align: center;
		}

		.footer {

			left: 0;
			bottom: 0;
			width: 100%;
			background-color: red;
			color: white;
			text-align: center;
		}

		.btn {
			border: none;
			color: white;
			padding: 14px 28px;
			font-size: 16px;
			cursor: pointer;
		}

		.success {
			background-color: #4CAF50;
			height: 80%;
		}

		.success:hover {
			background-color: #46a049;
		}

		.info {
			background-color: #2196F3;
			height: 80%;
		}

		.info:hover {
			background: #0b7dda;
		}

		.warning {
			background-color: #ff9800;
			height: 80%;
		}

		.warning:hover {
			background: #e68a00;
		}

		.danger {
			background-color: #f44336;
			height: 80%;
		}

		.danger:hover {
			background: #da190b;
		}

		.default {
			background-color: #e7e7e7;
			color: black;
			height: 80%;
		}

		.default:hover {
			background: #ddd;
		}

		* {
			box-sizing: border-box
		}

		body {
			font-family: Verdana, sans-serif;
			margin: 0;
			font-family: Arial, Helvetica, sans-serif;
		}

		.mySlides {
			display: none
		}

		img {
			vertical-align: middle;
		}

		.slideshow-container {
			max-width: 1000px;
			position: relative;
			margin: auto;
		}

		.prev,
		.next {
			cursor: pointer;
			position: absolute;
			top: 50%;
			width: auto;
			padding: 16px;
			margin-top: -22px;
			color: white;
			font-weight: bold;
			font-size: 18px;
			transition: 0.6s ease;
			border-radius: 0 3px 3px 0;
			user-select: none;
		}

		.next {
			right: 0;
			border-radius: 3px 0 0 3px;
		}

		.prev:hover,
		.next:hover {
			background-color: rgba(0, 0, 0, 0.8);
		}

		.text {
			color: lightgreen;
			font-size: 15px;
			padding: 8px 12px;
			position: absolute;
			bottom: 8px;
			width: 100%;
			text-align: center;
		}


		.numbertext {
			color: #f2f2f2;
			font-size: 12px;
			padding: 8px 12px;
			position: absolute;
			top: 0;
		}

		.dot {
			cursor: pointer;
			height: 15px;
			width: 15px;
			margin: 0 2px;
			background-color: #bbb;
			border-radius: 50%;
			display: inline-block;
			transition: background-color 0.6s ease;
		}

		.active,
		.dot:hover {
			background-color: #717171;
		}


		.fade {
			-webkit-animation-name: fade;
			-webkit-animation-duration: 1.5s;
			animation-name: fade;
			animation-duration: 1.5s;
		}

		@-webkit-keyframes fade {
			from {
				opacity: .4
			}

			to {
				opacity: 1
			}
		}

		@keyframes fade {
			from {
				opacity: .4
			}

			to {
				opacity: 1
			}
		}

		@media only screen and (max-width: 300px) {

			.prev,
			.next,
			.text {
				font-size: 11px
			}
		}

		.modal {
			display: none;
			position: fixed;
			z-index: 1;
			padding-top: 100px;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			overflow: auto;
			background-color: rgb(0, 0, 0);
			background-color: rgba(0, 0, 0, 0.4);
		}

		.modal-content {
			position: relative;
			background-color: #fefefe;
			margin: auto;
			padding: 0;
			border: 1px solid #888;
			width: 80%;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-webkit-animation-name: animatetop;
			-webkit-animation-duration: 0.4s;
			animation-name: animatetop;
			animation-duration: 0.4s
		}


		@-webkit-keyframes animatetop {
			from {
				top: -300px;
				opacity: 0
			}

			to {
				top: 0;
				opacity: 1
			}
		}

		@keyframes animatetop {
			from {
				top: -300px;
				opacity: 0
			}

			to {
				top: 0;
				opacity: 1
			}
		}

		.close {
			color: white;
			float: right;
			font-size: 28px;
			font-weight: bold;
		}

		.close:hover,
		.close:focus {
			color: #000;
			text-decoration: none;
			cursor: pointer;
		}

		.modal-header {
			padding: 2px 16px;
			background-color: #5cb85c;
			color: white;
		}

		.modal-body {
			padding: 2px 16px;
		}

		.modal-footer {
			padding: 2px 16px;
			background-color: #5cb85c;
			color: white;
		}
	</style>
	<script type="text/javascript">
		var slideIndex = 1;
		showSlides(slideIndex);

		function plusSlides(n) {
			showSlides(slideIndex += n);
		}

		function currentSlide(n) {
			showSlides(slideIndex = n);
		}

		function showSlides(n) {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("dot");
			if (n > slides.length) {
				slideIndex = 1
			}
			if (n < 1) {
				slideIndex = slides.length
			}
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
			}
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex - 1].style.display = "block";
			dots[slideIndex - 1].className += " active";
		}
	</script>
	<link rel="stylesheet" href="./style.css" />
	<title>Vlaky v česku</title>
</head>

<body>
	<header>
		<div class="logo-container">
			<a href="index.php"><img src="./img/logo_CD.svg" alt="logo" /></a>
		</div>
		<nav>
			<ul class="nav-links">
				<li><a class="nav-link btn success button" href="lokomotivy.php">Lokomotivy</a></li>
				<li><a class="nav-link btn info button" href="vozy.php">vozy</a></li>
				<li><a class="nav-link btn warning button" href="kontakt.php">Kontakt</a></li>
			</ul>
		</nav>
		<div class="cart">
			<ul class="nav-links">
				<li><a class="nav-link btn danger" id="myBtn">košík</a></li>
				<!----------------------------------------------------------------->
				<div id="myModal" class="modal">
					<div class="modal-content">
						<div class="modal-header">
							<span class="close">&times;</span>
							<h2>Nákupní košík</h2>
						</div>
						<div class="modal-body">
							<?php
							echo "stav vaseho kosiku je: ";
							?>
						</div>
						<div class="modal-footer">
							<h3 class="kosikautor">Autor: Tomáš Kadleček </h3>
						</div>
						
					</div>
				</div>
				<!----------------------------------------------------------------->
			</ul>
		</div>
	</header>

	<main>
		<!------------------------------------------------>
		<script>
			var modal = document.getElementById("myModal");
			var btn = document.getElementById("myBtn");
			var span = document.getElementsByClassName("close")[0];
			btn.onclick = function() {
				modal.style.display = "block";
			}
			span.onclick = function() {
				modal.style.display = "none";
			}
			window.onclick = function(event) {
				if (event.target == modal) {
					modal.style.display = "none";
				}
			}
		
		</script>
		<img class="big-circle" src="./img/big-eclipse.svg" alt="" />
		<img class="medium-circle" src="./img/mid-eclipse.svg" alt="" />
		<img class="small-circle" src="./img/small-eclipse.svg" alt="" />
	</main>
</body>

</html>