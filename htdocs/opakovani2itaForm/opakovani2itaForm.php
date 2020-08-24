		  <?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Opakování 2ita Form </title>
</head>
<body>
<form>

 <div>
 <label for="jmeno">Jméno:</label>
 <input type="text" name="jmeno">
 </div>

 <div>
 <label for="heslo">Heslo:</label>
 <input type="password" name="heslo">
 </div>
 
 <div>
 <input type="submit" name="odesl">
 </div>

</form>
<?php
 
 session_destroy();

 isset($_SESSION["cislo"]) {
 	$_SESSION["cislo"] = 5;
 }


 if(isset($_GET["odesl"])){
 	echo $_GET["jmeno"];
    echo "<br>";
    echo $_GET["heslo"];
 }

?>

</body>
</html>