<?php
include('./server.php');
class Delete
{
    function deleteAkce($id)
    {
        $db = kmenDB();
        $idd = mysqli_real_escape_string($db, $id);

        $sql = "DELETE FROM akce WHERE id='$idd';";
        mysqli_query($db, $sql);
        $_SESSION['uspech'] = "úspěšne odstraněno!";
        header('Location: index.php');
    }
}
