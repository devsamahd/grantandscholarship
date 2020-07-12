<?php 

include("../navbar/nav.php");
include("../config/database.php");
$db = new Database;

$schcounts;
 ?>
<!DOCTYPE html>
<html>
<head>
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

	<title>EON | Scholarship</title>
</head>
<body><br>





<div class="row">
	<div class='col-md-2'></div>
	<div class='col-md-8' style='border-left: 2px solid lightblue;' align='center'>
		<?php 
		function asDollars($value) {
  if ($value<0) return "-".asDollars(-$value);
  return 'NGN ' . number_format($value, 2);
}

	$call = "select * from scholarship";
	$stmt = $db->prepare($call);
	$exe = $stmt->execute();


	if ($exe) {
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

			$sch_id = $row['sch_id'];
			$title = $row['title'];
			$amount = $row['amount'];
			$deadline = $row['deadline'];
		
	  ?>
	
		<div class='long-card'>
			<div class='schtitle'><a href=''><?php echo $title; ?></a></div>
			<div class='subinfo row'>
				<div class='col-md-3 float-left'>Deadline <div class='subinfovalue'>13th sept, 2020.</div></div>
				<div class='col-md-3 float-left'>Amount <div class='subinfovalue'><?php
				echo asDollars($amount); ?></div></div>
				<div class='col-md-6' align='right'><input type='submit' value='Apply' name='Apply' class='btn btn-primary pad-top'></div>

			</div><hr />
			<a href="moreinfo.php?id=<?php echo $sch_id ?>"><div class='schmoreinfo' align='center' id="schmoreinfo"> More Information <i class="fa fa-arrow-down"></i></div></a>
			
		</div>



		


		<br><br>
		
	
	<?php   }
	}
?></div>
	<div class='col-md-2'></div>
	
</div>
</body>
</html>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" ></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script type="text/javascript">
	


</script>