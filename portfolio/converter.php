<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style4.css">
    <title>Temperatuurconverter</title>
</head>
<body>
    <header>
        <h1>Temperatuurconverter</h1>
    </header>
    <?php
    include("nav.php");
    ?>
    <div class="container">
        <h2>Temperatuurconverter</h2>
        <form method="post" action="">
            <!-- Een HTML-formulier om temperatuur en eenheid in te voeren -->
            <label for="temperature">Temperatuur:</label>
            <input type="text" name="temperature" id="temperature" required>
            <input type="radio" name="unit" value="celsius" checked> Celsius
            <input type="radio" name="unit" value="fahrenheit"> Fahrenheit
            <!-- Radio knoppen voor het selecteren van celsius of fahrenheit -->
            <input type="submit" name="convert" value="Converteren">
            <!-- Een knop om de conversie te starten -->
        </form>
        <?php
        if (isset($_POST['convert'])) {
            // Controleren of het formulier is ingediend
            $temperature = $_POST['temperature'];
            $unit = $_POST['unit'];
            if (is_numeric($temperature)) {  
                // Controleren of de invoer een getal is    
                if ($unit == 'celsius') {
                    // Als de eenheid Celsius is geselecteerd
                    $converted_temperature = celsiusToFahrenheit($temperature);
                    // Conversie van Celsius naar Fahrenheit
                    echo "<p>$temperature Celsius is gelijk aan $converted_temperature Fahrenheit.</p>";
                } elseif ($unit == 'fahrenheit') {
                    // Als de eenheid Fahrenheit is geselecteerd
                    $converted_temperature = fahrenheitToCelsius($temperature);
                    // Conversie van Fahrenheit naar Celsius
                    echo "<p>$temperature Fahrenheit is gelijk aan $converted_temperature Celsius.</p>";
                }
            } else {
                echo "<p>Error: geen numerieke waarde.</p>";
                // Geeft aan dat je een getal moet invoeren als de gebruiker dat niet deed
            }
        }
        function celsiusToFahrenheit($celsius) {
            // Functie om Celsius naar Fahrenheit om te zetten
            return ($celsius * 9/5) + 32;
        }
        function fahrenheitToCelsius($fahrenheit) {
            // Functie om Fahrenheit naar Celsius om te zetten
            return ($fahrenheit - 32) * 5/9;
        }
        ?>
    </div>
    <footer>
        <p>&copy; 2023 Lars Kuijer</p>
    </footer>
</body>
</html>
