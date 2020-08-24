<?php
include('config.php');
class Uzivatel
{
    public $db;
    public function pripojeniDoDB()
    {
        $db = new Config();
        $db->pripojeniDoDB();
    }

    public function registrace($jmeno, $email, $heslo, $kontakt, $mesto, $adresa)
    {
        $heslo = md5($heslo);
        $sql = "SELECT * FROM uzivatel WHERE CeleJmeno='$jmeno' OR EmailId='$email'";

        $check =  $this->db->query($sql);
        $count_row = $check->num_rows;

        if ($count_row == 0) {
            $sql1 = "INSERT INTO uzivatel SET CeleJmeno='$jmeno', EmailId='$email', Heslo='$heslo', KontaktCislo='$kontakt', Mesto='$mesto', Adresa='$adresa'";
            $result = mysqli_query($this->db, $sql1) or die(mysqli_connect_errno() . "Data cannot inserted");
            return $result;
        } else {
            return false;
        }
    }

    function login()
    {
        $db = new mysqli("localhost", "root", '', "projekt");
        $jmeno = mysqli_real_escape_string($db, $_POST['jmeno']);
        $heslo = mysqli_real_escape_string($db, $_POST['heslo']);

        $query = "SELECT * FROM uzivatel WHERE CeleJmeno='$jmeno' AND heslo='$heslo'";
         mysqli_query($db, $query);
        $_SESSION['jmeno'] = $jmeno;
        $_SESSION['potvrzeno'] = "Právě si se úspěšně přihlásil";
        header('location: index.php');
    }
}
