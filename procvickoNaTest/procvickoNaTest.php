<!DOCTYPE html>
<html>
<head>
  <title>  </title>
  <style type="text/css">
 form{
  background-color: grey;
  border-style: solid;
  border-width: 1px;
  width: 410px;
  height: 50px;
 }
  



  </style>
  </head>
  <body>
	
	<form method="GET" action="procvickoNaTest.php">
	   Veta: <input type="text" name="veta" value=""><br>
		<input type="submit" name="submit"><br>

	</form>
<?php
if (isset($_GET["submit"])&&empty($_GET["veta"])){
echo "Napis vetu!";

} else{
echo $_GET["veta"];
echo "</br>";
echo strtoupper($_GET["veta"]); //Napise vetu s CapsLockem
echo "</br>";
echo strtolower($_GET["veta"]); //Napise vetu s malymi pismeny


}
?>
<?php
$string = $_GET["veta"];
echo "<pre>";
echo "<br />";
echo "Pocet slov ve vete je:". str_word_count($string);
echo "<br />";
echo "Pocet mezer ve vete je:". substr_count($string, " ");
echo "<br />";
echo "Delka tetu:". strlen(str_replace(" ", "", $string));
echo "<br />";
?>
  
<div>***********************************************</div>

<form method="GET" action="procvickoNaTest.php">
  Zmackni tlacitko pro napsani textu ze souboru: <input type="submit" name="odeslat" value="Otevrit">


</form>
<?php
       if(isset($_GET["odeslat"]))

  {  

      $soubor = fopen('./vypis.txt', 'a+');
      fwrite($soubor);
      echo $soubor;
      fclose($soubor);
      header('Location: procvickoNaTest.php'); //Odesle novy GET pozadavek na stranku, tim padem zrusi ten pozadavek. Vzdy po F5 bez headeru se objevi dalsi "prikaz"
    }
  




?>





  </body>
  </html>
