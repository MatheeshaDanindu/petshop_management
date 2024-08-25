<?php
require '../backend/report.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports - Pet Shop Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="d-flex">
        <?php include 'dashboard.php'; ?>
        <div class="container mt-5">
            <h2 class="text-center">Inventory Report</h2>
            <table class="table table-bordered mt-4">
                <thead>
                    <tr>
                        <th>Total Items</th>
                        <th>Total Quantity</th>
                        <th>Total Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $report_data['total_items'] ?></td>
                        <td><?= $report_data['total_quantity'] ?></td>
                        <td>$<?= $report_data['total_value'] ?></td>
                    </tr>
                </tbody>
            </table>
            <a href="export_report.php" class="btn btn-primary">Export CSV</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
