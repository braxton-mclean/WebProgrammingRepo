<!DOCTYPE html>
<html>
<head>
	<link href="style.css" rel="stylesheet" type="text/css">
	<title></title>
</head>
<body>
<?php 
    VerifyName($_POST["fname"]);
    VerifyModel($_POST["model"]);

    function VerifyName($string){
     	if ( ($string=="") || (strlen($string) < 2) || (strlen($string) > 20) ) {
     		exit("Invalid first name : $string");
     	} else {
     		setcookie("fname", $string);
     	}
    }

    function VerifyModel($string){
     	if ( ($string=="") || (strlen($string) < 2) || ( strlen($string) > 20) ) {
     		exit("Invalid Model : $string");
     	} else {
     		setcookie("model", $string);
     	}
    }
?>

	<div class="pageContainer centerText">
        <h2 class="centerText">Select Color</h2>
        <div class="pageContainer">
            <form action="Order03.php" class="formLayout" method="POST">
               	<div class="formGroup">
                  	<label>Car color:</label>
                  	<div class="formElements">
                     	<select name="color" required >
	                        <option value=""></option>
	                        <option style="background-color: blue; color:white;" value="blue">Blue</option>
	                        <option style="background-color: red" value="red">Red</option>
	                        <option style="background-color: yellow" value="yellow">Yellow</option>
                     	</select> 
                  	</div>
               	</div>
               	<div class="formGroup">
                  	<label></label>
                  	<button type="submit"> >> Next >> </button>
               	</div>
               	<div class="centerText vertGap55">
                  	<button type="submit" formnovalidate>Submit without validation</button><br><br>
                  	<a href="?">Reload page</a>
               	</div>
            </form>
         </div>
      </div>
</body>
</html>