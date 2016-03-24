<?php 

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Donate - Eating Disorder Foundation of Canada</title>
<link href="css/main.css" rel="stylesheet" type="text/css" media="screen"> 
<link rel="stylesheet" href="css/foundation.css" />
<link href='https://fonts.googleapis.com/css?family=Lato:400,700,300,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>
</head>
<body>

<?php 
	include('includes/nav.html');  
?>


<div data-interchange="[images/donateGirl_mobile.jpg, (default)], [images/donateGirl.jpg, (large)]" class="donateBg">
		<div class="small-12 large-8 columns large-offset-4 foundStory">
			<h2>“Your Donation Gives Others Hope.”</h2>			
		</div>
</div>

<div class="row">
	<div class="splitImage">
		<div class="small-12 medium-12 mobile large-8 splitImages columns "><img class="split1M" src="images/split3.png" alt="two faces">
				<img class="split2M" src="images/split4.png" alt="two faces"></div>

					<div class="small-12 desktop medium-12 large-8 splitImages columns "><img class="split1D" src="images/split3.png" alt="two faces">
				<img class="split2D" src="images/split4.png" alt="two faces"></div>
		<div class="small-10 medium-10 large-4 columns splitText">
			<div class="splitTextpadding">
				<h2>HOW TO MAKE A DONATION</h2>				
				<p>Thank you for your interest in making a donation to the Eating Disorders Foundation of Canada (EDF). We have a variety of donating options and we are now providing the option of earmarking your donations if there is an area that is of particular interest to you.</p>
			</div>
		</div>
	</div>
</div>




<section class="greyBg">
	<div class="row textOnLite whiteBg">
		<div class="large-12 small-12 large-offset-3 medium-offset-3 text-center donateForm columns">
			<h2 id="donationTitle">ONLINE DONATION FORM</h2>
			<h4 id="charNumber">Charitable Registration Number: 89448-5598-RROOO1</h4>
		
		<form class="formTop">
			<label class="labels">Title:</label>
			<select id="donorTitle">
			<option>Mr.</option>
			<option>Ms.</option>
			<option>Mrs.</option>
			</select>
			<input type="text"  id="donorName" placeholder="Name:">
			<input type="text" id="donorAddress" placeholder="Address line1:">
			<input type="text" id="donorCity" placeholder="City:">
			<label class="labels">Province/State:</label>
			<select id="donorState">
			<option value="alabama">Alabama</option>
			<option value="alaska">Alaska</option>
			<option value="alberta">Alberta</option>
			<option value="arkansas">Arkansas</option>
			<option value="british columbia">British Columbia</option>
			<option value="california">California</option>
			<option value="colorado">Colorado</option>
			<option value="connecticut">Connecticut</option>
			<option value="delaware">Delaware</option>
			<option value="florida">Florida</option>
			<option value="georgia">Georgia</option>
			<option value="hawaii">Hawaii</option>
			<option value="idaho">Idaho</option>
			<option value="illinois">Illinois</option>
			<option value="indiana">Indiana</option>
			<option value="iowa">Iowa</option>
			<option value="kansas">Kansas</option>
			<option value="kentucky">Kentucky</option>
			<option value="louisiana">Louisiana</option>
			<option value="maine">Maine</option>
			<option value="manitoba">Manitoba</option>
			<option value="maryland">Maryland</option>
			<option value="massachusetts">Massachusetts</option>
			<option value="michigan">Michigan</option>
			<option value="minnesota">Minnesota</option>
			<option value="mississippi">Mississippi</option>
			<option value="missouri">Missouri</option>
			<option value="montana">Montana</option>
			<option value="nebraska">Nebraska</option>
			<option value="nevada">Nevada</option>
			<option value="new brunswick">New Brunswick</option>
			<option value="newfoundland and labrador">Newfoundland and Labrador</option>
			<option value="new hampshire">New Hampshire</option>
			<option value="new jersey">New Jersey</option>
			<option value="new mexico">New Mexico</option>
			<option value="new york">New York</option>
			<option value="north carolina">North Carolina</option>
			<option value="north dakota">North Dakota</option>
			<option value="northwest territories">Northwest Territories</option>
			<option value="nova scotia">Nova Scotia</option>
			<option value="nunavut">Nunavut</option>
			<option value="ohio">Ohio</option>
			<option value="oklahoma">Oklahoma</option>
			<option value="ontario">Ontario</option>
			<option value="oregon">Oregon</option>
			<option value="pennsylvania">Pennsylvania</option>
			<option value="prince edward island">Prince Edward Island</option>
			<option value="quebec">Quebec</option>
			<option value="rhode island">Rhode Island</option>
			<option value="saskatchewan">Saskatchewan</option>
			<option value="south carolina">South Carolina</option>
			<option value="south dakota">South Dakota</option>
				<option value="tennessee">Tennessee</option>
			<option value="texas">Texas</option>
			<option value="utah">Utah</option>
			<option value="vermont">Vermont</option>
			<option value="virginia">Virginia</option>
			<option value="washington">Washington</option>
			<option value="west virginia">West Virginia</option>
			<option value="wisconsin">Wisconsin</option>
			<option value="wyoming">Wyoming</option>
			<option value="yukon">Yukon</option>

			</select>
			<input type="text" id="donorZip" placeholder="Postal/Zip Code:">
			<label class="labels">Country:</label>
			<input type="text" id="donorCountry">
			<br>
	
		<h5>Contact Information</h5>
		
			<input type="text" id="donorNumber" placeholder="Phone Number:">
			<input type="email" id="donorEmail" placeholder="Email Address:">
		
	







		<h5>Donation Information</h5>
		
			<label class="labels">Amount:     $</label>
			<input type="text" id="donorAmount">
			<label class="labelRight">CAD</label>
			<br> <br><br><br>
			<label id="earmarkTo" class="labels">Earmark To:</label>
			<input type="text" id="donorMark">
			<textarea rows="10" id="donorComments" placeholder="Additional Comments:"></textarea>
		
		<h5>Credit Card Information</h5>
	
			<input type="text" id="donorCard" placeholder="Name of Cardholder:">
			<label class="labels">Credit Card Type:</label>
			<select name="cardlist" id="donorCardType">
			<option value="Visa">Visa</option>
			<option value="MasterCard">MasterCard</option>
			<option value="American Express">American Express</option>
			</select>
			<input type="text" id="donorCardNumber" placeholder="Credit Card Number:">
			<label class="labels">Expiration Date:</label>
			<input type="text" id="donorCardExpM" placeholder="MM">
			<label class="labels">/</label>
			<input type="text" id="donorCardExpY" placeholder="YY">

			<label class="labels" id="cvd"> CVD:</label>
			<input type="text" id="donorCardCVD" placeholder="">
			<input type="submit" id="submitBtn" value="submit">


		</form>

	<div class="altPayment">
		<h4>Alternative Forms of Payment:</h4>
		<a href="https://www.paypal.com/ca"><img src="images/paypal.png" alt="paypal" height="100"></a>
		<a href="https://wallet.google.com/"><img src="images/googleWallet.png" alt="Google Wallet" height="100"></a>
	</div>
		</div>
		</div>







			
	

</section>


<?php
	include('includes/footer.html');
?>


<script src="js/main.js"></script>
<script src="js/donation.js"></script>
<script src="js/vendor/jquery.js"></script>
<script src="js/foundation/foundation.js"></script>
<script src="js/foundation/foundation.interchange.js"></script>
<script>
    $(document).foundation();
</script>

</body>


</html>