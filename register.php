<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	   <link rel="stylesheet" href="bootstrap.min.css">
	   <link rel="icon" href="dog.ico">
 </head>
<body>
	<main class="container mt-5">
    <div class="row">
      <div class=col-md-8 mb-3">
        <h4>Registration Form</h4>
        <form action="save_user.php" method="post">
          <label for="login">Login</label>
          <input type="text" name="login" id="login" class="form-control">
           <label for="password">Password</label>
          <input type="password" name="password" id="password" class="form-control">  	
  	<label for="password_2">Confirm Password</label>
	<input type="password" name="password_2" id="password_2" class="form-control">
	<button type="submit" name="reg" class="btn btn-success mt-3">Register</button>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
	</form>
</body>
</html>
