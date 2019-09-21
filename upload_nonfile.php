<!DOCTYPE html>
<?php
session_start();
?>
<?php
				
				if (isset($_REQUEST['submit']))
				{
					
					$techname=$_POST['tname'];
					$pname= $_POST['pname'];
					$pdes=$_POST['pdes'];
					
					
					
					
					
					$con = mysqli_connect('localhost', 'root' , '', 'projekts');
				
					if(mysqli_connect_errno())
						echo "connection_failed";
					else
						//echo "connection_successful";
					
					echo '</br>';
					
					$sql= "INSERT INTO `non_academic_project`( `project_name`, `project_description`,`user_id`) VALUES ('".$pname."','".$pdes."','".$_SESSION["u_id"]."')";
					$sql2= "INSERT INTO `technology`( `technology_name`) VALUES ('".$techname."')";
					if(!empty($pname) && !empty($pdes) && !empty($techname))
					{
						if (mysqli_query($con, $sql) && mysqli_query($con, $sql2)) {
							echo '<script language="javascript">';
							echo 'alert("Submitted")';
							echo '</script>';
						} else {
							echo '<script language="javascript">';
							echo 'alert("Fill All Field problem 1")';
							echo '</script>';
						}
					
					}
					else
					{
						echo '<script language="javascript">';
						echo 'alert("Fill data problem 2")';
						echo '</script>';
					}
					mysqli_close($con);

					
				}
			
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
					<!--
					<div class="w3-col w3-right-align" style="width:12%;">
						<div class="w3-container" style="padding:12px 0px 0px 0px;margin:0px;">
							<img src="img/neub.png" class="w3-image" style="width:100%;max-width:140px;">
						</div>
					</div>
					-->
					<div class="w3-col w3-lobster" style="width:82%;">
						<div class="w3-container" style="padding:10px 0px 0px 5px;margin:0px;">
							<img src="img/neub.png" class="w3-image w3-left" style="width:100%;max-width:140px;">
							<p class="w3-jumbo w3-left" style="margin:10px 0px 0px 0px;">Projects Of NEUB</p>
						</div>
					</div>
					
					<div class="w3-col w3-right-align" style="width:18%;padding:0px;">
						<div class="w3-container" style="margin:40px 0px 0px 0px;padding:0px;">
						
							<button class="w3-btn w3-black w3-hover-white w3-round fa fa-arrow-right" id="login"><a href="index.php"> Logout </button>
							
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
		
		<!--
		<div class="w3-container w3-row" style="margin:200px 0px 0px 0px;">
			<div class="w3-col " style="width:60%; margin-left:5%;">
				<input class="w3-container w3-xlarge w3-input w3-border " type="text" style="margin-top:0%; width:100%;" placeholder=" Search Projects..." >
			</div>
			<div class=" w3-col w3-xlarge nopadding  w3-left-align" style="width:30%; margin-left:5px;" >
				<i class=" w3-xxxlagre fa fa-search nomargin nopadding w3-btn w3-red w3-padding  w3-center" style="width:70px; height:37px;"></i>
			</div>
			
			
			
			
		</div>
		-->
		
		<div class="w3-container" style="margin:180px 50px 0px 0px;padding:0px;" >
		<h3 align="center">Upload Project</h3>
		
			<div class="w3-container" style="margin:0px 50px 50px 180px;padding:0px;" >
			 <p>
				<div > 
				<form name="projectform" action="" method="post">
				
				<p>Technology<input id="tname" name="tname" type="text" size="80" placeholder="Technology" /></p>
				<!--<p>Technology 
						<input name="tech[]" class="w3-check" type="checkbox" checked="checked">
						<label>php</label>
						
						<input name="tech[]" class="w3-check" type="checkbox" checked="checked">
						<label>java</label>
						
						<input name="tech[]" class="w3-check" type="checkbox" checked="checked">
						<label>database</label>
						
				</p> -->
				 
				<p>Project Name <input id="pname" name="pname" type="text" size="80" placeholder="Project Name" /></p>
				<p>Project Description </p><p><textarea rows="7" cols="95" name="pdes"></textarea></p>
				
				
				<p><center><input type="submit" name="submit" value="Submit"  /></center> <button class="w3-btn w3-black w3-hover-white w3-round fa fa-arrow-right" id="afterlogin"><a href="afterlogin.php"> back  </button> </p>
				
				</form>
				<br />

			</div>
		
		</div>

		
		
		
		
		
		
		<!--<footer  class="w3-container w3-bottom w3-green">
			This is footer
		</footer> -->
			

	</body>
</html> 
