<html>
	<head></head>
	<body>
		<?php 
			$string1 = 'vesna';
			$string2 = ' sakam mnogu';

			$s3 = $string1;
			$s3 .= $string2;

			echo $s3;
		?>
		<br><br>

		<?php 
			echo "<br>Lowercase: " . strtolower($s3);
			echo "<br>Uppercase:" . strtoupper($s3);
			echo "<br>Uppercase first:" . ucfirst($s3);
			echo "<br>Uppercase words:" . ucwords($s3);
			echo "<br>";
			echo "<br>Length: " . strlen($s3);
			echo "<br>Trim: " . "A" . trim(" B C D ") . "E";
			echo "<br>Find: " . strstr($s3, "sakam");
			echo "<br>Replace by string: " . str_replace("mnogu", "vesna", $s3);
			echo '<br>';
			echo '<br>Repeat: ' . str_repeat($s3, 2);
			echo '<br>Make substring: ' . substr($s3, 10, 16);
			echo '<br>Find position: ' . strpos($s3, "vesna");
			echo '<br>Find character: ' . strchr($s3, "s");
			echo '<br>'
		?>
	</body>
</html>