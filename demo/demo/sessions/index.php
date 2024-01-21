<?php session_start(); ?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
		<title>Login with Sessions</title>
	</head>

	<body>
		<h1>Example login with Sessions</h1>
		
		<?php
			//Check if there is a GET parameter
			if(isset($_GET['page'])){
				//If GET is present -> include that page
				include($_GET['page']. ".php");
			}
			else{
				//No GET present -> Check if user is logged in via SESSION
				if(isset($_SESSION['loggedIn'])){
					//If SESSION['loggedIn'] has been set -> give feedback to user
					echo"<pre>";
					//var_dump($_SESSION);
					echo"</pre>";
					echo "<p>You are logged in</p>";
					echo "<a href='index.php?page=logout'>click here to log out</a>";
					echo $_SESSION['plaatje'];
					
				}
				else{
					//If SESSION['loggedIn'] has not been set -> give feedback and include login script
					echo "session not set<br /><br />";
					include("login.php");
				}
				
				
			}
		
		?>
	</body>
</html>
