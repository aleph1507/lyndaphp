<?php 
	header("HTTP 1.1/ 404 Not Found");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	// this wont work
		//header("HTTP 1.1/ 404 Not Found");
	?>
	<pre>
		<?php 
			print_r(headers_list());
		?>
	</pre>
</body>
</html>