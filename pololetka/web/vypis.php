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
	<style>
	</style>
</head>

<body>
	<?php
	include('doplnky/header.php');
	?>
	<!----úvod-->
	<section class="section-padding gray-bg">
		<div class="container">
			<div class="section-header text-center">
				<h2>List všech<span> Akcí</span></h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque ipsum. Pellentesque pretium lectus id turpis. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<p>In dapibus augue non sapien. Etiam commodo dui eget wisi. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Curabitur ligula sapien, pulvinar a vestibulum quis, facilisis vel sapien. Praesent dapibus. Morbi scelerisque luctus velit.</p>
				<p> Praesent id justo in neque elementum ultrices. Integer imperdiet lectus quis justo. Integer pellentesque quam vel velit. Mauris suscipit, ligula sit amet pharetra semper, nibh ante cursus purus, vel sagittis velit mauris vel metus.</p>
				<p>Formát datum akcí YYYY-MM-DD</p>
			</div>
		</div>
		<div class="container">
			<div class="row">

				<div class="recent-tab">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">Tipy na výlety</a></li>
					</ul>
				</div>
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="resentnewcar">

						<?php $sql = "SELECT NazevAkce, MístoAkce, Cena, DatumStartu, DatumKonce from akce ";
						$db = kmenDB();
						$result = mysqli_query($db, $sql);
						$resultCheck = mysqli_num_rows($result);
						if ($resultCheck > 0) {
							while ($row = mysqli_fetch_assoc($result)) {
						?>
					
								<div class="col-list-3">
									<a <?php echo $row['NazevAkce']; ?>></a><img src="img/<?php echo $row['MístoAkce']; ?>.jpg" height="150" width="300">
									<ul>
										<li>Název akce: <?php echo  $row['NazevAkce']; ?></li>
										<li>Místo akce: <?php echo $row['MístoAkce']; ?></li>
										<li>Cena: <?php echo $row['Cena']; ?> Kč</li>
										<li>Datum startu: <?php echo $row['DatumStartu']; ?> </li>
										<li>Datum Konce: <?php echo $row['DatumKonce']; ?></li>
									</ul>
								</div>
						<?php }
						} ?>

					</div>
				</div>
			</div>
	</section>
	<?php
	include('doplnky/footer.php');
	?>
</body>

</html>