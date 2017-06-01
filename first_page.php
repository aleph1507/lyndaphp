<html>
<head><title>first</title></head>
<body>
	<?php $link_name='second page' ?>
	<?php
	$company = "comp & comp";
	// for($i = 1; $i < 10; $i++){
	// 	echo "<a href=\"second_page.php?id=$i&company=urlencode($company)\">$link_name $i </a><br>";
	// }
	?>



	<a href="second_page.php?id=<?php echo 5; ?>&company=<?php echo rawurlencode($company); ?>"><?php echo $link_name; ?></a>
</body>
</html>