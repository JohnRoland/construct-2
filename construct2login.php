<?php 
	session_start();
	header('Access-Control-Allow-Origin: *');

	// connect to database
	$con = mysqli_connect("127.0.0.1", "authentication", "snipped password");

	if (isset($_POST['login_btn'])) {

		$username = ($_POST['username']);
		$password = ($_POST['password']);

		$password = md5($password); // remember we hashed password before storing last time
		$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$result = mysqli_query($db, $sql);

		if (mysqli_num_rows($result) == 1) {
			$_SESSION['message'] = "You are now logged in";
			$_SESSION['username'] = $username;
			header("location: home.php"); //redirect to home page
		}else{
			$_SESSION['message'] = "Username/password combination incorrect";
		}
	}
?>
