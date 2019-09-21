<!DOCTYPE html>
<?php
session_start();
?>
<html>
	<head>
		<title>Web Engineering Project</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="mystyle/w3css.css">
		<link rel="stylesheet" href="mystyle/style.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="js/myjs.js"> </script>
		
	<style>
		.w3-lobster {
			font-family: "Lobster", serif;
		}
	</style>
		
	</head>
	
	
	<body class="w3-container w3-myback" style="padding:0px;">
		<header class="w3-container w3-top" style="padding:0px;margin:0px;">
			
			<!-- Desktop header -->
			<div class="w3-container w3-sand w3-hide-medium w3-bottombar w3-border-black w3-hide-small" style="width:90%;margin:0 auto;padding:0px 30px;">
				<div class="w3-row" style="">
				
					<div class="w3-col w3-lobster" style="width:82%;">
						<div class="w3-container" style="padding:10px 0px 0px 5px;margin:0px;">
							<img src="img/neub.png" class="w3-image w3-left" style="width:100%;max-width:140px;">
							<p class="w3-jumbo w3-left" style="margin:10px 0px 0px 0px;">Projects Of NEUB</p>
						</div>
					</div>
					
					
				</div>
			</div>
			
			<div class="w3-container nopadding" style="width:90%;margin: 0 auto;padding:0px 30px;">
				<div class="w3-container w3-right nopadding" style="margin:-50px 0px 0px 0px;">
					<div class="w3-row nopadding">
						<div class="w3-col  w3-margin-right2" style="width:auto;">
						
							<a href="index.php" class="w3-btn w3-black w3-hover-white w3-round w3-myfont  " style="text-decoration: underline;width:auto;" >Home</a>
						</div>
						
						<div class="w3-col  w3-margin-right2" style="width:auto;">
							<a href="allproject.php" class="w3-btn w3-black w3-hover-white w3-round w3-myfont  " style="text-decoration: underline;width:auto;" > All Projects </a>
						</div>
						
						<div class="w3-col  w3-margin-right2" style="width:auto;">
							<a href="profile.php" class="w3-btn w3-black w3-hover-white w3-round w3-myfont " style="text-decoration: underline;width:auto;" >Profile</a>
						</div>
						
						<div class="w3-col   w3-margin-right2" style="width:auto;">
							<a href="about.php" class="w3-btn w3-black w3-hover-white w3-round w3-myfont " style="text-decoration: underline;width:auto;"> About </a>
						</div>
					
						<div class="w3-col" style="width:auto;">
							<a href="contact.php" class="w3-btn w3-black w3-hover-white w3-round w3-myfont " style="text-decoration: underline;width:auto;"> Contract Us </a>
						</div>
					</div>
				</div>
			</div>
			
			
		</header>
		
		
		
		<div class="w3-container" style="margin:180px 50px 0px 0px;padding:0px;" >
		<h3 align="center">Click below to upload your project.</h3>
		
		<?php
		//echo "<h2>" . $_SESSION["u_id"] ."</h2>";
		?>
			<div class="w3-container" style="margin:0px 0px 0px 0px;padding:0px;" >
			 <p align="center">
				<button class="w3-btn w3-black w3-hover-white w3-round fa fa-arrow-right" id="upload"><a href="upload_file.php"> Upload Academic Project  </button>
				<button class="w3-btn w3-black w3-hover-white w3-round fa fa-arrow-right" id=""><a href=" upload_nonfile.php">  Upload Non Academic Project </button> 
			 </p>
			</div>
		
		</div>

		
		
		
		
		
		
		<!--<footer  class="w3-container w3-bottom w3-green">
			This is footer
		</footer> -->
			

	</body>
</html> 
