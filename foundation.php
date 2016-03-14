<?php 

	require_once('admin/includes/init.php');

	$tblN = "tbl_news_updates";
	$getNews = getAllNews($tblN);

	$tblbod = "tbl_bod";
	$getbod = getAllbod($tblbod);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Foundation Info- Eating Disorder Foundation of Canada</title>
<link href="css/main.css" rel="stylesheet" type="text/css" media="screen"> 
<link rel="stylesheet" href="css/foundation.css" />
<link href='https://fonts.googleapis.com/css?family=Lato:400,700,300,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>
</head>
<body>

<?php 
	include('includes/nav.html');  
?>

<div class="foundBg">
	<div class="row">
		<div class="small-12 large-8 columns large-offset-4 foundStory">
			<h3>“Though no one can go back and make a new start, anyone can start from now and make a brand new end.”<br><span class="quoter">-Carl Bard</span></h3>			
		</div>
		<div class="small-12 large-6 columns large-offset-6 foundStoryLinks">
			<a href="#">share your stories of hope</a>
			<a href="#">featured stories of hope</a>
		</div>		
	</div>
</div>

<div class="row">
	<div class="splitImageFound">
		<div class="small-4 large-4 end columns splitTextFound">
			<div class="splitTextpadding">
				<h2>Mission Statement</h2>				
				<p>Having an eating disorder is not a choice, but a severe and debilitating mental illness and the toll eating disorders have played on young women and their families is immeasurable. To this end the Eating Disorders Foundation of Canada acknowledges the need for urgent attention and is committed to raising funds to be directed toward the establishment of residential treatment, transition housing and to support ongoing research and treatment programs for eating disorders.
The Eating Disorders Foundation of Canada is enthusiastically behind local community groups that have set up awareness campaigns, support groups, education in the schools and much more, and sees a leadership role in bringing these local initiatives together to give them a stronger voice when it comes to provincial and federal funding. Governments are looking for collaboration, and with communities from across the country working together, eating disorders can have an enhanced national presence.</p>
			</div>
		</div>
		<img class="small-8 large-8 columns" src="images/split_image2.png" alt="two faces">
	</div>
</div>



<div class="newsBg">
	<section class="row newsFoun">
		<h2 class="small-12 large-12 columns">News &amp; Updates</h2>
		<div class="small-12 large-12 columns newsFounLinks">
			<?php 

				if(!is_string($getNews)){
					while($row = mysqli_fetch_array($getNews)){
						echo "<p>{$row['news_updates_title']}</p>
						<a href=\"{$row['news_updates_url']}\">{$row['news_updates_link']}</a>";
					}
				}else{
					echo "<p>{$getNews}</p>";
				}


			 ?>
		</div>
	</section>
</div>


<div class="board">
	<section class="row bodyBg bod">
		<div>		
			<h2 class="small-12 large-12 columns">Board of Directors</h2>
			<p class="small-12 large-12 columns">The Eating Disorders Foundation of Canada (EDF) was launched in 1995 and is a national, not-for-profit registered charity non-government organization (NGO). Without the help of volunteers and professionals this non-for-profit charity would not be what it is without them.</p><br><br>
			<div class="small-12 large-12 columns" >
				<ul class="small-block-grid-3 large-block-grid-4">
					<!-- <li class="bodCont"> -->

					<?php 

					if(!is_string($getbod)){
						while($row = mysqli_fetch_array($getbod)){
							echo "<li class=\"bodCont\">
								<img src=\"images/{$row['bod_img']}\" alt=\"{$row['bod_name']}\">
								<div class=\"bodBg\">
									<h3>{$row['bod_name']}</h3>
									<p>{$row['bod_title']}</p>
								</div>
							</li>";
						}
					}else{
						echo "<p>{$getbod}</p>";
					}


					 ?>
			
					<!-- </li> -->
																																
				</ul>
			</div>
		</div>

	</section>
</div>



<section class="row outsideLinks">
	<h2 class="small-12 large-12 columns">Outside Links</h2>
	<div class="small-12 large-12 columns linkInfo"><br>
	<h3>EATING DISORDER RESOURCES AND INFORMATION</h3>
	<p>Bulimia Anorexia Nervosa Association (B.A.N.A.)</p>
	<p>Book of Hope - stories of love, courage and recovery from families who have battled eating disorders</p>
	<a href="http://www.connexontario.ca/"><p>Connex Ontario</p></a>
	<a href="http://www.daniellesplace.org/"><p>Danielle’s Place</p></a>
	<a href="http://eatingdisordersns.ca/"><p>Eating Disorders Nova Scotia</p></a>
	<a href="http://www.eatingdisordersupportnetworkofalberta.com/"><p>Eating Disorders Support Network of Alberta (E.D.S.N.A.)</p></a>
	<a href="http://www.feast-ed.org/"><p>Families Empowered & Supporting Treatment of Eating Disorders (F.E.A.S.T)</p></a>
	<a href="http://www.hopesgarden.org/"><p>Hope’s Garden</p></a>
	<a href="http://www.hopewell.ca/"><p>Hopewell</p></a>
	<a href="http://projecttrue.com/new/"><p>Project True</p></a>
	<a href="http://nedic.ca/"><p>National Eating Disorder Information Centre (N.E.D.I.C.)</p></a>
<a href="http://nied.ca/">	<p>National Initiative for Eating Disorders (NIED)</p></a>
	<a href="http://sheenasplace.org/"><p>Sheena' s Place</p></a>

	<a href="#">More...</a>

</section>

<?php
	include('includes/footer.html');
?>


<script src="js/main.js"></script>

</body>


</html>