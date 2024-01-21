<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Validatie</title>
    </head>
    <body>
        <form action="#" method="post">
            <input type="email" name="email" id="email">
            <input type="text" name="fname" id="fname">
        </form>
        <?php 
            // Form validation:
            // empty() check
            // filter_input(INPUT_POST, 'email', (FILTER_VALIDATE_EMAIL / FILTER_SANITIZE_SPECIAL_CHARS))
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(empty($_POST["email"])){
                    if(!$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)){
                        echo "$email";
                    }
                    $name = filter_input(INPUT_POST, "fname", FILTER_SANITIZE_SPECIAL_CHARS);

                    // Use the variables here
                }
                else{
                    echo "Some data is missing, please fill in all boxes";
                }
            }
        ?>
    </body>
</html>