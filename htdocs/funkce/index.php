<!DOCTYPE html>
<meta charset="utf-8">
<meta http-equiv="refresh" content="0.5" > 
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			background-color: lightgrey;
		}
		.trida{
			margin: left;
		    
		}

	</style>
</head>
<body>
	<?php
	$vysledek=0;
	require("funkce.php"); 
	$a=0;
	$b=0;
    $tvar="";
	$barva="";
	if (isset($_GET['a'])) {
		$a=$_GET['a'];
	}
	if (isset($_GET['b'])) {
		$b=$_GET['b'];
	}
	if (isset($_GET['tvar'])) {
		$tvar=$_GET['tvar'];
	}	
	if (isset($_GET['barva'])) {
		$barva=$_GET['barva'];
	}	
	//nebo     $a ,   $b,
	vykresli("100", "30", random_color(), $gen_random );
	 //soucet($a, $b);
     //echo $vysledek;
	?>
</body>
</html>