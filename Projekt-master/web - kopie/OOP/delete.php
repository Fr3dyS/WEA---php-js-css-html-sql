<?php
include('server.php');
class Delete
{
    function deleteAkce($id, $nazev)
    {
        $db = kmenDB();
        $idd = mysqli_real_escape_string($db, $id);
        $nazevv = mysqli_real_escape_string($db,  $nazev);

        $sql = "DELETE FROM akce WHERE id=$idd AND mistoAkce='$nazevv'";
        mysqli_query($db, $sql);
        header('location: index.php');
    }
}
