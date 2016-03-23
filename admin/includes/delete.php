<?php 

function deleteNews($id){
	include('connect.php');
	$delstring = "DELETE FROM tbl_news_updates WHERE news_updates_id={$id}";
	$delquery = mysqli_query($link, $delstring);
	if($delquery) {
		redirect_to("../admin_editfoundation.php");
	}else{
		$message = "Can't Delete";
		return $message;
	}
	mysqli_close($link);
}

function deleteEvent($id){
	include('connect.php');
	$delstring = "DELETE FROM tbl_events WHERE events_id={$id}";
	$delquery = mysqli_query($link, $delstring);
	if($delquery) {
		redirect_to("../admin_editindex.php");
	}else{
		$message = "Can't Delete";
		return $message;		
	}
	mysqli_close($link);
}

function deleteBod($id) {
	include('connect.php');
	$delstring = "DELETE FROM tbl_bod WHERE bod_id={$id}";
	$delquery = mysqli_query($link, $delstring);
	if($delquery) {
		redirect_to("../admin_editfoundation.php");
	}else{
		$message = "Can't Delete";
		return $message;		
	}
	mysqli_close($link);
}

function deleteOs($id){
	include('connect.php');
	$delstring = "DELETE FROM tbl_oslink WHERE oslink_id={$id}";
	$delquery = mysqli_query($link, $delstring);
	if($delquery) {
		redirect_to("../admin_editfoundation.php");
	}else{
		$message = "Can't Delete";
		return $message;		
	}
	mysqli_close($link);	
}

function deleteStory($id){
	include('connect.php');
	$delstring = "DELETE FROM tbl_stories WHERE stories_id={$id}";
	$delquery = mysqli_query($link, $delstring);
	if($delquery) {
		redirect_to("../admin_editconnected.php");
	}else{
		$message = "Can't Delete";
		return $message;		
	}
	mysqli_close($link);	
}

function deleteAdmin($id){
	include('connect.php');
	$delstring = "DELETE FROM tbl_user WHERE user_id={$id}";
	$delquery = mysqli_query($link, $delstring);
	if($delquery) {
		redirect_to("../admin_edit.php");
	}else{
		$message = "Can't Delete";
		return $message;		
	}
	mysqli_close($link);	
}


 ?>