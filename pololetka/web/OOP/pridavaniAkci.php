<?php
session_start();
class PridavaniAkci
{
    function pridavaniAkciDoDB($nazev, $misto, $cenaa, $DatumStartu, $DatumKonce)
    {
        $db = new mysqli("localhost", "root", '', "pololetka");
        $datumStartu = mysqli_real_escape_string($db, $DatumStartu);
        $datumKonce = mysqli_real_escape_string($db, $DatumKonce);
        $mistoKonani = mysqli_real_escape_string($db, $misto);
        $nazevAkce = mysqli_real_escape_string($db, $nazev);
        $cena = mysqli_real_escape_string($db, $cenaa);

        $akce = "INSERT INTO akce (Id, NazevAkce, MístoAkce, Cena, DatumStartu, DatumKonce) VALUES(null,'$nazevAkce','$mistoKonani', '$cena', '$datumStartu', '$datumKonce')";
        mysqli_query($db, $akce);
        $_SESSION['uspech'] = "Právě si úspěšně vložil akci do databaze";
    }
}
