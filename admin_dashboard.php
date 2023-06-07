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
    header("Location: admin_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['admin_username']; ?></h1>

    <!-- Add your dashboard content here -->

    <a href="?logout=1">Logout</a>
</body>
</html>
