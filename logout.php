<?php
session_start();

// Clear all session variables
$_SESSION = [];

// Regenerate session ID to prevent fixation attacks
session_regenerate_id(true);

// Destroy the session
session_destroy();

// Redirect to login page
header('Location: public/login.php');
exit();
?>
