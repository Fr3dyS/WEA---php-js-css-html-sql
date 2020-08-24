<?php
include('doplnky/config.php');
if (isset($_POST['login'])) {
    $email = $_POST['jmeno'];
    $password = md5($_POST['heslo']);
    $sql = "SELECT CeleJmeno,Heslo FROM uzivatel WHERE CeleJmeno=:email and Heslo=:password";
    $query = $dbh->prepare($sql);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    if ($query->rowCount() > 0) {
        $_SESSION['login'] = $_POST['email'];
        $currentpage = $_SERVER['REQUEST_URI'];
        echo "<script type='text/javascript'> document.location = '$currentpage'; </script>";
    } else {

        echo "<script>alert('Invalid Details');</script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="img/lifestyleStore.png" />
    <title>Plán akcí - Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <h1><b>Login</b></h1>
                    <form method="post" action="login.php">
                        <div class="form-group">
                            <input type="text" class="form-control" name="jmeno" placeholder="Jméno " required="true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="heslo" placeholder="Heslo" required="true">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="login" class="btn btn-primary" value="Přihlásit se">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php


        include('doplnky/footer.php');
        ?>
    </div>
</body>

</html>