<?php 

	ini_set('display_errors',1);
	error_reporting(E_ALL);
	require_once('includes/init.php');
	$ip = $_SERVER["REMOTE_ADDR"];
	

	if (isset($_POST['submit'])) {
		$u_name = trim($_POST['username']);
		$password = trim($_POST['password']);				
		if ($u_name !="" && $password !="") {
			$log_result = logIn($u_name, $password, $ip);
			$mess_info = $log_result;
		}
		else {
			$mess_info = "Please fill in the required fields";
		}
	}
	

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sign in</title>
<link href="../css/main.css" rel="stylesheet" type="text/css" media="screen"> 
 <link rel="stylesheet" href="../css/foundation.css" />
 <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,700' rel='stylesheet' type='text/css'>
</head>
<body>


<div class="row">
	<div class="small-12 large-10 columns">

		<?php if (!empty($mess_info))
			{ echo $mess_info;} 
		?>

		<h2>Log in</h2>
		<form method="post" action="signin.php">
			<label>Username</label>
			<input name="username" type="text">
			<label>Password</label>
			<input name="password" type="password">
			<input type="submit" value="submit" name="submit">
		</form>

	</div>
</div>





<script src="../js/main.js"></script>

</body>


</html>
