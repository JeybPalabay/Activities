<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form>
		<input type= "" name=""> <!-- textbox -->
		<hr>
		<select name="drpCars"> <!-- Dropdown -->
			<option value = "Volvo">Volvo</option>
			<option value = "Saab">Saab</option>
			<option value = "Fiat" selected>Fiat</option>
			<option value = "Audi">Audi</option>
			<option value = "Toyota">Toyota</option>
			<option value = "Mitsubishi">Mitsubishi</option>
			<option value = "Honda">Honda</option>
		</select>

		<hr>

		<textarea name = "txtPost" rows="10" cols="20"></textarea>
	
		<hr>

		<button type="button">Click Me!</button>

		<hr>

		<fieldset>
			<legend>Personal Information:</legend>
			First name <input type= "" name=""><br>
			Last name <input type= "" name=""><br>
		</fieldset>

		<hr>

		<input type="text" name="dlstBrowesers" list="browsers">
		<datalist id = "browsers">
			<option value="Microsoft Edge"></option>
			<option value="FireFox"></option>
			<option value="Chrome"></option>
			<option value="Opera"></option>
			<option value="Safari"></option>


		</datalist>
	</form>
</body>
</html>