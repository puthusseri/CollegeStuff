<?php
	include("config.php");
	$fullname = $_POST['fullname'];
	$email    = $_POST['email'];
	$designation = $_POST['designation'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$id = $_POST['id'];
	$sql = "INSERT INTO users (fullname,email,designation,username,password,id) VALUES ('$fullname','$email','$designation','$username','$password','$id')";
	$result = $conn->query($sql);
	if($result) {
		 echo "Records added successfully.";
	} 
	else {
		echo "ERROR: Could not able to execute query";
	}

	

	
	
	
?>
