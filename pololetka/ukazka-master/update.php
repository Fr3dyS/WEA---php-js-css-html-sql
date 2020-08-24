<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Update</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="validate.js"></script>
</head>

<body>
    <div class="header">
        <h2>Aktualizace dat do DB</h2>
    </div>

    <form method="post" id="fg" action="update.php">
        <?php include('errory.php'); ?>
        <div class="input-group">
            <label>zadání id pro ověření:</label>
            <input type="number" name="id">
        </div>
        <div class="input-group">
            <label>aktualizovat místo akce:</label>
            <input type="text" name="updateNazev">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="updateDat">Aktualizace dat v databazi</button>
            <a href="index.php" class="btn red">Zpět na hlavní menu</a>
        </div>
    </form>
    <script>
        $("#fg").validate({
            rules: {
                id: {
                    required: true,
                },
                updateNazev: {
                    required: true,
                    minlength: 2
                }
            },
            messages: {
                id: {
                    required: "nebylo vloženo id",
                },
                updateNazev: {
                    required: "nebyl vložen nový název",
                    minlength: "Název musí být větší jak dva znaky"
                }
            }
        });
    </script>
</body>

</html>