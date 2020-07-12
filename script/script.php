<?php

if (isset($_SESSION['email'])) {
	header("location: index.php");
}


class Validate{

	public $errors = [];
	public function insert($db, $firstname, $lastname, $middlename, $username, $email, $phone, $password, $confirmpassword, $choice, $field)
	{

		$query ="insert into users set firstname = :firstname, lastname = :lastname, middlename = :middlename, username = :username, email = :email, phone = :phone, password = :password, field = :field";

			$password=sha1($password);
			$stmt = $db->prepare($query);
			$stmt->bindParam(':firstname', $firstname);
			$stmt->bindParam(':lastname', $lastname);
			$stmt->bindParam(':middlename', $middlename);
			$stmt->bindParam(':username', $username);
			$stmt->bindParam(':email', $email);
			$stmt->bindParam(':phone', $phone);
			$stmt->bindParam(':password', $password);
			$stmt->bindParam(':field', $field);

	
			$res = $stmt->execute();
			
			if ($res) {
				header("location:../login/login.php");
			}

	}


	public function Login($email, $password, $db){
		$query = "select * from users where email = '$email' and password = '$password'";
		
		$stmt = $db->prepare($query);

		$res = $stmt->execute();

	if ($res) {
		
	
			
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$id = $row['user_id'];
				$field = $row['field'];

				if ($field == 1) {
				$url = "../grant/grant.php";
				
				session_start();
				 $_SESSION['id'] = $id;
				header("location:".$url);
			}
			elseif ($field == 2){
				$url = "../scholarship/scholar.php";
				
				session_start();
				$_SESSION['id'] = $id;
				header("location:".$url);
			}
			}
		}
		else{
			$errorrr = "Email or Password is Incorrect";
			array_push($error, $errorrr);
		}
			
			
		
	}




	public function insertgrant($db, $user_id, $title, $short_desc, $description, $file)
	{

		$query ="insert into grantrequests set user_id = '$user_id', title = '$title', short_desc = '$short_desc', description = '$description', file = '$file'";

			$stmt = $db->prepare($query);
			$res = $stmt->execute();
			
			if ($res) {
				header("location:../profile/profile.php");
				
			}

	}
}






?>