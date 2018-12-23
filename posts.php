<?php
	session_start();
	require_once("bd.php");
	date_default_timezone_set("Asia/Almaty");
	?>
<html>
	<head>
	<title>Lost and Found</title>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PetFinder</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="icon" href="dog.ico">
   <link rel="style.css">
		</head>
	<body>
	<div class="content">
	<h4 class="recent">
		<span>All posts</span>
	</h4>	</body>
</html>
	<?php
		$result = mysqli_query($db, "SELECT * FROM post ORDER BY date DESC");
		$rows = mysqli_num_rows($result);
		if ($rows) {
			while($post = mysqli_fetch_assoc($result)) {
				$id = $post['id'];
				echo '<div class="box mt-5">'. $post["title"] . '</a><br/>';
				echo '<div class="time"> Posted on ' .date('F j, Y', strtotime($post['date'])). ' by ' .$post["author"]. '</div>';
				echo '<div class="btn btn-outline-primary mt-3"><a href="showmore.php?id='.$id.'">Show more</a><br /></div>';
				
			}
		}
	?>