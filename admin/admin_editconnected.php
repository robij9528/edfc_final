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
<div class="back">
	<a href="admin_index.php">Back</a>	
</div>

<div class="row">
	<div class="small-12 large-12 columns adminPage">

		<h2>Delete Story</h2>

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