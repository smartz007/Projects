<?php
session_start();

// initializing variables
$participant1 = "";
$participant2 = "";
$participant3 = "";
$id = 0;
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '7896', 'inquizitive');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $participant1 = mysqli_real_escape_string($db, $_POST['participant1']);
  $participant2 = mysqli_real_escape_string($db, $_POST['participant2']);
  $participant3 = mysqli_real_escape_string($db, $_POST['participant3']);
  $id = mysqli_real_escape_string($db, $_POST['id']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($participant1)) { array_push($errors, "Minimum one participant is needed for Quiz...."); }
  if (empty($id)) { array_push($errors, "Id is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }

  // first check the database to make sure
  // a user does not already exist with the same id
  $id_check_query = "SELECT * FROM quiz_participants WHERE id='$id' LIMIT 1";
  $result = mysqli_query($db, $id_check_query);
  $id_checker = mysqli_fetch_assoc($result);

  if ($id_checker) { // if user exists
    if ($id_checker['id'] === $id) {
      array_push($errors, "Id already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
      echo "$participant1";
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO quiz_participants (participant1, participant2, participant3, id, password)
  			  VALUES('$participant1', '$participant2','$participant3', '$id', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['id'] = $id;
  	$_SESSION['success'] = "You are now logged in...You can continue test....";
  	//header('location: quiz.html');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $id = mysqli_real_escape_string($db, $_POST['id']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($id)) {
  	array_push($errors, "Id is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM quiz_participants WHERE id='$id' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['id'] = $id;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: quiz-page.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

