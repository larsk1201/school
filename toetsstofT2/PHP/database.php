<?php
    try{
        $dbHandler = new PDO("mysql:host=mysql;dbname=database", "root", "qwerty");
    } catch(Exception $ex){
        echo $ex;
    } // Use trycatch around all sql stuff

    $stmt = $dbHandler -> prepare("SQL STATEMENT");
    // Use variables as :varname inside the SQL statements then use line below to connect the text to a value
    $stmt->bindParam(":varname", $value, PDO::PARAM_STR);
    $stmt->execute(); 
    // To go through all data collected
    while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
        // use $result here, result becomes false when no more results
    }
    $stmt->rowCount(); // Gives the amount of rows collected by the statement
    $stmt->closeCursor(); // Close the statement

    $dbHandler = null;

    // Password encrypting commands
    password_hash($pass, PASSWORD_BCRYPT); // Get an encrypted version of the password
    password_verify($insertedPass, $passHash); // Check if a newly inserted password is equal to the given hash
?>