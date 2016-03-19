<?php 
// This file will read information from the database.

	// header("Content-type: text/html; charset=iso-8859-1");

	function getEvents($tblEv, $id) {
		include('connect.php');
		$eventquery = "SELECT * FROM {$tblEv} ORDER BY {$id} DESC";
		$runev = mysqli_query($link, $eventquery);
		if($runev){
			return $runev;
		}else{
			$error = "there was an error gathering data";
			return $error;
		}

	}

	function getSingleEv($tbl, $col, $id) {
		require_once('connect.php');
		$querySingle = "SELECT * FROM {$tbl} WHERE {$col}={$id}";
		$runSingle = mysqli_query($link, $querySingle);
		
		if($runSingle){
			return $runSingle;	
		}else{
			$error =  "There was an error accessing this information.  Please contact your admin.";
			return $error;
		}
	}

	function getAllStories($tblS) {
		include('connect.php');
		$storiesquery = "SELECT * FROM {$tblS}";
		$storyRun = mysqli_query($link, $storiesquery);
		if($storyRun){
			return $storyRun;
		}else{
			
			$error = "there was an error gathering data";
			return $error;
		}
	}

	function getSingleS($tbl, $col, $id) {
		include('connect.php');
		$querySingle = "SELECT * FROM {$tbl} WHERE {$col}={$id}";
		$runSingle = mysqli_query($link, $querySingle);
		
		if($runSingle){
			return $runSingle;	
		}else{
			$error =  "There was an error accessing this information.  Please contact your admin.";
			return $error;
		}		
	}




	function getAllNews($tblN, $idN) {
		include('connect.php');
		$newsquery = "SELECT * FROM {$tblN} ORDER BY {$idN} DESC";
		$newsRun = mysqli_query($link, $newsquery);
		if($newsRun){
			return $newsRun;
		}else{
			$error = "there was an error gathering data";
			return $error;			
		}
	}



	function getAllbod($tblbod) {
		include('connect.php');
		$bodquery = "SELECT * FROM {$tblbod}";
		$runBod = mysqli_query($link, $bodquery);
		if($runBod){
			return $runBod;
		}else{
			$error = "there was an error gathering data";
			return $error;				
		}
	}


	function getAllOS($tblO) {
		include ('connect.php');
		$osquery = "SELECT * FROM {$tblO}";
		$osRun = mysqli_query($link, $osquery);
		if($osRun) {
			return $osRun;
		}else{
			$error = "there was an error gathering data";
			return $error;
		}
	}



	function submitMessage($direct, $name, $email, $subject, $message)
	{
	$to = "jakerobinson9528@gmail.com";
	$subj = "Contact - {$subject}";
	$extra = "Reply-To: {$email}"; //so you can reply to the sender
	$msg = "Name: {$name}\n\nEmail: {$email}\n\nMessage: {$message}";
	//echo $msg;
	mail($to,$subj,$msg,$extra);
	$direct = $direct."?name={$name}";
	redirect_to($direct);
	}

	function mailStory($nameS,$email,$title,$story,$id) {
		$to = "jakerobinson9528@gmail";
		$subj = "Story - {$title}";
		$extra = "Reply-To: {$email}";
		$msg = "Name: {$nameS}\n\nTitle: {$title}\n\nStory: {$story}\n\n <a href=\"includes/story_caller.php?caller_id=add&id={$id}\">Add Story</a>";

		mail($to,$subj,$extra,$msg);
	}

	function changePost($id){
	include('connect.php');
	$poststring = "UPDATE tbl_stories SET stories_post = 1 WHERE stories_id = {$id} ";
	$postquery = mysqli_query($link, $delstring);
	if($postquery) {
		redirect_to("../connected.php");
	}else{
		$message = "Can't Add Post";
		return $message;		
	}
	mysqli_close($link);
	}
	
	function redirect_to($direct) {
		if($direct != NULL) {
			header("Location: {$direct}"); //redirector in php
			exit;
		}
	}
		


?>