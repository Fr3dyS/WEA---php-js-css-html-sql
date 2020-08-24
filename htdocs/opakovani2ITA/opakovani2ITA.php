<!DOCTYPE html>
<html>
<head>
	<title> Opakování </title>
 <meta charset="utf-8">
</head>
<body>

  <?php //echo $a; ?>
  <?//= $a ?> 
  <pre>
  <?php
    $a = "a";
    $b = 'b';
    $c = 5;  
    $d = 5.0;
  
    $p = ["Bér", "Port", "Mráz"];

    //echo $p[1];
    $p[] = "Matuštík";

   
  // array_splice($p, 1, 0, "");
   
   //print_r($p);
 $vysledek = [
 ["jmeno" => "Kryšpín", "vek" => 15],
 ["jmeno" => "Alois", "vek" => 18],
 ];
 
 print_r($vysledek);

 foreach($vysledek as $radek) {
 echo $radek["jmeno"]. " ve věku " . $radek["vek"] . "<br>";
}

for($i = 0; $i < sizeof($p); $i++ ) {
	//echo "[".$k."[ => ". $v . "<br>";
}

//$pole = explode(";", $soubor);
 /*
  $a = "kočka ";
 $a = trim($a); //Oreze prebyvajici mezery okolo stringu
 $a = strtolower($a); // Alois -> alois
 $a = strtoupper($a); // Alois -> ALOIS
  */
  //echo json_encode($vysledek);


$p = ["Beat Saber", "Mafia", "Tekken 3"];
  $veta = "Nejlepší hry jsou ***, *** a ***";
    
  echo replaceInStringArray($veta, "***", $p);

    function replaceInStringArray($str, $s, $p){
    	for ($i=0; $i < sizeof($p); $i++) { 
    		$str = replaceInString($str, $s, $p[$i], 1);
    	}
     return $str;
    }

  function replaceInString($str, $s, $a, $count){
    return str_replace(/*co hledame*/ $s, /*cim nahrazujeme*/ $a, $str, $count);
  }



  ?>
</pre>




</body>


</html>