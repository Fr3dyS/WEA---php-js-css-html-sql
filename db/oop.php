<!DOCTYPE html>
<html>
<head>
	<title>OOP</title>
 <meta charset="utf-8">
</head>
<body>

 <?php
  require_once "classes/database.php";
 $db = new Database("peppa");
 if ($db->isConnected()){
   echo "Jsme připojeni";
  $db->insertGame(Mumínci)
} else {
	echo "Chyba!";
}

?>
</body>
</html>