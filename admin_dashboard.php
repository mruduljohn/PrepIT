<?php
session_start();

// Check if the user is already logged in
if (!isset($_SESSION['admin_username'])) {
    // If not logged in, redirect to the admin login page
    header("Location: admin_login.php");
    exit();
}

// Check if the user clicked the logout button
if (isset($_GET['logout'])) {
    // Destroy the session and redirect to the admin login page
    session_destroy();
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/png" href="images/header/favicon.png" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f1f1f1;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            height: 300px;
            width: 500px;
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }

        .card-title {
            color: #333333;
            font-size: 24px;
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body text-center">
                <h1 class="card-title">Welcome, <?php echo $_SESSION['admin_username']; ?></h1>

                <div class="text-center">
                    <a href="upload_notes.php" class="btn btn-primary btn-lg mt-4">Upload Notes</a>
                </div>

                <div class="text-center">
                    <a href="comment_view.php" class="btn btn-primary btn-lg mt-4">View comments</a>
                </div>

                <div class="text-center">
                    <a href="?logout=1" class="btn btn-danger btn-lg mt-3">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
