<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$servername = "localhost";
$username = "bmclean3";
$password = "bmclean3";
$dbname = "bmclean3";

$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// get all data from table
$getall_sql = "SELECT * from Purchases";
$result = $conn->query($getall_sql);
?> 

</body>
</html>