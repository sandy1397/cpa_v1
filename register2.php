<?php
session_start();
require_once "config.php";
// initializing variables
$username = "";
$email    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('remotemysql.com', 'V1HwKqbZg5', 'nasykhl0YZ', 'V1HwKqbZg5');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }


  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password)
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	header('location: index.php');  //change
  }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>CPA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styling.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">


    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>



</head>
<body background="img/bg1.jpg">

<h1> <b>CUSTOM PC ASSEMBLER </b></h1>
<hr>

    <ul>
        <div class="custom-container container">
          <li><a href="home.php">Home</a></li>
          <li><a href="gotolog.php">Products</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="https://goo.gl/forms/B1CG496RHPVRFG753">Feedback</a></li>

          <li style="float:right"><a class="active" href="index.php">Login</a></li>
          <li style="float:right"><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
        </div>
    </ul>

<div class="custom-container container">
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="register2.php" method="post">
          <?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>
          <div class="form-group">
        	  <label>Username</label>
        	  <input class="form-control" type="text" name="username" value="<?php echo $username; ?>">
        	</div>
        	<div class="form-group">
        	  <label>Email</label>
        	  <input class="form-control" type="email" name="email" value="<?php echo $email; ?>">
        	</div>
        	<div class="form-group">
        	  <label>Password</label>
        	  <input class="form-control" type="password" name="password_1">
        	</div>
        	<div class="form-group">
        	  <label>Confirm password</label>
        	  <input class="form-control" type="password" name="password_2">
        	</div>
        	<div class="form-group">
        	  <button class="btn btn-primary" type="submit" name="reg_user">Register</button>
        	</div>
        	<p>
        		Already a member? <a href="index.php">Sign in</a>
        	</p>
        </form>
    </div>
 </div>


</body>
</html>
