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
        <h1>Distance Calculator</h1>
    </header>
    <?php
    include("nav.php");
    ?>
    <div class="container">
    <?php
    $distances = array(
        "Berlin" => array(
            "Berlin" => 0,
            "Moscow" => 1607.99,
            "Paris" => 876.96,
            "Prague" => 280.34,
            "Rome" => 1181.67
        ),
        "Moscow" => array(
            "Berlin" => 1607.99,
            "Moscow" => 0,
            "Paris" => 2484.92,
            "Prague" => 1664.04,
            "Rome" => 2374.26
        ),
        "Paris" => array(
            "Berlin" => 876.96,
            "Moscow" => 641.31,
            "Paris" => 0,
            "Prague" => 885.38,
            "Rome" => 1105.76
        ),
        "Prague" => array(
            "Berlin" => 280.34,
            "Moscow" => 1664.04,
            "Paris" => 885.38,
            "Prague" => 0,
            "Rome" => 922
        ),
        "Rome" => array(
            "Berlin" => 1181.67,
            "Moscow" => 2374.26,
            "Paris" => 1105.76,
            "Prague" => 922,
            "Rome" => 0
        )
    );

    // Functie om de dropdown met steden te genereren
    function generateDropdown($distances) {
        $options = '';
        foreach ($distances as $city => $cityDistances) {
            $options .= "<option value='$city'>$city</option>";
        }
        return $options;
    }

    // Controleren of het formulier is verzonden 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Controleren of beide steden zijn geselecteerd
        if (isset($_POST['city1']) && isset($_POST['city2'])) {
            $city1 = $_POST['city1'];
            $city2 = $_POST['city2'];

            // Afstand berekenen als steden verschillend zijn
            if ($city1 != $city2) {
                $distance = $distances[$city1][$city2];
                echo "The distance between $city1 and $city2 is $distance kilometers.";
            } else {
                echo "Please select different cities.";
            }
        } else {
            echo "Please select two cities.";
        }
    }
    ?>

    <!-- Het HTML-formulier -->
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>Select City 1:</label>
        <select name="city1">
            <?php echo generateDropdown($distances); ?>
        </select>
        <br><br>
        <label>Select City 2:</label>
        <select name="city2">
            <?php echo generateDropdown($distances); ?>
        </select>
        <br><br>
        <input type="submit" value="Calculate Distance">
    </form>
    </div>
    <footer>
        <p>&copy; 2023 Lars Kuijer</p>
    </footer>
</body>
</html>
