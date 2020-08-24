<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
	<style type="text/css">
	
</style>
	<title> Czech Boks </title>
</head>
<body>

<form method="get">
	<input type="checkbox" name="vehicle1" value="Bike"> I have a bike<br>
	<input type="checkbox" name="vehicle1" value="Car"> I have a car<br>
	<input type="checkbox" name="vehicle3"> I have a boat<br>
	<input type="radio" name="a" value="a">
	<input type="radio" name="a" value="b">
	<input type="submit" name="submit" value="odeslat"> 
</form>

<?php
if(isset($_GET["submit"])){
	echo $_GET["a"];
	
}

?>


</body>
</html>