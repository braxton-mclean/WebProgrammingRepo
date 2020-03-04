<!DOCTYPE html>

<?php
	$message = "";
	$customColor = "#000000";
	if (isset($_POST['submitButton'])) {
		$classes = "";
		switch ($_POST['formFont']) {
			case "times":
				$classes = $classes."times ";
				break;
			case "courier":
				$classes = $classes."courier ";
				break;
			case "optima":
				$classes = $classes."optima ";
				break;
		}
		switch ($_POST['formStyle']) {
			case "bold":
				$classes = $classes."bold ";
				break;
			case "italic":
				$classes = $classes."italic ";
				break;
			case "underline":
				$classes = $classes."underline ";
				break;
		}
		$input = $_POST['inputText'];
		$customColor = $_POST['formColorPicker'];
		$classes = $classes."customColor";
		$message = $input;
	}
?>

<html>
<head>
	<title></title>
	<style>
         body {
            background-color: orange;
         }
         .times {
            font-family: "Times New Roman", Times
         }
         .courier {
            font-family: Courier
         }
         .optima {
         	font-family: Optima
         }

         .bold {
         	font-weight: bold;
         }
         .italic {
         	font-style: italic;
         }
         .underline {
         	text-decoration: underline;
         }
         .customColor {
         	color: 	<?php 
         				echo $customColor;
         			?>;
         }
      </style>
</head>
<body>

<form action="" method="post">
	Font:
	<select name="formFont">
		<option value="times">Times New Roman</option>
		<option value="courier">Courier</option>
		<option value="optima">Optima</option>
	</select>
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

	<textarea name="inputText">
		Custom text here...
	</textarea>
	<br>
	<input type="submit" name="submitButton"/>
</form>

<?php 
	if (isset($message)) {
		echo "<p class='".$classes."'>".$message."</p>";
	}
?>

</body>
</html>