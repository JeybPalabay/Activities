<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
		/*
		$grade = 70;

		if($grade > 74.4){
			echo 'Passed!';
		}
		else{
			echo 'Failed!';
		}
		*/
		/*
		$grade = 110;

		if($grade > 100){
			echo 'Out of range!';
		} elseif ($grade > 74.4) {
			echo 'Passed';
		} elseif ($grade > 64.4){
			echo 'Failed';
		} else{
			echo 'Out of range!';
		}
		*/
		/*
		$gender = 'male';
		$age = 21;

		if($gender == 'female'){
			if($age == 18){
				echo 'Debutant';
			} else 
				echo 'Not Debutant';
		}
		elseif ($gender == 'male') {
			if($age == 21){
				echo 'Debutant';
			} else{
				echo 'Not Debutant';
			}
		} else 
			echo 'Invalid sex'
		*/

		/*
		$gender = 'male';
		$age = '21';

		if($gender == 'female' and $age == 18){
			echo 'debutant';
		} elseif($gender == 'male' and  $age == 21){
			echo 'debutant';
		}else {
			echo 'Not debutant';
		}*/

		$colorCode = 'y';

		switch ($colorCode) {
			case 'R':
				echo 'Red';
				break;
			case 'G':
				echo 'Green';
				break;
			case 'B':
				echo 'Blue';
				break;
			case 'Y':
				echo 'Yellow';
				break;
			default:
				echo 'Invalid Color';
				break;
		}
		

	?>
		
</body>
</html>