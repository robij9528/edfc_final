<?php 
require_once("includes/init.php");
	$tblS = "tbl_stories";
	$stories = getAllStories($tblS);
 ?>
<html>
<head>
	<title>Remove stories</title>
</head>
<body>
<?php 

	while($row=mysqli_fetch_array($stories)) {
		echo "{$row['stories_name']}";
		echo "<a href=\"includes/caller_story.php?caller_id=delete&id={$row['stories_id']}\">Delete</a><br>";

	}



 ?>
</body>
</html>