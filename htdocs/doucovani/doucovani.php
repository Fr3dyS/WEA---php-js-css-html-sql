<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Doučování</title>
</head>
<body>
	<form action="doucovani.php" method="GET">
		<input type="text" name="uzivatel">
		<input type="text" name="cisla">
		<input type="text" name="cislo">
		<input type="submit" name="submit">
	</form>
	<?php
	
        $pocet2=0;
	   $cislo=$_GET["cislo"];
       if(isset($_GET["submit"]))

	{
		if(!(empty($_GET['uzivatel']) || empty($_GET['cisla'])))
		{			
			$uzivatel = $_GET['uzivatel'];
			$cisla = $_GET['cisla'];
			$soubor = fopen('./cisla.txt', 'a+');
			fwrite($soubor, $uzivatel.';'.$cisla.';'.count(explode(',',$cisla)).PHP_EOL);
			fclose($soubor);
			header('Location: doucovani.php'); //Odesle novy GET pozadavek na stranku, tim padem zrusi ten pozadavek. Vzdy po F5 bez headeru se objevi dalsi "prikaz"
		}
	}
  //Pokud soubor neexistuje tak ho vytvori.
	$cesta = './cisla.txt';
	if (!file_exists($cesta))
	{
		$vytvor = fopen($cesta, 'w');
		fclose($vytvor);
	}

	$zdroj = fopen($cesta, 'r+');

	while(($radek = fgets($zdroj)) !== false)
	{
		if (strlen($radek) > 3 && strpos($radek, ';') !== false)
		{
			$pole = explode(';', $radek);
			if (count($pole) === 3)
			{
				$jmeno = $pole[0];
				$cisla = $pole[1];
				$pocet = $pole[2];
				?>
				<div class="item">
					<h3><?php echo $jmeno . ' ('.trim($pocet).')' ?></h3>
					<div class="cisla">
					<?php 
					$array = explode(',' , $cisla);
					for ($i=0; $i < count($array); $i++) { //Metoda Count vraci pocet prvku v poli. 
					echo $array[$i]. '<br />';
					if ($array[$i]==$cislo) {
					$pocet2++;
					   } 
					    
					} //FOR CYKLUS

                
  //Udelat aby to vypsalo počet 5 v poli ktery zadame, musi to zkontrolat vsechny cisla a vypsat ty petky				


                   ?>
					</div>
				</div>
				<?php
			}
			else{
				echo "Řádek není v pořádku.";
			}
		}
	}
	echo "Cisel 5 je tam: ".$pocet2;
	fclose($zdroj);
	?>
</body>
</html>
