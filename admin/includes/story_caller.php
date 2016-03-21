<?php 

require_once('init.php');

if(isset($_GET['caller_id'])){
	$dir = $_GET['caller_id'];


	$tbl = "tbl_stories";
	$col = "stories_id";
	$id = $_GET['id'];
	$getSingle = getSingleS($tbl, $col, $id);


	if($dir == "add") {
		$id = $_GET['id'];
		changePost($id);
	}

	else{
		echo "ID was passed incorectly";
	}
}

 ?>