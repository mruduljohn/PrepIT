<!DOCTYPE html>
<html>
<head>
    <title>File List</title>
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
    </style>
    
    <h1>File List</h1>

    <?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['admin_username'])) {
    // Redirect to the admin login page
    header('Location: admin_login.php');
    exit();
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the values from the form
    $orient = $_POST['selectType'];
    $semester = $_POST['selectSemester'];
    $selectedSubjects = $_POST['selectSubjects'];

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

    // Function to generate dynamic content based on the subject and type
    function generateContent($conn, $subject, $orient)
    {
        // Prepare and execute a query to retrieve the content for the selected subject
        $query = "SELECT id, file_name, file_path, file_type FROM notes WHERE subject = '$subject' AND orient='$orient'";
        $result = mysqli_query($conn, $query);

        // Process the query result and generate the content
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $fileName = $row['file_name'];
                $filePath = $row['file_path'];
                echo "<p><a href='$filePath' target='_blank'>$fileName</a> <button onclick='deleteFile($id)'>Delete</button></p>";
            }
        } else {
            echo "No content available for this subject.";
        }
    }

    // Call the generateContent function with the selected subject and type
    generateContent($conn, $selectedSubjects, $orient);

    $conn->close();
}
?>
<script>
    // JavaScript function to handle file deletion
    function deleteFile(id) {
        if (confirm('Are you sure you want to delete this file?')) {
            // Send an AJAX request to delete the file
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // Reload the page to update the content after deletion
                        location.reload();
                    } else {
                        alert('Error deleting file.');
                    }
                }
            };
            xhr.open('DELETE', 'delete_file.php?id=' + id);
            xhr.send();
        }
    }
</script>
<a class="back-button" href="delete_notes.html">Back</a>
</body>
</html>
