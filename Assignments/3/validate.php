<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
	<?php include "validateConfirm.php"; ?>

	<div class="pageContainer" align="center">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" class="formLayout" method="POST">
			<label <?php echo ($email) ? "class='label-fine'" : "class='label-error'" ?> > Email: </label>
			<input class="large-box" type="text/css" name="email" placeholder="Email" required>
			<br>

			<label <?php echo ($firstname) ? "class='label-fine'" : "class='label-error'" ?> >First Name: </label>
			<input class="large-box" type="text/css" name="firstname" placeholder="First Name" required>
			<br>

			<label <?php echo ($birthday) ? "class='label-fine'" : "class='label-error'" ?> >Birthday: </label>
			<input class="large-box" type="text/css" name="bday" placeholder="mm/dd/yyyy" required>
			<br>

			<label <?php echo ($age) ? "class='label-fine'" : "class='label-error'" ?> >Age: </label>
			<input class="small-box" type="text/css" name="age" placeholder="age" required>
			<br>

			<label <?php echo ($state) ? "class='label-fine'" : "class='label-error'" ?> >State: </label>
			<input class="small-box" type="text/css" name="state" placeholder="ST" required>
			<br>

			<label <?php echo ($zip) ? "class='label-fine'" : "class='label-error'" ?> >Zip: </label>
			<input class="small-box" type="text/css" name="zip" placeholder="Zip" required>
			<br>
			<br>
			
			<input type="submit" name="submitButton" value="Submit Form"/>
			<br>
			<button type="submit" name="submitButton2" formnovalidate>Submit without HTML 5 validation</button>
			<br>
			<a href="info.php">Check Info</a>
		</form>
	</div>
</body>
</html>