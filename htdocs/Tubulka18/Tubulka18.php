<!DOCTYPE html>
<html>
<head>
	<title>  </title>
</head>
<body>
<style type="text/css">



</style>


<form action="Tubulka18.php" method="GET">
 Some text: <input type="radio" name="FN" value="Test" checked> <input type="radio" name="FN" value="Vlak">  <input type="radio" name="FN" value="letadlo"><br>
    Zadej sirku tabulky: <input type="number" name="sirka" value="50"><br>
    Zadej vysku tabulky: <input type="number" name="vyska" value="50"><br>
    Zadej barvu: <input type="text" name="barva" value="red"><br>
    Zadej kolikrat chces aby se ti zobrazila tabulka: <input type="number" name="pocet" value="1"><br>
   <input type="submit" name="Odeslat">

</form>
<?php
if (isset($_GET['FN'])&&isset($_GET['sirka'])&&isset($_GET['vyska'])&&isset($_GET['barva'])&&isset($_GET['pocet'])){
$pocet = $_GET['pocet'];
$barva = $_GET['barva'];
$text = $_GET['FN'];
$sirka = $_GET['sirka'];
$vyska = $_GET['vyska'];
	for ($i=0; $i < $pocet; $i++) { 
 		echo '<div class = "JBMNT" style="width: '. $sirka .'px; height: '. $vyska .'px; background-color: '.$barva.';">' .$text .'</div>';  
 }
}


?>

</body>
</html>