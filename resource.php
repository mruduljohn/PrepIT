<!DOCTYPE html>
<html>
<head>
    <title>Resources</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #002147;
            background-image: url('background-pattern.png');
            background-repeat: repeat;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
            background-color: #e1f5fe;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            transform: translateZ(0);
            perspective: 1000px;
        }

        h1 {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            font-weight: bold;
            text-transform: uppercase;
            text-align: center;
            font-size: 3em;
            margin-top: 0;
            color: #002147;
            text-decoration: underline;
            text-decoration-color: #002147;
        }

        .column {
            width: 50%;
            float: left;
            padding: 10px;
            box-sizing: border-box;
        }

        .scroll-box {
            height: 400px;
            overflow: auto;
            border: 3px solid #ccc;
            padding: 10px;
            background-color: #f7f7f7;
        }

        .scroll-box a {
            display: block;
            margin-bottom: 10px;
            color: #002147;
            text-decoration: none;
        }

        .scroll-box a:hover {
            text-decoration: underline;
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
