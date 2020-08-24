<?php
session_start();
error_reporting(0);

?>

<!DOCTYPE HTML>
<html lang="en">

<head>

  <title>Plán akcí</title>
  <link rel="stylesheet" href="doplnky/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="doplnky/css/style.css" type="text/css">
  <link rel="stylesheet" href="doplnky/css/owl.carousel.css" type="text/css">
  <link rel="stylesheet" href="doplnky/css/owl.transitions.css" type="text/css">
  <link href="doplnky/css/slick.css" rel="stylesheet">
  <link href="doplnky/css/bootstrap-slider.min.css" rel="stylesheet">
  <link href="doplnky/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" id="switcher-css" type="text/css" href="doplnky/switcher/css/switcher.css" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="doplnky/switcher/css/red.css" title="red" media="all" data-default-color="true" />
  <link rel="alternate stylesheet" type="text/css" href="doplnky/switcher/css/orange.css" title="orange" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="doplnky/switcher/css/blue.css" title="blue" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="doplnky/switcher/css/pink.css" title="pink" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="doplnky/switcher/css/green.css" title="green" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="doplnky/switcher/css/purple.css" title="purple" media="all" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="doplnky/images/favicon-icon/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="doplnky/images/favicon-icon/apple-touch-icon-114-precomposed.html">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="doplnky/images/favicon-icon/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="doplnky/images/favicon-icon/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="doplnky/images/favicon-icon/favicon.png">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>

<body>

  <?php include('include/header.php'); ?>
  <section id="baner" class="banner-section">
    <div class="container">
      <div class="div_zindex">
        <div class="row">
          <div class="col-md-5 col-md-push-7">
            <div class="banner_content">
              <h1>&nbsp;</h1>
              <p>&nbsp; </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include('include/footer.php'); ?>
  <?php include('include/login.php'); ?>
  <?php include('include/registrace.php'); ?>

  <?php include('include/forgotpassword.php'); ?>


</body>

</html>