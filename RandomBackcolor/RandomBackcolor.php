<!DOCTYPE html>
<meta http-equiv="refresh" content="0.2" >
<meta charset="utf-8">
<html>
<head>	
	<title> RandomBarvičky </title>
</head>
<body background-color="random_color()">


<?php
function random_color_part() {
    return mt_rand(0, 255);
}

function random_color() {
    return "rgb(". random_color_part() .",". random_color_part() .",". random_color_part() .")";
}
?>
<?php
echo '<body style="background-color: '.random_color().'"> </body>'


?>
</body>
</html>