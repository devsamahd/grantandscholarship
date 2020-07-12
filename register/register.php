
<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['id'])) {
	header("location: ../index.php");
}
include("../config/database.php");
include("../script/script.php"); 

$error=[];
$db = new Database;
$Validate = new Validate;


if (isset($_POST['register'])) {
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$middlename = $_POST['middlename'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$password = $_POST['password'];
		$confirmpassword = $_POST['confirmpassword'];
		$choice = $_POST['choice'];


		$firstname = htmlspecialchars(strip_tags($firstname));
		$lastname = htmlspecialchars(strip_tags($lastname));
		$middlename = htmlspecialchars(strip_tags($middlename));
		$username = htmlspecialchars(strip_tags($username));
		$email = htmlspecialchars(strip_tags($email));
		$phone = htmlspecialchars(strip_tags($phone));
		$password = htmlspecialchars(strip_tags($password));
		
		$checkemail = "select * from users where email = '$email'";

		$checkusername = "select * from users where username = '$username'";


		
		$stmt = $db->prepare($checkusername);
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$usernum = count($row);
		$stm = $db->prepare($checkemail);
		$stm->execute();
		$row = $stm->fetch(PDO::FETCH_ASSOC);
		$emailnum = count($row);

		if ($usernum > 0) {
			$res = "Username not avavilable";
			array_push($error, $res);
		}
		
		
		elseif ($emailnum > 0) {
			$mailerror = "you already have an account";
			array_push($error, $mailerror);
		}
		else{
			if ($choice == "grant") {
			$field = 1;
			}
			else{
				$field = 2;
			}
			$Validate->insert($db, $firstname, $lastname, $middlename, $username, $email, $phone, $password, $confirmpassword, $choice, $field);
		}

		
		
}


 ?>

<?php 



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
	<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="register.css" />

	<title>Apply for Grant or Scholarship</title>
</head>
<body>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="bg-danger error text-light" align="center"><?php 
			$ccc = count($error);

			for ($i=0; $i < $ccc ; $i++) { 
				echo $error[$i]."<br />"; 
			}
			
			?>
			 </div>
			<form class="form box a" action="" method="post" enctype="multipart/form-data" data-aos="fade-up" id="multiphase" onsubmit="return false"><br>
				
				<h3>Register for our Grant/Scholarship</h3>
			 <img src="../support/signup.svg">
			 <br /><br />
				<div class="form-row">
					<div class="col-md-6">
						<label for="firstname">First Name:</label>
						<input type="text" id="firstname" name="firstname" class="form-control" pattern="^([-\w\d\u00c0-\u024f]+)$" size="20" spellcheck="false" title="Your name (no special characters, diacritics are okay)" min="5" required>
					</div>
					<div class="col-md-6">
						<label for="firstname">Last Name:</label>
						<input type="text" id="lastname" name="lastname" class="form-control"  pattern="^([-\w\d\u00c0-\u024f]+)$" size="20" spellcheck="false" title="Your name (no special characters, diacritics are okay)" min="5" required>
					</div>
				</div>


				<div class="form-row">
					<div class="col-md-6">
						<label for="middlename">Middle Name(Optional):</label>
						<input type="text" id="middlename" name="middlename" class="form-control"  pattern="^([-\w\d\u00c0-\u024f]+)$" size="20" spellcheck="false" title="Your name (no special characters, diacritics are okay)" min="5">
					</div>
					<div class="col-md-6">
						<label for="username">Username:</label>
						<input type="text" id="username" name="username" class="form-control" id="username"  pattern="^([-\w\d\u00c0-\u024f]+)$" size="15" spellcheck="false" title="Your name (no special characters, diacritics are okay)" min="5" required>
					</div> 
				</div>
				

				<div class="form-row">
					<div class="col-md-6">
						<label for="email">Email:</label>
						<input type="text" id="email" name="email" class="form-control"  pattern="^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$" size="30" spellcheck="false" title="No spaces" required>
					</div>
					<div class="col-md-6">
						<label for="phone">Phone number:</label>
						<input type="number" id="phone" name="phone" class="form-control" min="10" required>
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
						
						<select class="form-control" name="choice" id="selectorr" required>
							<option value="grant">Grant</option>
							<option value="scholarship">Scholarship</option>
						</select>
					</div>
					
				</div>
				<div class="form-row" id="hidden-grant">
					<div class="col-md-12">
						<label for="choice">Choose Grant:</label>
						
						<select class="form-control" name="choice" required>
							<option value="grant">Custom(what I'm looking for is not here)</option>
							<option value="scholarship">EON 2020/2021 Grant Program</option>
							<option value="scholarship">TechNaija Technopreneural Grant Program</option>
						</select>
					</div>
					
				</div>
				<div class="newsletter"><input type="checkbox" name="newsletter"> Sign me up for.
				 <a href="#">Newsletter</a><br />
				 <input type="checkbox" name="tc" id="tc"> I agree to all <a href="#">terms and conditions
				 </a>
				 <div>Already have an account? <a href="../login/login.php" id="view">Login</a></div>
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
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>


</html>

<script type="text/javascript">
AOS.init();	


function check(){
	const cb = document.getElementById('tc');
	cb.checked = true;
}

setInterval(check, 1000);

var elmnt = document.getElementById("view");

function scrollToTop() {
  elmnt.scrollIntoView(true); // Top
}

setTimeout(scrollToTop, 3000);



document.getElementById('selectorr').onclick = () => {
	const svar = $('#selectorr').val();
	if (svar == 'grant') {
		$('#hidden-grant').show();
	}
	else{
		$('#hidden-grant').hide();

	}
}

		


</script>

