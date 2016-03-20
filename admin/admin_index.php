<?php

	require_once('includes/init.php');
	confirm_logged_in();

 ?>

<html>
<head>
	<meta charset="utf-8">
	<title>Admin Home</title>
	<link href="../css/main.css" rel="stylesheet" type="text/css" media="screen"> 
 	<link rel="stylesheet" href="../css/foundation.css" />
 	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,700' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="back">
 	<a href="../index.php">Back</a>	
</div>	
<div class="row">
	<div class="small-12 large-12 columns admin">
		<h2>Welcome admin</h2>
		<ul class="no-bullet">
			<li><a href="admin_editIndex.php">Edit Index page</a></li>
			<li><a href="admin_editconnected.php">Edit connected page</a></li>
			<li><a href="admin_editfoundation.php">Edit foundation page</a></li>
			<li><a href="admin_createUser.php">Add Admin</a></li>
			<li><a href="signin.php">Sign Out</a></li>
		</ul>
	</div>
</div>

<script src="../js/main.js"></script>
</body>
</html>