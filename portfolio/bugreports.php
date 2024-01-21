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
ob_start();
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
        <h1>Bug reports</h1>
    </header>
    <table>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Version</th>
            <th>Hardware Type</th>
            <th>OS</th>
            <th>Frequency</th>
            <th>Solution</th>
            <th>Edit Link</th>
        </tr>
        <?php
            $stmt = $dbHandler->prepare("SELECT * FROM `bug_reports`");
            $stmt->execute();
            while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
                echo "<tr>";
                foreach ($result as $key => $value) {
                    echo "<td>$value</td>";
                }
                $id = $result["id"];
                echo "<td><a href='bugeditor.php?id=$id'>Edit</a>
                <a href='bugreports.php?del=$id'>Delete</a></td></tr>";
            }
        ?>
        <?php
        if (isset($_GET['del'])) {
            $deleteId = $_GET['del'];
            try {
                $stmt = $dbHandler->prepare("DELETE FROM `bug_reports` WHERE id = :id");
                $stmt->bindParam(':id', $deleteId, PDO::PARAM_INT);
                $stmt->execute();
                echo "Bug report with ID: $deleteId has been deleted successfully!";
                header("Location: bugreports.php");
                exit();
            } catch (Exception $ex) {
                printError($ex);
            }
        }
        ?>
    </table>
    <a href="bugreport.php">Report more bugs!!!!!</a>
    <footer class="bugfooter">
        <p>&copy; 2023 Lars Kuijer</p>
    </footer>
</body>
</html>
