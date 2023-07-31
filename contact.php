<?php
// Database configuration
$servername = "localhost";
$username = "blablaadmin";
$password = "bla123bla456";
$dbname = "prepit_comments"; // Replace with your database name

// Initialize variables to store form data and an error/success message
$name = $email = $subject = $message = "";
$message = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = test_input($_POST["uname"]);
    $email = test_input($_POST["umail"]);
    $subject = test_input($_POST["sub"]);
    $message = test_input($_POST["msg"]);

    // Perform server-side validation (you can add more checks here)
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        $message = "Please fill in all the fields.";
        echo $message;
    } else {
        // Create a new connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Escape user inputs to prevent SQL injection
        $name = mysqli_real_escape_string($conn, $name);
        $email = mysqli_real_escape_string($conn, $email);
        $subject = mysqli_real_escape_string($conn, $subject);
        $message = mysqli_real_escape_string($conn, $message);

        // Insert form data into the database
        $sql = "INSERT INTO contact_form (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

        if (mysqli_query($conn, $sql)) {
            $message = "Thank you for contacting us! We will get back to you soon.";
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
