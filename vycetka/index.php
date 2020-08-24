<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Výčetka</title>
    <style>


        .mojeTabulka {
            width: 100%;
            margin: 10px auto 10px auto;
            border-collapse: collapse;
            border: 1px solid orange;
            background-color: white;
            font-size: 40px;
        }

        .mojeTabulka tr td {
            border-top: 1px solid red;
            border-bottom: 1px solid black;
            border-left: 1px solid green;
            border-right: 1px solid red;
            padding: 5px 3px 5px 3px;
        }

        input {
            width: 80%;
            padding: 10px;
        }

        button {
            width: 100%;
            padding: 10px;
        }
    </style>
</head>

<body>
    <header>
        <center>
            <h1>Výčetka</h1>
        </center>
    </header>
    <table class="mojeTabulka">
        <form method="post">
            <thead>
                <?php
                if (isset($_POST["submit"])) {
                    $number1 = $_POST['pettisic'] * 5000;
                    $_SESSION["numberA"] =  $number1;
                    $number2 = $_POST['dvatisice'] * 2000;
                    $_SESSION["numberB"] =  $number2;
                    $number3 = $_POST['tisic'] * 1000;
                    $_SESSION["numberC"] =  $number3;
                    $number4 = $_POST['petset'] * 500;
                    $_SESSION["numberD"] =  $number4;
                    $number5 = $_POST['dveste'] * 200;
                    $_SESSION["numberE"] =  $number5;
                    $number6 = $_POST['sto'] * 100;
                    $_SESSION["numberF"] =  $number6;
                    $number7 = $_POST['padesat'] * 50;
                    $_SESSION["numberG"] =  $number7;
                    $number8 = $_POST['dvacet'] * 20;
                    $_SESSION["numberH"] =  $number8;
                    $number9 = $_POST['deset'] * 10;
                    $_SESSION["numberCH"] =  $number9;
                    $number10 = $_POST['pet'] * 5;
                    $_SESSION["numberI"] =  $number10;
                    $number11 = $_POST['dva'] * 2;
                    $_SESSION["numberJ"] =  $number11;
                    $number12 = $_POST['jedna'] * 1;
                    $_SESSION["numberK"] =  $number12;
                    $sum =  $number1 + $number2 + $number3 + $number4 + $number5 + $number6 + $number7 + $number8 + $number9 + $number10 + $number11 + $number12;
                }
                ?>
                <tr>
                    <th>Hodnota</th>
                    <th>Počet</th>
                    <th>Cena</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>5000 kč</td>
                    <td><input type='number' name="pettisic" value="0" id="pettisic" /></td>
                    <td>
                        <?php
                        if (isset($_POST["submit"])) {
                            echo $number1;
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>2000 kč</td>
                    <td><input type='number' name="dvatisice" value="0" id="dvatisice" /></td>
                    <td>
                        <?php
                        if (isset($_POST["submit"])) {
                            echo $number2;
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>1000 kč</td>
                    <td><input type='number' name="tisic" value="0" id="tisic" /></td>
                    <td>
                        <?php
                        if (isset($_POST["submit"])) {
                            echo $number3;
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>500 kč</td>
                    <td><input type='number' name="petset" value="0" id="petset" /></td>
                    <td>
                        <?php
                        if (isset($_POST["submit"])) {
                            echo $number4;
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>200 kč</td>
                    <td><input type='number' name="dveste" value="0" id="dveste" /></td>
                    <td>
                        <?php
                        if (isset($_POST["submit"])) {
                            echo $number5;
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>100 kč</td>
                    <td><input type='number' name="sto" value="0" id="sto" /></td>
                    <td>
                        <?php
                        if (isset($_POST["submit"])) {
                            echo $number6;
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>50 kč</td>
                    <td><input type='number' name="padesat" value="0" id="padesat" /></td>
                    <td>
                        <?php
                        if (isset($_POST["submit"])) {
                            echo $number7;
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>20 kč</td>
                    <td><input type='number' name="dvacet" value="0" id="dvacet" /></td>
                    <td>
                        <?php
                        if (isset($_POST["submit"])) {
                            echo $number8;
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>10 kč</td>
                    <td><input type='number' name="deset" value="0" id="deset" /></td>
                    <td>
                        <?php
                        if (isset($_POST["submit"])) {
                            echo $number9;
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>5 kč</td>
                    <td><input type='number' name="pet" value="0" id="pet" /></td>
                    <td>
                        <?php
                        if (isset($_POST["submit"])) {
                            echo $number10;
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>2 kč</td>
                    <td><input type='number' name="dva" value="0" id="dva" /></td>
                    <td>
                        <?php
                        if (isset($_POST["submit"])) {
                            echo $number11;
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>1 kč</td>
                    <td><input type='number' name="jedna" value="0" id="jedna" /></td>
                    <td>
                        <?php
                        if (isset($_POST["submit"])) {
                            echo $number12;
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Celková cena</td>
                    <td>
                        <button name="submit" type="submit" onclick="klikej()">Pocitej</button>
                        <button name="submitt" type="submit">Reset</button>
                    </td>
                    <td><?php
                        if (isset($_POST["submit"])) {
                            echo $sum;
                        }

                        function runMyFunction()
                        {
                            $number1 = 0;
                            $number2 = 0;
                            $number3 = 0;
                            $number4 = 0;
                            $number5 = 0;
                            $number6 = 0;
                            $number7 = 0;
                            $number8 = 0;
                            $number9 = 0;
                            $number10 = 0;
                            $number11 = 0;
                            $number12 = 0;
                        }

                        if (isset($_GET['submitt'])) {
                            runMyFunction();
                        }
                        ?></td>
                </tr>
            </tbody>
        </form>
    </table>

    <script>
        var pettisic = 0;

        var pettisic = document.getElementById("pettisic").value;
        var dvatisice = document.getElementById("pettisic").value;
        var tisic = document.getElementById("pettisic").value;
        var petset = document.getElementById("pettisic").value;
        var dveste = document.getElementById("pettisic").value;
        var sto = document.getElementById("pettisic").value;
        var padesat = document.getElementById("pettisic").value;
        var deset = document.getElementById("pettisic").value;
        var pet = document.getElementById("pettisic").value;
        var dva = document.getElementById("pettisic").value;
        var jedna = document.getElementById("pettisic").value;

        function klikej() {

        }
    </script>

</body>

</html>