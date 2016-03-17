<?php

	require_once('includes/init.php');
	confirm_logged_in();

 ?>

<html>
<head>
	<title>Admin Home</title>
</head>
<body>
<div>
	<div>
		<h2>Welcome admin</h2>
		<ul>
			<li><a href="admin_editIndex.php">Edit Index page</a></li>
			<li><a href="admin_editconnected.php">Edit connected page</a></li>
			<li><a href="admin_editfoundation.php">Edit foundation page</a></li>
			<li><a href="admin_createUser.php">Add Admin</a></li>
			<li><a href="signin.php">Sign Out</a></li>
		</ul>
	</div>
</div>
</body>
</html>