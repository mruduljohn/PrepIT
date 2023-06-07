<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['admin_username'])) {
    // Display the file upload form
    include 'upload_notes.php';
} else {
    // If not logged in, redirect to the admin login page
    header("Location: admin_login.php");
    exit();
}
?>
