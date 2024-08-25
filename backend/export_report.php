<?php
require '../config.php';
require '../auth.php';

// Set headers to force download the CSV file
header('Content-Type: text/csv');
header('Content-Disposition: attachment;filename=inventory_report.csv');

$output = fopen('php://output', 'w');

// Write the header of the CSV file
fputcsv($output, ['Name', 'Description', 'Quantity', 'Price', 'Category']);

// Fetch data from the database
$stmt = $pdo->query("SELECT inventory.*, categories.name AS category_name FROM inventory JOIN categories ON inventory.category = categories.name");

// Write each row of data to the CSV file
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    fputcsv($output, [$row['name'], $row['description'], $row['quantity'], $row['price'], $row['category_name']]);
}

// Close the file pointer and exit
fclose($output);
exit;
