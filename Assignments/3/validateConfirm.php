<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

include "validationUtilities.php";

// Pvals from POST requests
$Pemail = $_POST["email"];
$Pfirstname = $_POST["firstname"];
$Pbday = $_POST["bday"];
$Page =  $_POST["age"];
$Pstate = $_POST["state"];
$Pzip = $_POST["zip"];

// Boolean values from validation
$email = IsValidEmail($Pemail);
$firstname = isValidName($Pfirstname);
$bday = IsValidDate($Pbday);
$age = fIsValidRange($Page,1,120);
$state = fIsValidLength($Pstate);
$zip = fIsValidZipcode($Pzip);


echo $email;
echo $firstname;
echo $bday;
echo $age;
echo $state;
echo $zip;
?>

</body>
</html>