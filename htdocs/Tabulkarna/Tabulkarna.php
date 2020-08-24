<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
	<title> Továrna na tabulky </title>
</head>
<body>
<style type="text/css">
table, tr, td {
  border: 1px solid black;
}


</style>
<form method="GET" action="Tabulkarna.php">
	<input type="number" name="sirkaPole" placeholder="Zadej šířku pole" value="69">
    <input type="number" name="vyskaPole" placeholder="Zadej výšku pole" value="96">
    <input type="number" name="vyskaTabulky" placeholder="Zadej výšku tabulky" value="">
    <input type="number" name="sirkaTabulky" placeholder="Zadej šířku tabulky" value="">
    <input type="text" name="text" placeholder="Zadej text" value="Žijeme len raz">

    <input type="submit" name="odeslat">
    

    <br> </br>
</form>
<?php

$sirkaTabulky = $_GET["sirkaTabulky"];
$vyskaTabulky = $_GET["vyskaTabulky"];
$sirkaPole = $_GET["sirkaPole"];
$vyskaPole = $_GET["vyskaPole"];
$text = $_GET["text"];
$odeslat = $_GET["odeslat"];
if (isset($sirkaPole)&&isset($vyskaPole)&&isset($text)&&isset($odeslat)&&isset($sirkaTabulky)&&isset($vyskaTabulky)) {
echo '<table>';	
    for ($i=0; $i < $vyskaTabulky; $i++) { 
    	
    echo '<tr style: "width = ' . $sirkaPole .'px; height = '. $vyskaPole .'px;">'; 
    
	for ($j=0; $j < $sirkaTabulky; $j++) { 
	
	echo '<td>';
	echo $text . $i ."_". $j;
    echo '</td>';
 
  
   }
   echo '</tr>'; 
    }

echo '</table>';


}

?>


</body>
</html>