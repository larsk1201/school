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

if ($dbHandler) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        try {
            $productName = $_POST['productName'];
            $version = $_POST['version'];
            $hardwareType = $_POST['hardwareType'];
            $os = $_POST['os'];
            $frequency = $_POST['frequency'];
            $solution = $_POST['solution'];

            $stmt = $dbHandler->prepare("INSERT INTO bugreport_table (`Product Name`, `Version`, `Hardware Type`, `OS`, `Frequency`, `Solution`) 
                                         VALUES (:productName, :version, :hardwareType, :os, :frequency, :solution)");
            $stmt->bindParam(":productName", $productName, PDO::PARAM_STR);
            $stmt->bindParam(":version", $version, PDO::PARAM_STR);
            $stmt->bindParam(":hardwareType", $hardwareType, PDO::PARAM_STR);
            $stmt->bindParam(":os", $os, PDO::PARAM_STR);
            $stmt->bindParam(":frequency", $frequency, PDO::PARAM_STR);
            $stmt->bindParam(":solution", $solution, PDO::PARAM_STR);
            $stmt->execute();

            echo "Bug report submitted successfully!";
            $stmt->closeCursor();
        } catch (Exception $ex) {
            printError($ex);
        }
    }
}
?>
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

if ($dbHandler) {
    try {
        $stmt = $dbHandler->query("SELECT * FROM bugreport_table");
        $bugs = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
        printError($ex);
    }
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <title>Bug Reports</title>
</head>
<body>
    <header>
        <h1>Bug Reports</h1>
    </header>
    <?php include("nav.php"); ?>
    <div class="container">
        <div class="bug-reports">
            <h2>All Bug Reports</h2>
            <table>
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Version</th>
                        <th>Hardware Type</th>
                        <th>OS</th>
                        <th>Frequency</th>
                        <th>Solution</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($bugs) && !empty($bugs)) {
                        foreach ($bugs as $bug) {
                            echo "<tr>";
                            echo "<td>" . $bug['Product Name'] . "</td>";
                            echo "<td>" . $bug['Version'] . "</td>";
                            echo "<td>" . $bug['Hardware Type'] . "</td>";
                            echo "<td>" . $bug['OS'] . "</td>";
                            echo "<td>" . $bug['Frequency'] . "</td>";
                            echo "<td>" . $bug['Solution'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>No bug reports found.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Lars Kuijer</p>
    </footer>
</body>
</html>
