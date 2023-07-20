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

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if username and password are provided
    if (empty($_POST['username']) || empty($_POST['password'])) {
        echo "Please enter username and password.";
        exit();
    }

    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare the query using prepared statement
    $sql = "SELECT * FROM users WHERE username=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    // Get the result
    $result = mysqli_stmt_get_result($stmt);

    // Check if user exists
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['password'];

        // Verify the password
        if (password_verify($password, $hashed_password)) {
            // Start a session and store user data
            session_start();
            $_SESSION['username'] = $username;

            // Redirect to home page
            header("Location: dashboard.php");
            exit();
        }
    }

    // User authentication failed, show error message
    echo "Invalid username or password.";
}

mysqli_close($conn);
?>
