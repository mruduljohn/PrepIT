<?php
    // Get the username from the session
    session_start();
    $username_user = $_SESSION['username'];

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if a file is selected
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        // Establish a database connection
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

        // Get file details
        $file_name = $_FILES['image']['name'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $file_size = $_FILES['image']['size'];

        //prepare file for insertion
        $file_name = mysqli_real_escape_string($conn, $file_name);

        // Folder configuration
        $folder = "profile_photo/";
        $file_path = $folder . $file_name;

        // Move the uploaded file to the desired directory
        if (move_uploaded_file($file_tmp, $file_path)) {


            // Prepare the data for insertion
            $file_path = mysqli_real_escape_string($conn, $file_path);

            // Update the 'profile_photo' column in the 'users' table
            $sql = "UPDATE users SET pic_path = '$file_path' WHERE username = '$username_user'";
            if (mysqli_query($conn, $sql)) {
                echo '<div class="message-container success-message">Image uploaded successfully.</div>';
                // Set the 'pic_path' session variable to the file path
                $_SESSION['pic_path'] = $file_path;
                
                
            } else {
                echo '<div class="message-container error-message">Error: ' . $sql . '<br>' . mysqli_error($conn) . '</div>';
            }
        } else {
            echo "Error uploading file.";
        }

        // Close the database connection
        mysqli_close($conn);
    } else {
        echo "Please select a file.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>upload DP</title>
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
