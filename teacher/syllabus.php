<?php
	session_start();
	if(!isset($_SESSION['roll_no']))
	{
		header("location:../login.html");
	}
	$rollno = $_SESSION['roll_no'];

	//include db file
	include('../dbcon.php');
?>
<!doctype html>
<html lang="en">

<head>
	<title>Attendance System | CLASS-College Level Assistant for Student Sevices</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/vendor/icon-sets.css">
	<link rel="stylesheet" href="assets/css/main.min.css">

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<link rel="stylesheet" href="css/circle.css">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- SIDEBAR -->
		<div class="sidebar">
			<div class="brand">
				<a href="index.html"><img src="assets/img/logo.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="page-Teacher_profile.php" ><i class="lnr lnr-home"></i> <span>Profile</span></a></li>
						<li><a href="Attendance_System.php" class=""><i class="lnr lnr-chart-bars"></i> <span>Attendance</span></a></li>
						<li><a href="notices/notices.php" class=""><i class="lnr lnr-code"></i> <span>Notices</span></a></li>
						<li><a href="timetable/view_tt.php" class=""><i class="lnr lnr-chart-bars"></i> <span>Timetble</span></a></li>
						<li><a href="Mock_Test/result.php" class=""><i class="fa fa-certificate"></i> <span>Results</span></a></li>
						<li><a href="Anotes/display.php" class=""><i class="fa fa-book"></i> <span>Notes</span></a></li>
						<li><a href="#" class="active"><i class="fa fa-book"></i> <span>Syllabus</span></a></li>
						<li><a href="#" class=""><i class="fa fa-whatsapp"></i> <span>Chatroom</span></a></li>
						<li><a href="../feedback/report.php" class=""><i class="fa fa-comments-o"></i> <span>Feedback</span></a></li>	
						<li><a href="../blog/blog.php" class=""><i class="fa fa-rss"></i> <span>Blogs</span></a></li>
						<li><a href="AMock_test/select.php" class=""><i class="fa fa-graduation-cap"></i> <span>Mock Test</span></a></li>
						
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
						<li><a href="add_syllabus.php"><i class="lnr lnr-upload"></i><span>Uplaod Syllabus</span></a></li>
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
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="../../assets/img/user.png" class="img-circle" alt="Avatar"> <span>Samuel</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
									<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
									<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
									<li><a href="#"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
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
				<h1 class="page-title">Syllabus</h1>				
					<div class="row">
						<?php $query = mysqli_query($conn,"SELECT course_code,course_name FROM subject_info WHERE course_staff_id='$rollno'");
							while($row = mysqli_fetch_object($query)){
							
							
						?>
						<div class="col-md-4">
							<div id="panel" class="panel">
							<div class="panel-body">
								<div class="clearfix">
								<?php 
									$query1 = mysqli_query($conn,"SELECT tot_ut_com, tot_ut FROM syllabus WHERE course_code='$row->course_code'")or die("Nooo");
									while($row1 = mysqli_fetch_object($query1))
									{
										$per = round(($row1->tot_ut_com)/($row1->tot_ut)*100);
										if($per>=0)
										{}
										else
											echo "Syllabus Not started";
									
								?>
									<div class="c100 <?php echo "p".$per; ?> big">
										<span><?php echo $row1->tot_ut_com; }?> Units</span>
										
										<div class="slice">
											<div class="bar"></div>
											<div class="fill"></div>
											
										</div>
										
									</div>
									<h3 class="panel-title"><center><?php echo $row->course_name; ?></center></h3>
									</div>
									</div>
									</div>
						</div>
						<?php }  ?>
						<!--
						<div class="col-md-4">
							<div id="panel" class="panel">
							<div class="panel-body">
								<div class="clearfix">
									<div class="c100 p20 big">
										<span>20%</span>
										<div class="slice">
											<div class="bar"></div>
											<div class="fill"></div>
											
										</div>
										
									</div>
									<h3 class="panel-title"><center>SUBJECT2</center></h3>
									</div>
									</div>
									</div>
						</div>
						
						<div class="col-md-4">
							<div id="panel" class="panel">
							<div class="panel-body">
								<div class="clearfix">
									<div class="c100 p90 big">
										<span>90%</span>
										<div class="slice">
											<div class="bar"></div>
											<div class="fill"></div>
											
										</div>
										
									</div>
									<h3 class="panel-title"><center>SUBJECT3</center></h3>
									</div>
									</div>
									</div>
						</div>
						
							<div class="col-md-4">
							<div id="panel" class="panel">
							<div class="panel-body">
								<div class="clearfix">
									<div class="c100 p5 big">
										<span>5%</span>
										<div class="slice">
											<div class="bar"></div>
											<div class="fill"></div>
											
										</div>
										
									</div>
									<h3 class="panel-title"><center>SUBJECT4</center></h3>
									</div>
									</div>
									</div>
						</div>
							</div>
							</div>
							
							
							<!-- END TABLE HOVER -->
							
						</div>
				
					</div>
					<!-- END TABLE NO PADDING -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
			<footer>
				<div class="container-fluid">
					<p class="copyright"></a></p>
				</div>
			</footer>
		</div>
		<!-- END MAIN -->
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->

	<script src="testing.js"></script>
	<script src="assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="assets/js/bootstrap/bootstrap.min.js"></script>
	<script src="assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/js/klorofil.min.js"></script>
	<script
</body>

</html>
