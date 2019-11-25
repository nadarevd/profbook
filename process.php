<?php
	function OpenCon(){
		
		$dbhost = "https://www.myweb.cs.uwindsor.ca";
		$dbuser = "sturbam_ClutchWebSolutions";
		$dbpass = "ClutchWeb6";
		$db = "	sturbam_ClutchWebSolutions";
				
		
		$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
		$conn->select_db($db);// or die($conn -> error);			
				
		return $conn;
	}
	function CloseCon($conn){
		$conn -> close();
	}
	$conn = OpenCon();
	CloseCon($conn);
?>