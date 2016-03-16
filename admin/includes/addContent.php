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

	function addEvent($image, $title, $info, $full, $date) {
		include('connect.php');
		if($_FILES['image']['type']=="image/jpeg" || $_FILES['image']['type']== "image/jpg") {
			$path = "../images/{$image}";
			if(move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
				$orig = "../images/{$image}";
				$qstring = "INSERT INTO tbl_events VALUES (NULL, '{$image}' , '{$title}' , '{$info}' , '{$full}' , '{$date}')";
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


 ?>