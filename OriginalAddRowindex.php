<!DOCTYPE html>
<html>
<head>
	<title>
		sturbam.myweb.cs.uwindsor.ca
	</title>

	<style>
	* { font-family: verdana; font-size: 10pt; COLOR: gray; }
	b { font-weight: bold; }
	table { height: 50%; border: 1px solid gray;}
	td { text-align: center; padding: 25;}

	</style>
</head>
<body>

<?php
$con = new mysqli('localhost','sturbam_ClutchWebSolutions','ClutchWeb6','sturbam_ClutchWebSolutions');

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$tst = "INSERT INTO User(ID,Email,Password,Account_Permissions) VALUES (2,'MITCH','STURBA','a');";

if ($con->query($tst) == true) {
    echo "Row Created";
}else {
    echo "Error in creating row";
}
?>

</body>

</html>