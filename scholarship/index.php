<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	body{
		margin: 0;
		padding: 0;
	}
	.banner{
		width: 100%;
		height: 500px;
		position: relative;
		background-color: red;
	}
	
	h1{
		position: absolute;
		top: 35%;
		left: 50%;
		transform: translate(-50%, -50%);
		font-family: big-john;
		color: #fff;
		text-shadow: 0 2px 20px #000;
		font-size: 70px;
	}
	.content{
		padding-top: 130px;
		position: relative;
	}
	.content:before{
		position: absolute;
		content: '';
		width: 60%;
		height: 125px;
		top:-50px;
		left:0;
		background: #fff;
		transform: skewY(10deg);
	}
	.content:after{
		position: absolute;
		content: '';
		width: 60%;
		height: 125px;
		top:-50px;
		right:0;
		background: #fff;
		transform: skewY(-10deg);
	}
</style>
<body>
	<?php include('../navbar/nav.php') ?>
	<div class="banner">
		<h1>slanted shit</h1>

		
	</div>
	<div class="content">
		<h2>Hello world</h2>
	</div>

</body>
</html>