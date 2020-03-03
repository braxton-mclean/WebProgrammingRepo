<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php  
// Q1
function isBitten() {
	$val = rand(1,2);
	if (($val % 2) == 0) {
		return false;
	} else {
		return true;
	}
}

echo "Charlie ".(isBitten() ? "ate " : "did not eat ")."my lunch!";

//Q2
echo "<table cellpadding='1px' cellspacing='1px' style='width:300px; border: 1px solid black'>";
for ($i = 0; $i < 10; $i = $i+1) {
    echo "<tr>";
    $t = $i % 2;
    for ($r = 0; $r < 10; $r = $r+1) {
        echo "<th height='35px' width='35px' bgcolor='".((($r+$t) % 2 ==0) ? "#000000" : "#FF0000")."'>";
        echo "</th>";
    }
    echo "</tr>";
}
echo "</table>";

//Q3


//Q4


//Q5

?>
</body>
</html>