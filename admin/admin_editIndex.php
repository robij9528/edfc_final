<?php 

require_once("includes/init.php");

	$tbl = "tbl_past_events";	
	$col = "past_events_id";
	$id = "1";
	// return array($id);

 ?>

<html>
<head>
	<title>Edit Events</title>
</head>
<body>
	<?php echo single_edit($tbl,$col,$id); ?>
</body>
</html>