<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
	<title> Tvary </title>
</head>
<body>
<style type="text/css">
form{
	border-style: ridge;
}
.kruh{
  height: 100px;
  width: 100px;
  background-color: coral;
  border-radius: 100%;
  display: inline-block;
  border-style: solid;
  border-color: black;
  border-width: 0.5px; 
}
.ctverec{
	height: 100px;
	width: 100px;
    background-color: coral;
  border-style: solid;
  border-color: black;
  border-width: 0.5px;
}
.obdelnik{
	height: 50px; 
    width: 200px;
    border-radius: 0%;
    background-color: coral;
   border-style: solid;
   border-color: black;
   border-width: 0.5px;
 }
</style>

<form action="GeneratorTvaru.php" method="get"> 
<?php// [] že to je pole ?>
Čtverec: <input type="checkbox" name="a[]" value="ctverec" checked=""><br>
Obdelník: <input type="checkbox" name="a[]" value="obdelnik" checked=""><br>
Kruh: <input type="checkbox" name="a[]" value="kruh" checked=""><br>
Písmena: <input type="text" name="pismena" value="c, z"><br>
Počet objektů: <input type="number" name="limit"><br>
<input type="submit" name="button" value="Vygenerovat">
	

</form>
<?php
$limit = $_GET["limit"];
$button = $_GET["button"];
$pismena = $_GET["pismena"];

// Array class tvarů co máš
$tvary = $_GET["a"];
// Array všech písmen
$pismena = explode(",",$pismena);

echo "<br />";
if (isset($_GET["a"])&&isset($button)){
	// Tady udělej cyklus co pojede x Krát
	//	V cyklu vyber náhodnej prvek z pole $tvary a udělej div té třídy a do něj vlož náhodný prvek z $pismena
 for ($i=0; $i < $limit; $i++) { 
   $tvaroh = $tvary[mt_rand(0, count($tvary)-1)];
   $pismenka = $pismena[mt_rand(0, count($pismena)-1)];  
 echo "<br />";
 echo "<div style = 'text-align: center;' class = ".$tvaroh.'> '.$pismenka. '</div>';
 echo "<br />";
 }
}




$limit++;
?>

</body>
</html>