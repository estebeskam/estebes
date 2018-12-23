<?php
session_start();
require_once("bd.php");

$db;

if (isset($_POST['submit'])) {
		$login = ($_POST['login']);
		$password = ($_POST['password']);
		$sql = "SELECT * FROM users WHERE login = '$login' and password = '$password'";
		$result = mysqli_query($db, $sql);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
}
if (empty($login) or empty($password))
{
exit ("Need to feel all fields! Try again!");
}		
if (empty($row['id']))
{
exit ("Sorry,login or password incorrect.");
}
else {
        $_SESSION['password']=$row['password']; 
		  $_SESSION['login']=$row['login']; 
          $_SESSION['id']=$row['id'];

		header('Location: MainPage.php');
	}
?>