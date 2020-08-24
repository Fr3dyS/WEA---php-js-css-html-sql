<?php
session_start();
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['jmeno']);
}
?>
<header>
    <div class="default-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-2">
                    <div class="logo"> <a href="index.php"><img src="modifikace/img/logo.jpg" alt="image" width="200" height="100" /></a></div>
                </div>
                <div class="col-sm-9 col-md-10">
                    <div class="header_info">


                        <?php
                        $db = new mysqli("localhost", "root", '', "projekt");
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
                        ?>

                        <div class="social-follow">

                        </div>
                        <?php if (isset($_SESSION['jmeno'])) : ?>
                            <center>
                                <div class="center">
                                    <strong><?php echo "Vítej: " . $_SESSION['jmeno']; ?></strong>
                                </div>
                            </center>
                        <?php endif ?>
                        <?php
                        if (isset($_SESSION['jmeno'])) {
                        ?>
                            <form action="" method="get">
                                <div class="login_btn"><a href="nastavení.php" class="btn btn-xs uppercase">Nastavení</a></div>
                                <div class="login_btn"><a href="odhlaseni.php" name="logout" class="btn btn-xs uppercase">Odhlášení</a></li>
                            </form>
                    </div>
                <?php
                        } else {
                ?>
                    <div class="login_btn"><a href="login.php" class="btn btn-xs uppercase">Login</a></div>
                    <div class="login_btn"><a href="registrace.php" class="btn btn-xs uppercase">registrace</a></div>
                <?php } ?>
                </div>
            </div>

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
                    <li><a href="Onas.php">O nás</a></li>
                    <li><a href="listAkci.php">List akcí</a>
                    <li><a href="FAQs.php">FAQs</a></li>
                    <li><a href="kontakt.php">Kontaktujte nás</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>