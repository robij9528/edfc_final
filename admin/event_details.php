<?php 
	ini_set('display_errors',1);
	error_reporting(E_ALL);
require_once('includes/init.php');

	if(isset($_GET['id'])) {
		$tbl = "tbl_events";
		$col = "events_id";
		$id = $_GET['id'];
		$getSingle = getSingleEv($tbl, $col, $id);
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
			echo "<img src=\"../images/{$row['events_img']}\" alt=\"{$row['events_title']}\">
				 <h2>{$row['events_title']}</h2>
				 <p>{$row['events_date']}</p><br>
				 <p>{$row['events_full']}</p><br>
				 <a href=\"../index.php\">Back...</a><br><br>";
		
	}else{
		echo "<p>{$getSingle}</p>";	
	}

 	 ?>
 </body>
 </html>