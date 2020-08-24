<?php
include_once 'doplnky/class.uzivatel.php';
$user = new Uzivatel(); // Checking for user logged in or not

if (isset($_REQUEST['submit'])) {
    extract($_REQUEST);
    $register = $user->($jmeno, $email, $heslo, $kontakt, $mesto, $adresa);
    if ($register) {
        // Registration Success
        echo 'Registration successful <a href="login.php">Click here</a> to login';
    } else {
        // Registration Failed
        echo 'Registration failed. Email or Username already exits please try again';
    }
}