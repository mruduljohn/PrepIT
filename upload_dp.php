<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if a file is selected
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        // Establish a database connection
        $servername = "localhost";
        $username = "blablaadmin";
        $password = "bla123bla456";
        $dbname = "prepit_users";

        // Create a new connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Get file details
        $file_name = $_FILES['image']['name'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $file_size = $_FILES['image']['size'];

        // Folder configuration
        $folder = "profile_photo/";
        $file_path = $folder . $file_name;

        // Move the uploaded file to the desired directory
        if (move_uploaded_file($file_tmp, $file_path)) {
            // Get the username from the session
            session_start();
            $username_user = $_SESSION['username'];

            // Prepare the data for insertion
            $file_path = mysqli_real_escape_string($conn, $file_path);

            // Update the 'profile_photo' column in the 'users' table
            $sql = "UPDATE users SET profile_photo = '$file_path' WHERE username = '$username_user'";
            if (mysqli_query($conn, $sql)) {
                echo "Image uploaded successfully.";
                header("Location: upload_dp.php"); // Redirect to the desired page
                exit; // Terminate the current script
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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
</head>

<body>
    <h2>Upload Pro pic</h2>
</body>
</html>
