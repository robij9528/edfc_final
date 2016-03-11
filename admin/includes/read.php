<?php 
// This file will read information from the database.
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