<?php 
// This file connects to the database.
	$user = "root";
	$pass = "root";
	//$pass = "root"; Mac only
	$url = "localhost";
	$db = "db_baseball";

	//$link = mysqli_connect($url, $user, $pass, $db);
	$link = mysqli_connect($url, $user, $pass, $db, "8888");

	/* Check Connection */
	if(mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
?>