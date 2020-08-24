<?php
class Database {

  private $server = "localhost";
  private $username = "root";
  private $password = "";
  private $dbname;

  private $mysqli;
	


	function __construct($db) {
      $this->dbname = $db;
	
    $this->mysqli = new mysqli(
	$this->server,
    $this->username,
    $this->password,
    $this->dbname);

	}
 public function isConnected(){
 	return $this->mysqli->connect_error == "";
 }
public function insertGame($name) {
	if(empty($name)){
		return false;
	}

	$sql = "INSERT INTO game (name) VALUES ('$name')";
    $res = $this->mysqli->query($sql);
   return $res === TRUE;

} 


}





?>