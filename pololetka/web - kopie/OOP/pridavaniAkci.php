<?php
include('./server.php');
class PridavaniAkci
{
    function pridavaniAkciDoDB($nazev, $misto, $cenaa, $DatumStartu, $DatumKonce)
    {
        $db = kmenDB();
        $datumStartu = mysqli_real_escape_string($db, $DatumStartu);
        $datumKonce = mysqli_real_escape_string($db, $DatumKonce);
        $mistoKonani = mysqli_real_escape_string($db, $misto);
        $nazevAkce = mysqli_real_escape_string($db, $nazev);
        $cena = mysqli_real_escape_string($db, $cenaa);

        $akce = "INSERT INTO akce (Id, NazevAkce, MistoAkce, Cena, DatumStartu, DatumKonce) VALUES(null,'$nazevAkce','$mistoKonani', '$cena', '$datumStartu', '$datumKonce')";
        mysqli_query($db, $akce);
        header('Location: index.php');
        $_SESSION['uspech'] = "Právě si úspěšně vložil akci do databaze";
    }
}
