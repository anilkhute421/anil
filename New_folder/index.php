<?php
include("connection.php");
error_reporting();

if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d');
    $time = date('H:i:s');
   
	$query="INSERT INTO tblcoomingsoon (email,entry_date,entry_time) VALUES('$email','$date','$time')";
	$data=mysqli_query($con,$query);
	 
	echo $data;
	
	if($data)
	{
		echo "data sucessfully inserttrd";

	}else{
		echo "sorry".mysqli_error($con);
	}

}

 ?>

-+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>TITLE</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
	
	<!-- Font -->
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CPoppins:400,500" rel="stylesheet">
	
	
	<link href="common-css/ionicons.css" rel="stylesheet">
	
	
	<link rel="stylesheet" href="common-css/jquery.classycountdown.css" />
		
	<link href="04-comming-soon/css/styles.css" rel="stylesheet">
	
	<link href="04-comming-soon/css/responsive.css" rel="stylesheet">
	
</head>
<body>
	
	<div class="main-area">
		
		<section class="left-section" style="background-image: url(images/pic.png)">
		
		
			
		</section><!-- left-section -->
		
		
		<section class="right-section full-height">
		
			<a class="logo" href="index.php">theamansingh.com</a>
			
			<div class="display-table">
				<div class="display-table-cell">
					<div class="main-content">
						<h1 class="title"><b>Under Construction</b></h1>
						<p class="desc">Our website is currently undergoing scheduled maintenance.
							We Should be back shortly. Thank you for your patience.</p>

						<div class="email-input-area">
							<form method="post">
								<input class="email-input" name="email" type="text" placeholder="Enter your email"/>
								<button class="submit-btn" name="submit" type="submit"><b>NOTIFY US</b></button>
							</form>
						</div><!-- email-input-area -->
						
						<p class="post-desc">Sign up now to get early notification of our lauch date!</p>
					</div><!-- main-content -->
				</div><!-- display-table-cell -->
			</div><!-- display-table -->
			
			<ul class="footer-icons">
				<li>Stay in touch : </li>
				<li><a href="https://www.facebook.com/viknjobs"><i class="ion-social-facebook"></i></a></li>
				<li><a href="https://twitter.com/staffingvikn/"><i class="ion-social-twitter"></i></a></li>
				
				<li><a href="http://www.instagram.com/invites/contact/?i=mchfuy4zhm2h&utm_content=479bxqu"><i class="ion-social-instagram-outline"></i></a></li>
				
			</ul>
		
		</section><!-- right-section -->
		
	</div><!-- main-area -->
	
	<!-- SCIPTS -->
	
	<script src="common-js/jquery-3.1.1.min.js"></script>
	
	<script src="common-js/jquery.countdown.min.js"></script>
	
	<script src="common-js/scripts.js"></script>
	
</body>
</html>