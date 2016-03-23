<?php 
	ini_set('display_errors',1);
	error_reporting(E_ALL);
require_once("includes/init.php");

	// $tbl = "tbl_events";
	$tblEv = "tbl_events";
	$id = "events_id";
	$events = getEvents($tblEv,$id);

	if(isset($_POST['submit']))	{
		$image = trim($_FILES['image']['name']);
		$title = trim($_POST['title']);
		$info = trim($_POST['info']);
		$date = trim($_POST['date']);
		$uploadEvent = addEvent($image, $title, $info, $date);
		$message = $uploadEvent;
	}
	

 ?>

<html>
<head>
	<meta charset="utf-8">
	<title>Edit Index Page</title>
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


	
	<div class="row">
		<div class="small-12 large-12 columns adminPage">		 	
			<h2 class="paddingHelp">Add an Event</h2>
			<form action="admin_editindex.php" method="post" enctype="multipart/form-data">
			<label>Image (jpg only)</label>
			<input type="file" name="image" value=""><br>
			<label>Title</label>
			<input type="text" name="title" value""><br>
			<label>Info</label>
			<textarea type="text" name="info"></textarea>
			<label>Date</label>
			<input type="text" name="date">
			<input class="adminBtn" type="submit" name="submit">

			</form>


			<h2>Delete Event</h2>
			<?php 

			while($row=mysqli_fetch_array($events)) {
				echo "{$row['events_title']}";
				echo "<a class=\"delete\" href=\"includes/caller_events.php?caller_id=delete&id={$row['events_id']}\">Delete</a><br>";

			}

 			?>
 			 <br>
		</div>
	</div>

 <script src="../js/main.js"></script>
</body>
</html>