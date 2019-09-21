<?php
				$host = 'localhost';
				$username= 'root';
				$pass = '';
				$db = 'projekts';
	
				$con=new mysqli($host, $username, $pass, $db) or die("not connected");

	
				if(isset($_POST["log"])){
					session_unset(); 

					 
					session_destroy();
					echo "<script>location.href='index.php';</script>";
					
			
			
			
			
				$con->close();
	
				}
			
?>