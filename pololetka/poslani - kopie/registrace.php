<?php
include('doplnky/config.php');
if (isset($_POST['registrace'])) {

    $fname = $_POST['jmeno'];
    $email = $_POST['email'];
    $password = md5($_POST['heslo']);
    $KontaktCislo = $_POST['kontakt'];
    $Mesto = $_POST['mesto'];
    $Adresa = $_POST['adresa'];

    $sql = "INSERT INTO  uzivatel(id,CeleJmeno,EmailId,Heslo, KontaktCislo, Mesto, Adresa) VALUES(null,:fname,:email,:KontaktCislo,:heslo, :KontaktCislo, :Mesto,:adresa)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':fname', $fname, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':mobile', $mobile, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->bindParam(':KontaktCislo', $KontaktCislo, PDO::PARAM_STR);
    $query->bindParam(':Mesto', $Mesto, PDO::PARAM_STR);
    $query->bindParam(':adresa', $Adresa, PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if ($lastInsertId) {
        echo "<script>alert('Registration successfull. Now you can login');</script>";
    } else {
        echo "<script>alert('Something went wrong. Please try again');</script>";
    }
}

?>


<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="img/lifestyleStore.png" />
    <title>Plán akcí - Registrace</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="modifikace/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="modifikace/css/style.css" type="text/css">
    <link rel="stylesheet" href="modifikace/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="modifikace/css/owl.transitions.css" type="text/css">
    <link href="modifikace/css/slick.css" rel="stylesheet">
    <link href="modifikace/css/bootstrap-slider.min.css" rel="stylesheet">
    <link href="modifikace/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="modifikace/img/icon.png">
</head>

<body>
    <div>
        <?php
        include('doplnky/header.php');
        ?>
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <h1><b>Registrace</b></h1>
                    <form method="post" action="registrace.php">
                        <div class="form-group">
                            <input type="text" class="form-control" name="jmeno" placeholder="Jméno " required="true">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="heslo" placeholder="Heslo(min. 6 characters)" required="true" pattern=".{6,}">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" name="kontakt" placeholder="Telefon" required="true">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="mesto" placeholder="Město" required="true">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="adresa" placeholder="Adresa" required="true">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="registrace" class="btn btn-primary" value="Zaregistrovat se">
                        </div>
                    </form>
                </div>
                <?php
                ?>
            </div>
        </div>
        <?php

        include('doplnky/footer.php');
        ?>
    </div>
</body>

</html>