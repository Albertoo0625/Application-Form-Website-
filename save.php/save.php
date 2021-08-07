<?php
	include 'database.php';
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$city=$_POST['country_of-birth'];
	$sql = "INSERT INTO `crud`( `name`, `email`, `phone`, `city`) 
	VALUES ('$name','$email','$phone','$city')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>