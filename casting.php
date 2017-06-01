<html>
<head></head>
<body>
	<?php 
		$count = "2";
	?>

	Type: <?php echo gettype($count); ?> <br>

	<?php $count += 3; ?>
	Type: <?php echo gettype($count); ?> <br>

	<?php $cat = "vrednost " . $count . " zadovolstvo." ?> <br>
	cat: <?php echo gettype($cat); ?>
	<br>

	<?php settype($count, "integer"); ?>
	count: <?php echo gettype($count); ?><br>

	<?php $count2 = (string)$count; ?>
	count: <?php echo gettype($count) ?><br>
	count2: <?php echo gettype($count2) ?><br>

	$test1 = 3;
	$test2 = 3;
	<?php settype($test1, "string"); ?>
	<?php (string)$test2 ?>


</body>
</html>