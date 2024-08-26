<?php
// Start the session (if not already started)
session_start();

// Include your database connection file
require '../config.php'; // Adjust the path if necessary

// Define variables and set to empty values
$email = $error = $success = "";

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);

    // Check if the email is empty
    if (empty($email)) {
        $error = "Please enter your email address.";
    } else {
        // Check if the email exists in the database
        $query = "SELECT * FROM users WHERE email = :email";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            // Generate a unique password reset token
            $token = bin2hex(random_bytes(50));
            $token_expiry = date("Y-m-d H:i:s", strtotime("+1 hour"));

            // Store the token and expiry in the database
            $updateQuery = "UPDATE users SET reset_token = :token, reset_token_expiry = :expiry WHERE email = :email";
            $stmt = $pdo->prepare($updateQuery);
            $stmt->bindParam(':token', $token);
            $stmt->bindParam(':expiry', $token_expiry);
            $stmt->bindParam(':email', $email);

            if ($stmt->execute()) {
                // Generate a reset link
                $reset_link = "http://localhost/Petshop/frontend/reset_password.php?token=" . $token;

                // Placeholder for sending email (to be implemented)
                // mail($email, "Password Reset", "Click on this link to reset your password: $reset_link");

                // For demonstration, show the link on the page
                $_SESSION['success'] = "Password reset link has been sent to your email. <br><a href='$reset_link'>Click here to reset your password</a>";
            } else {
                $error = "Something went wrong. Please try again later.";
            }
        } else {
            $error = "No account found with that email address.";
        }
    }

    // Redirect or display message
    if ($error) {
        $_SESSION['error'] = $error;
        header('Location: ../public/forgot_password.php');
        exit();
    }

    if ($success) {
        $_SESSION['success'] = $success;
        header('Location: ../public/forgot_password.php');
        exit();
    }
} else {
    // If not a POST request, redirect to the forgot password page
    header('Location: ../public/forgot_password.php');
    exit();
}
