<?php
$expire = time()+60; //Time in seconds
//$expire = time()+60*60*24*30;
setcookie("user", "Jannes", $expire);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
        <title>Login with Cookies</title>
    </head>
    <body>
        <?php
        /* more info:
          - book page 517 - 529
          - http://www.w3schools.com/php/php_sessions.asp */
        
        if (isset($_COOKIE["user"]))
        {
            echo "Welcome <b>" . $_COOKIE["user"] . "</b>!<br>";
        } else
        {
            echo "Welcome guest!<br>";
        }
        ?>
    </body>
</html>