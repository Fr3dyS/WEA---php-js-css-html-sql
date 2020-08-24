<?php

    if(!isset($_GET["text"])){
        echo "Error: neni zadan text!";
        return;
    }
    $arr = [];
    for ($i=0; $i <strlen($_GET["text"]) ; $i++) { 
        $arr[] = substr($_GET["text"], 0, strlen($_GET["text"]) - $i);
    }
    echo json_encode($arr);
    
?>
