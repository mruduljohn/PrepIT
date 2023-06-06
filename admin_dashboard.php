<?php
// Check if the user is an admin
// You can implement your own authentication and authorization logic here

session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page or display an error message
    header('Location: login.html');
    exit();
}

// Check if the logged-in user is an admin
$isAdmin = false; // Assuming the admin user is stored in a separate table

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

// Check if the logged-in user is an admin
$username = $_SESSION['username'];

$sql = "SELECT * FROM admin_users WHERE username='$username'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $isAdmin = true;
}

if (!$isAdmin) {
    // Redirect to a login page or display an error message
    header('Location: login.html');
    exit();
}

// Include the file upload form and logic
include 'upload_notes.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
    <h1>Welcome to the Admin Dashboard</h1>
    
    <!-- File Upload Form -->
    <form action="upload_notes.php" method="POST" enctype="multipart/form-data">
        <label for="pdf_file">Select a PDF file to upload:</label>
        <input type="file" id="pdf_file" name="pdf_file">
        <button type="submit">Upload</button>
    </form>
</body>
</html>
