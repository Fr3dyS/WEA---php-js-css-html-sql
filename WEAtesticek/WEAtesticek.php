<!DOCTYPE html>
<html style="background-color: lightgrey">
 <head style="background-color: green">
  <meta charset="utf-8">	
  <div style="background-color: blue; border-style: groove;">	
	<center> <hr>
	<title>Číslíčka</title>
	<style type="text/css" >
		
	.Tabulcicka{
		background-color: black;
		color: lime;		
	    border-style: ridge;
	    font-family: sans-serif;
	}

	</style>
</head>
<body>
<h1 style="font-family: monospace;">
  👨🏻‍💻Xx.Cislicka.xX👨🏻‍💻
</h1>
<form>
	<input type="text" name="numbers" value="" placeholder="Cisla" >
	<input type="number" name="sloupecky" value="" placeholder="Sloupce">
	<input type="submit" name="odesli">
</form>
 </center> <hr>
  </div>

<?php
 //Overeni jestli jsem pripojenej k databazi ci ne
 $mysqli = new mysqli("localhost", "root", "", "cislovadatabaze");
    if ($mysqli -> connect_error != "") {
        echo "Kámo! Asi se něco pokazilo, protože nejsi připojenej k databázi!! XD ".$mysqli -> connect_error;
            return;
        } //if
    if (isset($_GET["odesli"])) {
           $cisla = $_GET["numbers"];
           $sloupce = $_GET["sloupecky"];
        $sql = "INSERT INTO cisla (cislicka) VALUES";
        $pole = explode(",", $cisla);
    for ($i=0; $i < sizeof($pole); $i++) {
                $sql .= "(".$pole[$i].")";
    if ($i < sizeof($pole)-1) {
                    $sql .= ",";
            } //if
            } //konec for

    if ($mysqli->query($sql) === TRUE) {
                echo "Tvoje číslo bylo přidáno.";
            } else {
                echo "Databázi se nepovedlo přidat tvoje číslo! ".$mysqli->error;
            } //else
            } //if ISSET
        $sql = "SELECT * FROM cisla";
        $vysl = $mysqli->query($sql);
        $arr = [];

        while ($row = $vysl->fetch_assoc()) {
            $arr[] = $row["cislicka"];
        }
       ?>
       <?php
                if (isset($_GET["odesli"])) {
                    $cislo = $_GET["sloupecky"];
                    $pocet = sizeof($arr);
                    $radky = $pocet / $cislo;
                    echo "<table border='2' class = 'Tabulcicka' align = 'center'>";
                for ($i=0; $i < $radky; $i++) { 
                    echo "<tr>";
                for ($j=0; $j < $cislo; $j++) { 
                if (isset($arr[$i * $cislo + $j])) {
                    echo "<td>".$arr[$i * $cislo + $j]."</td>";
                } else {
                    echo "<td>&nbsp;</td>";
                }
                }
                    echo "</tr>";
                }
                    echo "</table>";
                } else {
                    print_r($arr);
                }

?>



</body>
</html>