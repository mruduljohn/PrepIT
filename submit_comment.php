<?php

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

// Retrieve the name and comment from the form submission
$name = $_POST["name"];
$comment = $_POST["comment"];

if (empty($name) || empty($comment)) {
    echo "Please fill in both the name and comment fields.";
    exit;
  }

// Insert the name and comment into the table
$sql = "INSERT INTO comments_table (name, comment) VALUES ('$name', '$comment')";

if ($conn->query($sql) === TRUE) {
    echo "Comment submitted successfully!";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

// ...
$conn->close();



?>