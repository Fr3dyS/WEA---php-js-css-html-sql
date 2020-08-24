<!DOCTYPE html>
<html style="background-color: yellow;">
<head>
	<title></title>
</head>
<body>
<?php
$jmeno = $_GET["mena"];
$prijmeni = $_GET["prijmena"];
$email = $_GET["email"];
$button = $_GET["tlacidlo"];
$heslo = $_GET["password"];
if(isset($button)&&!empty($prijmeni)&&!empty($jmeno)&&!empty($email)){
echo "<|SYSTEM|> " . "Vítej uživateli " . $jmeno ." ". $prijmeni . "!" . "<br>";
echo "<|SYSTEM|> " . "Úspěšně jsi byl přihlášen s emailem " . $email . " a s heslem " . $heslo . "" ;


}

?>
<form action="domaciZkousenicko.php" method="get">
<input type="submit" name="submit" value="Zpět">

</form>

</body>
</html>
