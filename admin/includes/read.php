<?php 
// This file will read information from the database.
	// ini_set('display_errors',1);
	// error_reporting(E_ALL);
	function redirect_to($direct) {
		if($direct != NULL) {
			header("Location: {$direct}"); //redirector in php
			exit;
		}
	}

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

	function getAllStories($tblS,$idS) {
		include('connect.php');
		$storiesquery = "SELECT * FROM {$tblS} ORDER BY {$idS} DESC";
		$storyRun = mysqli_query($link, $storiesquery);
		if($storyRun){
			return $storyRun;
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

	function getAllAdmin($tblA) {
		include ('connect.php');
		$adminquery = "SELECT * FROM {$tblA}";
		$adminRun = mysqli_query($link, $adminquery);
		if($adminRun) {
			return $adminRun;
		}else{
			$error = "there was an error gathering data";
			return $error;			
		}
	}


	function submitMessage($name, $email, $subject, $message)
	{
	$to = "jakerobinson91@outlook.com";
	$subj = "Contact - {$subject}";
	$extra = "Reply-To: {$email}"; //so you can reply to the sender
	$msg = "Name: {$name}\n\nEmail: {$email}\n\nMessage: {$message}";
	//echo $msg;
	mail($to,$subj,$msg,$extra);
		redirect_to('thankyou_contact.php');
	}


	function changePost($id){
	include('connect.php');
	$poststring = "UPDATE tbl_stories SET stories_post = 1 WHERE stories_id = {$id} ";
	$postquery = mysqli_query($link, $poststring);
	if($postquery) {
		redirect_to("../../connected.php");
	}else{
		$message = "Can't Add Post";
		return $message;		
	}
	mysqli_close($link);
	}
	




		


?>