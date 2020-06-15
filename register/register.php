<?php 

include("config/database.php");
include("script/script.php"); 

include("../navbar/nav.php"); 
 ?>
<!DOCTYPE html>


<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="some stuffs">
	<meta name="keywords" content="grant, scholarship, eon">
	<meta name="author" content="just samahd">
	<meta name="viewport" content="width=device-width, initial-scale = 1.0">
	<link rel="stylesheet" type="text/css" href="../../navbar/nav.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="register.css" />

	<title>Apply for Grant or Scholarship</title>
</head>
<body>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="errors">
			 </div>
			<form class="form" action="" method="post" enctype="multipart/form-data"><br>
				<h3>Register for our Grant/Scholarship</h3>
				<div class="form-row">
					<div class="col-md-6">
						<label for="firstname">First Name:</label>
						<input type="text" name="firstname" class="form-control" pattern="^([-\w\d\u00c0-\u024f]+)$" size="20" spellcheck="false" title="Your name (no special characters, diacritics are okay)" min="5" required>
					</div>
					<div class="col-md-6">
						<label for="firstname">Last Name:</label>
						<input type="text" name="lastname" class="form-control"  pattern="^([-\w\d\u00c0-\u024f]+)$" size="20" spellcheck="false" title="Your name (no special characters, diacritics are okay)" min="5" required>
					</div>
				</div>


				<div class="form-row">
					<div class="col-md-6">
						<label for="middlename">Middle Name(Optional):</label>
						<input type="text" name="middlename" class="form-control"  pattern="^([-\w\d\u00c0-\u024f]+)$" size="20" spellcheck="false" title="Your name (no special characters, diacritics are okay)" min="5">
					</div>
					<div class="col-md-6">
						<label for="Username">Username:</label>
						<input type="text" name="username" class="form-control" id="username"  pattern="^([-\w\d\u00c0-\u024f]+)$" size="15" spellcheck="false" title="Your name (no special characters, diacritics are okay)" min="5" required>
					</div> 
				</div>
				

				<div class="form-row">
					<div class="col-md-6">
						<label for="email">Email:</label>
						<input type="text" name="email" class="form-control"  pattern="^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$" size="30" spellcheck="false" title="Your name (no special characters, diacritics are okay)" required>
					</div>
					<div class="col-md-6">
						<label for="phone">Phone number:</label>
						<input type="number" name="phone" class="form-control" min="10" required>
					</div>
				</div>


				<div class="form-row">
					<div class="col-md-6">
						<label for="password">Password:</label>
						<input type="password" name="password" class="form-control" id="password" pattern=".{8,}" required>
					</div>
					<div class="col-md-6">
						<label for="confirmpassword">Confirm Password:</label>
						<input type="password" name="confirmpassword" class="form-control" id="confirmpassword"  required>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-12">
						<label for="choice">what are you registering for?:</label>
						
						<select class="form-control" name="choice" required>
							<option value="grant">Grant</option>
							<option value="scholarship">Scholarship</option>
						</select>
					</div>
					
				</div>

				<div class="newsletter"><input type="checkbox" name="newsletter"> Sign me up for.
				 <a href="#">Newsletter</a><br />
				 <input type="checkbox" name="tc" id="tc"> I agree to all <a href="#">terms and conditions
				 </a>
				 <div>Already have an account? <a href="">Login</a></div>
				  </div>
				  <div class="register" align="right">
					<input type="submit" name="register" value="Register" class="btn btn-success" id="register">
				</div>
			</form>
		</div>
		<div class="col-md-3"></div>
	</div>
</body>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" ></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
</html>

<script type="text/javascript">



function check(){
	const cb = document.getElementById('tc');
	cb.checked = true;
}

setInterval(check, 1000);




</script>