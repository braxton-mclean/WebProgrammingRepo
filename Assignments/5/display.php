<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="mainStyle.css">
	<title>Nike Sales</title>
</head>
<body>

<main>
	<div class="topbar">
		<img id="banner-img" alt="nike logo" src="Resources/banner-nike-image.png" height="45">
		<div class="tab">
			<a href="index.html" class="weblink">
				Home - Main Report
			</a>
			<a href="display.php" class="weblink">
				Data Display
			</a>
			<a href="newpurchase.html" class="weblink">
				Enter Purchase
			</a>
			<a href="query.html" class="weblink">
				Search
			</a>
		</div>
	</div>


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

// check that we got data
if (mysqli_num_rows($result) > 0) {
    // format table
    echo '<table class="productTable">
			<tr>
				<th colspan="6">Products</th>
			</tr>';
	echo '<tr>
			<th>Purchase Number</th>
			<th>Supplier ID</th>
			<th>Date</th>
			<th>Quantity</th>
			<th>Description</th>
			<th>Unit Price</th>
		</tr>';
	// iterate through data and put in table
    while($row = mysqli_fetch_assoc($result)) {
        echo 
        	"<tr><th>" . $row["PurchaseNo"]. "</th>
        	<th>" . $row["SupplierID"]. "</th>
        	<th>" . $row["Date"]. "</th>
        	<th>" . $row["Quantity"]. "</th>
        	<th>" . $row["Description"]. "</th>
        	<th>" . $row["Price"]. "</th>
        	</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
?> 


</main>

</body>
</html>