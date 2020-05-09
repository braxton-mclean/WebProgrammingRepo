<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
function isValidEmail($email) {
	if ( $email=="" ) {
		return false;
	} else {
		if ( filter_var($email, FILTER_VALIDATE_EMAIL) ){
			return true;
		} else {
			return false;
		}
	}
}

function isValidName($firstname) {
	if ( $firstname=="" ) {
		return false;
	} else {
		if ( !preg_match("/^[a-zA-Z ]*$/", $firstname) ) {
			return false;
		} else {
			return true;
		}
	}
}

// check bday
function isValidDate($date) {
	if ( $date=="" ) {
		return false;
	} else {
		$date_arr = explode("/",$date);
		if ( count($date_arr) == 3 ) {
			if ( checkdate($date_arr[0], $date_arr[1], $date_arr[2]) ) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
}

function fIsValidRange($value, $min, $max) {
	if ( $value=="" ) {
		return false;
	} else {
		if ( is_numeric($value) && ($value >= $min) && ($value <= $max) ) {
			return true;
		} else {
			return false;
		}
	}
}


function fIsValidLength($state) {
	if ( $state=="" ) {
		return false;
	} else {
		if ( strlen($state)==2 ) {
			return true;
		} else {
			return false;
		}
	}
}

function fIsValidZipcode($zipcode){
	if ( $zipcode=="" ) {
		return false;
	} else {
		if ( (is_numeric($zipcode)) && (strlen($zipcode) == 5) ) {
			return true;
		} else {
			return false;
		}
	}
}
?> 
</body>
</html>