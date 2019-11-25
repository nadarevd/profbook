<?php

include 'process.php';
function handleRegistration(){
	
	// get variables from POST form
	$password = $_POST['password1'];
	$emailAddress = $_POST['email'];
	
	// open connection
	// Source: process.php
	$conn = OpenCon();
	
	// check connection
	if(mysqli_connect_error()){
		die("DatabaseConnectionFailed: " .mysqli_connect_error());
	}else{
		echo "<div>Passed Connection Check</div>";
	}

	// Insert new user into User Table
	$sql = "INSERT INTO user ".
			"(Password, Email, Account_Permissions)".
			" VALUES ('$password', '$emailAddress', 'a');";
			
	if ($conn->query($sql) == TRUE) {
		echo "<br><br>New user created successfully";
		$conn->close();
		return TRUE;
	}else{
		echo "Error: ".$sql." <br>". $conn->error;
		$conn->close();
		return FALSE;
	}
}
$regSuccess = handleRegistration();
if($regSuccess){
	header('location: ../profile.html');
}else{
	header("location: ../500.shtml");
}

?>