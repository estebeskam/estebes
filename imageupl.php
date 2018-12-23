<?php
session_start();
require_once("bd.php");
	if (isset ($_POST['post'])){
		$file = $_FILES['file'];

		$imgData = file_get_contents($filename);
		$sql = sprintf("INSERT INTO image
    (id, direct, name, format)
    VALUES
    (?,?,?,?)",
		$fileName = $_FILES['file']['name'];
		$fileFormat = $_FILES['file']['format'];
		$allowed = array('jpg', 'jpeg');
		if ($allowed)){
			if ($fileSize < 1000000){
					$fileDestination = 'uploads/'
					header("Location: index.php?uploadsuccess")
				} else {
					echo "Your file is too big!"; 	
				}else{
			echo "You cannot upload files of this type!";
		}
	}

