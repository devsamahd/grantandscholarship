<?php 
session_start();
include("grantscript.php");

include("../navbar/nav.php"); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="some stuffs">
	<meta name="keywords" content="grant, scholarship, eon">
	<meta name="author" content="just samahd">
	<link href="logo.jpg" rel="icon" type="image/jpg">
   
    <link rel="apple-touch-icon" type="image/x-icon" href = "favicon.ico"/>
	<meta name="viewport" content="width=device-width, initial-scale = 1.0">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="../register/register.css" />
	<title></title>
</head>
<body>
  <div class="row">
  	<div class="col-md-3"></div>
  	<div class="col-md-6">
  		<form method="post" class="form" enctype="multipart/form-data">
  		<img src="moreinfo.svg"><br><br>

  			<div class="form-row">
  				<div class="col-md-6">
  					<label>Title:</label>
  					<input type="text" name="title" class="form-control">
  				</div>
  				<div class="col-md-6">
  					<label>Short Description:</label>
  					<input type="text" name="short_desc" class="form-control">
  				</div>
  			</div>
  			<br>
  			<div class="form-row">
  				<div class="col-md-12">
  					<textarea class="form-control" name="description" rows="4" placeholder="Tell us everything about what you're applying for... Min 150words" style="color: lightgrey; font-family: arial"></textarea>
  				</div>
  			</div>
  			<br>
  			<div class="form-row">
  				<div class="col-md-12">
  					<input type="file" name="file" class="form-control">
  				</div>
  			</div>
  			<div class="register" align="right">
					<input type="submit" name="continue" value="Continue.." class="btn btn-success" id="register">
				</div>
  		</form>
  		<i style="float: right"> &copy; 2020, Education Online Nigeria.</i>
  	</div>
  	<div class="col-md-3"></div>
  </div>
</body>
</html>