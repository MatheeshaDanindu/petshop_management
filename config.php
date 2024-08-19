<?php
$host = '127.0.0.1';
$db   = 'petshop_db';  // Use the database name you created
$user = 'root';        // Default XAMPP username is 'root'
$pass = '';            // Default XAMPP password is empty

// Set DSN (Data Source Name)
$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

try {
    // Create a PDO instance (connect to the database)
    $pdo = new PDO($dsn, $user, $pass);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // If there's an error, show it
    die("Database connection failed: " . $e->getMessage());
}
?>
