<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Input Types Demo</title>
</head>
<body>
	<form>
		<label for="txtFirstName">First Name:</label>
		<input type="text" name="txtFirstName" id="txtFirstName" placeholder="Enter first name" autofocus><br>
		<label for="txtLastName">Last Name:</label>
		<input type="text" name="txtLastName" id="txtLastName" placeholder="Enter first name" required><br>
		<label for="txtPassword">Password:</label>
		<input type="Password" name="txtPassword" id="txtPassword" placeholder="Enter first name" required><br>
		<input type="submit" name="btnSave" value="Send">
		<!-- <button type="submit" name="btnSave2">Send</button> -->
		<input type="reset" name=""><br>


		<input type="radio" name="radSex" id="radMale" value="Male">
		<label for = "radMale">Male</label><br>
		<input type="radio" name="radSex" id="radFemale" value="Female">
		<label for = "radFemale">Female</label><br>
		
		<input type="checkbox" name="chkBoat" id="chkBike" value="Bike">
		<label for="chkBike">Bikerist</label><br>
		<input type="checkbox" name="chkCar" id="chkCar" value="Car">
		<label for="chkCar">Car</label><br>
		<input type="checkbox" name="chkBoat" id="chkBoat" value="Bike">
		<label for="chkBoat">Boat</label><br>


		<label for="clrColor">Pick a color</label>
		<input type="color" name="clrColor" id="clrColor"><br>

		<label for="dtpBirthday">Birthday:</label>
		<input type="date" name="dtpBirthday" id="dtpBirthday"><br>

		<label for="txtEmail">Email Address:</label>
		<input type="Email" name="txtEmail" id="txtEmail"><br>

		<label for="filPhoto">Select a file: </label>
		<input type="file" name="filPhoto" id="filPhoto"><br>

		<label for="txtNumber">Email Quantity:</label>
		<input type="number" name="txtNumber" id="txtNumber" min="1" max="10"><br>

		<label for="txtVolume">Select Volume:</label>
		<input type="range" name="txtVolume" id="txtVolume" min="0" max="50"><br>

		<label for="txtTelephone">Enter Telephone Number:</label>
		<input type="tel" name="txtTelephone" id="txtTelephone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"><br>

		<label for="txtTime">Select Time:</label>
		<input type="time" name="txtTime" id="txtTime"><br>

		<label for="txtURL">Add URL:</label>
		<input type="url" name="txtURL" id="txtURL"><br>

	</form>
</body>
</html>