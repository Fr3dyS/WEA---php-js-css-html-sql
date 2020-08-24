<!DOCTYPE html>
<html>
<head><style type="text/css"></style>
	<title></title>
</head>
<body>

<?php
echo "neni stiskle tlacitko";
if (isset($_POST["submit"])&&empty($_POST["text"])){


echo "Zadej text";

		
}
else{
	echo $_POST["text"];

}



  ?>


</body>
</html>