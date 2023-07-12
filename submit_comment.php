<!DOCTYPE html>
<html lang="en">

<body>
<link rel="shortcut icon" type="image/png" href="images/header/favicon.png" />


<style>
          .back-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            color: #fff;
            padding: 10px 20px;
            font-weight: bold;
            border-radius: 20px;
            text-transform: uppercase;
            background-color: #002147;
            text-decoration: none;
        }

        .back-button:hover {
            background-color: #0f4880;
        }

        .clear {
            clear: both;
        }
</style>

<?php

// Establish a database connection
$servername = "localhost";
$username = "blablaadmin";
$password = "bla123bla456";
$dbname = "prepit_comments";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the name and comment from the form submission
$name = $_POST["name"];
$comment = $_POST["comment"];
$sem = $_POST["sem"];
$subject = $_POST["subject"];

if (empty($name) || empty($comment)) {
    echo "Please fill in both the name and comment fields.";
    exit;
  }

// Insert the name,comment,sem and subject into the table
$sql = "INSERT INTO comments_table (name, comment,sem,subject) VALUES ('$name', '$comment','$sem','$subject')";

if ($conn->query($sql) === TRUE) {
    echo "Comment submitted successfully!";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

// ...
$conn->close();

?>

<div class="clear"></div>
<a class="back-button" href="dashboard.php">Back</a>
</body>
</html>