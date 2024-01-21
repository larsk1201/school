<?php
$dbHandler = null; 
try{    
    $dbHandler = new PDO("mysql:host=mysql;dbname=bugreport_db;charset=utf8", "root", "qwerty");
}catch(Exception $ex){
    printError($ex);
}
function printError(String $err){
    echo "<h1>The following error occured</h1>
          <p>{$err}</p>";
}
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
        <h1>Bug report</h1>
    </header>
    <?php
    include("nav.php");
    ?>
    </h2>
    <div class="container">
        <form class="bugreportform" action="bugreport.php" method="post">
            <label for="Product">Product</label>
            <input type="text" name="product" required>
            <label for="Version">Version</label>
            <input type="text" name="version" required>
            <label for="Hardware">Hardware</label>
            <input type="text" name="hardware" required>
            <label for="OS">OS</label>
            <input type="text" name="os" required>
            <label for="Frequency">Frequency</label>
            <input type="text" name="frequency" required>
            <label for="Solution">Solution</label>
            <input type="text" name="solution" required>
            <input type="submit">
        </form>
        <h2><a href="bugreports.php">View bug reports</a>
    </div>
    <?php
        
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        try{
            $stmt = $dbHandler->prepare("INSERT INTO `bug_reports` (`Product Name`, `Version`, `Hardware Type`, `OS`, `Frequency`, `Solution`) 
                                        VALUES (:productName, :version, :hardwareType, :os, :frequency, :solution);"
                                    );
            $productName = $_POST["product"];
            $version = $_POST["version"];
            $hardwareType = $_POST["hardware"];
            $os = $_POST["os"];
            $frequency = $_POST["frequency"];
            $solution = $_POST["solution"];
            $stmt->bindParam("productName", $productName, PDO::PARAM_STR);
            $stmt->bindParam("version", $version, PDO::PARAM_INT);
            $stmt->bindParam("hardwareType", $hardwareType, PDO::PARAM_STR);
            $stmt->bindParam("os", $os, PDO::PARAM_STR);
            $stmt->bindParam("frequency", $frequency, PDO::PARAM_STR);
            $stmt->bindParam("solution", $solution, PDO::PARAM_STR);
            $stmt->execute(); 
            echo "<h3 class='executed'>Query executed! {$stmt->rowCount()} row(s) affected</h3>";
            $stmt->closeCursor();
        }catch(Exception $ex) {
            printError($ex);
        }
    } 
    ?>
    <footer>
        <p>&copy; 2023 Lars Kuijer</p>
    </footer>
</body>
</html>
