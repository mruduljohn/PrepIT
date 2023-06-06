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

// Handle file upload
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if a file is selected
    if ($_FILES['pdf_file']['error'] == UPLOAD_ERR_NO_FILE) {
        echo "Please select a PDF file.";
        exit();
    }

    // Get file details
    $file_name = $_FILES['pdf_file']['name'];
    $file_size = $_FILES['pdf_file']['size'];
    $file_tmp = $_FILES['pdf_file']['tmp_name'];
    $file_type = $_FILES['pdf_file']['type'];

    // Check file extension (allow only PDF files)
    $allowed_extensions = array('pdf');
    $file_extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    if (!in_array($file_extension, $allowed_extensions)) {
        echo "Only PDF files are allowed.";
        exit();
    }

    // Move the uploaded file to a specific directory
    $upload_directory = "uploads/";
    $file_path = $upload_directory . $file_name;
    move_uploaded_file($file_tmp, $file_path);

    // Store file details in the database
    $sql = "INSERT INTO notes (file_name, file_path) VALUES ('$file_name', '$file_path')";
    if (mysqli_query($conn, $sql)) {
        echo "File uploaded successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
