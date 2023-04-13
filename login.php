<?php

// Establish a database connection
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
  // Get form data
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Query the database
  $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $sql);

  // Check if user exists
  if (mysqli_num_rows($result) == 1) {
    // User authenticated, redirect to home page
    header("Location: home.php");
    exit();
  } else {
    // User authentication failed, show error message
    echo "Invalid username or password.";
  }

}

mysqli_close($conn);

?>

