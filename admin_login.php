<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['admin_username'])) {
    // Redirect to admin dashboard if already logged in
    header("Location: admin_dashboard.php");
    exit();
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Establish a database connection
    $servername = "localhost";
    $username = "blablaadmin";
    $password = "bla123bla456";
    $dbname = "prepit_users";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if username and password are provided
    if (empty($_POST['admin_username']) || empty($_POST['admin_password'])) {
        echo "Please enter username and password.";
        exit();
    }

    // Get form data
    $admin_username = mysqli_real_escape_string($conn, $_POST['admin_username']);
    $admin_password = mysqli_real_escape_string($conn, $_POST['admin_password']);

    // Query the database
    $sql = "SELECT * FROM admin_users WHERE username='$admin_username' AND password='$admin_password'";
    $result = mysqli_query($conn, $sql);

    // Check for query errors
    if (!$result) {
        die("Query error: " . mysqli_error($conn));
    }

    // Check if admin exists
    if (mysqli_num_rows($result) == 1) {
        // Admin authenticated, set session variable
        $_SESSION['admin_username'] = $admin_username;

        // Redirect to admin dashboard
        header("Location: admin_dashboard.php");
        exit();
    } else {
        // Admin authentication failed, show error message
        echo "Invalid username or password.";
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
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
