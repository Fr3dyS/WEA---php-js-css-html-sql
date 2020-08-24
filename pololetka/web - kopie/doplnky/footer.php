<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <ul>
                        <li><a href="Onas.php">O nás</a></li>
                        <li><a href="FAQs.php">FAQs</a></li>
                        <li><a href="vkladAkci.php">Vklad Akci</a></li>
                        <?php
                        if ($_SESSION['jmeno'] == "admin") {
                        ?>
                            <li><a href="delete.php">Mazani Akci</a></li>
                        <?php
                        }
                        ?>

                    </ul>
                </div>

                <div class="col-md-3 col-sm-6">
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-push-6 text-right">
                    <div class="footer_widget">
                        <p>Sleduj Nás i zde:</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-md-pull-6">
                    <p class="copy-right">Copyright &copy; 2020 Plán akcí </p>
                </div>
            </div>
        </div>
    </div>
</footer>