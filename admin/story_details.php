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
 	 <meta charset="utf-8">
	<title>Story</title>
	<link href="../css/main.css" rel="stylesheet" type="text/css" media="screen"> 
 	<link rel="stylesheet" href="../css/foundation.css" />
 	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,700' rel='stylesheet' type='text/css'>
 </head>
 <body>

 	<div class="back">
 		<a href="../connected.php">Back</a>	
	</div>

 	<div class="row storiesInfo">
	 	<?php 

	 	if(!is_string($getSingle)){
			$row = mysqli_fetch_array($getSingle);
				echo "<img class=\"small-12 large-4 columns\" src=\"../images/{$row['stories_image']}\" alt=\"{$row['stories_name']}\">
					<div class=\"small-12 large-8 columns\">
					 	<h2>{$row['stories_title']}</h2>
					 	<h3> Written By: {$row['stories_name']}</h3><br>
					</div> 
					 <div class=\"small-12 large-12 columns\">
					 	<p>{$row['stories_story']}</p><br>
					 </div>	
					 ";
			
		}else{
			echo "<p>{$getSingle}</p>";	
		}

	 	 ?>

 	</div>

 </body>
 </html>