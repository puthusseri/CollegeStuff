<?php
echo "page ohk";
	include("config.php");
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "select * from users where username = '$username' and password = '$password' ";
	$result = $conn->query($sql);
	//Convert the result into an array
	if (mysqli_num_rows($result) == 1) {
		$row = $result->fetch_assoc();
		$fullname = $row["fullname"];
		$designation = $row["designation"];
		$id = $row["id"];
		session_start();
		//set session varibles
	
		$_SESSION['fullname'] = $fullname;
		$_SESSION['designation'] = $designation;
		$_SESSION['id'] = $id;
	}
	
	if ($designation == "staf") {
	header("location:./Student/profile.php");
	}
		
	
	
?>
