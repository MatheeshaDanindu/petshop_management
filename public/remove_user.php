<?php
// require '../auth.php';
require '../config.php';

// Fetch all users from the database
try {
    $stmt = $pdo->query("SELECT username, email, phone_number FROM users");
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    error_log("Error fetching users: " . $e->getMessage());
    $users = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove User - Pet Shop Management</title>

    <!-- Include Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/remove_user.css">

</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <!-- Success or Error Messages -->
                <?php if (isset($_GET['success'])): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo htmlspecialchars($_GET['success']); ?>
                    </div>
                <?php elseif (isset($_GET['error'])): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo htmlspecialchars($_GET['error']); ?>
                    </div>
                <?php endif; ?>

                <h1>Remove User</h1>

                

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($user['username']); ?></td>
                                <td><?php echo htmlspecialchars($user['email']); ?></td>
                                <td><?php echo htmlspecialchars($user['phone_number']); ?></td>
                                <td>
                                    <form action="../backend/remove_user.php" method="POST" style="display:inline;" onsubmit="return confirmRemove();">
                                        <input type="hidden" name="username" value="<?php echo htmlspecialchars($user['username']); ?>">
                                        <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                    <a href="register.php" class="btn btn-primary">
                        Add User
                    </a>
                    
                    <a href="../index.php" class="btn btn-secondary btn-back">
                        <i class="bi bi-arrow-left"></i> Back to Home
                    </a>

            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function confirmRemove() {
            return confirm('Are you sure you want to remove this user?');
        }

        document.addEventListener('DOMContentLoaded', function () {
            const alert = document.querySelector('.alert');
            if (alert) {
                alert.style.display = 'block';
                setTimeout(() => {
                    alert.style.display = 'none';
                }, 5000); // Hide after 5 seconds
            }
        });
    </script>
</body>
</html>
