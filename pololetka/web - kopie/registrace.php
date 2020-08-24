<?php
include('OOP/login.php');
if (isset($_POST['registrovanyUzivatel'])) {
    $registrace = new LoginRegistrace();
    $registrace->registrace($_POST['jmeno'], $_POST['prijmeni'], $_POST['email'], md5($_POST['heslo']), md5($_POST['heslo2']));
}
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="validate.js"></script>
    <link rel="icon" href="img/icon.png">
</head>

<body>
    <div>
        <div class="container">
            <form method="post" id="fg" action="registrace.php">
                <div class="form-group">
                    <h1><b>Registrace</b></h1>
                    <h5><b>Pokud si zadal údaje zkontroluj db, pokud je tam zápis.</b></h5>
                    <h5><b>Přihlaš se. </b></h5>
                    <input type="text" class="form-control" required="required" placeholder="Jméno" name="jmeno">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" required="required" placeholder="Příjmení" name="prijmeni">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" required="required" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" required="required" placeholder="Heslo" id="heslo" name="heslo">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" required="required" placeholder="Potvrzení hesla" name="heslo2">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn" name="registrovanyUzivatel">Zaregistruj se</button>
                    Už si zaregistrován? <a href="login.php">Přihlaš se</a>
                </div>
            </form>
        </div>
    </div>
    <script>
        $("#fg").validate({
            rules: {
                jmeno: {
                    required: true,
                    minlength: 4
                },
                prijmeni: {
                    required: true,
                    minlength: 4
                },
                email: {
                    required: true,
                    email: true
                },
                datum: {
                    required: true,
                    date: true
                },
                heslo: {
                    required: true,
                    minlength: 2
                },
                heslo2: {
                    required: true,
                    minlength: 2,
                    equalTo: "#heslo"
                }
            },
            messages: {
                jmeno: {
                    required: "Nebylo vloženo jméno",
                    minlength: "Minimální velikost jména musí být 4 znaky"
                },
                prijmeni: {
                    required: "Nebylo vloženo příjmení",
                    minlength: "Minimální velikost příjmení musí být 4 znaky"
                },
                email: {
                    required: "Nebyl vložen email",
                    email: "špatný email"
                },
                datum: {
                    required: "Nebyl vložen datum narození",
                    date: "datum narození špatně"
                },
                heslo: {
                    required: "Nebylo vloženo heslo",
                    minlength: "Minimální velikost hesla jsou 2 znaky"
                },
                heslo2: {
                    required: "Nebylo vloženo heslo",
                    minlength: "Minimální velikost hesla jsou 2 znaky",
                    equalTo: "Hesla musí být stejná"
                }
            }
        });
    </script>
</body>

</html>