<?php 
	require_once('included_functions.php');
	require_once('validation_functions.php');

	$errors=array();

	if(isset($_POST['submit'])){
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$message="";

		$fields_required = ['username', 'password'];

		foreach($fields_required as $field){
			$value = trim($_POST[$field]);
			if(!has_presence($value))
				$errors[$field] = ucfirst($field) . " is required";
		}

		$fields_with_max_lengths = array("username" => 30, "password" => 8);

		validate_max_lengths($fields_with_max_lengths);

		// foreach($fields_with_max_lengths as $field => $max){
		// 	$value = trim($_POST[$field]);
		// 	if(!has_max_length($value, $max))
		// 		$errors[$field] = ucfirst($field) . ' is too long';
		// }

		if(empty($errors))
			if($username == 'v' && $password=='forvesna'){
				redirect_to('array_functions.php');
			} else {
				$message = 'there were some errors mabye';
			}
		// $message = "$username logged in";
	} else {
		$username="";
		$password='';
		$message = 'log in<br>';
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		echo $message . '<br>';
		echo form_errors($errors);
	?>
	<form action="form_validation.php" method='POST'>
		username: <input type="text" name='username' value="<?php echo htmlspecialchars($username);  ?>"><br>
		password: <input type="text" name='password' value="<?php echo htmlspecialchars($password); ?>"><br>
		<input type="submit" value='submit' name='submit'><br>
	</form>
</body>
</html>