<!DOCTYPE html>
<html>
<body>

<?php
echo '<p style="font-style:italic">"Good Morning, Dave," said HAL</p>';

$radius = 5;
$area = pi() * ($radius * $radius);
echo $area;
echo "<br>";
echo "*Area is defined as: A = pi * (r^2). Source: https://www.mathsisfun.com/geometry/circle-area.html";

echo "<br>";
echo "<br>";

$celFahr = 50.0;
function f_to_c($fahr) {
	return (5/9) * ($fahr - 32);
}

echo f_to_c($celFahr);

echo "<br>";
echo "<br>";

$php_str = " PHP is fun ";
echo strlen(trim($php_str));

echo "<br>";
echo "<br>";

$find_seq = "WWW";
$init_string = "WDWWLWWWLDDWDLL";
$index = strpos($init_string, $find_seq, 0);
echo $init_string{$index + strlen($find_seq)};

echo "<br>";
echo "<br>";

$palin_string = "kayak";
$formatted_palin = strtolower($palin_string);
$rev_string = strrev($formatted_palin);
if ($formatted_palin == $rev_string) {
	echo $palin_string." is a palindrome";
} else {
	echo $palin_string." is not a palindrome";
}

echo "<br>";
echo "<br>";

$num = 7;
echo $num." is ".($num % 2 ? "odd" : "even");

echo "<br>";

echo '<p style="font-weight:bold">'.(date("L") ? "It is" : "It isn't").'</p>';

?> 

</body>
</html>