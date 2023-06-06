<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['admin_username'])) {
    // Display the file upload form
    include 'upload_notes.php';
    exit();
}

// If not logged in, display the admin login form
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
    <h1>Admin Login</h1>

    <!-- Admin Login Form -->
    <form action="admin_login.php" method="POST">
        <label for="admin_username">Username:</label>
        <input type="text" id="admin_username" name="admin_username" required>

        <label for="admin_password">Password:</label>
        <input type="password" id="admin_password" name="admin_password" required>

        <button type="submit">Login</button>
    </form>
</body>
</html>
