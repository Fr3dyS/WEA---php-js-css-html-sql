<!DOCTYPE html>
<html>
<head>
	<title> deadPool </title>
</head>
<body>
<style type="text/css">

.container{
	width: 700px;
	height: 500px;
	margin: 10px auto auto auto;

}

.left{
	width: 300px;
	float: left;
	height: 500px;
	
}

.right{
	width: 400px;
	float: left;
	height: 500px;
	padding: 20px;
	box-sizing: border-box;
}

</style>

<?php 
// Podívá se jestli existuje parametr http://localhost/deadpool/deadpool.php?limit=5 a když není stránku ukončí
if(!isset($_GET["limit"])) Die("Neni limit");

// Otevře soubor "r" znamená styl otevření r-> Read
$soubor = fopen("data.txt","r");

// uložím si parametr limit do proměnné limit
$limit = $_GET["limit"];

// pomocná proměnná, která bude kontrolovat jestli nebyl překročen limit
$i = 0;

// feof($soubor) -> Vrátí true pokud nelze již nic přečíst -> ! je proto aby to jelo dokud lze něco číst ze souboru
// Druhá podmínka kontroluje limit
while(!feof($soubor) && $i < $limit)  {
	// fgets($soubor) -> přečte řádek, zapamatuje si jaký řádek přečetl a když se tato metoda zavolá znova tak přečte další
	$radek = fgets($soubor);
	//Převedeme celý řádek dat na pole
	// Metoda explode nám řádek rozdělí podle požadovaného znaku do pole
	$pole = explode(";",$radek);
	// Vytvoříme div, a vložíme do něj data
	echo '<div class="container">
			<img class="left" src="'.$pole[3].'">
			
			</img>
			<div class="right">
				<h3>'.$pole[1].'</h3>
				<p>'.date('l jS \of F Y h:i:s A').'</p>
				<p>'.$pole[2].'</p>
			</div>
		</div>';

	$i++;
}
//Zavřeme soubor
fclose($soubor);
?>






</body>
</html>