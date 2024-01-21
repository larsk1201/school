	<?php
		//Check if a form has been posted to the script
		if(isset($_POST['submit'])){
			//If true -> continue
			//Check if username and password are correct
			if($_POST['un'] == "test user" && $_POST['pw'] == "test123")
			{
				//If correct -> Set SESSION with name 'loggedIn' to true and give feedback to user
				$_SESSION['loggedIn'] = true;
				
				$_SESSION['plaatje'] = "<p><img src='http://lorempixel.com/400/200/'></p>";
				
				echo "<p>you are logged in</p>";
				echo "<a href='index.php'>back to home</a>";
			}
			else{
				//If incorrect -> Give feedback and include loginForm
				echo "<p style='color: red;'>wrong username and/or password</p>";
				include("loginForm.html");
			}
		}
		else{
			//If false -> give feedback to user and include loginForm
			echo "Log in aub!";
			include("loginForm.html");
		}
	?>
