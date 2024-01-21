<?php
$msgs[] = null;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if($searchString = filter_input(INPUT_POST, "keyword", FILTER_SANITIZE_SPECIAL_CHARS)){
        $searchString = "%{$searchString}%";
        $dbHandler = null; 
        try{
            $dbHandler = new PDO("mysql:host=mysql;dbname=dbe_demo;charset=utf8", "root", "qwerty");
        }catch(Exception $ex){
            printError($ex);
        }

        function printError(String $err){
            echo "<h1>The following error occured</h1>
                <p>{$err}</p>";
                exit;
        }

        if($dbHandler){
            try{
                $stmt = $dbHandler->prepare("SELECT *
                                             FROM `songs`
                                             WHERE `songname` LIKE :searchstring"
                                        );
                $stmt->bindParam("searchstring", $searchString, PDO::PARAM_STR);
                $stmt->execute();     
            }catch(Exception $ex) {
                printError($ex);
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Example Database Connection</title>
    </head>
    <body>
    <?php
        if(count($msgs) > 0){
            foreach ($msgs as $msg) {
                echo $msg;
            }
        }
    ?>
        <form action="<?= htmlentities($_SERVER["PHP_SELF"]) ?>" method="post">
            <input type="text" name="keyword">
            <input type="submit" name="submit" value="Search">
        </form>
<?php
        if(isset($stmt)){
            if($stmt->rowCount() > 0){
                echo "<h2>Results</h2>";
                echo "<table border='1'>";
                echo "<th style='text-align: left;'>Name</th>";
                while ($result = $stmt->fetch()) 
                {
                    echo "<tr>";
                    echo "<td>" . $result["songname"] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }else{
                echo "No results";
            }
        }
?>
    </body>
</html>

