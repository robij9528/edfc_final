<?php 
require_once("includes/init.php");
	$tblS = "tbl_stories";
	$stories = getAllStories($tblS);
 ?>
<html>
<head>
	
<meta charset="utf-8">
<title>Remove Stories</title>
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

		<h2 class="paddingHelp">Delete Story</h2>

		<?php 

			while($row=mysqli_fetch_array($stories)) {
				echo "{$row['stories_name']}";
				echo "<a class=\"delete\" href=\"includes/caller_story.php?caller_id=delete&id={$row['stories_id']}\">Delete</a><br>";

			}

		 ?>

	</div>

</div>




<script src="../js/main.js"></script>
</body>
</html>