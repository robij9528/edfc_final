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
 	<meta charset="utf-8">
	<title>Events Info</title>
	<link href="../css/main.css" rel="stylesheet" type="text/css" media="screen"> 
 	<link rel="stylesheet" href="../css/foundation.css" />
 	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,700' rel='stylesheet' type='text/css'>
 </head>
 <body>
 <div class="back">
 	<a href="../index.php">Back</a>	
</div>
<div class="row evInfo">
	 	<?php 

	 	if(!is_string($getSingle)){
			$row = mysqli_fetch_array($getSingle);
				echo "<img class=\"small-12 large-3 columns\" src=\"../images/{$row['events_img']}\" alt=\"{$row['events_title']}\">
					<div class=\"samll-12 large-9 columns\">
						 <h2>{$row['events_title']}</h2>
						 <p>{$row['events_date']}</p><br>
						 <p>{$row['events_info']}</p><br>
					 </div>";
			
		}else{
			echo "<p>{$getSingle}</p>";	
		}

	 	 ?>		
</div>	


 <script src="../js/main.js"></script>	 
 </body>
 </html>