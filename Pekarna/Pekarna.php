<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
	<title> Pekarna </title>
</head>
<body>
<style type="text/css">
	tr, td{
		border-style: solid;
		border-color: black;
		border-width: 1px;
	    width: 100px;
        text-align: center;
	    padding-top: 2px;
	 
	 }

</style>



<?php 

   echo '<table>';
   echo '<tr>';
    echo '<td style="border-style: solid; width: 203px;">' ."Obrázek". '</td>';
    echo '<td>' ."Id". '</td>';
    echo '<td>' . "Název" . '</td>';
    echo '<td>' ."Popis". '</td>';
    echo '<td>' ."Cena". '</td>';
    echo '<td>' ." ". '</td>';
   echo '</table>';
if (!isset($_GET['limit'])){
   header("Location: Pekarna.php?limit=1");
}
	
$limit =  $_GET['limit'];

$soubor = fopen('./dataPekarny.txt', 'r');
$pocet = 0;
  
    while (($line = fgets($soubor)) !== false && $pocet < $limit) {

	 $pole = explode(';',  $line);
     $id = $pole[0];  
     $jmeno = $pole[1]; 
     $text = $pole[2]; 
     $cena = $pole[3];
     $obr = $pole[4];
     $koupit = '<form method="post" action="www.youtube.com"> <input type="submit" name="koupit" value="Koupit: '.$jmeno.'">';
    $pocet++;

echo '<table style = "border-style: solid; border-color: black">';
    
    echo '<tr>';
    echo '<td>' . '<img style = "height: 200px; width: 200px;" src="'.$obr.'" />' . '</td>' ;
    echo '<td>' . $id . '</td>';
    echo '<td>' . $jmeno . '</td>';
    echo '<td>' .$text . '</td>';
    echo '<td>' .$cena. '</td>';
    echo '<td>' .$koupit. '</td>';
  
   echo '</tr>'; 
    
echo '</table>';

}
?>
</body>
</html>