<header>
    <div class="default-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-2">
                    <h3 class=""> <a href="index.php">Plán akcí</a></h3>
                </div>
                <div class="col-sm-9 col-md-10">
                    <div class="header_info">


                        <div class="header_widgets">
                            <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
                            <p class="uppercase_text">Pro Support Mail použij : </p>
                            <a href="mailto:<?php echo htmlentities($email); ?>"><?php echo htmlentities($email); ?></a>
                        </div>
                        <div class="header_widgets">
                            <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
                            <p class="uppercase_text">Pro support Mobilem : </p>
                            <a href="tel:<?php echo htmlentities($contactno); ?>"><?php echo htmlentities($contactno); ?></a>
                        </div>
                        <div class="social-follow">

                        </div>
                        <?php if (strlen($_SESSION['login']) == 0) {
                        ?>
                            <div class="login_btn"> <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login / Register</a> </div>
                        <?php } else {

                            echo "Welcome To Car rental portal";
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav id="navigation_bar" class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="header_wrap">
                <div class="user_login">
                    <ul>
                        <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i>
                                <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="header_search">
                    <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
                    <form action="search.php" method="post" id="header-search-form">
                        <input type="text" placeholder="Search..." name="searchdata" class="form-control" required="true">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navigation">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Úvod</a> </li>

                    <li><a href="page.php?type=aboutus">O nás</a></li>
                    <li><a href="akce-list.php">List akcí</a>
                    <li><a href="page.php?type=faqs">FAQs</a></li>
                    <li><a href="kontakt-nas.php">Kontaktujte nás</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation end -->

</header>