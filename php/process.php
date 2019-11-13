<?php


$dbhost = "https://www.myweb.cs.uwindsor.ca";
$dbuser = "sturbam_ClutchWebSolutions";
$dbpass = "ClutchWeb6";
$db = "	sturbam_ClutchWebSolutions";


$conn = mysql_connect($dbhost,$dbuser,$dbpass,$db);
mysql_select_db("User");