<?php
require 'auth.php';
require 'config.php';

$items = $pdo->query('SELECT * FROM inventory')->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory - Pet Shop Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .d-flex {
            display: flex;
        }

        .flex-shrink-0 {
            flex-shrink: 0;
        }

        .container-fluid {
            margin-left: 250px; /* Adjust according to sidebar width */
            padding: 20px;
        }

        @media (max-width: 768px) {
            .container-fluid {
                margin-left: 0;
                padding: 10px;
            }

            .flex-shrink-0 {
                width: 100%;
                height: auto;
            }
        }
    </style>

</head>
<body>
    <!-- Navbar with Logo -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="Pet_Shop_Logo.png" alt="Pet Shop Logo" width="220" height="90" class="d-inline-block align-text-top">
                Pet Shop
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                
                <form class="d-flex ms-auto" method="GET" action="search.php">
                    <input class="form-control me-2" type="search" placeholder="Search items" aria-label="Search" name="query">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>    
    <div class="d-flex">
        <?php include 'dashboard.php'; ?>
        <div class="container-fluid mt-3">
            <h2 class="text-center">Inventory</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($items as $item): ?>
                        <tr>
                            <td><?= $item['id'] ?></td>
                            <td><?= $item['name'] ?></td>
                            <td><?= $item['description'] ?></td>
                            <td><?= $item['quantity'] ?></td>
                            <td><?= $item['price'] ?></td>
                            <td><?= $item['category'] ?></td>
                            <td>
                                <a href="edit_item.php?id=<?= $item['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="delete_item.php?id=<?= $item['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
