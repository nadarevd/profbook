<?php
	include 'process.php';
	function handleLogin(){	
		$Conn = OpenCon();
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$qry = "SELECT * FROM user WHERE Email = '$email' and Password = '$password'";
		$result = $Conn->query($qry);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		
		// if the result was empty show prompt if else check password against hash.
		if(!$result || mysqli_num_rows($result) <= 0){
			echo "<div> NULL VALUE RETURNED </div>";
			return FALSE;
		}else{
			$Fullname = $row['Fname'] . " " . $row['Lname'];
			return TRUE;
		}
		CloseCon($Conn);
		
		
	}
	$loginSuccess = handleLogin();
	if($loginSuccess){
		header('location: ../studentHome.html');
	}else{
		header('location: ../loginFailed.html');
	}
?>