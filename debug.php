<html>
<head></head>
<body>
	<?php 
		$number = 99;
		$string = 'string';
		$array = [1=>"asdasd", 2=>'asdasd sada'];

		var_dump($number); echo '<br>';
		var_dump($string);echo '<br>';
		var_dump($array);echo '<br>';
	?>

	<?php
		echo '<pre>';
		//int_r(get_defined_vars());
		echo '</pre>';
	?>

	<?php 
		function aaa($vvv=1){
			echo "function<br><pre>";
			var_dump(debug_backtrace());
			echo '</pre>';
		}
		aaa();
	?>
</body>
</html>