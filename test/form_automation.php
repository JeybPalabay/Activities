<?php
	$arrMonths = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<title>Form Automation</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<select name="drpMonths" class="form-control">
					<?php
						if (isset($arrMonths)) {
							foreach ($arrMonths as $key => $value) {
								
								if($value == date ('F'))
									echo '<option value="' . $value . '" selected>' . $value . '</option>';
								else
									echo '<option value="' . $value . '" >' . $value . '</option>';
				
							}
						}
					?>
				</select>
				<select name="drpDays" class="form-control">
					<?php
						for ($i=1; $i < 32 ; $i++) { 
							if ($i == date('d')) {
								echo '<option value="' . $i . '" selected>' . $i . '</option>';
							} 
							else {
								echo '<option value="' . $i . '">' . $i . '</option>';
							}
						}
					?>
				</select>
				<select name="drpYears" class="form-control">
				<?php
					for ($year = 1820; $year <= 2024; $year++) { 
						if ($year == 2010) {
							echo '<option value="' . $year . '" selected>' . $year . '</option>';
						} else {
							echo '<option value="' . $year . '">' . $year . '</option>';
						}
					}
				?>
				</select>

				<button type="submit" class="btn btn-info">Submit</button>
			</div>
		</div>
	</div>

	
	
	<script type="text/javascript" href ="js/jquery-3.7.1.js"></script>
	<script type="text/javascript" href ="js/bootstrap.js"></script>
</body>
</html>