<?php 

	include('connect.php');
	require_once('init.php');

	$count = 0;
	//Grab tbl, col, and id to use in query
	$tbl = $_POST['tbl'];
	$col = $_POST['col'];
	$id = $_POST['id'];

	//Clean 
	unset($_POST['tbl']);
	unset($_POST['col']);
	unset($_POST['id']);

	$num = count($_POST);
	// echo $num;
	
	$qstring = "UPDATE {$tbl} SET ";

	foreach($_POST as $key => $value){
		$count++;
		if($count !=$num){
			$qstring .= "{$key} = '{$value}',";
		}else{
			$qstring .= "{$key} = '{$value}'";	
		}
	}

	$qstring .= "WHERE {$col}={$id}";
	// echo $qstring;
	$updateQuery = mysqli_query($link, $qstring);
	if($updateQuery){
		redirect_to("../../index.php");
	}else{
		echo "You broke the internet";
	}


	mysqli_close($link);


 ?>