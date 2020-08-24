<?php
include('server.php');
?>
<!DOCTYPE html>
<html>

<head>
	<title>Plán akci</title>
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
	<section class="section-padding gray-bg">
		<div class="container">
			<div class="section-header text-center">
				<h2>Kontaktujte <span>Nás</span></h2>
				<p>Pro volání / psaní email. / Návštěva pobočky -> Klikni na text - budeš přesměrován </p>
				<?php
				$sql = "SELECT * FROM kontakt;";
				$db = kmenDB();
				$result = mysqli_query($db, $sql);
				$resultCheck = mysqli_num_rows($result);
				if ($resultCheck > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
				?>
							<ul>
								<a href="tel: <?php echo $row['KontaktCislo']; ?>"><h4>Telefonem:  <?php echo $row['KontaktCislo']; ?></h4></a>
								<a href="mailto: <?php echo $row['EmailId']; ?>"><h4>Emailem:  <?php echo $row['EmailId']; ?></h4></a>
								<a href="http://maps.google.com/?q=<?php echo $row['Adresa']; ?>"><h4>Návštěvou pobočky:  <?php echo $row['Adresa']; ?></h4></a>
							</ul>
				<?php }
				} ?>
			</div>
		</div>
	</section>
	<?php
	include('doplnky/footer.php');
	?>
</body>

</html>