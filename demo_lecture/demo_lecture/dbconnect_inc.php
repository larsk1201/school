<?php
$dbHandler = null; //Create an empty variable that will contain the handler
try{
    $dbHandler = new PDO("mysql:host=mysql;dbname=login_demo;charset=utf8", "root", "qwerty"); //Connect to the database with the provided connectstring
}catch(Exception $ex){//If something goes wrong, catch the error and print it
    printError($ex);
}

function printError(String $err){
    echo "<h1>The following error occured</h1>
          <p>{$err}</p>";
          exit;
}