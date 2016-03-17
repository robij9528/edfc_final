<?php 
	ini_set('display_errors',1);
	error_reporting(E_ALL);
require_once('includes/init.php');

	if(isset($_GET['id'])) {
		$tbl = "tbl_stories";
		$col = "stories_id";
		$id = $_GET['id'];
		$getSingle = getSingleS($tbl, $col, $id);
	}


 ?>

 <html>
 <head>
 	<title>Event Details</title>
 </head>
 <body>
 	<?php 

 	if(!is_string($getSingle)){
		$row = mysqli_fetch_array($getSingle);
			echo "<img src=\"../images/{$row['stories_image']}\" alt=\"{$row['stories_name']}\">
				 <h2>{$row['stories_title']}</h2>
				 <p> Written By: {$row['stories_name']}</p><br>
				 <p>{$row['stories_story']}</p><br>
				 <a href=\"../connected.php\">Back...</a><br><br>";
		
	}else{
		echo "<p>{$getSingle}</p>";	
	}

 	 ?>
 </body>
 </html>