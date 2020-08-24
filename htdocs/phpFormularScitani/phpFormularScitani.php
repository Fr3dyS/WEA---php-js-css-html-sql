<!Doctype html>
<html>
<head> 
	<title> </title>
	<style type="text/css">
.Scitani { width: 100px;
width: 500px;
background-color: lightblue;

}
.strlen { width: 100px;
width: 500px;
background-color: blue;

}	

</style>
</head>



<body>
<div class="Scitani">
	<h1> TenFormularNum2Scitani </h1>
	
	

	<form method="get" action="phpFormularScitani.php">
		Prvni Cislo: <input type="text" name="prvni" value=""><br>
		Druhe Cislo: <input type="text" name="druhe" value=""><br>
		<input type="submit" value="Potvrdit">
	</form>

<?php
	echo $_POST["prvni"] + $_POST["druhe"]; 
    if (isset($_POST["prvni"])&&isset($_POST["druhe"])){}
	
	?>
</div>

<div class="strlen">

	<h1> TenFormularAhoj4 </h1>	

	<form method="get" action="phpFormularScitani.php">
		Pozdrav: <input type="text" name="pozdrav" value=""><br>

		<input type="submit" value="Poslat">
	</form>

<?php
echo strlen("ahoj");


?>
</div>









</body>
</html>
