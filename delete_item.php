<?php
require 'auth.php';
require 'config.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM inventory WHERE id = ?");
$stmt->execute([$id]);

header('Location: inventory.php');
?>
