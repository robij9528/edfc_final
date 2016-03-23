<?php 
	ini_set('display_errors',1);
	error_reporting(E_ALL);

require_once('includes/init.php');

$tblN = "tbl_news_updates";
$idN = "news_updates_id";

$news = getAllNews($tblN, $idN);

if(isset($_POST['subNews'])) {
	$title = trim($_POST['title']);
	$url = trim($_POST['url']);
	$linkNews = trim($_POST['link']);

	$result = addNews($title, $url, $linkNews);

}

$tblbod = "tbl_bod";
$bod = getAllbod($tblbod);

if(isset($_POST['subBod'])) {
	$imageB = trim($_FILES['imageB']['name']);
	$nameB = trim($_POST['nameB']);
	$titleB = trim($_POST['titleB']);
	$uploadBod = addBod($imageB, $nameB, $titleB);
	$message = $uploadBod;
}

$tblO = "tbl_oslink";
$os = getAllOS($tblO);

if(isset($_POST['subOs'])) {
	$titleO = trim($_POST['nameO']);
	$linkO = trim($_POST['linkO']);
	$resultO = addLinkO($titleO, $linkO);
}


 ?>

<html>
<head>
	<meta charset="utf-8">
	<title>Edit Foundation Page</title>
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
	<div class="small-12 large-12 columns adminPage paddingHelp">
		<h2>Add News</h2>

			<form action="admin_editfoundation.php" method="post">

				<label>Title</label><br>
				<input type="text" name="title" value="title"><br>
				<label>Url</label><br>
				<input type="text" name="url" value="url"><br>
				<label>Link Name</label><br>
				<input type="text" name="link" value="link"><br>
				<input class="adminBtn" type="submit" name="subNews" value="Add News">

			</form>

		<h2>Delete News</h2>
			<?php 

				while($row=mysqli_fetch_array($news)) {
					echo "{$row['news_updates_title']}";
					echo "<a class=\"delete\" href=\"includes/caller_news.php?caller_id=delete&id={$row['news_updates_id']}\">Delete</a><br>";

				}

			 ?>

 		<h2 class="paddingHelp">Add Board of Director</h2>

 			<form action="admin_editfoundation.php" method="post" enctype="multipart/form-data">

				<label>Image (jpg only)</label>
				<input type="file" name="imageB" value=""><br>
				<label>Name</label>
				<input type="text" name="nameB" value=""><br>
				<label>Title</label>
				<input type="text" name="titleB" value=""><br>
				<input  class="adminBtn" type="submit" name="subBod" value="Add Bod">
 			</form>

		<h2>Delete BOD</h2>
			<?php 

				while($row=mysqli_fetch_array($bod)) {
					echo "{$row['bod_name']}";
					echo "<a class=\"delete\" href=\"includes/caller_bod.php?caller_id=delete&id={$row['bod_id']}\">Delete</a><br>";

				}

			 ?>

 		<h2 class="paddingHelp">Add Outside Link</h2>

			 <form action="admin_editfoundation.php" method="post">
			 	<label>Title</label>
			 	<input type="text" name="nameO" value="Title">
			  	<label>Link</label>
			 	<input type="text" name="linkO" value="Link">
			 	<input class="adminBtn" type="submit" name="subOs" value="Add Outside Link">	
			 </form>

 		<h2>Delete Outside Link</h2>

			<?php 

				while($row=mysqli_fetch_array($os)) {
					echo "{$row['oslink_title']}";
					echo "<a class=\"delete\" href=\"includes/caller_linkos.php?caller_id=delete&id={$row['oslink_id']}\">Delete</a><br>";

				}

			 ?>
	</div>
</div>


 <script src="../js/main.js"></script>
</body>
</html>