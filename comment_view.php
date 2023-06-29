<!DOCTYPE html>
<html>
<head>
    <title>Comments</title>
    <style>
        .comment {
            background-color: #f5f5f5;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        .comment p {
            margin: 5px 0;
        }

        .back-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            color: #fff;
            padding: 10px 20px;
            font-weight: bold;
            border-radius: 20px;
            text-transform: uppercase;
            background-color: #002147;
            text-decoration: none;
        }

        .back-button:hover {
            background-color: #0f4880;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <h1>USER COMMENTS</h1>
    <div class="clear"></div>
    <a class="back-button" href="admin_dashboard.php">Back</a>

    <?php

// Establish a database connection
$servername = "localhost";
$username = "blablaadmin";
$password = "bla123bla456";
$dbname = "prepit_comments";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

    // Query to fetch data from the table
    $sql = "SELECT id, name,sem,subject, comment FROM comments_table";
    $result = $conn->query($sql);

    // Check if there are any records in the table
    if ($result->num_rows > 0) {
        // Output each row of data
        while ($row = $result->fetch_assoc()) {
            echo '<div class="comment">';
            echo "<p><strong>ID:</strong> " . $row['id'] . "</p>";
            echo "<p><strong>Name:</strong> " . $row['name'] . "</p>";
            echo "<p><strong>Semester:</strong> " . $row['sem'] . "</p>";
            echo "<p><strong>Subject:</strong> " . $row['subject'] . "</p>";
            echo "<p><strong>Comment:</strong> " . $row['comment'] . "</p>";
            echo '</div>';
        }
    } else {
        echo "No records found in the table.";
    }

    mysqli_close($conn);
    ?>

</body>
</html>
