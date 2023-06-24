
<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['admin_username'])) {
    // Redirect to admin dashboard if already logged in
    header("Location: admin_dashboard.php");
    exit();
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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

    // Check if username and password are provided
    if (empty($_POST['admin_username']) || empty($_POST['admin_password'])) {
        echo "Please enter username and password.";
        exit();
    }

    // Get form data
    $admin_username = mysqli_real_escape_string($conn, $_POST['admin_username']);
    $admin_password = mysqli_real_escape_string($conn, $_POST['admin_password']);

    // Query the database
    $sql = "SELECT * FROM admin_users WHERE username='$admin_username' AND password='$admin_password'";
    $result = mysqli_query($conn, $sql);

    // Check for query errors
    if (!$result) {
        die("Query error: " . mysqli_error($conn));
    }

    // Check if admin exists
    if (mysqli_num_rows($result) == 1) {
        // Admin authenticated, set session variable
        $_SESSION['admin_username'] = $admin_username;

        // Redirect to admin dashboard
        header("Location: admin_dashboard.php");
        exit();
    } else {
        // Admin authentication failed, show error message
        $error_message = "Invalid username or password.";
    }

    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>

    <style>

*:before,
*:after{
padding: 0;
margin: 0;
box-sizing: border-box;
}
body{
background-color: #080710;
}
.background{
width: 430px;
height: 520px;
position: absolute;
transform: translate(-50%,-50%);
left: 50%;
top: 50%;
}
.background .shape{
height: 200px;
width: 200px;
position: absolute;
border-radius: 50%;
}
.shape:first-child{
background: linear-gradient(
    #1845ad,
    #031b2b
);
left: -80px;
top: -80px;
}
.shape:last-child{
background: linear-gradient(
    to right,
    #234edc,
    #0b2d51
);
right: -80px;
bottom: -80px;
}
form{
height: 520px;
width: 400px;
background-color: rgba(255,255,255,0.13);
position: absolute;
transform: translate(-50%,-50%);
top: 50%;
left: 50%;
border-radius: 10px;
backdrop-filter: blur(10px);
border: 2px solid rgba(255,255,255,0.1);
box-shadow: 0 0 40px rgba(8,7,16,0.6);
padding: 50px 35px;
}
form *{
font-family: 'Poppins',sans-serif;
color: #ffffff;
letter-spacing: 0.5px;
outline: none;
border: none;
}
form h3{
font-size: 32px;
font-weight: 500;
line-height: 42px;
text-align: center;
}

label{
display: block;
margin-top: 30px;
font-size: 16px;
font-weight: 500;
}
input{
display: block;
height: 50px;
width: 100%;
background-color: rgba(255,255,255,0.07);
border-radius: 3px;
padding: 0 10px;
margin-top: 8px;
font-size: 14px;
font-weight: 300;
}
::placeholder{
color: #e5e5e5;
}
.btn{
margin-top: 40px;
width: 100%;
background-color: #0b4a8e;
color: #eceaf5;
padding: 15px 0;
font-size: 18px;
font-weight: 600;
border-radius: 5px;
cursor: pointer;
}

.or{
    text-decoration: none;
    margin-left: 185px;
    padding-right: 10px;
    padding-top: 20px;
    margin-top: 5px;
    margin-bottom: 5px;

}
h2 {
            text-align: center;
            margin-bottom: 30px;
        }
input[type="text"],
input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
.btn:hover {
            background-color: #45a049;
        }
.error-msg {
            color: #ff0000;
            margin-top: 10px;
        }

    </style>
</head>
<body>
    
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <div class="container">
        <form method="POST">
            <h2 class="admin">Admin Login</h2>
            <div class="form-group">
                <label for="admin_username">Username:</label>
                <input type="text" id="admin_username" name="admin_username" required>
            </div>
            <div class="form-group">
                <label for="admin_password">Password:</label>
                <input type="password" id="admin_password" name="admin_password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Login" class="btn">
            </div>
            <?php
            if (isset($error_message)) {
                echo '<div class="error-msg">' . $error_message . '</div>';
            }
            ?>
        </form>
    </div>
</body>
</html>

