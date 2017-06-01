<html>
<head></head>
<body>
	<?php 
		$ages = [23,2,65,3,2,4,98];

		next($ages);
		echo "1: " . current($ages) . '<br>';
		next($ages);
		next($ages);next($ages);next($ages);\
		next($ages);next($ages);
		reset($ages);
		next($ages);
		prev($ages);
		end($ages);
		echo 'pointer: ' . current($ages) . '<br>';
	?>
</body>
</html>