<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Link actions</h1>
    <p><a href="index.php?action=action1">Link for action 1</a></p>
    <p><a href="index.php?action=action2">Link for action 2</a></p>
    <p><a href="index.php?action=action3">Link for action 3</a></p>

    <h2>Output</h2>
    <?php
    /*  What happens on line 22? 
        First we access the GET parameter by the name of "action" and sanitize it for any special characters (<>{}[] and the likes)
        Second we append the output of the filter_input function to the variable $action
        Third we check if the variable $action is NOT empty (null and "" are empty values)
        If $action is not empty, we continue. Otherwise go to the else clause
    */
    if(!empty($action = filter_input(INPUT_GET, "action", FILTER_SANITIZE_SPECIAL_CHARS))){
        
        $output;
        switch ($action) {
            case 'action1':
                $output = "Action 1 has been pressed!";
                break;
            case 'action2':
                $output = "Action 2 has been pressed!";
                break;
            case 'action3':
                $output = "Action 3 has been pressed!";
                break;
            default:
                $output = "An unexpected action has been passed, did you change the parameter?";
                break;
        }
        echo "<p>$output</p>";
    }else{
        echo "<p>No action has been pressed</p>";
    }
    ?>
</body>
</html>