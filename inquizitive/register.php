<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Tech-Quiz Registration</title>
  <link rel="stylesheet" type="text/css" href="css/styleregister.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>

  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Participant1</label>
  	  <input type="text" name="participant1" value="<?php echo $participant1; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Participant2</label>
  	  <input type="text" name="participant2" value="<?php echo $participant2; ?>">
  	</div>
	<div class="input-group">
  	  <label>Participant3</label>
  	  <input type="text" name="participant3" value="<?php echo $participant3; ?>">
  	</div>
  	<div class="input-group">
  	  <label>ID</label>
  	  <input type="number" name="id">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  </form>
</body>
</html>

