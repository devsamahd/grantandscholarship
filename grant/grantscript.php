<?php

include("../config/database.php");
include("../script/script.php"); 
// include("../mailer/Exception.php");
// include("../mailer/PHPMailer.php");
// include("../mailer/SMTP.php");

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// use PHPMailer\PHPMailer\SMTP;

// $mail = new PHPMailer;

// $mail->isSMTP();

// $mail->Host = "smtp.gmail.com";

// $mail->SMTPAuth = "true";

// $mail->SMTPSecure = "tls";

// $mail->Port = "587";

// $mail->Username = "samahd626@gmail.com";

// $mail->Password = "olaithan626";

// $mail->Subject = "test email";

// $mail->setFrom("samahd626@gmail.com");

// $mail->Body = "ok ok this is plain text gmail";

// $mail->addAddress("samahd626@gmail.com");


// if ($mail->Send()) {
// 	echo "Email sent";
// }
// else{
// 	echo "not sent";
// }

// $mail->smtpClose();
// session_start();
// if (!isset($_SESSION['id'])) {
// 	header("location:../login/login.php");
// }

if (isset($_POST['continue'])) {
	$title = $_POST['title'];
	$short_desc = $_POST['short_desc'];
	$description = $_POST['description'];

	$fileTmpPath = $_FILES['file']['tmp_name'];
	$fileName = $_FILES['file']['name'];
	$fileSize = $_FILES['file']['size'];
	$fileType = $_FILES['file']['type'];
	$fileNameCmps = explode(".", $fileName);
	$fileExtension = strtolower(end($fileNameCmps));
	$newFileName = md5(time() . $fileName) . '.' . $fileExtension;

	

$uploadFileDir = './uploads/';
$dest_path = $uploadFileDir . $newFileName;
 
if(move_uploaded_file($fileTmpPath, $dest_path))
{
  echo 'File is successfully uploaded.';
}
else
{
  echo 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
}


	$file = $newFileName;
	$user_id = $_SESSION['id'];

	$db = new Database;
	$Validate = new Validate;

	$title = htmlspecialchars(strip_tags($title));
	$short_desc = htmlspecialchars(strip_tags($short_desc));
	$description = htmlspecialchars(strip_tags($description));
	$file = htmlspecialchars(strip_tags($file));
		
		

		
	$Validate->insertgrant($db, $user_id, $title, $short_desc, $description, $file);
}

?>