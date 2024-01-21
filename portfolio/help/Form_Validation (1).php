    <!DOCTYPE HTML>
<html>

<head>
    <title>Form validation</title>
    <meta charset="UTF-8">
</head>

<body>
    <?php
    $err = [];
    //Only start the code when the submit button is pressed
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        /* Check if all fields are filled in
         * This can be done in one single line, combining all the conditions
         * A different way to handle it is to 'step into' every condition
         * This allows you to 'customize' the error messages.
         */

        // Checking if our form entries are empty
        if (empty($_POST['name'])) {
            $err[] = "Forgot name"; //and add a message to the err array
        }
        if (empty($_POST['email'])) {
            $err[] = "Forgot email";
        }
        if (empty($_POST['message'])) {
            $err[] = "Forgot message";
        }
        if (empty($_POST['number'])) {
            $err[] = "Forgot number";
        }

        //If there are no items present in the err array, we can assume there are no empty entries
        if (count($err) == 0) { 
            /*
             * Using filter input to retrieve the information from the form
             * allows you to place a sanitization or validation filter to check the data integrity
             * Check php.net for all available filters
             */
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);

            //We can also do further checking on data integrity
            if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
                $err[] = "Invalid email";
            }

            $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);
            if (!$noc = filter_input(INPUT_POST, "number", FILTER_VALIDATE_INT)) {
                $err[] = "Invalid number of characters";
            }

            //If no other errors occured during data integrity checks, we can finish
            if (count($err) == 0) {
                echo "<h2>FORM SENT</h2>";
                echo "$name <br>";
                echo "$email <br>";
                echo "$message <br>";
                echo "$noc <br>";
            }
        }
    }
    ?>
    <h1>Form Validation</h1>
    <hr>
    <?php
    //If there are items in the err array, we can print the messages in it
    if (count($err) > 0) {
        echo "<ul>";
        foreach ($err as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    }
    ?>
    <form action="#" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" />
        <br>
        <label for="email">Email:</label>
        <input type="email" placeholder="yourname@host.nl" name="email" />
        <br>
        <label for="message">Message:</label>
        <textarea name="message"></textarea>
        <br>
        <label for="number">Number of Characters:</label>
        <input type="number" name="number" />
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>


</body>

</html>