<?php 

require_once('init.php');

if(isset($_GET['caller_id'])){
	$dir = $_GET['caller_id'];
	if($dir == "add") {
		$id = $_GET['id'];
		changePost($id);
	}
	else{
		echo "ID was passed incorectly";
	}
}

 ?>