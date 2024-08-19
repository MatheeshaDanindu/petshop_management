<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // If not, redirect them to the login page
    header('Location: login.php');
    exit();
}
?>
