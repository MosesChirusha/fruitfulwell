<?php
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
    
    $sql = "SELECT * FROM blog ORDER BY id_article";
    $req = $conn->prepare($sql);
    $req->execute();
    $articles = $req->fetchAll();

	/*$default  = array(
		'username' => "moses" ,
		'password' => "123",
		'priority' => 1
	);*/