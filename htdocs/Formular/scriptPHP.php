<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<style type="text/css">
	 .blue{
 	background-color: blue;
 }
 
 .olive{
 	background-color: olive;
 }
   .red{
 	background-color: red;
 }


</style>

<?php
if (isset($_GET["submit"])&&empty($_GET["FN"])&&empty($_GET["LN"])) {
	echo "Je to prazdny!";
  } else {
echo "<div class=".$_GET["barva"].">" . $_GET["FN"] . $_GET["LN"].        "</div>";
}




?>
</body>
</html>

