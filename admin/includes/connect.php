<?php 
// This file connects to the database.
	$user = "root";
	$pass = "";
	//$pass = "root"; Mac only
	$url = "localhost";
	$db = "db_edfc";
	// $char_set = 'new charater set';

	// header('Content-type: text/plain');

	$link = mysqli_connect($url, $user, $pass, $db);
	//$link = mysqli_connect($url, $user, $pass, $db, "8888");

	/* Check Connection */
	if(mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
?>