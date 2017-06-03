<?php 
	require_once('included_functions.php');

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		if($username == 'v' && $password=='forvesna'){
			redirect_to('array_functions.php');
		}
		$message = "$username";
	} else {
		$username="";
		$password='';
		$message = 'no username';
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		echo $message;
	?>
	<form action="form_single.php" method='POST'>
		username: <input type="text" name='username' value="<?php echo htmlspecialchars($username);  ?>"><br>
		password: <input type="text" name='password' value="<?php echo htmlspecialchars($password); ?>"><br>
		<input type="submit" value='submit' name='submit'><br>
	</form>
</body>
</html>