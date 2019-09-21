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
					
					
					<div class="w3-col w3-right-align" style="width:18%;padding:0px;">
						<div class="w3-container" style="margin:40px 0px 0px 0px;padding:0px;">
						
							<button class="w3-btn w3-black w3-hover-white w3-round fa fa-arrow-right" onclick="showForm('loginForm')" > Login / SignUp </button>
						</div>
					</div>	
					
				</div>
			</div>
			<script>
				function showForm(id){
					var x = document.getElementById(id);
					x.style.display = "block"; 
				}
				function hideForm(id){
					var x = document.getElementById(id);
					x.style.display = "none"; 
				}
				function signUpView(){
				var x = document.getElementById('loginForm');
					x.style.display = "none";
					var y = document.getElementById('signupForm');
					y.style.display = "block";
				}

			</script>
			
			<?php
				
				if (isset($_REQUEST['loginButton']))
				{
					
					$username= $_POST['loginName'];
					$password= $_POST['loginPass'];
					
	
					$con = mysqli_connect('localhost', 'root' , '', 'projekts');
					if(mysqli_connect_errno())
						echo "connection_failed";
					else
						//echo "connection_successful";
					
					echo '</br>';
					
					$sql="select username from admin where password = '".$password."'";
					$result=mysqli_query($con,$sql);
					$username_db='';
					
					while($arr=mysqli_fetch_array($result))
					{
						$username_db=$arr[0];	
					}
					if($username_db==$username)
					{
						echo 'okay......admin';
						mysqli_close($con);
					}
					else
					{
						
						$sql="select username from user where username = '".$username."' && password = '".$password."'";
						$result=mysqli_query($con,$sql);
						while($arr=mysqli_fetch_array($result))
						{
							
							$username_db=$arr[0];	
							
							
							
						}
						if($username_db==$username)
						{
							$field = 'user_id';
							$sql2="select $field from user WHERE username = '".$username."' && password = '".$password."'";
							$uid = mysqli_query($con,$sql2);
							$_SESSION["u_id"] = mysqli_fetch_object($uid)->$field;
							

							//$_SESSION["u_id"];
							echo '<script language="javascript">';
							echo 'alert("Login Success")';
							echo '</script>';
							
							echo "<script>location.href='afterlogin.php';</script>";
							mysqli_close($con);
						}
						else
						{
							echo '<script language="javascript">';
							echo 'alert("Username and Password Does not match!")';
							echo '</script>';
							mysqli_close($con);
						}
					}
				}
				
				
				if (isset($_REQUEST['signup']))
				{
					$name= $_POST['name'];
					$email=$_POST['email'];
					$username=$_POST['username'];
					$password1= $_POST['password1'];
					$password2=$_POST['password2'];
					
					
					$con = mysqli_connect('localhost', 'root' , '', 'projekts');
					
					if(mysqli_connect_errno())
						echo "connection_failed";
					else
						//echo "connection_successful";
					
					echo '</br>';
					
					$sql= "INSERT INTO user (username, password, email, name ) VALUES ('".$username."', '".$password1."', '".$email."','".$name."')";
					if($password1==$password2 && !empty($password1) )
					{
						if (mysqli_query($con, $sql)) {
							echo '<script language="javascript">';
							echo 'alert("Sign Up Success, Please Login Now")';
							echo '</script>';
						} else {
							echo '<script language="javascript">';
							echo 'alert("Signup Error!")';
							echo '</script>';
						}
					
					}
					else
					{
						echo '<script language="javascript">';
						echo 'alert("Confirm Password")';
						echo '</script>';
					}
					mysqli_close($con);

					
				}
			
			?>
			
			<!-- login-->
			<div id="loginForm" class="w3-card nopadding w3-right w3-border w3-round-large w3-black " style="position:fixed; margin: -6% 0% 0% 80%; display:none;">
				<form method='POST' action='index.php' class="w3-black nopadding nomargin" style="width:90%; margin:0 auto;">
					<img src="img/cross.png"  style="height:20px;" class="w3-right w3-hover-white" onclick="hideForm('loginForm')">
					<p>
						<label class="w3-left-align">User Name</label>
						<input name='loginName' class="w3-input" type="text">
					</p>
					<p>
						<label class="w3-left-align">Password</label>
						<input name='loginPass' class="w3-input" type="password">
					</p>
					<p class="w3-right w3-right-align">
						<button name='loginButton' class="w3-btn w3-red ">Log In</button>
						<p  class="w3-btn w3-red" onclick="signUpView()">Sign Up</p>
					</p>
				</form>
			</div>

			<!-- sign up-->
			<div id="signupForm" class="w3-card nopadding w3-right w3-border w3-round-large w3-black " style="position:fixed; margin: -6% 0% 0% 80%; display:none;">
				<form action="index.php" method="post" class="w3-black nopadding nomargin" style="width:90%; margin:0 auto;">
					<img src="img/cross.png"  style="height:20px;" class="w3-right w3-hover-white" onclick="hideForm('signupForm')">
					<p>
						<label class="w3-left-align">Name</label>
						<input placeholder="" required class="w3-input" name='name'  type="text">
					</p>
					<p>
						<label class="w3-left-align">Email</label>
						<input placeholder="" required class="w3-input" name='email' type="email" >
					</p>
					<p>
						<label class="w3-left-align">username</label>
						<input placeholder="" required class="w3-input" name='username' type="text">
					</p>
					<p>
						<label class="w3-left-align">Password</label>
						<input placeholder="" required class="w3-input" name='password1'  type="password">
					</p>
					<p>
						<label class="w3-left-align">Confirm Password</label>
						<input placeholder="" required class="w3-input" name='password2' type="password">
					</p>
					<p class="w3-right">
						<input class="w3-btn w3-red " type="submit" name="signup" value="Sign Up">
					</p>
				</form>
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
		
		<!-- Slide Show-->
		<div class="w3-container" style="margin:180px 0px 0px 0px;padding:0px;" >
			<div class="w3-container" style="width:94%;margin: 0 auto;padding:0px;">
				<div class="w3-content2 w3-display-container">

					<div class="w3-display-container mySlides">
						<img src="img/slide/1.jpg" style="width:100%;max-height:400px;">
						<div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
							Trolltunga, Norway
						</div>
					</div>

					<div class="w3-display-container mySlides">
						<img src="img/slide/2.jpg" style="width:100%;max-height:400px;">
						<div class="w3-display-bottomright w3-large w3-container w3-padding-16 w3-black">
							Northern Lights, Norway
						</div>
					</div>

					<div class="w3-display-container mySlides">
						<img src="img/slide/3.jpg" style="width:100%;max-height:400px;">
						<div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
							Beautiful Mountains
						</div>
					</div>

					
					<button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
					<button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>
					
					<div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
						<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
						<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
						<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
					</div>
					
				</div>

				<script>
					var slideIndex = 1;
					showDivs(slideIndex);

				</script>
			 <!--	<form>
					<input style=" margin-top:20px; width:30%; " class="w3-input w3-animate-input" type="text"> </input>
					  <p>
						<input class="w3-check" type="checkbox" checked="checked">
						<label>Academic</label>
						
						<input class="w3-check" type="checkbox" checked="checked">
						<label>Non - Academic </label>
						
						
						</p>
					<button class="w3-btn w3-red w3-align-right"> Search </button>
				</form> -->
				
				
			</div>
		</div>
		<!--  -->

		
		
		
		
		
		
		<!-- <footer  class="w3-container w3-bottom w3-green" style="position:relative;">
			This is footer
		</footer> -->
			

	</body>
</html> 
