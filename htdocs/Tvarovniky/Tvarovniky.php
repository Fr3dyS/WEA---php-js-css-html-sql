<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
    <title> </title>
</head>
<body>
<style type="text/css">
.Kruh{
	border-radius: 100%;
}
</style>

<form action="Tvarovniky.php" method="get">
 Zadej limit kolik chceš aby se ti zobrazilo objektů: <input type="text" name="limit"><br />
 Zadej jakej tvar chceš: <input type="text" name="tvar"><br />
 <input type="submit" name="tlacitko">
</form>
<?php 
if (isset($_GET["tlacitko"])&&isset($_GET["tvar"])&&isset($_GET["limit"])){

$limit = $_GET["limit"];
$tvar = $_GET["tvar"];
$button = $_GET["tlacitko"];

$soubor = fopen("objekty.txt","r");

for ($i=0; $i < $limit; $i++) { 
    $limit = $_GET["limit"];


    $radek = fgets($soubor);

    $pole = explode(";",$radek);
    if($tvar == $pole[1])
    echo '<div class="'.$pole[1].'" style="border-style:solid; background-color:'.$pole[2].'; height: '.$pole[3].'px; width: '.$pole[4].'px;"></div>';
}
fclose($soubor);
}
$limit++;
?>


</body>
</html>