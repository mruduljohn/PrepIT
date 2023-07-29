<!DOCTYPE html>
<html>
<head>
    <title>Resources</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/resource.css" type="text/css"> -->
    <link rel="shortcut icon" type="image/png" href="images/header/favicon.png" />
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h1 {
            text-align: center;
            margin-bottom: 40px;
            color: #002147;
        }

        .section-box {
            background-color: #f8f9fa;
            padding: 20px;
            margin-bottom: 30px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            min-height: 400px;
        }

        .scroll-box {
            max-height: 300px;
            overflow-y: auto;
        }

        .scroll-box p {
            margin: 0;
            padding: 5px 0;
        }

        .back-button {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #fff;
            background-color: #086bdc;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }

        .back-button:hover {
            background-color: #00152e;
        }
    </style>

</head>
<body>
    <div class="container">
    
        <h1>Resources</h1>

        <div class="row">
            <div class="col-md-6">
                <div class="section-box">
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
    </div>
    <div class="col-md-6">
                <div class="section-box">
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
                } elseif ($subject === 'DBMS' && $firstLetter === 'F') {
                    echo "<a href='https://www.youtube.com/watch?v=T7AxM7Vqvaw' style='color: #002147;'>DBMS Full Mark Video</a>";
                } elseif ($subject === 'DBMS' && $firstLetter === 'P') {
                    echo "<a href='https://www.youtube.com/watch?v=T7AxM7Vqvaw' style='color: #002147;'>DBMS Pass Mark Video</a>";
                }
                 else {
                    echo "No content available for this subject.<br>";
                    //echo "Subject: " . $subject . "<br>";
                    //echo "First Letter: " . $firstLetter . "<br>";
                }
                
                // Close the database connection
                mysqli_close($conn);
                ?>
            </div>
        </div>
    </div>
</div>
    <div class="text-center mt-4"></div>
    <a class="back-button btn btn-secondary mt-3" href="dashboard.php">Back</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
