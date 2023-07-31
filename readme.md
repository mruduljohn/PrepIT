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


Note fetching : 
            <li><a class="dropdown-item" href="resource.php?subject=Latt & firstLetter=F">Linear Algebra and Transform Techniques</a>
            <li><a class="dropdown-item" href="resource.php?subject=DE & firstLetter=F">Digital Electronics</a>
            <li><a class="dropdown-item" href="resource.php?subject=DSA & firstLetter=F">Data Stuctures and Algorithms</a>
            <li><a class="dropdown-item" href="resource.php?subject=DBMS & firstLetter=F">Database Management System</a>
            <li><a class="dropdown-item" href="resource.php?subject=DCS & firstLetter=F">Discrete Computational Structures</a>
            <li><a class="dropdown-item" href="resource.php?subject=CAO & firstLetter=F">Computer Architecture and Organization</a>