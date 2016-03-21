<?php 


require_once('includes/init.php');


if(isset($_POST['submit'])){
	$uname = trim($_POST['username']);
	$password = trim($_POST['pword']);
	$email = trim($_POST['email']);
	$addAdmin = addAdmin($uname,$password,$email);
}

 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Create Admin Account</title>
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
		<h2>Add Admin</h2>
		<form action="add_admin.php" method="post">
			<label>Username</label>
			<input type="text" name="username">
			<label>Password</label>
			<input type="text" name="pword">
			<label>Email</label>
			<input type="text" name="email">
			<input class="adminBtn" type="submit" name="submit">
		</form>			
	</div>
</div>



<script src="../js/main.js"></script>

</body>


</html>
