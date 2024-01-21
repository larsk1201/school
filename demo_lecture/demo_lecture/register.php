<?php
$msgs = [];
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!$user = filter_input(INPUT_POST,"un", FILTER_SANITIZE_SPECIAL_CHARS))
        $msgs[] = "Invalid username or no username given";

    if(!$pass = filter_input(INPUT_POST,"pw"))
        $msgs[] = "No password given";

    if(count($msgs) == 0)
    {
        require_once("dbconnect_inc.php");
        if($dbHandler){
            try{
                $stmt = $dbHandler->prepare("INSERT INTO `users` (`id`, `username`, `password`) 
                                             VALUES (NULL, :username, :hashedpass)"
                                            );
                $stmt->bindParam("username", $user, PDO::PARAM_STR);
                $hashedPass = password_hash($pass, PASSWORD_BCRYPT);
                var_dump($hashedPass);
                $stmt->bindParam("hashedpass", $hashedPass, PDO::PARAM_STR);
                $stmt->execute();         
            }catch(Exception $ex) {
                printError($ex);
            }
        }
        if($stmt && $stmt->rowCount() == 1){
           $msgs[] = "Registration succesfull";

        }else{
            $msgs[] = "Invalid username or password";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login please</title>
</head>
<body>
    <h1>Register</h1>
    <?php
        if(count($msgs) > 0){
            foreach ($msgs as $msg) {
                echo $msg;
            }
        }
    ?>
    <form action="<?=htmlentities($_SERVER['PHP_SELF'])?>" method="post">
	<table>
		<tr>
			<td>
				username:
			</td>
			<td>
				<input type="text" name="un" />
			</td>
		</tr>
		<tr>
			<td>password:</td>
			<td>
				<input type="password" name="pw" />
			</td>
		</tr>
	</table>
	<input type="submit" name="submit" />
</form> 
</body>
</html>