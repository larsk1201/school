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
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <title>Edit Bug Report</title>
</head>
<body>
    <header>
        <h1>Edit Bug</h1>
    </header>
    <a href="bugreports.php">Back to Bug Reports</a>

    <?php
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $reportId = $_GET['id'];
        $stmt = $dbHandler->prepare("SELECT * FROM `bug_reports` WHERE id = :id");
        $stmt->bindParam(':id', $reportId, PDO::PARAM_INT);
        $stmt->execute();
        $report = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>
        <div class="editorcontainer">
            <form class="bugreportform" action="updatebug.php" method="post">
                <!-- Your form fields here pre-filled with report details -->
                <input type="hidden" name="id" value="<?php echo $report['id']; ?>">
                <label for="Product">Product Name</label>
                <input type="text" name="product" value="<?php echo $report['Product Name']; ?>" required>
                <label for="Version">Version</label>
                <input type="text" name="version" value="<?php echo $report['Version']; ?>" required>
                <label for="Hardware">Hardware</label>
                <input type="text" name="hardware" value="<?php echo $report['Hardware Type']; ?>" required>
                <label for="OS">OS</label>
                <input type="text" name="os" value="<?php echo $report['OS']; ?>" required>
                <label for="Frequency">Frequency</label>
                <input type="text" name="frequency" value="<?php echo $report['Frequency']; ?>" required>
                <label for="Solution">Solution</label>
                <input type="text" name="solution" value="<?php echo $report['Solution']; ?>" required>
                <!-- Other fields with values populated -->
                <input type="submit" value="Update">
            </form>
        </div>
        <?php
    } else {
        echo "<p>Invalid report ID</p>";
    }
    ?>

    <footer>
        <p>&copy; 2023 Lars Kuijer</p>
    </footer>
</body>
</html>
