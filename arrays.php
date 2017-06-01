<html>
	<head>
		
	</head>
	<body>
		<?php
			$numbers = [4, 8, 15, 16, 23, 42];
			echo $numbers[1];

			$mixed = [6, "fox", "dog", array("x", "y", "z")];
			echo '<br>' . $mixed[2] . "<br>";
			echo '<br>' . $mixed[3] . "<br>";
			echo '<pre>';
			echo '<br>' . print_r($mixed) . '<br>';
			echo '</pre>';
			echo '<br>' . $mixed[3][1] . '<br>';
		?>
	</body>
</html>