<?php

    $q = "";
    if(isset($_GET["q"]))
        $q = $_GET["q"];
    
        $mysqli = new mysqli("localhost", "root", "", "classicmodels");
        if(!$mysqli -> connect_error){
            $sql = "SELECT contactLastName as cfn, contactLastName as cln FROM  customers  WHERE contactLastName LIKE 'q%' OR contactLastName LIKE 'q%' LIMIT 10";
            if($res = $mysqli -> query($sql)){
                $array = [];
                while($row = $res -> fetch_assoc()){
                    $arr[] = array("firstname" => $row["cfn"], "lastname" => $row["cln"]);
                }
                echo json_encode($arr);
            }else{
                echo getAsError($mysqli -> error);
            }
        }
        else{
            echo getAsError($mysqli -> connect_error);
        }

        function getAsError($err){
            return json_encode(array("Error " => $err));
        }
?>