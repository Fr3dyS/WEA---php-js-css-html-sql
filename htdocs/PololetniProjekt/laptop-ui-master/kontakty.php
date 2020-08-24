<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<link
			href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap"
			rel="stylesheet"
		/>
		<style>
		.btn {
  			border: none;
  			color: white;
  			padding: 14px 28px;
  			font-size: 16px;
  			cursor: pointer;
		}
		.success {background-color: #4CAF50;} /* Green */
		.success:hover {background-color: #46a049;}

		.info {background-color: #2196F3;} /* Blue */
		.info:hover {background: #0b7dda;}

		.warning {background-color: #ff9800;} /* Orange */
		.warning:hover {background: #e68a00;}

		.danger {background-color: #f44336;} /* Red */ 
		.danger:hover {background: #da190b;}

		.default {background-color: #e7e7e7; color: black;} /* Gray */ 
		.default:hover {background: #ddd;}
		* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}
.prev, .next {
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
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}
.text {
  color:lightgreen;
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

.active, .dot:hover {
  background-color: #717171;
}


.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
		</style>
		<script type="text/javascript">
			/*function swapDiv(event,elem){
				elem.parentNode.insertBefore(elem,elem.parentNode.secondChild);
			} */ 
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
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
		</script>
		<link rel="stylesheet" href="./style.css" />
		<title>Vlaky v česku</title>
	</head>
	<body>
		<header>
			<div class="logo-container">
				<a href="index.html"><img src="./img/logo-CD.png" alt="logo"/></a>
			</div>
			<nav>
				<ul class="nav-links">
					<li><a class="nav-link btn success" href="lokomotivy.php">Lokomotivy</a></li>
					<li><a class="nav-link btn info" href="vozy.php">Železniční vozy</a></li>
					<li><a class="nav-link btn warning" href="kontakt.php">Kontakt</a></li>
				</ul>
			</nav>
			<div class="cart">
				<ul class="nav-links">
					<li><button class="nav-link btn danger" href="#">Nákupní košík</button></li>
				</ul>
			</div>
		</header>

		<main>
			<!---------------------------------------------------->
			<section class="presentation" onclick="swapDiv(event,this);">
				<div class="introduction">
					<div class="intro-text">
						<h1 >Vlaky součastnosti</h1>
							<p>vlaky pouze z české republiky od 20. století až po teď </p>
					</div>
					<div class="cta" >
						<button class="cta-select" href="#" >do minulosti</button>
					</div>
				</div>
				<div class="slideshow-container">

						<div class="mySlides fade">
						  <div class="numbertext">1 / 3</div>
						  <img src="./img/taurus.JPG" style="width:100%">
						</div>
						
						<div class="mySlides fade">
						  <div class="numbertext">2 / 3</div>
						  <img src="./img/vectroj_RJ.JPG" style="width:100%">
						</div>
						
						<div class="mySlides fade">
						  <div class="numbertext">3 / 3</div>
						  <img src="./img/vectron.JPG" style="width:100%">
						</div>
						
						<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
						<a class="next" onclick="plusSlides(1)">&#10095;</a>
						
						<div style="text-align:center">
								<span class="dot" onclick="currentSlide(1)"></span> 
								<span class="dot" onclick="currentSlide(2)"></span> 
								<span class="dot" onclick="currentSlide(3)"></span> 
							  </div>
							  
						</div>
			</section>
			<!--------------------------------------------->
		<script>
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
		  if (n > slides.length) {slideIndex = 1}    
		  if (n < 1) {slideIndex = slides.length}
		  for (i = 0; i < slides.length; i++) {
			  slides[i].style.display = "none";  
		  }
		  for (i = 0; i < dots.length; i++) {
			  dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";  
		  dots[slideIndex-1].className += " active";
		}
		</script>
			<!--------------------------------------------->
			<section class="presentation" onclick="swapDiv(event,this);">
					<div class="introduction">
						<div class="intro-text">
							<h1>Vlaky z minulosti</h1>
								<p>vlaky pouze z české republiky, a taky do konce 20. stoleti</p>
						</div>
						<div class="cta">
							<button class="cta-select" href="#" >do součastnosti</button>
						</div>
					</div>
					<div class="cover">
						<img src="./img/user_1.jpg"/>
					</div>
				</section>
			<!----------------------------------------------------->
	

			<img class="big-circle" src="./img/big-eclipse.svg" alt="" />
			<img class="medium-circle" src="./img/mid-eclipse.svg" alt="" />
			<img class="small-circle" src="./img/small-eclipse.svg" alt="" />
		</main>
	</body>
</html>
