<?php 
	function redirect_to($new_location){
		header("Location: " . $new_location);
		exit;
	}

	$logged_in = $_GET['logged_in'];
	if($logged_in)
		redirect_to('second_page.php?id=v&company=lj');
	else
		redirect_to('second_page.php?id=log&company=in');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Redirect</title>
</head>
<body>

</body>
</html>