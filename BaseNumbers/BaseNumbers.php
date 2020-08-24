<!DOCTYPE html>
<html>
<head>
	<title>BázeČísel</title>
	<meta charset="utf-8">
	<style type="text/css">
		
	.Tabulcicka{

		background-color: black;
		color: lime;		
	}

	</style>
</head>
<body>
 <div style="background-color: black">
<h1>
	#ČíslaNavždyNVM
</h1>

<form>
	<input type="text" name="cisla" value="1,5,6,32" >
	<input type="number" name="sloupce" value="9">
	<input type="submit" name="odesl">
</form>
  </div>

<?php

        //pripojeni k DB
        $mysqli = new mysqli("localhost", "root", "", "hernidatabaze");
        if ($mysqli -> connect_error != "") {
            echo "Nepodařilo se připojit k DB! ".$mysqli -> connect_error;
            return;
        }
//pridani
        if (isset($_GET["odesl"])) {
            $cisla = $_GET["cisla"];
            $sloupce = $_GET["sloupce"];

            $sql = "INSERT INTO cisla (cisla) VALUES";

            $pole = explode(",", $cisla);

            for ($i=0; $i < sizeof($pole); $i++) {
                $sql .= "(".$pole[$i].")";

                if ($i < sizeof($pole)-1) {
                    $sql .= ",";
                }
            }
            //print_r($sql);

            if ($mysqli->query($sql) === TRUE) {
                echo "Číslo přidané";
            } else {
                echo "Nepodařilo se přidat číslo! ".$mysqli->error;
            }
        }

        //zobrazeni DB
        $sql = "SELECT * FROM cisla";
        $vysl = $mysqli->query($sql);
        $arr = [];

        while ($row = $vysl->fetch_assoc()) {
            $arr[] = $row["cisla"];
        }

    ?>
    <form>
        <fieldset>
            <?php

                if (isset($_GET["odesl"])) {
                    $cislo = $_GET["sloupce"];
                    $pocet = sizeof($arr);
                    $radku = $pocet / $cislo;

                    echo "<table border='3' class = 'Tabulcicka' align = 'center'>";
                    for ($i=0; $i < $radku; $i++) { 
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