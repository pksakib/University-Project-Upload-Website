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
					<br>
					<br>
					
					
					<button name="logout" class="w3-btn w3-black w3-hover-white w3-round fa fa-arrow-right" id="edit"><a href="index.php"> Logout  </button>
				</div>
			</div>
			
			<div class="w3-container nopadding" style="width:90%;margin: 0 auto;padding:0px 30px;">
				<div class="w3-container w3-right nopadding" style="margin:-50px 0px 0px 0px;">
					<div class="w3-row nopadding">
						<div class="w3-col  w3-margin-right2" style="width:auto;">
						
							<a href="index.php" class="w3-btn w3-black w3-hover-white w3-round w3-myfont  " style="text-decoration: underline;width:auto;" >Home</a>
						</div>
						
						<div class="w3-col  w3-margin-right2" style="width:auto;">
							<a href="allproject.php"class="w3-btn w3-black w3-hover-white w3-round w3-myfont  " style="text-decoration: underline;width:auto;" > All Projects </a>
						</div>
						
						<div class="w3-col  w3-margin-right2" style="width:auto;">
							<a href="profile.php" class="w3-btn w3-black w3-hover-white w3-round w3-myfont " style="text-decoration: underline;width:auto;" >Profile</a>
						</div>
						
						<div class="w3-col   w3-margin-right2" style="width:auto;">
							<a href="about.php" class="w3-btn w3-black w3-hover-white w3-round w3-myfont " style="text-decoration: underline;width:auto;"> About </a>
						</div>
					
						<div class="w3-col" style="width:auto;">
							<a href="contact.php" class="w3-btn w3-black w3-hover-white w3-round w3-myfont " style="text-decoration: underline;width:auto;"> Contact Us </a>
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
		<h3 align="center">ALL ACADEMIC PROJECT LIST</h3>
		
			<div class="w3-container" style="margin:0px 50px 50px 180px;padding:0px;" >
			 <p>
			 
			 
    <tbody>
        <!--Use a while loop to make a table row for every DB row-->
        <?php
			$con=mysqli_connect('localhost', 'root' , '', 'projekts');
			// Check connection
			if (mysqli_connect_errno())
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			
			    $result = mysqli_query($con,"SELECT academic_project_id,project_name,course_name,course_code FROM `academic_project` ");
				$aca = 'academic_project_id';
							$sql2="select $aca from academic_project";
							$acaid = mysqli_query($con,$sql2);
				
				
				
			
							
						//$_SESSION["aca_id"] = mysqli_fetch_object($acaid)->$aca;
					
						
				echo "<table border='1'>
					<tr>
						<th>Project ID</th>
						<th>Project Name</th>
						<th>Course Name </th>
						<th>Course Code </th>
						
						

					</tr>";

				while($row = mysqli_fetch_array($result))
				{
					
					echo "<tr>";
					//echo "<td>" . $sendid . "</td>";
					echo "<td>" .$_SESSION["aca_id"] = mysqli_fetch_object($acaid)->$aca. "</td>";
					
					echo "<td><a href=\"showaproject.php?id=".$_SESSION["aca_id"]."\">" . $row['project_name'] . "</td>";
					
					echo "<td>" . $row['course_name'] . "</td>";
					echo "<td>" . $row['course_code'] . "</td>";

					echo "</tr>";
				}
				echo "</table>";
			
				
		
	
		
			mysqli_close($con);
			
?>
					</tbody>
				</table>
				
			 </p>
			 
			</div>
		
		</div>
		
		<!--<footer  class="w3-container w3-bottom w3-green">
			This is footer
		</footer> -->
			

	</body>
</html> 
