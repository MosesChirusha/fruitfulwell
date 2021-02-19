<?php
if (isset($_POST['username'], $_POST['password']) AND !empty($_POST['username']) AND !empty($_POST['password'])) {
	//echo "Successfully loged in";
	$username = htmlspecialchars($_POST['username']);
	$password = md5($_POST['password']);

	//Connect to database
	$servername = "localhost";
    $usernamedb = "root";
    $passworddb = "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=fruitful_well", $usernamedb, $passworddb);
          // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          //echo "Connected successfully";
    } catch(PDOException $e) {
        //echo "Connection failed: " . $e->getMessage();
    }
    
    $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
    $req = $conn->prepare($sql);
    $req->bindValue(':username', $username);
    $req->bindValue(':password', $password);
    $req->execute();
    $info = $req->fetch();

    print_r($info);

	/*$default  = array(
		'username' => "moses" ,
		'password' => "123",
		'priority' => 1
	);*/

	if (!empty($info)) {
		//echo "Welcome";
		session_start();
		$_SESSION['username'] = $info['username'];
		$_SESSION['priority'] = $info['priority'];
		header('Location:index.php');
	}
	else{
		echo "Invalid username or password";
	}
}
else{
	echo "Please fill the form";
}