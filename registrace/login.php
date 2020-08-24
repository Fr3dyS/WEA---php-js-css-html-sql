<?php
session_start();

if (isset($_SESSION['loggedIN'])) {
    header('Location: hidden.php');
    exit();
}


if (isset($_POST['login'])) {
    $connection = new mysqli('localhost', 'root', '', 'loginTutorial');

    $email = $connection->real_escape_string($_POST['emailPHP']);
    $password = $connection->real_escape_string($_POST['passwordPHP']);

    $data = $connection->query("SELECT id FROM users WHERE email ='$email' AND password='$password'");
    if ($data->num_rows > 0) {
        $_SESSION['loggedIN'] = '1';
        $_SESSION['emailX'] = $email;
        exit('<font color="green">Úspěšně přihlášen</font>');
    } else
        exit('<font color="red">Jmémo nebo heslo špatně zadané! </font>');
}

// initializing variables
$username = "";
$email    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'loginTutorial');

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['jmeno']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password_1)) {
        array_push($errors, "Password is required");
    }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }
    $user_check_query = "SELECT * FROM users WHERE jmeno='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['jmeno'] === $username) {
            array_push($errors, "Username already exists");
        }

        if ($user['email'] === $email) {
            array_push($errors, "email already exists");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1); //encrypt the password before saving in the database

        $query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: hidden.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="http://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>

<body>
    <div>
        <h1>Plán akci</h1>
        <div>Pokud chcete pokračovat dále přihlašte se nebo <a class="registracion">se zaregistrujte!</a><a class="uvod">už mám účet a chci se přihlásit</a></div>
    </div>
    <div class="login">
        <form action="login.php" method="POST">
            <input type="text" name="emailX" id="emailX" placeholder="Email...."><br>
            <input type="password" name="passwordX" id="passwordX" placeholder="password...."><br>
            <input type="button" value="prihlaseni" id="login">
        </form>
    </div>
    <p></p>
    <div class="registrace">
        <form action="" method="POST">
            <input type="text" name="jmeno" id="jmeno" placeholder="Jméno.."><br>
            <input type="text" name="prijmeni" id="prijmeni" placeholder="Přijmení.."><br>
            <input type="email" name="email" id="email" placeholder="Email.."><br>
            <input type="date" name="narozeni" id="narozeni" placeholder="Datum narození.."><br>
            <input type="password" name="heslo" id="heslo" placeholder="Heslo..."><br>
            <input type="password" name="hesla" id="hesla" placeholder="Potvrzení hesla..."><br>
            <input type="button" name="registrace" id="registracee" value="zaregistrovani do DB">
        </form>
    </div>
    <p id="clanek"></p>
    <script>
        $(".registrace").hide();
        $(".uvod").hide();
        $(document).ready(function() {
            $(".uvod").on('click', function() {
                $(".login").show();
                $(".registrace").hide();
                $(".registracion").show();
                $(".uvod").hide();
            });
        });
        $(document).ready(function() {
            $(".registracion").on('click', function() {
                $("#clanek").empty();
                $(".login").hide();
                $(".registrace").show();
                $(".registracion").hide();
                $(".uvod").show();
            });
        });

        $(document).ready(function() {
            $("#registrace").on('click', function() {
                var jmeno = $("#jmeno").val();
                var prijmeni = $("#prijmeni").val();
                var email = $("#email").val();
                var narozeni = $("#narozeni").val();
                var heslo = $("#heslo").val();
                var hesla = $("#hesla").val();
                if (jmeno == "" || prijmeni == "" || email == "" || narozeni == "" || heslo == "" || hesla == "") {
                    alert("Nebyly zadany vsechny udaje!");
                } else {
                    if (heslo == hesla) {
                        $.ajax({
                            url: 'login.php',
                            method: 'POST',
                            data: {
                                register: 1,
                                jmenoPokus: jmeno,
                                emailPokus: email,
                                narozeniPokus: narozeni,
                                hesloPokus: heslo,
                                hesloPokusX: hesla,
                            },
                            success: function(response) {
                                $("#clanek").html(response);

                                if (response.indexOf('Úspěšně přihlášen') >= 0)
                                    location.href = 'hidden.php';
                            },
                            dataType: 'text'
                        });
                    } else {
                        alert("Hesla nejsou stejná!");
                    }
                }

            });
        });
        $(document).ready(function() {
            $("#login").on('click', function() {
                var email = $("#emailX").val();
                var password = $("#passwordX").val();

                if (email == "" || password == "")
                    alert("Nebyly zadany vsechny udaje!");
                else {
                    $.ajax({
                        url: 'login.php',
                        method: 'POST',
                        data: {
                            login: 1,
                            emailPHP: email,
                            passwordPHP: password,
                        },
                        success: function(response) {
                            $("#clanek").html(response);

                            if (response.indexOf('Úspěšně přihlášen') >= 0)
                                location.href = 'hidden.php';
                        },
                        dataType: 'text'
                    });
                }
            });
        });
    </script>
</body>

</html>