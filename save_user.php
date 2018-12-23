<?php

require_once("bd.php");

$db = new mysqli($servername, $username, $password, $name);


if ($db->connect_error) {
    
	die("Connection failed: " . $db->connect_error);
}


$login = filterInput($_POST['login']);

$password = filterInput($_POST['password']);

$password_2 = filterInput($_POST['password_2']);

$result = mysqli_query($db, "SELECT * FROM users WHERE login = '$login'");

$row = mysqli_fetch_assoc($result);
$sql = "INSERT INTO users (login, password) VALUES ('$login', '$password')";
	

if (empty($login) or empty($password) or empty($password_2)) 
{
	
echo "Need to feel all fields!";
} else if ($row['id'] != 0) 
{
	
echo "This username already exists";
}else if ($password != $password_2)
{
	
echo "Passwords do not match";

} else {	
	
if(mysqli_query($db, $sql))
	{
		
	header('Location: index.php');
	
} else {
		
	die('Error: ' . $sql . "<br>" . mysqli_error($db));
	
		} 

	}	
	
mysqli_close($db);

?>