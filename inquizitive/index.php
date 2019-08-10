<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Tech-Quiz Login</title>
  <link rel="stylesheet" type="text/css" href="css/styleregister.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="index.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Id</label>
  		<input type="number" name="id" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  </form>
</body>
</html>