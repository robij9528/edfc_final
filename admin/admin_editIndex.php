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
		$full = trim($_POST['full']);
		$date = trim($_POST['date']);
		$uploadEvent = addEvent($image, $title, $info, $full, $date);
		$message = $uploadEvent;
	}
	

 ?>

<html>
<head>
	<title>Edit Events</title>
</head>
<body>
	<h2>Add and Event</h2>
	<form action="admin_editindex.php" method="post" enctype="multipart/form-data">
	<label>Image</label>
	<input type="file" name="image" value=""><br>
	<label>Title</label>
	<input type="text" name="title" value""><br>
	<label>Info</label>
	<textarea type="text" name="info"></textarea>
	<label>Full Info</label>
	<textarea type="text" name="full"></textarea>
	<label>Date</label>
	<input type="text" name="date">
	<input type="submit" name="submit">

	</form>


<h2>Delete Event</h2>
<?php 

	while($row=mysqli_fetch_array($events)) {
		echo "{$row['events_title']}";
		echo "<a href=\"includes/caller_events.php?caller_id=delete&id={$row['events_id']}\">Delete</a><br>";

	}

 ?>	
 <br>
 <a href="admin_index.php">Back</a>
</body>
</html>