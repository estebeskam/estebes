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
	<form action="post.php" method="POST">  
   <textarea name="title" id ="title" class ="form-control" placeholder = "Title" required></textarea>
<br>
  <div>
  	<textarea name="text" id="text" class ="form-control" placeholder = "Text" required></textarea></br>
</div>
<input type="file" name="image">
  <p>
   <div>
   	<button type="post" name="post" class="btn btn-success">Post</button>
   </div>
	</body>
</html>
