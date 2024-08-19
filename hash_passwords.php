<?php
require 'config.php';

// Fetch all users
$stmt = $pdo->query("SELECT id, password_hash FROM users");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Loop through each user and update the password to its hashed version
foreach ($users as $user) {
    $hashed_password = password_hash($user['password_hash'], PASSWORD_DEFAULT);

    // Update the user's password in the database
    $update_stmt = $pdo->prepare("UPDATE users SET password_hash = :password WHERE id = :id");
    $update_stmt->execute(['password' => $hashed_password, 'id' => $user['id']]);
}

echo "Passwords have been hashed and updated successfully.";
?>
