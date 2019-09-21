<!DOCTYPE html>
<?php
session_start();
?>

<?php
				
				
				if (isset($_REQUEST['submit']))
				{
					$name= $_POST['name'];
					$email=$_POST['email'];
					$password1= $_POST['pass'];
					$password2=$_POST['cnpass'];
					
					
					$con = mysqli_connect('localhost', 'root' , '', 'projekts');
					
					if(mysqli_connect_errno())
						echo "connection_failed";
					else
						//echo "connection_successful";
					
					echo '</br>';
					
					$sql= "UPDATE user SET password = '".$password1."', name='".$name."', email='".$email."'  WHERE `user_id` = '".$_SESSION["u_id"]."'";
					if($password1==$password2 && !empty($password1) )
					{
						if (mysqli_query($con, $sql)) {
							echo '<script language="javascript">';
							echo 'alert("UPDATE COMPLETE")';
							echo '</script>';
							echo "<script>location.href='profile.php';</script>";
						} else {
							echo '<script language="javascript">';
							echo 'alert("Type Again")';
							echo '</script>';
						}
					
					}
					else
					{
						echo '<script language="javascript">';
						echo 'alert("Confirm Password")';
						echo '</script>';
					}
					if (isset($_REQUEST['logout']))
						{
							echo '<script language="javascript">';
							echo 'alert("NOTHING")';
							echo '</script>';
							session_unset(); 
							session_destroy();
					
					
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
					
					<br>
					<br>
					
					
					<button name="logout" class="w3-btn w3-black w3-hover-white w3-round fa fa-arrow-right" id="logout"><a href="index.php"> logout  </button>
					
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
		<h3 align="center">Your Profile</h3>
		
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

			$result = mysqli_query($con,"SELECT username,name,password,email FROM `user` WHERE user_id = '".$_SESSION["u_id"]."'");

				echo "<table border='1'>
					<tr>
						<th>Name</th>
						<th>Username</th>
						
						<th>Email</th>

					</tr>";

				while($row = mysqli_fetch_array($result))
				{
					echo "<tr>";
					echo "<td>" . $row['name'] . "</td>";
					echo "<td>" . $row['username'] . "</td>";
					//echo "<td>" . $row['password'] . "</td>";
					echo "<td>" . $row['email'] . "</td>";

					echo "</tr>";
				}
				echo "</table>";

			mysqli_close($con);
?>
					</tbody>
				</table>
				
			 </p>
			 <div>
			 <div > 
				<form name="projectform" action="" method="post">
				
				<p>Name <input id="myname" name="name" type="text" size="50" placeholder="Your Name" /></p>
				<p>Email <input id="Email" name="email" type="text" size="50" placeholder="Email" /></p>
				<p>Password <input id="pass" name="pass" type="password" size="47" placeholder="password" /></p>
				<p>Confirm Password <input id="cnpass" name="cnpass" type="password" size="40" placeholder="Confirm password" /></p>
				<p><button name="submit" class="w3-btn w3-black w3-hover-white w3-round fa fa-arrow-right" id="submit"> Submit  </button> </p>
				</form>
				
			 <div/>
			 <p align="left"><button class="w3-btn w3-black w3-hover-white w3-round fa fa-arrow-right" id="edit"><a href="profile.php"> Back  </button> </p>
			</div>
		</div>
		
		<!--<footer  class="w3-container w3-bottom w3-green">
			This is footer
		</footer> -->
			

	</body>
</html> 
