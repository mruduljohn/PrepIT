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
  $email = $_POST['email'];

  // Insert data into database
  $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
  $result = mysqli_query($conn, $sql);

  // Check if user was added successfully
  if ($result) {
    // User added, redirect to login page
    header("Location: login.php");
    exit();
  } else {
    // User add failed, show error message
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

}

mysqli_close($conn);

?>

