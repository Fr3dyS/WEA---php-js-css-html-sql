<?php

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['jmeno']);
    header("location: login.php");
}
if (!isset($_SESSION['jmeno'])) {
    header("location: login.php");
}
?>
<header>
    <div class="default-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-2">
                    <div class="logo"> <a href="index.php"><img src="img/logo.jpg" alt="image" width="200" height="100" /></a></div>
                </div>
                <div class="col-sm-9 col-md-10">
                    <div class="header_info">
                        <?php
                        $db = new mysqli("localhost", "root", '', "pololetka");
                        $sql = "SELECT * FROM kontakt;";
                        $result = mysqli_query($db, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>

                                <div class="header_widgets">
                                    <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
                                    <p class="uppercase_text">Kontaktujte Nás přes email: </p>
                                    <a href="mailto:<?php echo $row['EmailId'] ?>"><?php echo $row['EmailId'] ?></a>
                                </div>
                                <div class="header_widgets">
                                    <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
                                    <p class="uppercase_text">Kontaktujte Nás přes telefon: </p>
                                    <a href="tel:<?php echo $row['KontaktCislo'] ?>"><?php echo $row['KontaktCislo'] ?></a>
                                </div>
                            <?php
                            }
                        }
                        if (isset($_SESSION['jmeno'])) {
                            ?>
                            <strong><?php echo "Vítej: " . $_SESSION['jmeno'];
                                } ?></strong>
                            <div class="login_btn"><a href="logout.php" name="logout" class="btn btn-xs uppercase">Odhlášení</a></div>
                    </div>
                </div>
                <script>

                </script>
            </div>
        </div>

    </div>


    <nav id="navigation_bar" class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="header_wrap">
                <div class="user_login">
                    <ul>

                    </ul>
                </div>

            </div>
            <div class="collapse navbar-collapse" id="navigation">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Úvod</a> </li>
                    <li><a href="oNas.php">O nás</a></li>
                    <li><a href="vypis.php">List akcí</a>
                    <li><a href="FAQs.php">FAQs</a></li>
                    <li><a href="kontaktNas.php">Kontaktujte nás</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>