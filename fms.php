<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <title>PrepIT Pass Mark</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description"  content="PrepIT"/>
    <meta name="keywords" content="PrepIT" />
    <meta name="author"  content="BlaBla"/>
    <meta name="MobileOptimized" content="320" />
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css"> -->
    <link href="css/main.css" rel="stylesheet" type="text/css"/>
    <!-- <link rel="stylesheet" href="css/pms2.css" type="text/css"> -->
    <link rel="shortcut icon" type="image/png" href="images/header/favicon.png" />
    <style>
        /* Your custom CSS styles */
        body {
            font-family: 'Roboto', sans-serif;
        }
        .width {
            width: 100%;
        }
        .Full_mark {
            text-align: center;
            margin-top: 20px;
        }
        .dropdown {
            display: inline-block;
            margin: 20px;
        }
        .dropdown .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 12px 16px;
            z-index: 1;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .back-button {
            text-align: center;
            margin-top: 20px;

        }
        .btn {
            font-size: 30px;
            padding: 15px 30px;
        }
        .btn-secondary {
            color: #f5f5f5;
            background-color: #06233d;
        }
    </style>
</head>
<body>
<div id="educo_wrapper">
<!--Header start-->
  <header id="ed_header_wrapper">
    <div class="ed_header_top">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
			<p>Welcome to New Session of Education</p>
			<div class="ed_info_wrapper">
				<a href="logout.php" id="login_button">LOGOUT</a>
				<div id="login_one" class="ed_login_form">
					<h3>LOGOUT</h3>


				</div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	<div class="ed_header_bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-2">
            <div class="prepit_logo"> <a href="index.php"><img src="images/header/prepit_logo.png" alt="logo" /></a> </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-8">
			<div class="edoco_menu_toggle navbar-toggle" data-toggle="collapse" data-target="#ed_menu">Menu <i class="fa fa-bars"></i>
			</div>
          <div class="edoco_menu">
            <ul class="collapse navbar-collapse" id="ed_menu">
              <li><a href="index.php">Home</a></li>
			  <li><a href="about.html">About us</a></li>
              <li><a href="#">courses</a>
				<ul class="sub-menu">
					<li><a href="fms.php">Fullmark Oriented Study</a></li>
					<li><a href="pms.php">Passmark Oriented Study</a></li>

				</ul>
			  </li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </div>
          </div>
        </div>
      </div>
    </div>	
  </header>
</div>
<!--Header end-->

    <div class="container">
