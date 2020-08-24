<?php
    session_start();

    if(!isset($_SESSION['loggedIN'])){
        header('Location: login.php');
        exit();
    }

?>
<a href="odhlaseni.php">odhlaseni</a>
Prihlasenb :D 
