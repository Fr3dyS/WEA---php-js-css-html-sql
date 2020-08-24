<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
	<title> Divy </title>
</head>
<body>
<style type="text/css">
	.ctverec{
		width: 100px;
		height: 100px;
	}
</style>
<!-- Action specifikuje na jakou stánku sešle dotaz (přesměrování) -->
<form action="index.php" method="GET">
	BARVA:<input type="text" name="barva"><br>
	TEXT: <input type="text" name="text">
	<input type="submit" value="odeslat">
</form>

<?php 
// Zkontroluju jestli uživatel zadal barvu a text
if(!empty($_GET["barva"]) && isset($_GET["text"])){
	$barva = $_GET["barva"];
	$text = $_GET["text"];
	//Vytvořím div s požadovaným textem a barvou
	echo '<div class="ctverec " style="background-color:'.$barva.';">
		'.$text.'
		</div>';
}

?>




</body>
</html>