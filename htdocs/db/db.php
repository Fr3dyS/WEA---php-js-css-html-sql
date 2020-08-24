<!DOCTYPE html>	
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
//					server, user, pass, db 
	$mysqli = new mysqli("localhost","root", "", "peppa");
	if ($mysqli->connect_error) {
		echo $mysqli->connect_error;
		return;
	}
	?>
	<form method="POST">
	<div>
		<!-- Zadava se pouze pokud chceme upravovat--->
		Id: <select name="id">
		<option value=''>Nová hra</option>	
			<?php 
				$sql = "SELECT id, name FROM games";
				$res = $mysqli->query($sql);
				while ($row = $res->fetch_assoc()) {
				 	echo "<option value='$row[id]'>$row[name]</option>";
				 } 
			?>
		</select>
	 </div>
	<div>
		Název: <input type="text" name="nazev">
	</div>
	<div>
		Hodnocení: <input type="number" name="hodnoceni">
	</div>	
	<div>
		Datum vydání:  <input type="date" name="datum">
	</div>
	<div>
		<input type="submit" name="odesl" value="Přidat / Upravit">
	</div>
	</form>

	<?php

	//jsme pripojeni!
	if (isset($_POST["odesl"])) {
		print_r($_POST);
		if ($_POST["id"]== "") {
			pridejRadek($mysqli);
		}else{
			upravRadek($mysqli ,$_POST["id"]);
		}
	}

	if(isset($_GET["odstranit"])){
		$id = $_GET["id"];
		$sql = "DELETE FROM games WHERE id=$id";
		if($mysqli->query($sql)===TRUE){
			echo "Hra smazána";
		} else {
			echo "Nepodařilo se smazat hru!" . $mysqli->error;
		}
	}
function pridejRadek($mysqli){
  if(!empty($_POST["nazev"]) && !empty($_POST["hodnoceni"]) && !empty($_POST["datum"])){
  	$sql = "INSERT INTO games (name, release_date, popularity) ". "VALUES ('$_POST[nazev]' , '$_POST[datum]' , $_POST[hodnoceni])";
  	echo $sql; 
	 $res = $mysqli->query($sql);
	 echo $res;
	 if ($res === TRUE) {
	 	echo "Hra pridana!";
	 } else {
	 		echo "Nelze přidat hru!".$mysqli->error;
	 }

  } else {
  	echo "Error! Nezadali jste něco správně!";
  }
}

function upravRadek($mysqli, $id){
	if(!empty($_POST["nazev"]) && !empty($_POST["hodnoceni"]) && !empty($_POST["datum"])){
 		$sql = "UPDATE games SET name='$_POST[nazev]', " . "popularity=$_POST[hodnoceni], release_date='$_POST[datum]' " . " WHERE id=$id";
 	 	$res = $mysqli->query($sql);
 	if($res===TRUE) {
 		echo "Řádek s id $id byl upraven!";
 	} else {
 		echo "Nepodařilo se upravit řádek s id $id!";
 	}

 	} else {
 		echo "Něco jsi nevyplnil ty kulišáku!!";
 }
}

	$sql = "SELECT * FROM games";
	$result = $mysqli->query($sql);

	while ($row = $result->fetch_assoc()) {
		echo "<div class='game' style='padding: 12px; border:1px solid red; border-radius: 12px'>";
		echo "<b>".$row["name"]."</b>";
		echo "<i>(".$row["release_date"].")</i>";
		echo "<br>";
		for ($i=0; $i < $row["popularity"] ; $i++) { 
			echo "<img src='PokeballLogo.jpg' style='width: 35px; height:35px'>";
		}
	echo "<form>";
	echo "<input type='text' name='id' value='".$row["id"]."'>";
	echo "<input type='submit' name='odstranit' value='Odstranit'>";
	echo "</form>";
	echo "</div>";

	}
	
	



	?>
</body>
</html>