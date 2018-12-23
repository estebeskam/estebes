<?php
   session_start();
   require_once("bd.php");
     $id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Post</title>
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="icon" href="dog.ico">
   <link rel="style.css">
</head>
<body>
<?php
   if($id) {
     if (!$db)
     {
       die("Connection failed: " . mysqli_connect_error());
     }

     $sql = "SELECT * FROM post WHERE id = '$id'";
     $result = mysqli_query($db, $sql);

     if (mysqli_num_rows($result) > 0) {
       while ($row = mysqli_fetch_assoc($result)) {
         echo '<div class="title mt-3">' . $row['title'] . '</div><br />';
		 echo '<div class="time"> Posted on ' .date('F j, Y', strtotime($row['date'])). ' by ' .$row["author"]. '</div><hr />';
         echo $row['text'] . '<br /><br />';
       }
     } else {
       echo "No PETitions";
     }
   }

?>