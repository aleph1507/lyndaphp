<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		//presence
		$value='x';
		if(!isset($value) || empty($value)) {
			echo 'Validation failed<br>';
		}

		//strlength
		$value="";
		$min = 3;
		if(strlen($value) < $min)
			echo 'Validation failed<br>';
		$max = 6;
		if(strlen($value) > $max)
			echo 'Validation failed<br>';
		//type
		if(!is_string($value))
			echo 'Validation failed. <br>';
		//inclusion
		$set = ['1', '2', '3', '4'];
		if(!in_array($value, $set))
			echo 'Validation failed<br>';
		//unique

		//format
		if(!preg_match('/@/', $value)){
			echo 'Validation failed<br>';
		} 
	?>
</body>
</html>