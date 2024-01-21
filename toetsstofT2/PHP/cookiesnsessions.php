<?php
    // Cookies only exist after a refresh
    setcookie("name", $value, $expirationTime + time()); // Time in seconds because unix timestamp is in seconds
    setcookie("name", $value, 0); // Delete a cookie
    $_COOKIE["name"]; // Get a cookie

    session_start(); // start/open a session on this page so reuse on every page
    $_SESSION["username"] = "test"; // Set a session variable
    $username = $_SESSION["username"]; // Get a session variable
?>