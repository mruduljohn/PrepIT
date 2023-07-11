<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8" />
<title>PrepIT</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta name="description"  content="PrepIT"/>
<meta name="keywords" content="PrepIT" />
<meta name="author"  content="BlaBla"/>
<meta name="MobileOptimized" content="320" />

<!--srart theme style -->
<link href="css/main.css" rel="stylesheet" type="text/css"/>
<!-- end theme style -->
</head>
<body>
<!--Page main section start-->
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
              <li><a href="#">Home</a>
				<ul class="sub-menu">
					<li><a href="index.php">Home</a>
                </ul>
			  </li>
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
 <!--header end -->
<!--Breadcrumb start-->
<div class="ed_pagetitle">
<div class="ed_img_overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-4 col-sm-6">
				<div class="page_title">
					<h2>PrepIT Student Dashboard</h2>
				</div>
			</div>
			<div class="col-lg-6 col-md-8 col-sm-6">
				<ul class="breadcrumb">
					<li><a href="index.php">home</a></li>
					<li><i class="fa fa-chevron-left"></i></li>
					<li><a href="dashboard.php">PrepIT Student</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--Breadcrumb end-->
<!--single student detail start-->
<div class="ed_dashboard_wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div class="ed_sidebar_wrapper">
					<div class="ed_profile_img">
					<img src="images/user.png" alt="Dashboard Image" />
					<?php
					// Start the session
					session_start();

					// Check if the username is set in the session
					if (isset($_SESSION['username'])) {
						$username = $_SESSION['username'];
						echo '<h3>Hello ' . $username . '</h3>';
					} 
					?>
				    </div>
					 <div class="ed_tabs_left">
						<ul class="nav nav-tabs">
						  <li class="active"><a href="#dashboard" data-toggle="tab">dashboard</a></li>
						  <li><a href="#courses" data-toggle="tab">courses <span>2</span></a></li>

						  <li><a href="#notification" data-toggle="tab">notifications <span>0</span></a></li>
						  <li><a href="#profile" data-toggle="tab">Your Profile</a></li>
						  <li><a href="#forums" data-toggle="tab">comments</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
			<div class="ed_dashboard_tab">
				<div class="tab-content">
					<div class="tab-pane active" id="dashboard">
						<div class="ed_dashboard_tab_info">
						<h1>hello, <span>student</span></h1>
						<h1>welcome to dashboard</h1>
						<p>Hi, here you have to see and update your profile,courses, activities, notifications and other things. You can share your notes via mail to us along with that you can comment any changes you need here.</p>
						</div>
					</div>
					<div class="tab-pane" id="courses">
						<div class="ed_dashboard_inner_tab">
							<div role="tabpanel">
					
								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="my">
									<div class="ed_inner_dashboard_info">
									<h2>HERE WE HAVE OUR COURSES..</h2>
										<div class="row">
											<div class="ed_mostrecomeded_course_slider">
												<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ed_bottompadder20">
													<div class="ed_item_img">
														<img src="https://tse1.mm.bing.net/th?id=OIP.4vyBVBrIvRk1bkFUoS0DGAAAAA&pid=Api&P=0&h=180" alt="item1" class="img-responsive">
													</div>
													<div class="ed_item_description ed_most_recomended_data">
															<h4><a href="fms.php">Full mark oriented study</a></h4>
															<div class="row">
																<div class="ed_rating">
																	<div class="col-lg-6 col-md-7 col-sm-6 col-xs-6">
																		<div class="row">
																			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
																				<div class="ed_stardiv">
																					<div class="star-rating"><span style="width:80%;"></span></div>
																				</div>
																			</div>
																			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
																				<div class="row">
																					<p>(10 review)</p>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-lg-6 col-md-5 col-sm-6 col-xs-6">
																		<div class="ed_views">
																		<i class="fa fa-users"></i>
																		<span>35 students</span>
																		</div>
																	</div>
																</div>
															</div>
															<p>By selecting this mode, the student will cover every topic
																outlined in the syllabus thoroughly.</p>
															<a href="fms.php" class="ed_getinvolved">get involved <i class="fa fa-long-arrow-right"></i></a>
													</div>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ed_bottompadder20">
													<div class="ed_item_img">
														<img src="https://tse1.mm.bing.net/th?id=OIP.L3Dl2NPvbqIey9dkI-z-pwHaFL&pid=Api&P=0&h=180" alt="item1" class="img-responsive">
													</div>
													<div class="ed_item_description ed_most_recomended_data">
															<h4><a href="pms.php">Pass mark oriented study</a></h4>
															<div class="row">
																<div class="ed_rating">
																	<div class="col-lg-6 col-md-7 col-sm-6 col-xs-6">
																		<div class="row">
																			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
																				<div class="ed_stardiv">
																					<div class="star-rating"><span style="width:80%;"></span></div>
																				</div>
																			</div>
																			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
																				<div class="row">
																					<p>(8 review)</p>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-lg-6 col-md-5 col-sm-6 col-xs-6">
																		<div class="ed_views">
																		<i class="fa fa-users"></i>
																		<span>55 students</span>
																		</div>
																	</div>
																</div>
															</div>
															<p>By selecting this mode, the student will go through selected
																topics that are important and frequently tested in the question
																paper.</p>
															<a href="pms.php" class="ed_getinvolved">get involved <i class="fa fa-long-arrow-right"></i></a>
													</div>
												</div>
												
											</div>
										</div>
									</div>
									</div>

								</div>
					
							</div><!--tab End-->
						</div>
					</div>
					
					<div class="tab-pane" id="notification">
						<div class="ed_dashboard_inner_tab">
							<div role="tabpanel">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a href="#unread" aria-controls="unread" role="tab" data-toggle="tab">unread</a></li>
									<li role="presentation"><a href="#read" aria-controls="read" role="tab" data-toggle="tab">read</a></li>
								</ul>
								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="unread">
									<div class="ed_dashboard_inner_tab">
										<h2>you have no unread notifications</h2>
									</div>
									</div>
									<div role="tabpanel" class="tab-pane" id="read">
									<div class="ed_dashboard_inner_tab">
										<h2>you have no notifications</h2>
									</div>
									</div>
								</div>
							</div><!--tab End-->
						</div>
					</div>
					<div class="tab-pane" id="profile">
						<div class="ed_dashboard_inner_tab">
							<div role="tabpanel">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a href="#view" aria-controls="view" role="tab" data-toggle="tab">view</a></li>
									<li role="presentation"><a href="#edit" aria-controls="edit" role="tab" data-toggle="tab">edit</a></li>
									<li role="presentation"><a href="#change" aria-controls="change" role="tab" data-toggle="tab">change profile photo</a></li>
								</ul>
								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="view">
									<div class="ed_dashboard_inner_tab">
										<h2>your profile</h2>
										<table id="profile_view_settings">
											<thead>
												<tr>
													<th>Name</th>
													<th>Id</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td>
