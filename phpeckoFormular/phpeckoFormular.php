<!Doctype html>
<html>
<head> 
	<title> </title>
	<style type="text/css">
	form { 
		height: 80px;
		width: 300px;
		border-style: solid;
		border-width: 1px;
	    
	}	
body {
  background-image:url(brickwall.jpg);
}
</style>
</head>



<body>

	<h1> TenFormular </h1>
	
	<?php
	
	echo $_GET["jmeno"]; 
	echo $_GET["prijmeni"];
	//GET Meni URL stranku (Identifikace produtku)
	  if(isset($_GET["jmeno"])&&isset($_GET["prijmeni"])){

      } else {
      	# code...
      }
      
 

	?>



	<form method="get" action="phpeckoFormular.php">
		Jmeno: <input type="text" name="jmeno" value=""><br>
		Prijmeni: <input type="text" name="prijmeni" value=""><br>
		<input type="submit" value="Potvrdit">
	</form>

	<div> ************************************** </div>

	<form method="post" action="phpeckoFormular.php">
		JMENO: <input type="text" name="fName" value=""><br>
		PRIJMENI: <input type="text" name="lName" value=""><br>
		<input type="submit" value="Extrahovat">
	</form>

  <?php

	echo $_POST["fName"];
    echo $_POST["lName"];
    //POST NEmeni URL stranku (Bez identifikace produktu)
	 if(isset($_POST["fName"])&&isset($_POST["lName"])){
    }
	


	?>







</body>
</html>
