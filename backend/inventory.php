<?php
require '../auth.php';
require '../config.php';

// Use prepared statements to fetch inventory data with category names
$stmt = $pdo->prepare('SELECT i.*, c.name AS category FROM inventory i LEFT JOIN categories c ON i.category = c.name');
$stmt->execute();
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);
