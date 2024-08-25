<?php
require '../auth.php';
require '../config.php';

// Fetch report data
$total_items = $pdo->query("SELECT COUNT(*) FROM inventory")->fetchColumn();
$total_quantity = $pdo->query("SELECT SUM(quantity) FROM inventory")->fetchColumn();
$total_value = $pdo->query("SELECT SUM(quantity * price) FROM inventory")->fetchColumn();

// Store the data in an array
$report_data = [
    'total_items' => $total_items,
    'total_quantity' => $total_quantity,
    'total_value' => number_format($total_value, 2)
];

// Return the data to the frontend
return $report_data;
?>
