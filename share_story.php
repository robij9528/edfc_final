<?php 

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Share Story</title>
<link href="css/main.css" rel="stylesheet" type="text/css" media="screen"> 
<link rel="stylesheet" href="css/foundation.css" />
<link href='https://fonts.googleapis.com/css?family=Lato:400,700,300,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>
</head>
<body>

<?php 
	include('includes/nav.html'); 
?>
<div class="marginTop">
	
</div>
	<section class="row shareStory">
		<h2 class="small-12 large-12 columns">Share Your Story</h2>
		<form class="small-12 large-12 columns storyForm">
			<label>First Name</label>
			<input type="text" name="name">
			<label>Email</label>
			<input type="text" name="email">
			<label>Story</label>
			<textarea rows="5" type="text" name="story">Share Your Story</textarea>
			<div class="storyButton">
				<input type="submit" value="Upload image"><br>
				<input type="submit" value="submit">
			</div>

		</form>

	</section>

<?php
	include('includes/footer.html');
?>


<script src="js/main.js"></script>

</body>


</html>