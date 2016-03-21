<?php 

	function addNews($title, $url, $linkNews) {
		include('connect.php');
		$title = mysqli_real_escape_string($link, $title);
		$url = mysqli_real_escape_string($link, $url);
		$linkNews = mysqli_real_escape_string($link, $linkNews);
		$addNewsString = "INSERT INTO tbl_news_updates VALUES(NULL,'$title','$url','$linkNews')";
		//echo $addNewsString;
		$addNewsQuery = mysqli_query($link, $addNewsString);
		if($addNewsQuery){
			redirect_to("../foundation.php");
		}else{
			$error = "there was an error gathering data";
			return $error;		
		}
	}

	function addLinkO($titleO, $linkO){
		include('connect.php');
		$titleO = mysqli_real_escape_string($link, $titleO);
		$linkO = mysqli_real_escape_string($link, $linkO);
		$addLinkString = "INSERT INTO tbl_oslink VALUES(NULL,'$titleO','$linkO')";
		// echo $addLinkString;
		$addLinkQuery = mysqli_query($link, $addLinkString);
		if($addLinkQuery){
			redirect_to("../foundation.php");
		}else{
			$error = "there was an error gathering data";
			return $error;			
		}


	}

	function addEvent($image, $title, $info, $date) {
		include('connect.php');
		if($_FILES['image']['type']=="image/jpeg" || $_FILES['image']['type']== "image/jpg") {
			$path = "../images/{$image}";
			if(move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
				$orig = "../images/{$image}";
				$qstring = "INSERT INTO tbl_events VALUES (NULL, '{$image}' , '{$title}' , '{$info}' , '{$date}')";
				$result = mysqli_query($link, $qstring);
				if($result){
					redirect_to("../index.php");
				}else{
					echo "upload Failed";
				}
			}
		}
		mysqli_close($link);
	}

	function addBod($imageB, $nameB, $titleB) {
		include('connect.php');
		if($_FILES['imageB']['type']=="image/jpeg" || $_FILES['image']['type']=="image/jpg") {
			$path = "../images/{$imageB}";
			if(move_uploaded_file($_FILES['imageB']['tmp_name'], $path)) {
				$orig = "../images/{$imageB}";
				$qstring = "INSERT INTO tbl_bod VALUES (NULL, '{$imageB}' , '{$nameB}' , '{$titleB}')";
				$result = mysqli_query($link, $qstring);
				if($result){
					redirect_to("../foundation.php");
				}else{
					echo "upload failed";
				}
			}
		}
		mysqli_close($link);
	}


	function addStory($imageS,$titleS,$email,$nameS,$storyS,$id) {
		include('connect.php');	
		if($_FILES['imageS']['type']=="image/jpeg" || $_FILES['imageS']['type']=="image/jpg") {
			$path2 = "images/{$imageS}";
			if(move_uploaded_file($_FILES['imageS']['tmp_name'], $path2)) {
				$orig = "images/{$imageS}";
				$qstring = "INSERT INTO tbl_stories VALUES (NULL, '{$imageS}' , '{$titleS}' , '{$nameS}' , '{$storyS}' , 0)";
				$result = mysqli_query($link, $qstring);
				$to = "jakerobinson9528@gmail.com";
				$subj = "Story - {$titleS}";
				$extra = "Reply-To: {$email}";
				$extra .= 'MIME-Version: 1.0' . "\r\n";
				$extra .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$msg = "Name: {$nameS}\n\nTitle: {$titleS}\n\nStory: {$storyS}\n\n <a href=\"jakerdesigns.com/test/edfc_final/admin/includes/story_caller.php?caller_id=add&id={$id}\">Add Story</a>";

				mail($to,$subj,$msg,$extra);
				
				if($result){
					redirect_to("thankyou.php");
				}else{
					echo "upload failed";
				}				
			}
		}

		mysqli_close($link); 	
	}


	function addAdmin($uname,$password,$email){
		include('connect.php');
		// $uname = mysql_real_escape_string($link, $uname);
		// $password = mysqli_real_escape_string($link,$password);
		$adminstring = "INSERT INTO tbl_user VALUES(NULL,'{$uname}','{$password}',1)";

		$to = $email;
		$subj = "Login Info";
		$extra = "Reply-To: {$email}";
		$msg = "Here is your login Information.\n\n Username: {$uname} \n\nPassword: {$password}";
		mail($to,$subj,$msg,$extra);
		
		$adminquery = mysqli_query($link,$adminstring);
		if($adminquery){
			redirect_to("admin_index.php");
		}else{
			$error = "there was an error gathering data";
			return $error;		
		}
	}


 ?>