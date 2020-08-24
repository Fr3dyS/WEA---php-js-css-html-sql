<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
  .ctverecek{
 width: 200px; 
 height: 200px;
   }	
  .obdelnik{
 width: 399px;
 height: 49px;
  }
 .kruh{
 width: 199px;
 height: 199px;
 border-radius: 99px;
  }


  .red {
  background-color: red;
  }
  
  .blue {
  background-color: blue;
  }
  
  .green {
  background-color: green;
  }

  .yellow {  
background-color: yellow;
  }
  </style>
  </head>
  <body>
 <?php
 $tvar1 = "ctverecek";
 $tvar2 = "obdelnik";
 $tvar3 = "kruh";
 $red = "red";
 $green = "green";
 $blue = "blue";
 $yellow = "yellow";
echo '<div class ="'.$red.' '.$tvar1.'"></div>';
echo '<div class ="'.$green.' '.$tvar2.'"></div>';  
echo '<div class ="'.$blue.' '.$tvar3.'"></div>'; 
echo '<div class ="'.$yellow.' '.$tvar1.'"></div>';   
  ?>
  </body>
  </html>