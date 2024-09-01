<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Pet Shop Management</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/dashboard.css">


</head>
<body>
    <div class="sidebar">
        <div class="sidebar-content">
            <img src="images/Pet_Shop_Logo.png" alt="Pet Shop Logo" class="img-fluid">
            <button class="toggle-btn btn btn-link" onclick="toggleSidebar()">
                <i id="toggle-icon" class="bi bi-chevron-left"></i>
            </button>
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="../index.php" class="nav-link"><i class="bi bi-house-door"></i><span>Home</span></a>
            </li>
            <li class="nav-item">
                <a href="inventory.php" class="nav-link"><i class="bi bi-box-seam"></i><span>Inventory</span></a>
            </li>
            <li class="nav-item">
                <a href="add_item.php" class="nav-link"><i class="bi bi-plus-circle"></i><span>Add Item</span></a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="userManagementDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-gear"></i><span>User Management</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="userManagementDropdown">
                    <li><a href="register.php" class="dropdown-item">Add User</a></li>
                    <li><a href="remove_user.php" class="dropdown-item">Remove User</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="report.php" class="nav-link"><i class="bi bi-file-earmark-bar-graph"></i><span>Reports</span></a>
            </li>
            <li class="nav-item">
                <a href="../logout.php" class="nav-link"><i class="bi bi-box-arrow-right"></i><span>Logout</span></a>
            </li>
        </ul>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Sidebar Toggle Script -->
    <script>
        function toggleSidebar() {
            var sidebar = document.querySelector('.sidebar');
            sidebar.classList.toggle('collapsed');

            var toggleIcon = document.getElementById('toggle-icon');
            if (sidebar.classList.contains('collapsed')) {
                toggleIcon.classList.remove('bi-chevron-left');
                toggleIcon.classList.add('bi-chevron-right');
            } else {
                toggleIcon.classList.remove('bi-chevron-right');
                toggleIcon.classList.add('bi-chevron-left');
            }
        }
    </script>
</body>
</html>
