<?php

	ini_set('display_errors',1);
	error_reporting(E_ALL);

	require_once('admin/includes/init.php');
	
	$tblEv = "tbl_events";
	$id = "events_id";
	$getEv = getEvents($tblEv,$id);


	if(isset($_POST['submitBtn'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$sillyRobot = $_POST['street'];
		$message = $_POST['message'];
		if($sillyRobot === "") {	
			$sendMail = submitMessage($name, $email, $subject, $message);
		}
	}


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Eating Disorder Foundation of Canada</title>
<link href="css/main.css" rel="stylesheet" type="text/css" media="screen"> 
<link rel="stylesheet" href="css/foundation.css"/>
<link href='https://fonts.googleapis.com/css?family=Lato:400,700,300,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>
</head>
<body>


<?php 
	include('includes/nav.html'); 
?>

<section class="videos">
	
		<video controls autoplay muted>
			<source src="video/vidSample2.mp4" type="video/mp4" >
		</video>

	

</section>






<section class="indexTop">

<div class="row">
	<div class="splitImage">
		<img class="small-12 large-8 columns" src="images/split_image1.png" alt="two faces">
		<div class="small-10 large-4 columns splitText">
			<div class="splitTextpadding">
				<h2>EDFC wants to HELP those with an eating Disorder</h2>				
				<p>The Eating Disorders Foundation of Canada is enthusiastically behind local community groups that have set up awareness campaigns, support groups, education in the schools and much more, and sees a leadership role in bringing these local initiatives together to give them a stronger voice when it comes to provincial and federal funding. Governments are looking for collaboration, and with communities from across the country working together, eating disorders can have an enhanced national presence. Having an eating disorder is not a choice.</p>
			</div>
		</div>
	</div>
</div></section>


<!-- PAST AND CURRENT EVENT LISTINGS ================= -->
<section class="row">
	<div class="small-12 large-12 columns upcomingEvents">

		<h2>Events</h2>

		<div class="row eventCon">

				<?php 

				if(!is_string($getEv)){
					while($row = mysqli_fetch_array($getEv)){

						$strE = "{$row['events_info']}";
						$posE = strpos($strE, ' ', 100);

						echo "					
						<img class=\"small-12 large-2 columns\" src=\"images/{$row['events_img']}\" alt=\"{$row['events_title']}\">
						<div class=\"small-12 large-10 columns\">
							<h3>{$row['events_title']}</h3>";

						if ($posE !== false) {
							echo substr($strE, 0, $posE);
						} echo "...";
						 

						echo "	
							<p>{$row['events_date']}</p>
							<a href=\"admin/event_details.php?id={$row['events_id']}\">More...</a><br><br>
						</div>";
					}
				}else{
						echo "<p>{$getEv}</p>";
						}


				 ?>
				

			</div>
		</div>
	</div>
</section>

<section class="darkBg goalsBg">
	<div class="row">
		<div class="large-12 small-12 columns textOnDark text-center">
			<h2 id="fundGoals">Fundraising Goals</h2>
			<p id="fundGoalsP">The Eating Disorders Foundation of Canada’s fundraising goal is to raise $3 million with allocations for the residential treatment facility and transition housing, technology, clinical evaluation and research, and support services.</p>
		</div>
		<div class="large-12 small-12 columns textOnDark text-center">
			<h2 id="earmark">Earmark Donations</h2>
			<p id="earmarkP">All donations can be earmarked for one of the four areas, all of which are vitally important. You may have a particular interest in one or more of the areas and the specific area of donations can be acknowledged and earmarked either via cheque or credit card. Please refer to our <a href="donations.php">donation’s page</a> for further information.</p>
		</div>
	</div>
</section>

<section class="row" id="contactPage">
	<div class="small-12 large-6 columns contactInfo textOnLite">
		<h2>Contact Us</h2><br>

		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

			<input name="name" type="text"  id="donorName" placeholder="Name:">
			<input name="email" type="email" id="donorAddress" placeholder="Email Address:">
			<label>Subject</label>
			<select name="subject">
				<option>Business</option>
				<option>Personal</option>
			</select>
			<label class="hide">
				<input name="street" type="email" placeholder="street">
			</label>
			<textarea name="message" rows="6" id="donorComments" placeholder="Your Message:"></textarea>
			<input name="submitBtn" type="submit" id="submitBtn" value="Submit">
			
		</form>
	</div>
	
	<div class="small-12 large-6 columns contactInfo textOnLite">
			<p>Eating Disorders Foundation of Canada<br>
			Suite 230A, 100 Collip Circle<br>
			Research Park, Western University<br> 
			London ON, N6G 4X8<br>
			<br>
			Phone:  519- 858-5111<br>
			Fax:  (519) 858-5086<br>
			Email:  info@edfofcanada.com<br>
			</p>
			<h4>Volunteering</h4>
			<p>If you are interested in finding out about volunteer opportunities, please call or email the foundation for more information.</p>
	</div>

	
</section>
<?php
	include('includes/footer.html');
?>


<script src="js/main.js"></script>

</body>


</html>
