<?php
include('OOP/delete.php');
if (isset($_POST['delete'])) {
	$delete = new Delete();
	$delete->deleteAkce($_POST['id']);
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Plán akci - Mazání akcí</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
	<link rel="stylesheet" href="css/owl.transitions.css" type="text/css">
	<link href="css/slick.css" rel="stylesheet">
	<link href="css/bootstrap-slider.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link rel="icon" href="img/icon.png">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<?php
	include('doplnky/header.php');
	?>
	<form method="post" id="fg" action="delete.php">
		<h1><b>Mazání akcí podle ID</b></h1>

		<div class="form-group">
			<input type="number" class="form-control" name="id" placeholder="Vloz id">
		</div>
		<div class="form-group checkbox">
			<input type="checkbox" id="remember">

		</div>
		<div class="form-group">
			<input type="submit" name="delete" value="vymazat" class="btn btn-block">
		</div>
	</form>
	<?php

	include('doplnky/footer.php');
	?>
</body>

</html>