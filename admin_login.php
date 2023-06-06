<?php
session_start();

// Establish a database connection
$servername = "localhost";
$username = "blablaadmin";
$password = "bla123bla456";
$dbname = "admin_users";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if username and password are provided
    if (empty($_POST['admin_username']) || empty($_POST['admin_password'])) {
        echo "Please enter username and password.";
        exit();
    }

    // Get form data
    $admin_username = mysqli_real_escape_string($conn, $_POST['admin_username']);
    $admin_password = mysqli_real_escape_string($conn, $_POST['admin_password']);

    // Query the database
    $sql = "SELECT * FROM admin_users WHERE admin_username='$admin_username' AND admin_password='$admin_password'";
    $result = mysqli_query($conn, $sql);

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
}

mysqli_close($conn);
?>
