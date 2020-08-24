<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plán akcí - úvod</title>
    <link rel="stylesheet" href="modifikace/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="modifikace/css/style.css" type="text/css">
    <link rel="stylesheet" href="modifikace/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="modifikace/css/owl.transitions.css" type="text/css">
    <link href="modifikace/css/slick.css" rel="stylesheet">
    <link href="modifikace/css/bootstrap-slider.min.css" rel="stylesheet">
    <link href="modifikace/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="modifikace/img/icon.png">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php
    include('doplnky/header.php');
    if (isset($_SESSION['potvrzeno'])) {
        echo $_SESSION['potvrzeno'];
        unset($_SESSION['potvrzeno']);
    }
    ?>
    <div class="content">
        <?php if (isset($_SESSION['uspech'])) : ?>
            <div class="error success">
                <h3>
                    <?php
                    echo $_SESSION['uspech'];
                    unset($_SESSION['uspech']);
                    ?>
                </h3>
            </div>
        <?php endif ?>

    </div>

    <?php
    include('doplnky/footer.php');
    ?>
</body>

</html>