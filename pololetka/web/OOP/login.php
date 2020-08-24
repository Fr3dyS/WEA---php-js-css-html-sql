<?php
include('./server.php');
class LoginRegistrace
{
    function loginUzivatele($jmenoo, $hesloo)
    {
        $db = kmenDB();
        $jmeno = mysqli_real_escape_string($db, $jmenoo);
        $heslo = mysqli_real_escape_string($db,  $hesloo);

        $query = "SELECT * FROM uzivatele WHERE jmeno='$jmeno' AND heslo='$heslo'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['jmeno'] = $jmeno;
            $_SESSION['potvrzeno'] = "Právě si se úspěšně přihlásil";
            header('location: index.php');
        } 
    }
    function registrace($jmenoPOST, $prijmeniPOST, $emailPOST, $hesloPOST, $heslo2POST)
    {
        $error = array();
        $db = kmenDB();
        $jmeno = mysqli_real_escape_string($db, $jmenoPOST);
        $prijmeni = mysqli_real_escape_string($db, $prijmeniPOST);
        $email = mysqli_real_escape_string($db, $emailPOST);
        $heslo = mysqli_real_escape_string($db, $hesloPOST);
        $heslo2 = mysqli_real_escape_string($db, $heslo2POST);

        $user_check_query = "SELECT * FROM uzivatele WHERE jmeno='$jmeno' OR email='$email' LIMIT 1";
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

        if (count($error) == 0 && ($heslo == $heslo2)) {
            $query = "INSERT INTO uzivatele (jmeno, prijmeni, email, heslo) 
                VALUES('$jmeno','$prijmeni', '$email', '$heslo')";
            mysqli_query($db, $query);
            $_SESSION['jmeno'] = $jmeno;
            $_SESSION['uspech'] = "Právě si se úspěšně zaregistroval ";
        }
    }
}
