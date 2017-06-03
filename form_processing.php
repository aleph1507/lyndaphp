<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<pre>
		<?php 
			print_r($_POST)
		?>
	</pre>
	<br>
	<?php 
		// if(isset($_POST["username"])){
		// 	$username = $_POST['username'];	
		// } else
		// 	$username="";
		// if(isset($_POST["password"]))
		// 	$password = $_POST['password'];
		// else
		// 	$password="";

		// $username = isset($_POST['username']) ? 

		if(isset($_POST['submit'])){
			echo 'form was submitted<br>';
			$username = isset($_POST['username']) ? $_POST['username'] : '';
			$password = isset($_POST['password']) ? $_POST['password'] : '';
		}

		echo " {$username}:  {$password}";
	?>
</body>
</html>