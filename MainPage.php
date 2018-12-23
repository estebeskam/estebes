<?php
session_start();
require_once("bd.php");

if (empty($_SESSION)) {
		header('Location: index.php');
exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetFinder</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="  sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" href="dog.ico">
   <link rel="style.css">
    </head>
    <body>
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="newpost.php"> Write a PETition! <span class="sr-only">(current)</span></a>
      </li>
	<li class="nav-item">
        <a class="nav-link" href="posts.php"> Posts <span class="sr-only">(current)</span></a>
      </li>
      	<li class="nav-item active">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
    <span class="navbar-text">
      Welcome to PetFinder!
    </span>
  </div>
</nav>
     </body>
  </html>
