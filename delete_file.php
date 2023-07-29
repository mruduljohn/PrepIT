<?php
// Database configuration
$servername = "localhost";
$username = "blablaadmin";
$password = "bla123bla456";
$dbname = "prepit_notes";

// Create a new connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the file ID is provided in the request
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare and execute a query to get the file path from the database
    $query = "SELECT file_path FROM notes WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $filePath = $row['file_path'];

        // Delete the file from the server's filesystem using unlink()
        if (unlink($filePath)) {
            // File deleted from the folder, now delete the file from the database
            $deleteQuery = "DELETE FROM notes WHERE id = $id";
            if (mysqli_query($conn, $deleteQuery)) {
                // File deleted successfully from the database
                http_response_code(200);
            } else {
                // Error deleting file from the database
                http_response_code(500);
            }
        } else {
            // Error deleting file from the folder
            http_response_code(500);
        }
    } else {
        // File not found in the database
        http_response_code(404);
    }
} else {
    // Invalid request
    http_response_code(400);
}

// Close the database connection
mysqli_close($conn);
?>
