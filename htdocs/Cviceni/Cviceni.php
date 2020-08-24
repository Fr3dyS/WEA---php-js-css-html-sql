<!DOCTYPE html>
<html>
<head>
  <title>  </title>
  <style type="text/css">

  </style>
  
  </head>
  

  <body>
	
	<form method="get" action="Cviceni.php">
		FirstName: <input type="text" name="FN" value=""><br>
		LastName: <input type="text" name="LN" value=""><br>
	<input type="submit" value="Potvrdit">
	
	</form>
<?php 
echo $_GET["FN"];
echo $_GET["LN"];

// Matěj Lajtkep

?>
  </body>
  </html>