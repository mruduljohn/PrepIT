<?php
    // Get the username from the session
    session_start();
    
// Check if the username is set in the session
if (isset($_SESSION['username'])) {
    $username_user = $_SESSION['username'];

    // Database configuration
    $servername = "localhost";
    $username_DB = "blablaadmin";
    $password_DB = "bla123bla456";
    $dbname = "prepit_users";

    // Create a new connection
    $conn = mysqli_connect($servername, $username_DB, $password_DB, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare and execute a query to get the file path from the database
    $query = "SELECT pic_path FROM users WHERE username = '$username_user'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $picPath = $row['pic_path'];

        // Delete the file from the server's filesystem using unlink()
        if (unlink($picPath)) {
            // File deleted from the folder, now update the 'pic_path' in the database to NULL
            $updateQuery = "UPDATE users SET pic_path = NULL WHERE username = '$username_user'";
            if (mysqli_query($conn, $updateQuery)) {
                // File path set to NULL successfully in the database
                echo "Profile picture deleted successfully.";
            } else {
                // Error updating file path in the database
                echo "Error deleting profile picture from the database.";
            }
        } else {
            // Error deleting file from the folder
            echo "Error deleting profile picture from the server.";
        }
    } else {
        // File not found in the database
        echo "Profile picture not found in the database.";
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // Invalid request
    http_response_code(400);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Profile Pic</title>
    <link rel="shortcut icon" type="image/png" href="images/header/prepit_logo book.png" />

</head>

<body>
<style>
                .back-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            color: #ffffff;
            background-color: #343a40;
            padding: 10px 20px;
            font-weight: bold;
            border-radius: 30px;
            text-decoration: none;
        }
        .message-container {
  background-color: #cce5ff;
  color: #004085;
  padding: 10px;
  border: 1px solid #b8daff;
  border-radius: 4px;
  margin: 20px auto;
  max-width: 400px;
  text-align: center;
}

    </style>
<a class="back-button" href="dashboard.php">Back</a>
</body>
</html>
