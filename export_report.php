<?php
require 'auth.php';
require 'config.php';

header('Content-Type: text/csv');
header('Content-Disposition: attachment;filename=inventory_report.csv');

$output = fopen('php://output', 'w');
fputcsv($output, ['Name', 'Description', 'Quantity', 'Price', 'Category']);

$stmt = $pdo->query("SELECT items.*, categories.name AS category_name FROM items JOIN categories ON items.category_id = categories.id");
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    fputcsv($output, [$row['name'], $row['description'], $row['quantity'], $row['price'], $row['category_name']]);
}

fclose($output);
exit;
