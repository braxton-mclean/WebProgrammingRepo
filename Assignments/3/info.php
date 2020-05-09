<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>Info from user:</h1>

<?php
$Pemail = $_POST["email"];
$Pfirstname = $_POST["firstname"];
$Pbday = $_POST["bday"];
$Page =  $_POST["age"];
$Pstate = $_POST["state"];
$Pzip = $_POST["zip"];

echo "Email: $Pemail <br>";
echo "First Name: $Pfirstname <br>";
echo "Birthday: $Pbday <br>";
echo "Age: $Page <br>";
echo "State: $Pstate <br>";
echo "Zip: $Pzip <br>";
?>
</body>
</html>