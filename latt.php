<!DOCTYPE html>
<html>
<head>
    <title>Linear Algebra and Transform Techniques</title>
    <style>
        h1 {
            font-family: "Times New Roman", Times, serif;
            font-weight: bold;
            text-transform: uppercase;
            text-align: center;
            font-size: 2em;
        }
        .column {
            width: 33.33%;
            float: left;
            padding: 10px;
        }
        .scroll-box {
            height: 200px;
            overflow: auto;
            border: 1px solid #ccc;
            padding: 10px;
        }
        .clear {
            clear: both;
        }
        .back-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            color:white ;
            padding: 5px;
            font-weight: bold;
            border-radius: 20%;
            text-transform: uppercase;
            background-color: black;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Linear Algebra and Transform Techniques</h1>

    <div class="column">
        <h2>Notes</h2>
        <div class="scroll-box">
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
            
            // Function to generate dynamic content based on the subject and type
            function generateContent($conn, $subject)
            {
            // Prepare and execute a query to retrieve the content for the selected subject
            $query = "SELECT file_name, file_path, file_type FROM notes WHERE subject = '$subject'";
            $result = mysqli_query($conn, $query);

            // Process the query result and generate the content
            if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
            $fileName = $row['file_name'];
            $filePath = $row['file_path'];
            echo "<p><a href='$filePath' target='_blank'>$fileName</a></p>";
            }
            } else {
            echo "No content available for this subject.";
            }
            }

            
            
            // Retrieve the subject from the query parameter
            $subject = $_GET['subject'];
            
            // Call the generateContent function with the selected subject and type 'Notes'
            generateContent($conn, $subject, 'otes');
            
            // Close the database connection
            mysqli_close($conn);
            ?>

        </div>
    </div>

    <div class="column">
        <h2>YouTube Links</h2>
        <div class="scroll-box">
            <a href='https://www.youtube.com/watch?v=JnTa9XtvmfI'>Linear algebra video</a>
        </div>
    </div>

    

    <div class="clear"></div>
    <a class="back-button" href="fms.php">Back</a>
</body>
</html>
