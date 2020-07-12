<?php
$page_token = 

$username="";
$firstname;
$middlename;
$lastname;
$email;
$phone;
$title;
$short_desc;
$description;
$request_id;
$file;
$id;
session_start();

if (!isset($_SESSION['id'])) {
	header("location:../login/login.php");
}
else{
	include("../config/database.php");
	$id = $_SESSION['id'];


	$db = new Database;
	$query = "select * from users where user_id = '$id'";
	$stmt = $db->prepare($query);

	$stmt->execute();
$field;
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$firstname = $row['firstname'];
		$lastname = $row['lastname'];
		$middlename = $row['middlename'];
		$email = $row['email'];
		$phone = $row['phone'];
		$username = $row['username'];
		$field = $row['field'];

	}
	if ($field == 1) {
			$query = "select * from grantrequests where user_id = $id";
			$stmt = $db->prepare($query);
			$stmt->execute();

			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$title = $row['title'];
				$short_desc = $row['short_desc'];
				$description = $row['description'];
				$request_id = $row['request_id'];
				$file = $row['file'];
			}
		}
}

 ?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="description" content="some stuffs">
	<meta name="keywords" content="grant, scholarship, eon">
	<meta name="author" content="just samahd">
	<link href="favicon.ico" rel="icon" type="image/x-icon">
   
    <link rel="apple-touch-icon" type="image/x-icon" href = "favicon.ico"/>
	<meta name="viewport" content="width=device-width, initial-scale = 1.0">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

	
	


	<title>EON | Grant and scholarship</title>
	<style type="text/css">
		
		body{
			background: #f7f7f7;
		}
		.row{
			max-width: 100%; 
		}
		.profileintro{
			font-size: 30px;
			width: 98%;
			padding: 40px;
			border-radius: 6px;
			margin: 10px;
		}
		.card{
			height: 250px;


		}
		.card-header{
			height: 100px;
		}
		.status-filter-bar {
    background-color: #fff;
    width: 100%;
    border: 1px solid lightgrey;
    border-radius: 2px;
    margin-bottom: 40px;
    position: relative;
    padding: 20px;
    font-weight: bolder;
}
li{
	list-style: none;
	list-style-image: none;
}
.status-filter-bar li.selected-filter:after {
    background-color: #1dbf73;
    width: 100%;
    left: 0;
}
.status-filter-bar li:after {
    content: '';
    background-color: transparent;
    height: 3px;
    width: 0;
    position: absolute;
    z-index: 1;
    bottom: 0;
    left: 50%;
    -webkit-transition: width .2s ease,background-color .2s ease,left .2s ease;
    transition: width .2s ease,background-color .2s ease,left .2s ease;
}

		@media only screen and  (max-width: 700px){
			.card{
				margin-left: 100px;
				margin-bottom: 30px;
				width: 300px;
			}
		}
		.card-head img{
			width: 100%;
			height: 200px;
			overflow: hidden;
			padding: 0px;
			margin: 0px;

		}

	.gig-card-base:not(.list-view-card) {
    background-color: #fff;
    width: 350px;
    height: 370px;
    margin: 0 20px 20px 0;
    float: left;
    position: relative;
    border: 1px solid #e5e5e5;
    box-sizing: border-box;
}
.profilecard{
	width: 99%;
	background-color: white;
	border-radius: 3px;
	border:1px solid lightgrey;
	align-self: center;
	padding-left: 10px;
	margin-left: 10px;
	margin-bottom: 40px;
}
.profileimg img{
	border-radius: 50%;
	width: 150px;
	height: 150px;
	border:1px solid lightgrey;
	margin: 20px;
}
.profilename{
	font-size: 20px;
	font-weight: 700;
}
.profiledescription{
	color: grey;
}
.profilemore{
 text-align: left ;
 font-weight: 500;
}
.card-body{
padding: 0px !important;
}



	</style>



</head>
	

<body>

	<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Edit Request</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <label for="short_desc">Title</label>
          <input type="email" id="defaultForm-email" class="form-control validateTitle" value="<?php echo $title ?>">
        </div>

        <div class="md-form mb-4">
          <label for="short_desc">Short Description</label>
          <input type="text" id="defaultForm-pass" class="form-control validate" name="short_desc" value="<?php echo $short_desc ?>">
        </div>

        <div class="md-form mb-4">
          <label for="short_desc">Description</label>
          <textarea id="defaultForm-pass" class="form-control validate" name="short_desc" ><?php echo $description; ?></textarea>
        </div>
        <div class="text-center">
  <a href="" class="btn btn-danger btn-rounded mb-4">Delete request<i class="fa fa-delete"></i></a>
</div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-default">Update</button>
      </div>
    </div>
  </div>
</div>



		<?php include("../navbar/nav.php"); ?>
		

























	<div class="row">
        <div class="col-md-4 col-xs-12"> 

	       	<div class="profilecard" align="center">
	       		   <div class="profileimg"><img src="logo.jpg"></div>
	       		   <div class="profilename"><?php echo $firstname." ".$lastname." ".$middlename; ?></div>
	       		   <div class="profiledescription"> About you in one line <i class="fa fa-edit"></i></div>
	       		   <hr>
	       		   <div class="profilemore"><i class="fa fa-map-marker"></i> Kwara State</div>
	       		   <div class="profilemore"><i class="fa fa-user"></i> Member since 2020</div>
	    	</div>

<div class="profilecard">
	    	<div class="learnfromus">
	    		<div style="font-size: 30px; font-weight:500 "> Learn<i style="font-size: 15px; color: lightgreen">EON</i>
				</div>	
				<p>Boost your chances,by boosting your knowledge.</p>
				<h6 style="color: lightgreen;">Enroll Now</h6>
    	</div>
</div>

	    </div>
























        <div class="col-md-8 col-xs-12">
        	<ul class="status-filter-bar"><li class="selected-filter">ACTIVE REQUESTS

        	</li></ul>
        	<br>

<div class="row">
	<div class="col-sm-6" >
	   <div class="gig-card-base" >
	    	<div class="card-body">
	        <div class="card-head"><img src="../grant/uploads/<?php echo $file; ?>"> </div>
	        <p class="card-text" style="padding:10px 0px 20px 20px;"><?php echo $title; ?></p>
	        <div style="padding-top: 20px; padding: 20px;">
			 <a href="" class="btn btn-primary btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Edit Grant <i class="fa fa-edit"></i></a><span style="float: right; padding-top: 15px;">Status: Processing.</span>
			</div>
    		 
      		</div>
    	</div>



    	<div class="gig-card-base" >
	    	<div style="padding: 50px;" align="center"><div style="cursor: pointer; border-radius: 50%; height: 100px; width: 100px; background-color: lightgreen; padding-top: 25px; font-size: 35px;"><i class="fa fa-plus"></i></div></div>
	    	<div align="center"><h4>Send new request</h4></div>
    	</div>
  	</div>
</div>
        </div>









        
    </div>
                       
                    
</body>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" ></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

<script type="text/javascript">
	$('.toast').toast(option)
</script>

</html>
