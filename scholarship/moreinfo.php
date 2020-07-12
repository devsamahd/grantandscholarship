<?php 
include("../config/database.php");

$db = new Database;

$title;
if (!isset($_GET['id'])) {
	header("location:scholar.php");
}
else{
	$sch_id = $_GET['id'];

	$query = "select * from scholarship where sch_id = $sch_id";
	$stmt = $db->prepare($query);
	$exe = $stmt->execute();

	if ($exe) {
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$title = $row['title'];
		}
	}
}


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>EON Scholarships</title>
 </head>
 <body>
<?php echo $title; ?>

 
 </body>
 </html>