<?php session_start(); ?>

<html>
<head>
	<title> Databáze </title>
 <meta charset="utf-8">
</head>
<body>
  <form>
  	Název souboru: <input type="text" name="name"><br>
  	Text: <textarea name="text"></textarea><br>
          	<input type="submit" name="ok" value="Ulož!"><br>

  </form>
 <?php

 if (isset($_GET["ok"])) {
 	$soubor = $_GET["name"];
 if ($soubor == "") {
 	if (isset($_SESSION["name"])){
 		 $soubor = $_SESSION["name"];
 	} else {
 		$soubor = "default.txt";
 	}
 }
  $_SESSION["name"] = $soubor;
 //v $soubor je ted real cesta k souboru

  file_put_contents("./" . $soubor, $_GET["text"]);

 }


?>

</body>
</html>