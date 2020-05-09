<!DOCTYPE html>
<html>
<head>
   <title></title>
</head>
<body>
<?php 
$color = $_POST["color"];
VerifyColor($_POST["color"]);

function VerifyColor($string){
   if ( ($string=="blue") || ($string=="red") || ($string=="yellow") ) {
      setcookie("color", $string);
   } else {
      exit("Invalid Color : $string");
   }
}

$fname = $_COOKIE["fname"];
$model = $_COOKIE["model"];

if ($model == "Mustang") {
   $longName = $color . " Ford Mustang";

   if ($color == "blue") {
      $filepath = './blueFM.jpg'; 
   } else if ($color == "red") {
      $filepath = './redFM.jpg'; 
   } else {
      $filepath = './yellowFM.jpg';
   }

} else if ($model == "Subaru") {
   $longName = $color . " Subaru WRX STI";

   if ($color == "blue") {
      $filepath = './blueSub.jpg'; 
   } else if ($color == "red") {
      $filepath = './redSub.jpg'; 
   } else {
      $filepath = './yellowSub.jpg';
   }

} else {
   $longName = $color . " Corvette";

   if ($color=="blue"){
      $filepath = './blueCorv.jpg'; 
   } else if ($color == "red") {
      $filepath = './redCorv.jpg'; 
   } else {
      $filepath = './yellowCorv.jpg';
   }
}
?>
   <div class="pageContainer">
      <?php
         echo '<h1 class="centerText">' . $fname . "'s" . '</h1>';
         echo '<h2 class="centerText">' . $longName . '</h2>';
         echo '<img class="productItem" src= " '. $filepath .' ">';
      ?>
      <br>
      <a class="centerText" href="Order01.php">Go back to Order01</a>
      <br>
   </div>
</body>
</html>