<div class="Full_mark">
            <h1 class="display-3">FULL MARK ORIENTED</h1>
        </div>
        <br><br><br>
        <div class="row justify-content-center">
            <div class="col-md-3 col-sm-6">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="sem1Dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        SEM 1
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="sem1Dropdown">
                        <li><a class="dropdown-item" href="#">Calculus</a></li>
                        <li><a class="dropdown-item" href="#">Engineering Physics</a></li>
                        <li><a class="dropdown-item" href="#">Engineering Mechanics</a></li>
                        <li><a class="dropdown-item" href="#">Basic Civil Engineering</a></li>
                        <li><a class="dropdown-item" href="#">Basic Mechanical Engineering</a></li>
                        <li><a class="dropdown-item" href="#">Soft Skills Development</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6"> 
              <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="sem2Dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                SEM 2
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="sem2Dropdown">
                                <li><a class="dropdown-item" href="#">Computer Programming</a></li>
                                <li><a class="dropdown-item" href="#">Engineering Chemistry</a></li>
                                <li><a class="dropdown-item" href="#">Engineering Graphics</a></li>
                                <li><a class="dropdown-item" href="#">Basic Electrical Engineering</a></li>
                                <li><a class="dropdown-item" href="#">Basic Electronics Engineering</a></li>
                                <li><a class="dropdown-item" href="#">Environmental Studies</a></li>
                            </ul>
              </div>
            </div> 
            <div class="col-md-3 col-sm-6">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="sem3Dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        SEM 3
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="sem3Dropdown">
                        <li><a class="dropdown-item" href="resource.php?subject=Latt & firstLetter=F">Linear Algebra and Transform Techniques</a></li>
                        <li><a class="dropdown-item" href="resource.php?subject=DE & firstLetter=F">Digital Electronics</a></li>
                        <li><a class="dropdown-item" href="resource.php?subject=DSA & firstLetter=F">Data Structures and Algorithms</a></li>
                        <li><a class="dropdown-item" href="resource.php?subject=DBMS & firstLetter=F">Database Management System</a></li>
                        <li><a class="dropdown-item" href="resource.php?subject=DCS & firstLetter=F">Discrete Computational Structures</a></li>
                        <li><a class="dropdown-item" href="resource.php?subject=CAO & firstLetter=F">Computer Architecture and Organization</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="sem4Dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        SEM 4
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="sem4Dropdown">
                        <li><a class="dropdown-item" href="#">Complex Variables and Partial Differential Equations</a></li>
                        <li><a class="dropdown-item" href="#">Microprocessors</a></li>
                        <li><a class="dropdown-item" href="#">Object Oriented Programming</a></li>
                        <li><a class="dropdown-item" href="#">Automata Languages and Computations</a></li>
                        <li><a class="dropdown-item" href="#">Data Structures and Algorithms</a></li>
                        <li><a class="dropdown-item" href="#">Principles of Programming</a></li>
                        <li><a class="dropdown-item" href="#">Universal Human Values</a></li>
                    </ul>
          </div>
      </div>
      
      
          <div class="col-md-3 col-sm-6">
            <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="sem5Dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        SEM 5
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="sem5Dropdown">
                        <li><a class="dropdown-item" href="#">Numerical and Statistical Methods</a></li>
                        <li><a class="dropdown-item" href="#">System Programming</a></li>
                        <li><a class="dropdown-item" href="#">Object Oriented Software Engineering</a></li>
                        <li><a class="dropdown-item" href="#">Computer Graphics</a></li>
                        <li><a class="dropdown-item" href="#">Advanced Microprocessors and Microcontrollers</a></li>
                        <li><a class="dropdown-item" href="#">Professional Elective I</a></li>
                    </ul>
          </div>
      </div>
            <div class="col-md-3 col-sm-6">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="sem6Dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        SEM 6
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="sem6Dropdown">
                        <li><a class="dropdown-item" href="#">Computer Networks</a></li>
                        <li><a class="dropdown-item" href="#">Compiler Construction</a></li>
                        <li><a class="dropdown-item" href="#">Analysis and Design of Algorithms</a></li>
                        <li><a class="dropdown-item" href="#">Data Mining</a></li>
                        <li><a class="dropdown-item" href="#">Operating System</a></li>
                        <li><a class="dropdown-item" href="#">Professional Elective II</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="sem7Dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        SEM 7
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="sem7Dropdown">
                        <li><a class="dropdown-item" href="#">Principles of Management</a></li>
                        <li><a class="dropdown-item" href="#">Advanced Architecture and Parallel Processing</a></li>
                        <li><a class="dropdown-item" href="#">Cryptography and Network Security</a></li>
                        <li><a class="dropdown-item" href="#">Professional Elective III</a></li>
                        <li><a class="dropdown-item" href="#">Operating System</a></li>
                        <li><a class="dropdown-item" href="#">Open Elective I</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="sem8Dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        SEM 8
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="sem8Dropdown">
                        <li><a class="dropdown-item" href="#">Artificial Intelligence</a></li>
                        <li><a class="dropdown-item" href="#">Professional Elective IV</a></li>
                        <li><a class="dropdown-item" href="#">Professional Elective V</a></li>
                        <li><a class="dropdown-item" href="#">Open Elective II</a></li>
                        <li><a class="dropdown-item" href="#">Operating System</a></li>
                        <li><a class="dropdown-item" href="#">Seminar</a></li>
                    </ul>
          </div>
      </div>
    </div>
</div>

</div>  
<div class="ed_info_wrapper a, back-button width">
<a class="back-button href="dashboard.php"">Back</a>
</div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
