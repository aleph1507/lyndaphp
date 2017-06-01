<html>
<head></head>
<body>
	<?php 
		$numbers = [8,23,15,42,16,4];
	?>
	Count: <?php echo count($numbers); ?><br>
	Max value: <?php echo max($numbers); ?><br>
	Min value: <?php echo min($numbers);  ?><br>

	Sort: <pre><?php sort($numbers); print_r($numbers); ?></pre>
	Reverse sort: <pre><?php rsort($numbers); print_r($numbers); ?></pre>
	<br>
	Implode: <?php echo $num_string = implode(' * ', $numbers); ?><br>
	Explode: <pre><?php print_r(explode(' * ', $num_string)); ?></pre><br>
	<br>
	15 in array?: <?php echo in_array(15, $numbers); ?><br>
	19 in array?: <?php echo in_array(19, $numbers); ?>
	<br>
</body>
</html>