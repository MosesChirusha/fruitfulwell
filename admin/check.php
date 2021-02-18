<?php
if (isset($_POST['username'], $_POST['password']) AND !empty($_POST['username']) AND !empty($_POST['password'])) {
	//echo "Successfully loged in";
	$username = htmlspecialchars($_POST['username']);
	$password = md5($_POST['password']);

	$default  = array(
		'username' => "moses" ,
		'password' => "123",
		'priority' => 1
	);

	if ($username == $default['username'] AND $password == md5($default['password'])) {
		//echo "Welcome";
		session_start();
		$_SESSION['username'] = $default['username'];
		header('Location:index.php');
	}
	else{
		echo "Invalid username or password";
	}
}
else{
	echo "Please fill the form";
}