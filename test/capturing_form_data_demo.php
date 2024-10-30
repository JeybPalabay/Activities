<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Data</title>
</head>
<body>
	<form method="get" action="capturing_form_data_receiver_demo.php">
		<label for="txtFirstName">First Name: </label>
		<input type="text" name="txtFirstName" id="txtFirstName"><br>

		<label for="txtLastName">Last Name: </label>
		<input type="text" name="txtLastName" id="txtLastName"><br>
		
		<input type="radio" name="radSex" id="radMale" value="Male" checked>
		<label for="radMale">Male</label>
		
		<input type="radio" name="radSex" id="radFemale" value="Female">
		<label for="radFemale">Female</label><br>
		
		<button type="submit" name="btnSend">Send</button>
	</form>
</body>
</html>