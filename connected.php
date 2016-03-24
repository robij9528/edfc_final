<?php 

	// ini_set('display_errors',1);
	// error_reporting(E_ALL);
	require_once('admin/includes/init.php');
	
	$tblS = "tbl_stories";
	$idS = "stories_id";
	
	$getStories = getAllStories($tblS,$idS);

	// $storyrow = mysqli_fetch_array($getStories);

	if(isset($_POST['submitStory'])) {
		$imageS = trim($_FILES['imageS']['name']);
		$nameS = trim($_POST['fname']);
		$email = trim($_POST['email']);
		$titleS = trim($_POST['title']);
		$storyS = trim($_POST['story']);
		$uploadStory = addStory($imageS,$titleS,$email,$nameS,$storyS);	
		$message = $uploadStory;
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Get Connected- Eating Disorder Foundation of Canada</title>
<link href="css/main.css" rel="stylesheet" type="text/css" media="screen"> 
<link rel="stylesheet" href="css/foundation.css" />
<link href='https://fonts.googleapis.com/css?family=Lato:400,700,300,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>
</head>
<body>

<?php 
	include('includes/nav.html'); 
?>

<div data-interchange="[images/women_wall_mobile.jpg, (default)], [images/women_wall.jpg, (large)]"  class="connectBg">
	<div class="row">
		<div class="small-12 large-12 columns foundStory text-left">
			<h2>THERE IS HOPE.</h2>	
			<h3>TREATMENT PROGRAMS AVAILABLE</h3>		
		</div>
		<div class="small-12 large-12 columns helpLinks text-left">
			<a href="#">Click Here To Get Help</a>
			
		</div>		
	</div>
</div>

<div class="researchCon">
	<section class="row">
		<h2 class="small-12 large-12 columns">Our Research Connection</h2>
		<div class="small-12 large-12 columns">
			<p>
				The Eating Disorders Foundation of Canada (EDF) is a national non-government organization (NGO), and a member of the <a href="#">Institute of Neurosciences, Mental Health and Addiction (INMHA)</a>, a division of the <a href="#">Canadian Institutes of Health Research (CIHR)</a>. Partnerships remain a core value of CIHR and INMHA and the EDF of Canada is proud to be one of the INMHA inaugural partners.</p>
<p>CIHR and INMHA have stated that well-planned partnerships will result in increased visibility for all partners. This is critical not only for NGOs, who must demonstrate to donors that the money they contribute is being productively used, but also for INMHA, who needs to demonstrate to the Canadian public and to government that the public funds we receive are wisely invested.</p>
<p>Shrinking budgets and competitive fundraising present challenges to our research community. When considering a research program, the EDF of Canada is poised to partner to leverage funds with INMHA to support research in the neurosciences, mental health and addiction including "Residential Treatment" and “Transition House” recovery models. INMHA can be instrumental in advocating for research funding and help to demonstrate the benefits to all Canadians.</p>
<p>The Eating Disorders Foundation of Canada is poised to support research through CIHR approved centres and will begin collaboration with universities beginning with the <a href="#">University of Western Ontario</a> and the <a href="#">Schulich School of Medicine and Dentistry</a>, Department of Psychiatry.</p>
<p>In 2012, there will be research applications with a strong focus on the evaluation of the newly approved eating disorder treatment program with the residential treatment facility and continuity of care model.</p>
<p>Any inquiries with regard to research initiatives should be directed to the Eating Disorders Foundation of Canada at <a href="#">info@edfofcanada.com</a>.</p>
			
		</div>
	</section>
</div>


<div class="darkBg">
	<section class="row education">
		<h2 class="small-12 large-12 columns">Education</h2>
		<div class="small-12 large-12 columns">
			<p>The Eating Disorders Foundation of Canada (EDF) recognizes the need for, and would like to thank, organizations such as the <a href="#">National Eating Disorder Information Centre (N.E.D.I.C.)</a> as well as local eating disorder groups such as <a href="#">Hope’s Garden</a>.</p>
			<p>As mentioned in our <a href="#">Mission Statement</a>, the EDF is enthusiastically behind those who have set up awareness campaigns, support groups, education in the schools and much more. We commend you for providing the necessary and appropriate information, resources and programs to help educate both the professionals and the public in your communities about this severe mental illness. We are whole heartedly behind your eating disorder awareness initiatives.</p>
			<p>For educational resources and information about eating disorders, as well as presentations and support groups in your area, please visit our <a href="#">Outside Links</a> page to find the local eating disorder group nearest you.</p>

			
		</div>
	</section>
</div>

<div class="ourResearchBg">
<div class="spacing80">
	
</div>
	<section class="row rachelStory shareStory">
		<div>
			<h2 class="small-12 large-12 columns">Share Your Stories of Hope</h2>
			<div class="small-12 large-12 columns">
				<p>The path to recovery is different for everyone, and each person’s experience with an eating disorder is uniquely impacted by their many identities, including race or ethnicity, age, ability, religion, gender, and sexuality. We invite you to read these diverse Stories of Hope to gain inspiration and insights from those who have been through the difficult journey to recovery. The many stories here remind us that full recovery is possible, and there is help and support available to those struggling with an eating disorder.</p><br><br>
				


<!-- GET CONNECTED VIDEO WITH RACHEL WALLACE
 -->


<img id="playBtn" src="images/play_button.svg" alt="play button">

<div class="listenTo desktop">
	<h4 id="listenToRachel">Listen to Rachel</h4>
	<h4>Discover how Rachel recovered from her eating disorder by opening up about it.</h4>
</div>
				<video id="rachelVid" poster="images/rachelWallace.jpg">
					<source src="video/video3.mp4" type="video/mp4" >
				</video>

			</div>
			<div class="large-12 small-12 columns text-right">
			<div class="spacing">
				
			</div>
			<h2 id="shareStoryH2">Do You Have a Story?</h2>
			<h3>Share it with us</h3>
		</div>
		</div>
		</section>
		<section class="row">

		<h2 class="hidden"> Share Your Story Form</h2>
<div class="spacing80">
	
</div>
			
	<div class="large-8 large-offset-2 medium-8 medium-offset-2 small-12 columns">
		<div>


		<form action="connected.php" method="post" enctype="multipart/form-data"  class="small-12 large-12 columns storyForm">
			<label>First Name</label>
			<input type="text" name="fname">
			<label>Email</label>
			<input type="text" name="email">
			<label>Title</label>
			<input type="text" name="title">			
			<label>Story</label>
			<textarea rows="5" name="story"></textarea>
			<input type="file" name="imageS" value="Upload image"><br>
			<div class="storyButton">				
				<input name="submitStory" type="submit" value="submit">
			</div>

		</form>

		</div>

			
		</div>
	</section>
</div>

<div class="spacing80">
	
</div>

<div class="creamBg">
	<section class="shareStory row">
	<div class="row">
		<h2 class="small-12 large-12 columns">Shared Stories of Hope</h2><br>
		<div class="small-12 large-12 columns">
			<p>The road to recovery is difficult for anyone dealing with an eating disorder, but it impacts each everyone differently. The stories shared show us that recovery is possible to each and every unique individual.</p><br><br>


		</div>
		</div>

		
	<div class="stories">
		<?php

				if(!is_string($getStories)){
					while($row = mysqli_fetch_array($getStories)){

						$post = "{$row['stories_post']}";

						if ($post == 1) {

							$str = "{$row['stories_story']}";
							// $w = str_word_count($str);
							$pos = strpos($str, ' ', 200);
							
							echo 

							"<div class=\"row\">
							<img src=\"images/{$row['stories_image']}\" class=\"small-12 large-3 end columns\" alt=\"{$row['stories_name']}\">
							

							
							<div class=\"small-12 large-9 columns\">
								<h2 class=\"small-12 large-12 columns\">{$row['stories_title']}</h2>
								<h3 class=\"small-12 large-12 columns\">Written By: {$row['stories_name']}</h3>"
								;

								echo "<div class=\"small-12 large-12 columns\">";

								if ($pos !== false) {
									echo substr($str, 0, $pos);
								} echo "...";

								echo "</div>";

								echo "<div class=\"small-12 large-12 columns\">
									<a href=\"admin/story_details.php?id={$row['stories_id']}\">More...</a><br><br>
								</div>
								</div>
							</div>	";
						}

					}
				}else{
					echo "<p>{$getStories}</p>";
				}



		 ?>
	</div>

	</section>


</div>

<div class="spacing80">
	
</div>


<?php
	include('includes/footer.html');
?>


<script src="js/main.js"></script>
<script src="js/connected.js"></script>
<script src="js/vendor/jquery.js"></script>
<script src="js/foundation/foundation.js"></script>
<script src="js/foundation/foundation.interchange.js"></script>
<script>
    $(document).foundation();
</script>
</body>


</html>