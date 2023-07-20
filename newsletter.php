<?php
// Database configuration
$servername = "localhost";
$username = "blablaadmin";
$password = "bla123bla456";
$dbname = "prepit_newsletter"; // Replace with your database name

// Initialize the variable to store the email address and an error/success message
$email = "";
$message = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the email address from the form
    $email = test_input($_POST["newsemail"]);

    // Perform server-side validation (you can add more checks here)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid email format.";
        echo $message;
    } else {
        // Create a new connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Escape user input to prevent SQL injection
        $email = mysqli_real_escape_string($conn, $email);

        // Insert the email address into the database
        $sql = "INSERT INTO newsletter_subscribers (email) VALUES ('$email')";

        if (mysqli_query($conn, $sql)) {
            $message = "Thank you for subscribing to our newsletter!";
            echo $message;
            sleep(2);
            header("Location: index.php");
        } else {
            $message = "Error: " . $sql . "<br>" . mysqli_error($conn);
            echo $message;
        }

        // Close the database connection
        mysqli_close($conn);
    }
}

// Function to sanitize user input
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
