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


 ?>

<html>
<head>
	<title>edit foundation page</title>
</head>
<body>

<h2>Add News</h2>

<form action="admin_editfoundation.php" method="post">

<label>Title</label><br>
<input type="text" name="title" value="title"><br>
<label>Url</label><br>
<input type="text" name="url" value="url"><br>
<label>Link Name</label><br>
<input type="text" name="link" value="link"><br>
<input type="submit" name="subNews" value="Add News">

</form>

<h2>Delete News</h2>
<?php 

	while($row=mysqli_fetch_array($news)) {
		echo "{$row['news_updates_title']}";
		echo "<a href=\"includes/caller_news.php?caller_id=delete&id={$row['news_updates_id']}\">Delete</a><br>";

	}

 ?>
  <br>
 <a href="admin_index.php">Back</a>

 <h2>Add Board of Director</h2>

 <form action="admin_editfoundation.php" method="post" enctype="multipart/form-data">

<label>Image</label>
<input type="file" name="imageB" value=""><br>
<label>Name</label>
<input type="text" name="nameB" value=""><br>
<label>Title</label>
<input type="text" name="titleB" value=""><br>
<input type="submit" name="subBod" value="Add Bod">
 </form>

 <h2>Delete BOD</h2>
<?php 

	while($row=mysqli_fetch_array($bod)) {
		echo "{$row['bod_name']}";
		echo "<a href=\"includes/caller_bod.php?caller_id=delete&id={$row['bod_id']}\">Delete</a><br>";

	}

 ?>

</body>
</html>