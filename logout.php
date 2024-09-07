<?php
if (session_id() == '') {
    session_start(); // Start the session if it hasn't been started
}

// Unset all session variables
$_SESSION = [];

// Destroy the session
session_destroy();

// Redirect to the home page
header("Location: index.php"); // Change 'index.php' to your home page
exit(); // Ensure no further code is executed
