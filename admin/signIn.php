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

<nav id="navContainer">	

<div class="navBg desktop"> 
	<div class="row">

		<div class="large-12 medium-12 small-12 wideScreen social columns  text-right">		
		<a href="index.php"><img class="small-text-center" src="../images/EDFCLogo.svg" width="200"></a>
			<ul>
				<li><a href="../index.php">Home</a></li>
				<li><a href="../foundation.php">Foundation Info <!-- <span>&#x25BC;</span> --></a></li>
				<li><a href="../treatment.php">Treatment Programs<!-- <span>&#x25BC;</span> --></a></li>
				<li><a href="../connected.php">Get Connected <!-- <span>&#x25BC;</span> --></a></li>
				<li><a href="../index.php#contactPage">Contact</a></li>
				<li><a class="navButton" href="donate.php">DONATE</a></li>
			</ul>
		</div>	
		
	</div>



	
<!-- this is the background container for the transparent nav, elements that go below it may require a position of relative and a lower z-index than this nav -->
</div>

<div class="navBgMobile mobile">
<div class="row"><div class="small-12 large-12 columns">
		<img class="small-text-center" src="../images/EDFCLogo.svg" width="300">
  <div id="cpBtn" onclick="toggleCP()">
  <div></div>
  <div></div>
  <div></div>
</div>
<div id="cp"><ul>
        <li><a href="../index.php">Home</a></li>
				<li><a href="../foundation.php">Foundation Info <!-- <span>&#x25BC;</span> --></a></li>
				<li><a href="../treatment.php">Treatment Programs <!-- <span>&#x25BC;</span> --></a></li>
				<li><a href="../connected.php">Get Connected <!-- <span>&#x25BC;</span> --></a></li>
				<li><a href="../index.php#contactPage">Contact</a></li>
				<li><a href="../donate.php">Donate</a></li>
      </ul></div></div>





</div>

</nav>	


<div class="row login">
	<div class="small-12 large-12 columns center">

		<?php if (!empty($mess_info))
			{ echo $mess_info;} 
		?>

		<h2 class="paddingHelp">Log in</h2>
		<form method="post" action="signin.php">
			<label>Username</label>
			<input name="username" type="text">
			<label>Password</label>
			<input name="password" type="password">
			<input class="adminBtn" type="submit" value="submit" name="submit">
		</form>

	</div>
</div>





<script src="../js/main.js"></script>

</body>


</html>
