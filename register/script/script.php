<?php



class Validate{

	public $errors = [];
	public function insert($db, $firstname, $lastname, $middlename, $username, $email, $phone, $password, $confirmpassword, $choice, $table, $url)
	{

						$query ="insert into ".$table." set firstname = :firstname, lastname = :lastname, middlename = :middlename, username = :username, email = :email, phone = :phone, password = :password";

			$password=sha1($password);
			$stmt = $db->prepare($query);
			$stmt->bindParam(':firstname', $firstname);
			$stmt->bindParam(':lastname', $lastname);
			$stmt->bindParam(':middlename', $middlename);
			$stmt->bindParam(':username', $username);
			$stmt->bindParam(':email', $email);
			$stmt->bindParam(':phone', $phone);
			$stmt->bindParam(':password', $password);

	
			$res = $stmt->execute();
			
			if ($res) {
				header("location:".$url);
			}
		

	}
}



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
		if ($choice == "grant") {
			$table = 'granttable';
			$url = "../grant/grant.php";
		}
		else{
			$table = 'scholarship';
			$url = "../scholarship/Scholarship.php";
		}
		$Validate->insert($db, $firstname, $lastname, $middlename, $username, $email, $phone, $password, $confirmpassword, $choice, $table, $url);
}

?>