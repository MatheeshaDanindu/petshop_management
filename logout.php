<?php
session_start(); // Start the session

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Optionally, clear the "Remember Me" cookie if it exists
if (isset($_COOKIE['remember_me_token'])) {
    setcookie('remember_me_token', '', time() - 3600, '/'); // Expire the cookie
}

// Redirect to the login page
header('Location: public/login.php');
exit();
?>
