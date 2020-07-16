<!DOCTYPE html>
<?php  include("../config/database.php"); 
$db = new Database;
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="scholar.css">
	<meta charset="utf-8">
	<meta name="description" content="some stuffs">
	<meta name="keywords" content="grant, scholarship, eon">
	<meta name="author" content="just samahd">
	<link href="support/favicon.ico" rel="icon" type="image/x-icon">
   
    <link rel="apple-touch-icon" type="image/x-icon" href = "support/favicon.ico"/>
	<meta name="viewport" content="width=device-width, initial-scale = 1.0">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="scholar.css">

	<title></title>
</head>
<body>
	<?php include('../navbar/nav.php') ?>
	<div class="banner">
		<div class="h3">Welcome to EON Scholarship platform</div>
				
		<div class="aim" >we aim at providing a minimum of 1000 Scholarships by opportunities<br /> by 2025 to nigeirian</div>
		
	</div>
	<div class="content">
		<h3> &nbsp; Find what works for you!</h3>
		<div class="row">
			<div class="col-md-6 pad">
				<div class="some-text">
					<h4>Conference, Seminars, and workshop attendance Scholarship</h4>
					We give out scholarships to attend world class Conferences, Seminars and workshops at zero cost to professionals, Researchers, students and the general public at large.
					<div align="right">
						<div class="btn btn-primary" id="go1" >Find</div>
						
					</div>
				</div>
			</div>
			<div class="col-md-6 pad">
				<img src="../support/agree.svg">
			</div>
		</div>

		<div class="row">
			
			<div class="col-md-6 pad">
				<img src="../support/agree.svg">
			</div>
			<div class="col-md-6 pad">
				<div class="some-text">
					<h4>Digital Training Scholarship</h4>
					We offer low or zero data digital training scholarship with blazing fast connection, high quality video coverage and much more.
					<div align="right">
						<div class="btn btn-primary" id="go2" >Find</div>
					</div>

				</div>
			</div>
		</div>

<!--second -->
<div class="row">
			<div class="col-md-6 pad">
				<div class="some-text">
					<h4>Conference, Seminars, and workshop attendance Scholarship</h4>
					We give out scholarships to attend world class Conferences, Seminars and workshops at zero cost to professionals, Researchers, students and the general public at large.
					<div align="right">
						<div class="btn btn-primary" id="go3" >Find</div>
						
					</div>

				</div>
			</div>
			<div class="col-md-6 pad">
				<img src="../support/agree.svg">
			</div>
		</div>

		<div class="row">
			
			<div class="col-md-6 pad">
				<img src="../support/agree.svg">
				
			</div>
			<div class="col-md-6 pad">
				<div class="some-text">
					<h4>Digital Training Scholarship</h4>
					We offer low or zero data digital training scholarship with blazing fast connection, high quality video coverage and much more.
					<div align="right">
						<div class="btn btn-primary" id="go4" >Find</div>
						
					</div>

				</div>
			</div>
		</div>
	</div><hr>
	<h3 style="padding-top: 5%; padding-left: 5%;">Popular</h3>
	<div class="anotherone row">
	<?php
		$query = "select * from scholarship limit 4 ";
	$run = $db->prepare($query);
	$run->execute();
	while ($row = $run->fetch(PDO::FETCH_ASSOC)) {
		
	 ?>	
		<div class="col-md-3">
			<div class="mycard">
				<div class="picturetop">
					<img src="../support/checklist.png">
				</div>
				<div class="More info">
					<h5>&nbsp; <?php echo $row['title']; ?></h5>
				</div>
			</div>
		</div>

<?php } ?>

		
	</div>

	<h3 style="padding-top: 5%; padding-left: 5%;">New</h3>
	<div class="anotherone row">
	
	<?php 
	$query = "select * from scholarship order by sch_id desc limit 4 ";
	$run = $db->prepare($query);
	$run->execute();
	while ($row = $run->fetch(PDO::FETCH_ASSOC)) {
		
	

	 ?>	
		<div class="col-md-3">
			<div class="mycard">
				<div class="picturetop">
					<img src="../support/checklist.png">
				</div>
				<div class="More info">
					<h5>&nbsp;<?php echo $row['title'] ?></h5>
				</div>
				<div class="btn btn-primary float-right" style="margin-top: 27%;">Apply</div>
			</div>
		</div>

<?php } ?>

		
	</div>



<!-- <div class="content2">
	<h3 style="padding-bottom: 10px;">Partners</h3>
	<div class="partnersss row" align="center">
		<div class="col-md-2">partner ?</div>
		<div class="col-md-2">partner ?</div>
		<div class="col-md-2">partner ?</div>
		<div class="col-md-2">partner ?</div>
		<div class="col-md-2">partner ?</div>
		<div class="col-md-2">partner ?</div>
	</div>
</div> -->
<!-- footer -->
<?php include('../footer.php'); ?>

</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" ></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script type="text/javascript">
  // $('.toast').toast(option);

	document.getElementById('go1').onclick = () => {
		window.location.href = "scholar.php?schcat_id=1";
	}
	document.getElementById('go2').onclick = () => {
		window.location.href = "scholar.php?schcat_id=2";
	}
	document.getElementById('go3').onclick = () => {
		window.location.href = "scholar.php?schcat_id=3";
	}
	document.getElementById('go4').onclick = () => {
		window.location.href = "scholar.php?schcat_id=4";
	}
</script>
</html>