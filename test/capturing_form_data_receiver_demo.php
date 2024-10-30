<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Data (Received)</title>
</head>
<body>
	<?php
		/*$firstname = $_GET['txtFirstName'];
		$lastname =  $_GET['txtLastName'];
		$sex = $_GET['radSex'];

		if ($sex == 'Male') {
			echo "Goodafternoon Sir! $firstname $lastname";
		} else {
			echo "Goodafternoon Madam! $firstname $lastname";
		}*/

		$firstname = $_REQUEST['txtFirstName'];
		$lastname =  $_REQUEST['txtLastName'];
		$sex = $_REQUEST['radSex'];

		if ($sex == 'Male') {
			echo "Goodafternoon Sir! $firstname $lastname";
		} else {
			echo "Goodafternoon Madam! $firstname $lastname";
		}


	?>
</body>
</html>