<?php
include('oop/login.php');
if (isset($_POST['login'])) {
	$login = new LoginRegistrace();
	$login->loginUzivatele($_POST['jmeno'], md5($_POST['heslo']));
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Plán akci - Login</title>
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
	<form method="post" id="fg" action="login.php">
		<h1><b>Login</b></h1>
		<h4><b>Pokud je vytvorena DB podle navodu.</b></h4>
		<h4><b>Přihlaš se přes jméno: admin </b></h4>
		<h4><b>a heslo: admin </b></h4>
		<div class="form-group">
			<input type="text" class="form-control" name="jmeno" placeholder="Vloz jmeno">
		</div>
		<div class="form-group">
			<input type="password" class="form-control" name="heslo" placeholder="Vloz heslo">
		</div>
		<div class="form-group checkbox">
			<input type="checkbox" id="remember">

		</div>
		<div class="form-group">
			<input type="submit" name="login" value="Login" class="btn btn-block">
		</div>
		<p>
			Nemáš ještě účet? <a href="registrace.php">zaregistruj se</a>
		</p>
	</form>

	<script>
		$("#fg").validate({
			rules: {
				jmeno: {
					required: true,
					minlength: 2
				},
				heslo: {
					required: true,
					minlength: 2
				}
			},
			messages: {
				jmeno: {
					required: "nebylo vloženo jméno",
					minlength: "jméno musí být větší jak dva znaky"
				},
				heslo: {
					required: "nebylo vloženo heslo",
					minlength: "heslo musí být větší jak dva znaky"
				}
			}
		});
	</script>

</body>

</html>