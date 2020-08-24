<!DOCTYPE html>
<html>
<head>
	<title> deadPoolUcReseni </title>
</head>
<body>
<style type="text/css">


</style>

<?php 
if (!isset($_GET['limit'])){
   header("Location: deadpoolUcitelovoReseni.php?limit=1");
   //$_GET['limit'] = 1;
}
	
$limit =  $_GET['limit'];

$soubor = fopen('./data.txt', 'r');
$pocet = 0;
    
    while (($line = fgets($soubor)) !== false && $pocet < $limit) {

	 $pole = explode(';',  $line);
     $id = $pole[0];  
     $jmeno = $pole[1]; 
     $text = $pole[2]; 
     $obr = $pole[3];  //adresa k obrázku
    echo '<img src="'.$obr.'" />';
    echo $jmeno .'<br />';
    $pocet++;
    } 


/*
for ($i=0; $i < 11; $i++) { 
	$line = fgets($soubor);
  echo $line. '<br />';
}
*/

?>




</body>
</html>