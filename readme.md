PREPIT PROJECT


Uername change with session code  :
<?php
        session_start();

        if (isset($_SESSION['username'])) {
            echo '<p>Hello ' . $_SESSION['username'] . '</p>';
            echo '<a href="logout.php" class="logout-btn">Logout</a>';
        } else {
            echo '<a href="login.html" class="logout-btn">Login</a>';
        }
        ?>