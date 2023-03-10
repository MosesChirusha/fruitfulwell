<?php
session_start();

if (isset($_POST['publish'])) {
	if (isset($_POST['title'], $_POST['content']) AND !empty($_POST['title']) AND !empty($_POST['content'])) {
		$title = htmlspecialchars($_POST['title']);
		$author = $_SESSION['username'];
		$content = $_POST['content'];
		$avatar = 'default.jpg';

		//Database connect
		//Database connection
		$servername = "localhost";
		$usernamedb = "root";
		$passworddb = "";

		try {
		  $conn = new PDO("mysql:host=$servername;dbname=fruitful_well", $usernamedb, $passworddb);
		  // set the PDO error mode to exception
		  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  //$message = "Connected successfully";
		} catch(PDOException $e) {
		  $message = "Connection failed: " . $e->getMessage();
		}

		$sql = "INSERT INTO blog (article_title, article_author, article_content, cover_image, date_post)
		VALUES (:title, :author, :content, :avatar, NOW())";

		$req = $conn->prepare($sql);
		$req->bindValue(':title', $title);
		$req->bindValue(':author', $author);
		$req->bindValue(':content', $content);
		$req->bindValue(':avatar', $avatar);

		$req->execute();

		echo "Post published";
	}
	else{
		echo "Please fill all the form";
	}
}
else{
	header("Location: blog.php");
}