<?php
include('server.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Plán akcí - Registrace</title>
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
        <div class="container">


            <form method="post" id="fg" action="registrace.php">
                <div class="form-group">
                    <h1><b>Registrace</b></h1>
                    <input type="text" class="form-control" placeholder="Jméno" name="jmeno" required="required">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Příjmení" name="prijmeni"  required="required">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" name="email"  required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Heslo" id="heslo" name="heslo"  required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Potvrzení hesla" name="heslo2"  required="required">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn" name="registrovanyUzivatel">Zaregistruj se</button>
                    Už si zaregistrován? <a href="login.php">Přihlaš se</a>
                </div>
                <p>
                    <?php
           
                    ?>
                </p>
            </form>
        </div>
    </div>
</body>

</html>