<?php
	session_start();
	if(!isset($_SESSION['roll_no']))
	{
		header("location:../login.html");
	}
	$rollno = $_SESSION['roll_no'];

?>

<!doctype html>
<html lang="en">

<head>
	<title>Profile | CLASS-College Level Assistant for Student Sevices</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- CSS -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/vendor/icon-sets.css">
	<link rel="stylesheet" href="../assets/css/main.min.css">

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- SIDEBAR -->
		<div class="sidebar">
			<div class="brand">
				<a href="index.html"><img src="../assets/img/logo.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="../page-Student_profile.php" ><i class="lnr lnr-home"></i> <span>Profile</span></a></li>
						<li><a href="../Att_1.php" ><i class="lnr lnr-chart-bars"></i> <span>Attendance</span></a></li>
						<li><a href="../notices/notices.php" ><i class="lnr lnr-code"></i> <span>Notices</span></a></li>
						<li><a href="../timetable/view_tt.php" ><i class="lnr lnr-chart-bars"></i> <span>Timetable</span></a></li>
						<li><a href="../Mock_Test/result.php" class=""><i class="fa fa-certificate"></i> <span>Results</span></a></li>
						<li><a href="../notes/display.php" class=""><i class="fa fa-book"></i> <span>Notes</span></a></li>
						<li><a href="syllabus.php" class=""><i class="fa fa-book"></i> <span>Syllabus</span></a></li>
						<li><a href="#" class=""><i class="fa fa-whatsapp"></i> <span>Chatroom</span></a></li>
						<li><a href="../feedback/myprj_stud.php" class=""><i class="fa fa-comments-o"></i> <span>Feedback</span></a></li>	
						<li><a href="../blog.php" class=""><i class="fa fa-rss"></i> <span>Blogs</span></a></li>
						<li><a href="#" class="active"><i class="fa fa-graduation-cap"></i> <span>Mock Test</span></a></li>
						
					</ul>
				</nav>
			</div>
			<a class="footer" href="#"> <span>SPEED-FORCE Programmers</span></a>
		</div>
		<!-- END SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- NAVBAR -->
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-btn">
						<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
					</div>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu">
							<span class="sr-only">Toggle Navigation</span>
							<i class="fa fa-bars icon-nav"></i>
						</button>
					</div>
					<div id="navbar-menu" class="navbar-collapse collapse">
						<form class="navbar-form navbar-left hidden-xs">
							<div class="input-group">
								<input type="text" value="" class="form-control" placeholder="Search dashboard...">
								<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
							</div>
						</form>
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
									<i class="lnr lnr-alarm"></i>
									<span class="badge bg-danger">5</span>
								</a>
								<ul class="dropdown-menu notifications">
									<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System space is almost full</a></li>
									<li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
									<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is available</a></li>
									<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
									<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has been approved</a></li>
									<li><a href="#" class="more">See all notifications</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="#">Basic Use</a></li>
									<li><a href="#">Working With Data</a></li>
									<li><a href="#">Security</a></li>
									<li><a href="#">Troubleshooting</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png" class="img-circle" alt="Avatar"> <span><?php echo $_SESSION['roll_no']?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
								<ul class="dropdown-menu">
								 <?php @$_SESSION['roll_no']; 
											  error_reporting(1);
											  ?>
											 
												<?php
												if(isset($_SESSION['roll_no']))
												{
												 echo "<li><a href=\"../page-Student_profile.php\"><i class='lnr lnr-user'> </i><span>My Profile </span></a></li>
														<li><a href=\"mock_Stud.php\"><i class='lnr lnr-home'> </i><span>Mock Test Home</span></a></li>
														<li><a href=\"../../logout.php\"><i class='lnr lnr-exit'></i> <span>Logout</span></a></li>";
												 }
												 else
												 {
													echo "&nbsp;";
												 }
												?>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- END NAVBAR -->
			<!-- MAIN CONTENT -->
			
				<div class="main-content">
				<div class="container-fluid">
			
			<?php




echo "<div class=panel>
<div class=panel-body no-padding>

";

echo "<h1 class=page-title align=center>Wel come to Online Mock Test</h1>";
		echo '<table class="table">
<thead>		
  <tr>
    <td><a href="sublist.php"><img src="image/HLPBUTT2.JPG" width="50" height="50" align="middle"></a></td>
    <td> <a href="sublist.php" ><h2 class=page-title>Select Subject for Mock Test </h2></a></td>
  </tr>
  <tr>
    <td><a href="result.php"><img src="image/DEGREE.JPG" width="43" height="43" align="middle"></a></td>
    <td> <a href="result.php" ><h2 class=page-title>View Results</h2></a></td>
  </tr>
  </thead>
</table></div></div>';
   
		
		


			
		?>	
			
			
</div>
</div>
			<!-- END MAIN CONTENT -->
			<footer>
				<div class="container-fluid">
					<p class="copyright"> Designed &amp; Crafted by SPEED-FORCE Programmers</a></p>
				</div>
			</footer>
		</div>
		<!-- END MAIN -->
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="../assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="../assets/js/bootstrap/bootstrap.min.js"></script>
	<script src="../assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../assets/js/klorofil.min.js"></script>
</body>

</html>
