<?php
if (isset($_POST['username'])) {
    $username = $_POST['username'];

    // Establish a database connection
    $servername = "localhost";
    $username_db = "blablaadmin";
    $password_db = "bla123bla456";
    $dbname = "prepit_users";

    $conn = mysqli_connect($servername, $username_db, $password_db, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare the DELETE query
    $sql = "DELETE FROM users WHERE username = '$username'";

    // Execute the DELETE query
    if (mysqli_query($conn, $sql)) {
        // Deletion successful
        echo "User with username $username has been deleted successfully.";
        echo '<br>';
        echo '<a href="index.html"><button>Back to Home</button></a>';
    } else {
        // Error in deletion
        echo "Error deleting user: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // If the "username" parameter is not set in the POST data
    echo "Invalid request. Please provide the username of the user to delete.";
}
?>


