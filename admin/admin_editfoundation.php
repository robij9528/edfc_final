<?php 

require_once('includes/init.php');

$tblN = "tbl_news_updates";
$news = getAllNews($tblN);

if(isset($_POST['subNews'])) {
	$title = trim($_POST['title']);
	$url = trim($_POST['url']);
	$linkNews = trim($_POST['link']);

	$result = addNews($title, $url, $linkNews);

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
		echo "<a href=\"includes/caller.php?caller_id=delete&id={$row['news_updates_id']}\">Delete</a><br>";

	}

 ?>

</body>
</html>