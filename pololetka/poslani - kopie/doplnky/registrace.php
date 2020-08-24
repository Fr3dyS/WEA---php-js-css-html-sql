<?php
$error = array();
if (isset($_POST['tlacitko'])) {
    $db = new mysqli("localhost", "root", '', "projekt");
    $jmeno = mysqli_real_escape_string($db, $_POST['jmeno']);
    $heslo = mysqli_real_escape_string($db, $_POST['heslo']);

    $query = "SELECT * FROM uzivatel WHERE CeleJmeno='$jmeno' AND heslo='$heslo'";
    mysqli_query($db, $query);
    $_SESSION['jmeno'] = $jmeno;
    $_SESSION['potvrzeno'] = "Právě si se úspěšně přihlásil";
    header('location: index.php');
}

if (isset($_POST['registrace'])) {

    $db = new mysqli("localhost", "root", '', "projekt");
    $jmeno = mysqli_real_escape_string($db, $_POST['jmeno']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $heslo = mysqli_real_escape_string($db, $_POST['heslo']);
    $heslo = md5($heslo);
    $kontakt = mysqli_real_escape_string($db, $_POST['kontakt']);
    $mesto = mysqli_real_escape_string($db, $_POST['mesto']);
    $adresa = mysqli_real_escape_string($db, $_POST['adresa']);

    $user_check_query = "SELECT * FROM uzivatel WHERE CeleJmeno='$jmeno' OR EmailId='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['jmeno'] === $jmeno) {
            array_push($error, "Jméno už existuje v DB");
        }
        if ($user['prijmeni'] === $prijmeni) {
            array_push($error, "Příjmení už existuje v DB");
        }

        if ($user['email'] === $email) {
            array_push($error, "Email existuje v DB");
        }
    }

    if (count($error) == 0) {
        $query = "INSERT INTO uzivatel (`id`, `CeleJmeno`, `EmailId`, `Heslo`, `KontaktCislo`, `Mesto`, `Adresa`) 
        VALUES(null,'$jmeno',' $email', '$heslo', '$kontakt', '$mesto', '$adresa')";
        mysqli_query($db, $query);
        $_SESSION['jmeno'] = $jmeno;
        $_SESSION['potvrzeno'] = "Právě si se úspěšně zaregistroval ";
        header('location: index.php');
    }
}
