<!Doctype html>
<html>
<head> 
	<title> </title>
	<style type="text/css">
	.ctverce {
		width:  200px;
		height: 200px;
		background-color: pink;

	  }
    
    body {
   background-color: grey;
   border-style: double;
   border-color: silver;
   border-width: 2px;
   }
 form {

   background-color: lightgrey;
   max-width: 200px; 
    }

</style>
</head>



<body>

	<h1> NADPIS </h1>
	
	<?php
	$krystof = 2;
	
	$deti = '2';
    
    $way = "<img src='sasin.jpg'>";
    echo $way;

    echo $krystof.$deti;
	echo '<div class="ctverce"></div>';
	
	$nadpis = "This is NADPIS!";
	$obsah = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Et harum quidem rerum facilis est et expedita distinctio. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Quisque tincidunt scelerisque libero. Nunc tincidunt ante vitae massa. Donec ipsum massa, ullamcorper in, auctor et, scelerisque sed, est. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam at arcu a est sollicitudin euismod.";
	echo "<div>";
	echo "<h1>".$nadpis."</h1>";
	echo "<p>".$obsah."</p>";
	echo "</div>";

	
	?>


	
	<div  class="ctverce"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		co laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat no
		co laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat no </div>
	<div class="sekce">
<h1> </h1>
<p> </p>
</div>

<img src="ship.jpg">

<form action="/action_page.php">
  Jméno: <input type="text" name="fname" value="Connor"><br>
  Příjmení: <input type="text" name="lname" value="Kenway"><br>
  <input type="submit" value="Potvrdit">
</form>



</body>
</html>
