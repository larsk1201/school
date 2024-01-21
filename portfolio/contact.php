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
        <h1>Contact</h1>
    </header>
    <?php
    include("nav.php");
    ?>
        <div class="container">
            <div class="portfolio-item">
                <?php
                $err = [];
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                   if (empty($_POST['naam'])) {
                    $err[] = "Forgot name";
                   }
                   if (empty($_POST['mail'])) {
                    $err[] = "Forgot email";
                   }
                   if (empty($_POST['type'])) {
                    $err[] = "Forgot type";
                   }
                   if (empty($_POST['message'])) {
                    $err[] = "Forgot message";
                   }
                   if (count($err) == 0) {
                    $naam = filter_input(INPUT_POST, 'naam', FILTER_SANITIZE_SPECIAL_CHARS);
                    if (!$mail = filter_input(INPUT_POST, 'mail', FILTER_VALIDATE_EMAIL)) {
                        $err[] = "Invalid email";
                    }
                    $type = filter_input(INPUT_POST, 'type');
                    $mailAll = filter_input(INPUT_POST, 'mailAll');
                    if ($mailAll) {
                        $typeValue = "Alle gebruikers worden hier van op de hoogte gebracht";
                    } else {
                        $typeValue = "Alle gebruikers worden niet op de hoogte gebracht.";
                    }
                    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);
                    if (count($err) == 0) {
                        echo "<p>Beste $naam,<br>Je gaat commentaar plaatsen als $type met het volgende e-mailadres: $mail.<br>
                        Het commentaar is als volgt: $message.<br>
                        $typeValue";
                    }
                   }
                }
                ?>
                <h2>Commentaar</h2>
                <hr>
                <form action="#" method="post">
                    <div>
                        <label for="naam">Naam:</label>
                        <input type="text" id="naam" name="naam">
                    </div>
                    <div>
                        <label for="mail">Email:</label>
                        <input type="text" id="mail" name="mail">
                    </div>
                    <div>
                        <label for="type">U bent:</label>
                        <input type="radio" name="type" value="student" checked>Student
                        <input type="radio" name="type" value="onderwijzer">Onderwijzer
                    </div>
                    <div>
                        <label for="message">Commentaar:</label>
                        <textarea type="text" id="message" name="message"></textarea>
                    </div>
                    <div>
                        <label for="mailAll">Stuur naar alle gebruikers?:</label>
                        <input type="checkbox" name="mailAll" value="yes">Ja
                    </div>
                    <div>
                        <input type="submit" id="submit" name="submit">
                    </div>
                </form>
                <?php
                if (count($err) > 0) {
                echo "<ul>";
                foreach ($err as $error) {
                    echo "<li>$error</li>";
                }
                echo "</ul>";
                }
                ?>
            </div>
        </div>
    <footer>
        <p>&copy; 2023 Lars Kuijer</p>
    </footer>
</body>
</html>
