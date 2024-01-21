<?php
$expire = time()+60;
setcookie("user", $username, $expire)
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <title>Portfolio</title>
</head>
<body>
    <header>
        <h1>Log in</h1>
    </header>
    <?php
    include("nav.php");
    ?>
    <div class="container">
        
    </div>
    <footer>
        <p>&copy; 2023 Lars Kuijer</p>
    </footer>
</body>
</html>
