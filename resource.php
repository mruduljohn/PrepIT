<!DOCTYPE html>
<html>
<head>
    <title>Resources</title>
    <link rel="stylesheet" href="css/resource.css" type="text/css">
</head>
<body>
    <div class="container">
    
        <h1>Resources</h1>

        <div class="column">
            <h2 style="color: #002147;">Notes</h2>
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

                // Retrieve the subject from the query parameter
                $subject = $_GET['subject'];

                // Retrieve the first letter from the query parameter
                $firstLetter = $_GET['firstLetter'];
                
                // Function to generate dynamic content based on the subject and type
                function generateContent($conn, $subject, $firstLetter)
                {
                    // Prepare and execute a query to retrieve the content for the selected subject
                    $query = "SELECT file_name, file_path, file_type FROM notes WHERE subject = '$subject' AND orient='$firstLetter'";
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

                // Call the generateContent function with the selected subject and type
                generateContent($conn, $subject, $firstLetter);
                
                // Close the database connection
                mysqli_close($conn);
                ?>
            </div>
        </div>

        <div class="column">
            <h2 style="color: #002147;">YouTube Links</h2>
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

                // Retrieve the subject from the query parameter
                $subject = trim($_GET['subject']);
                $firstLetter = trim($_GET['firstLetter']);

                // Generate the content based on the subject
                if ($subject === 'Latt' && $firstLetter === 'F') {
                    echo "<a href='https://www.youtube.com/watch?v=JnTa9XtvmfI' style='color: #002147;'>Latt Full Mark Video</a>";
                } elseif ($subject === "Latt" && $firstLetter === "P") {
                    echo "<a href='https://www.youtube.com/watch?v=kjBOesZCoqc' style='color: #002147;'>Latt Pass Mark Video</a>";
                } elseif ($subject === 'DSA' && $firstLetter === 'F') {
                    echo "<a href='#' style='color: #002147;'>DSA Full Mark Video</a>";
                } elseif ($subject === 'DSA' && $firstLetter === 'P') {
                    echo "<a href='#' style='color: #002147;'>DSA Pass Mark Video</a>";
                } else {
                    echo "No content available for this subject.<br>";
                    echo "Subject: " . $subject . "<br>";
                    echo "First Letter: " . $firstLetter . "<br>";
                }
                
                // Close the database connection
                mysqli_close($conn);
                ?>
            </div>
        </div>

        <div class="clear"></div>
        <a class="back-button" href="fms.php">Back</a>
    </div>
</body>
</html>
