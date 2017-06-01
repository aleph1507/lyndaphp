<html>
<head>
	<title><?php echo rand(); ?></title>
</head>
<body>
	<?php 
		$assoc = array(
				'vesna' => 'sakam',
				'windows' => 'api'
			);
	?>

	<?php 
		echo $assoc['vesna'] . $assoc['windows'] .'<br>';
		$assoc['windows'] = 'v';
		echo '<pre>';
		print_r($assoc);
		echo '</pre>';
	?>
</body>
</html>