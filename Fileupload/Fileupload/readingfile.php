<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reading</title>
</head>
<body>
    <?php
        $handler = fopen("examplefile.txt", "r");
        echo "<table>";
        while(!feof($handler)){
            $line = fgets($handler);
            echo "$line <br>";
        }
        fclose($handler);
    ?>
    
</body>
</html>


