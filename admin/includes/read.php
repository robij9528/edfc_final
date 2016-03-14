<?php 
// This file will read information from the database.

	// function getAll($tbl) {
	// 	$getquery = "SELECT * FROM {$tbl}";
	// 	$run = mysqli_query($link, $pastEvntquery);
	// 	if($run){
	// 		return $run;
	// 	}else{
	// 		$error = "there was an error gathering data";
	// 		return $error;
	// 	}
	// }

	function getPastEvents($petbl) {
		include('connect.php');
		$pastEvntquery = "SELECT * FROM {$petbl}";
		$runpe = mysqli_query($link, $pastEvntquery);
		if($runpe){
			return $runpe;
		}else{
			$error = "there was an error gathering data";
			return $error;
		}

	}

	function getupEvents($uptbl) {
		include('connect.php');
		$upEvntquery = "SELECT * FROM {$uptbl}";
		$runup = mysqli_query($link, $upEvntquery);
		if($runup){
			return $runup;
		}else{
			$error = "there was an error gathering data";
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


	function getAllNews($tblN) {
		include('connect.php');
		$newsquery = "SELECT * FROM {$tblN}";
		$newsRun = mysqli_query($link, $newsquery);
		if($newsRun){
			return $newsRun;
		}else{
			$error = "there was an error gathering data";
			return $error;			
		}
	}

	function addNews($title, $url, $linkNews) {
		include('connect.php');
		$title = mysqli_real_escape_string($link, $title);
		$url = mysqli_real_escape_string($link, $url);
		$linkNews = mysqli_real_escape_string($link, $linkNews);
		$addNewsString = "INSERT INTO tbl_news_updates VALUES(NULL,'$title','$url','$linkNews')";
		echo $addNewsString;
		$addNewsQuery = mysqli_query($link, $addNewsString);
		if($addNewsQuery){
			redirect_to("../foundation.php");
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


	function getSingle($tbl, $col, $id) {
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
	
	function redirect_to($direct) {
		if($direct != NULL) {
			header("Location: {$direct}"); //redirector in php
			exit;
		}
	}
		


?>