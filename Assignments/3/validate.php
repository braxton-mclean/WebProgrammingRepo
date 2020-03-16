<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="mainFormBox">
		<form action="" method="post">
			<span class="formField"> Font: 
				<select name="formFont">
					<option value="times">Times New Roman</option>
					<option value="courier">Courier</option>
					<option value="optima">Optima</option>
				</select>
			</span>
			<br>

			Style:
			<select name="formStyle">
				<option value="bold">Bold</option>
				<option value="italic">Italic</option>
				<option value="underline">Underline</option>
			</select>
			<br>

			Color:
			<input name="formColorPicker" type="color"/>
			<br>

			<br>
			<input type="submit" name="submitButton" value="Submit Form"/>
			<br><br>
			<input type="submit" name="submitButton" value="Submit without HTML 5 validation"/>
		</form>
	</div>
</body>
</html>