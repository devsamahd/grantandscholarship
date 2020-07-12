<?php
include("../config/database.php");
$db = new Database;
$username = $_GET['username'];
$checkusername = "select * from users where username = '$username'";


		
		$stmt = $db->prepare($checkusername);
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$usernum = count($row);
		if ($userlnum > 0) {
			$res = "Username not avavilable";
			array_push($error, $res);
		}
		

?>