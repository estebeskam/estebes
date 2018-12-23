<html>
  <head>
<title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="icon" href="dog.ico">
  </head>
<body>
<main class="container mt-5">
    <div class="row">
      <div class=col-md-8 mb-3">
        <h4>Login</h4>
        <form action="testreg.php" method="post">
          <label for="login">Login</label>
          <input type="text" name="login" id="login" class="form-control">  <div>
    	<label for="pass">Password</label>
      <input type="password" name="password" id="password" class="form-control">
	<div><button type="submit" name="submit" class="btn btn-success mt-3">Login</button>
	</div>
	<p>
	Not yet a member? <a href="register.php">Register</a>
	</p>
	</form>
</body>
</html>