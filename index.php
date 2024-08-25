<?php
require 'auth.php';
require 'config.php';

$stmt = $pdo->query("SELECT inventory.*, categories.name AS category_name FROM inventory JOIN categories ON inventory.category = categories.id");
$items = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Pet Shop Management</title>
    
    <!-- Include Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <style>
        h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 2.5rem;
            font-weight: 700;
            color: #343a40; /* Dark Gray */
            text-align: center;
            margin-top: 20px; 
        }
        .card {
            border-radius: 25px;
            color: white; 
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }

        .card-inventory {
            height: 200px;
            background-color: #007bff; /* Blue */
        }
        .card-add-item {
            height: 200px;
            background-color: #28a745; /* Green */
        }
        .card-reports {
            height: 200px;
            background-color: #17a2b8; /* Teal */
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }
        .card-text {
            color: black;
            font-size: 1rem;
        }
        .card-icon {
            font-size: 3rem;
            color: white;
            margin-bottom: 1rem;
        }
        
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="public/images/Pet_Shop_Logo.png" alt="Pet Shop Logo" width="220" height="90" class="d-inline-block align-text-top">
            </a>
            <a class="navbar-brand" href="#" style="font-size: 24px; font-family: 'Arial', sans-serif;">Pet Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Search Bar -->
            <form class="d-flex ms-auto" method="GET" action="search.php">
                <input class="form-control me-2" type="search" placeholder="Search items" aria-label="Search" name="query">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h1 class="text-center">Welcome to Pet Shop Management System</h1>
        <div class="row mt-5">
            <!-- Inventory Items -->
            <div class="col-md-4 mb-4">
                <div class="card text-center shadow-sm card-inventory">
                    <div class="card-body">
                        <div class="card-icon">
                            <i class="bi bi-box-seam"></i>
                        </div>
                        <h4 class="card-title">Inventory Items</h4>
                        <p class="card-text">Manage your inventory items efficiently</p>
                        <a href="public/inventory.php" class="btn btn-light">View Inventory</a>
                    </div>
                </div>
            </div>
            <!-- Add New Item -->
            <div class="col-md-4 mb-4">
                <div class="card text-center shadow-sm card-add-item">
                    <div class="card-body">
                        <div class="card-icon">
                            <i class="bi bi-plus-circle"></i>
                        </div>
                        <h5 class="card-title">Add New Item</h5>
                        <p class="card-text">Add new items to your inventory seamlessly</p>
                        <a href="public/add_item.php" class="btn btn-light">Add Item</a>
                    </div>
                </div>
            </div>
            <!-- Generate Reports -->
            <div class="col-md-4 mb-4">
                <div class="card text-center shadow-sm card-reports">
                    <div class="card-body">
                        <div class="card-icon">
                            <i class="bi bi-file-earmark-bar-graph"></i>
                        </div>
                        <h5 class="card-title">Generate Reports</h5>
                        <p class="card-text">Generate detailed inventory reports</p>
                        <a href="public/report.php" class="btn btn-light">Generate Reports</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
