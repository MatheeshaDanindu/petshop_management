<?php
require '../config.php'; // Adjusted path if config.php is in the parent directory

session_start(); // Ensure session management is started

$error = null; // Initialize the error variable

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $remember_me = isset($_POST['remember_me']);

    // Prepare SQL query to select the user with the given username
    $stmt = $pdo->prepare('SELECT * FROM users WHERE username = :username');
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Verify the password
        if (password_verify($password, $user['password_hash'])) {
            // Password is correct, start the session and redirect
            $_SESSION['user_id'] = $user['id'];
            
            if ($remember_me) {
                // Set a cookie for "remember me" functionality
                setcookie('user_id', $user['id'], time() + (86400 * 30), '/'); // 30 days
            }
            
            header('Location: ../index.php');
            exit();
        } else {
            $error = "Invalid username or password."; // Set error message for invalid password
        }
    } else {
        $error = "Invalid username or password."; // Set error message for invalid username
    }
}
?>
