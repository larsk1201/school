<?php
$dbHandler = null;
try {
    $dbHandler = new PDO("mysql:host=mysql;dbname=bugreport_db;charset=utf8", "root", "qwerty");
} catch (Exception $ex) {
    printError($ex);
}

function printError(String $err)
{
    echo "<h1>The following error occurred</h1>
          <p>{$err}</p>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $id = $_POST['id'];
        $productName = $_POST["product"];
        $version = $_POST["version"];
        $hardwareType = $_POST["hardware"];
        $os = $_POST["os"];
        $frequency = $_POST["frequency"];
        $solution = $_POST["solution"];

        $stmt = $dbHandler->prepare("UPDATE `bug_reports` 
                                     SET `Product Name` = :productName, 
                                         `Version` = :version, 
                                         `Hardware Type` = :hardwareType, 
                                         `OS` = :os, 
                                         `Frequency` = :frequency, 
                                         `Solution` = :solution 
                                     WHERE `id` = :id");

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':productName', $productName, PDO::PARAM_STR);
        $stmt->bindParam(':version', $version, PDO::PARAM_STR);
        $stmt->bindParam(':hardwareType', $hardwareType, PDO::PARAM_STR);
        $stmt->bindParam(':os', $os, PDO::PARAM_STR);
        $stmt->bindParam(':frequency', $frequency, PDO::PARAM_STR);
        $stmt->bindParam(':solution', $solution, PDO::PARAM_STR);

        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            echo "Bug report updated successfully! <a href='bugreports.php'>Go back to bug reports.</a>";
        } else {
            echo "No changes made to the bug report. <a href='bugreports.php'>Go back to bug reports.</a>";
        }
    } catch (Exception $ex) {
        printError($ex);
    }
} else {
    echo "Invalid request method!";
}
?>
