<!DOCTYPE html>
<html lang="en">

<body>
<link rel="shortcut icon" type="image/png" href="images/header/prepit_logo book.png" />


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

        /* Style for the success message */
.success-message {
  background-color: #cce5ff;
  color: #004085;
  padding: 10px;
  border: 1px solid #b8daff;
  border-radius: 4px;
  margin: 20px auto;
  max-width: 400px;
  text-align: center;
}

/* Style for the error message */
.error-message {
  background-color: #f0f7fc;
  color: #1f3d68;
  padding: 10px;
  border: 1px solid #d0e3fc;
  border-radius: 4px;
  margin: 20px auto;
  max-width: 400px;
  text-align: center;
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
  echo '<div class="success-message">Comment submitted successfully!</div>';
} else {
  echo '<div class="error-message">Error: ' . $sql . '<br>' . $conn->error . '</div>';
}

// ...
$conn->close();

?>

<div class="clear"></div>
<a class="back-button" href="dashboard.php">Back</a>
</body>
</html>