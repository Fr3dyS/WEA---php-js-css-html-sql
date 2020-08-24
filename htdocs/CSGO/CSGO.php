<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
	<title> CSGO </title>
</head>
<body>
<style type="text/css">

.container{
	width: 350px;
	height: 400px;
	margin: 10px auto auto auto;
    border-style: solid;
}

.left{
	width: 300px;
	float: left;
	height: 200px;
	
}

.right{
	width: 200px;
	float: left;
	height: 200px;
	padding: 20px;
	box-sizing: border-box;
}

</style>

<form method="get" action="CSGO.php">
	Napiš co chceš vyhledat: <input type="text" name="hledej"> |||Nechej prázdné pokud chceš zobrazit vše|||<br />
    <input type="submit" name="Vodešli">

</form>

<?php 
if (isset($_GET["hledej"])&&isset($_GET["Vodešli"])){

$text = $_GET["hledej"];
$odeslat = $_GET["Vodešli"];

$soubor = fopen("weapons.txt","r");


while(!feof($soubor))  {
	
	$radek = fgets($soubor);

	$pole = explode(";",$radek);
	$a = $pole[1];
$search = $text;
if(preg_match("/{$search}/i", $a)) {
	echo '<div class="container">
			<img class="left" src="'.$pole[3].'">
			
			</img>
			<div class="right">
				<h3>'.$pole[1].'</h3>
				<p>'.$pole[2].'</p>
			</div>
		</div>';
	}
}
fclose($soubor);
}
?>

</body>
</html>