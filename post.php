<?php
	session_start();
	require_once("bd.php");
	date_default_timezone_set("Asia/Almaty");

	if (!isset($_SESSION['username'])) {
		header('location: index.php');
	}

	if(isset($_POST['post']))
	{
		$db;

		if(!$db)
		{
			die("Connection failed: " . mysqli_connect_error());
		}
		$author = $_SESSION['login'];
		$title = filterInput($_POST['title']);
		$text = filterInput($_POST['text']);
		$date = date('Y-m-d h:i:sa');
		
		$sql = "INSERT INTO post (title, text , author, date) VALUES ('$title', '$text', '$author', '$date')";

		if(mysqli_query($db, $sql))
		{
			header('Location: posts.php');
		} else {
			die('Error: ' . $sql . "<br>" . mysqli_error($db));
		}
		mysqli_close($db);
	}
?>
