<?php
include('OOP/pridavaniAkci.php');
if (isset($_POST['vkladAkci'])) {
    $pridani = new PridavaniAkci();
    $pridani->pridavaniAkciDoDB($_POST['nazev'], $_POST['Misto'], $_POST['Cena'], $_POST['DatumStartu'], $_POST['DatumKonce']);
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Plán akcí - Vlak akcí</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="css/owl.transitions.css" type="text/css">
    <link href="css/slick.css" rel="stylesheet">
    <link href="css/bootstrap-slider.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="img/icon.png">
</head>

<body>
    <div>
        <?php
        include('doplnky/header.php');
        ?>
        <div class="container">


            <form method="post" id="fg" action="">
                <div class="form-group">
                    <h1><b>Vklad akcí</b></h1>
                    <input type="text" class="form-control" placeholder="Název" name="nazev" required="required">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Místo" name="Misto" required="required">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Cena" name="Cena" required="required">
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" placeholder="Datum startu" name="DatumStartu" required="required">
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" placeholder="Datum konce" name="DatumKonce" required="required">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn" name="vkladAkci">Vklad akce</button>
                </div>
            </form>

        </div>
        <?php

        include('doplnky/footer.php');
        ?>
    </div>
</body>

</html>