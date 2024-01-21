<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploaded files</title>
</head>
<body>
    <?php
    $dir = "uploads";		
    echo "<h1>File directory listing in directory: " . $dir . "</h1>";
    $dirOpen = opendir($dir);
    while ($curFile = readdir($dirOpen))
    {
        echo $curFile . "<br />";
        echo "<img src='". $dir . "/" .$curFile . "' alt='image' class='image'><br><br>";
        
    }
    closedir($dirOpen);
    ?>
</body>
</html>