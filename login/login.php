<?php

session_start();
if (isset($_SESSION['id'])) {
	echo "there's a session";
	header("location: ../index.php");
}
$error = [];


include("../config/database.php");
include("../script/script.php"); 
$db = new Database;
$Validate = new Validate;


if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

	$email = htmlspecialchars(strip_tags($email));
	$password = htmlspecialchars(strip_tags($password));
  $password = sha1($password);

	$Validate->Login($email, $password, $db);
}


include("../navbar/nav.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	 <link rel="apple-touch-icon" type="image/x-icon" href = "../support/favicon.ico"/>
	<meta name="viewport" content="width=device-width, initial-scale = 1.0">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

	<title>Login | EON Grant and scholarship</title>
</head>
<body>

	 <div class="row">
  	<div class="col-md-3"></div>
  	<div class="col-md-6"><div class="bg-danger text-light" align="center"><?php 
      $ccc = count($error);

      for ($i=0; $i < $ccc ; $i++) { 
        echo $error[$i]."<br />"; 
      }
      
      ?></div>
  		<form method="post" class="form" enctype="multipart/form-data">
  		<img src="../support/welcomecats.svg" style="max-width: 100%"><br><br>

  			<div class="form-row">
  				<div class="col-md-6">
  					<label>Email:</label>
  					<input type="email" name="email" class="form-control">
  				</div>
  				<div class="col-md-6">
  					<label>Password:</label>
  					<input type="password" name="password" class="form-control">
  				</div>
  			</div>
  			<br>
  			
  			<div class="register" align="right">
					<input type="submit" name="login" value="Login" class="btn btn-success" id="register">
				</div>
  		</form>
  		<i style="float: right"> &copy; 2020, Education Online Nigeria.</i>
  	</div>
  	<div class="col-md-3"></div>
  </div>

  <style type="text/css">
  	body{
  		overflow-x: hidden;
  	}
  </style>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" ></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

<script type="text/javascript">
  $('.toast').toast(option)
</script>
</body>
</html>