<?php
// Check if the username is set in the session
if (isset($_SESSION['username'])) {
$username = $_SESSION['username'];
echo '<h5>' . $username . '</h5>';
} 
?>
													</td>
													<td>
<?php
// Check if the username is set in the session
if (isset($_SESSION['username'])) {
    $username_user = $_SESSION['username'];

    // Establish a database connection
    $servername = "localhost";
    $username = "blablaadmin";
    $password = "bla123bla456";
    $dbname = "prepit_users";

    // Create a new connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare the query to select the email
    $query = "SELECT email FROM users WHERE username = '$username_user'";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
        // Check if any rows were returned
        if (mysqli_num_rows($result) > 0) {
            // Fetch the email from the result
            $row = mysqli_fetch_assoc($result);
            $email = $row['email'];

            // Display the email
            echo '<h6><a href="#">' . $email . '</a></h6>';
        } else {
            echo "Email not found.";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>

													</td>
												</tr>												
											</tbody>
										</table>
									</div>
									</div>
									<div role="tabpanel" class="tab-pane" id="edit">
									<div class="ed_dashboard_inner_tab">
										<h2>edit profile</h2>
											<form class="ed_tabpersonal">
												<div class="form-group">
												<input type="text" class="form-control"  placeholder="Your Name">
												</div>
												<div class="form-group">
												<p>This field can be seen by: <strong>Everyone</strong></p>
												</div>
												<div class="form-group">
												<button class="btn ed_btn ed_green">save changes</button>
												</div>
											</form>
									</div>
									</div>
									<div role="tabpanel" class="tab-pane" id="change">
										<div class="ed_dashboard_inner_tab">
											<h2>change photo</h2>
											<form class="ed_tabpersonal">
												<div class="form-group">
												<p>Click below to select a JPG, GIF or PNG format photo from your computer and then click 'Upload Image' to proceed.</p>
												</div>
												<div class="form-group">
												<input type="file" name="photo" accept="image/*">
												</div>
												<div class="form-group">
												<button class="btn ed_btn ed_green">upload image</button>
												</div>
												<div class="form-group">
												<p>If you'd like to delete your current avatar but not upload a new one, please use the delete avatar button.</p>
												</div>
												<div class="form-group">
												<button class="btn ed_btn ed_orange">delete</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div><!--tab End-->
						</div>
					</div>
					<div class="tab-pane" id="setting">
						<div class="ed_dashboard_inner_tab">
							<div role="tabpanel">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a href="#general" aria-controls="general" role="tab" data-toggle="tab">general</a></li>
									<li role="presentation"><a href="#email" aria-controls="email" role="tab" data-toggle="tab">email</a></li>
									<li role="presentation"><a href="#visibility" aria-controls="visibility" role="tab" data-toggle="tab">profile visibility</a></li>
								</ul>
					
								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="general">
									<div class="ed_dashboard_inner_tab">
										<h2>general setting</h2>
										<form class="ed_tabpersonal">
											<div class="form-group">
											<input type="text" class="form-control"  placeholder="Your Account Email">
											</div>
											<div class="form-group">
											<p>Change Password <strong>(leave blank for no change)</strong></p>
											</div>
											<div class="form-group">
											<input type="password" class="form-control"  placeholder="New Password">
											</div>
											<div class="form-group">
											<input type="password" class="form-control"  placeholder="Repeat New Password">
											</div>
											<div class="form-group">
											<button class="btn ed_btn ed_green">save changes</button>
											</div>
										</form>
									</div>
									</div>
									<div role="tabpanel" class="tab-pane" id="email">
									<div class="ed_dashboard_inner_tab">
										<h2>email notification</h2>
										<span>Send an email notice when:</span>
										<table id="notification_settings">
											<thead>
												<tr>
													<th class="title">Activity</th>
													<th class="yes">Yes</th>
													<th class="no">No</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td>A member mentions you in an update using "@andrehouse123"</td>
													<td class="yes"><input type="radio" name="activity1" value="yes" checked="checked"></td>
													<td class="no"><input type="radio" name="activity1" value="no"></td>
												</tr>
												
												<tr>
													<td>A member replies to an update or comment you've posted</td>
													<td><input type="radio" name="activity2" value="yes" checked="checked"></td>
													<td><input type="radio" name="activity2" value="no"></td>
												</tr>
											</tbody>
										</table>
										<button class="btn ed_btn ed_green">save changes</button>
									</div>
									</div>
									<div role="tabpanel" class="tab-pane" id="visibility">
									<div class="ed_dashboard_inner_tab">
										<h2>profile visibility</h2>
										<table id="visibility_settings">
											<thead>
												<tr>
													<th class="title">Name</th>
													<th class="yes">Visibility</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td>Andre House</td>
													<td>Everyone</td>
												</tr>												
											</tbody>
										</table>
										<button class="btn ed_btn ed_green">save setting</button>
									</div>
									</div>
								</div>
					
							</div><!--tab End-->
						</div>
					</div>
					<div class="tab-pane" id="forums">
						<div class="ed_dashboard_inner_tab">
							<div role="tabpanel">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a href="#started" aria-controls="started" role="tab" data-toggle="tab">Comments</a></li>
								</ul>
					
								<!-- Tab panes -->
								<div class="tab-content">
								<h3>Here you can give your comments</h3>
  									<form method="POST" action="submit_comment.php">
									  <label for="name">Name:</label>
                                        <input type="text" id="name" name="name" placeholder="Enter your name"><br><br>
    								<label for="sem">SEM(optional):</label>
										<input type="text" id="sem" name="sem" placeholder="Enter your sem"><br><br>
    								<label for="subject">Subject(optional):</label>
										<input type="text" id="subject" name="subject" placeholder="Enter the subject"><br><br>
    								<label for="comment">Comments:</label>
    									<input type="text" id="comment" name="comment" placeholder="Enter your comment here"><br><br><br>
   										<input type="submit" value="Submit" class="but">

  									</form>
								</div>
					
							</div><!--tab End-->
						</div>
					</div>
				</div>
			</div>
			</div>
			
			
		</div>
	</div>
</div>
</div>
<!--Page main section end-->
<!--main js file start--> 
<script type="text/javascript" src="js/jquery-1.12.2.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/modernizr.js"></script> 
<script type="text/javascript" src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/smooth-scroll.js"></script> 
<script type="text/javascript" src="js/plugins/revel/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="js/plugins/revel/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="js/plugins/revel/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="js/plugins/revel/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="js/plugins/revel/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="js/plugins/countto/jquery.countTo.js"></script>
<script type="text/javascript" src="js/plugins/countto/jquery.appear.js"></script>
<script type="text/javascript" src="js/custom.js"></script> 

<!--main js file end-->
</body>
</html>