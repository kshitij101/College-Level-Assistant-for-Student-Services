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
						<li><a href="#" class="active"><i class="lnr lnr-chart-bars"></i> <span>Attendance</span></a></li>
						<li><a href="notices/notices.php" class=""><i class="lnr lnr-code"></i> <span>Notices</span></a></li>
						<li><a href="timetable/view_tt.php" class=""><i class="lnr lnr-chart-bars"></i> <span>Timetble</span></a></li>
						<li><a href="Mock_Test/result.php" class=""><i class="fa fa-certificate"></i> <span>Results</span></a></li>
						<li><a href="notes/display.php" class=""><i class="fa fa-book"></i> <span>Notes</span></a></li>
						<li><a href="syllabus.php" class=""><i class="fa fa-book"></i> <span>Syllabus</span></a></li>
						<li><a href="#" class=""><i class="fa fa-whatsapp"></i> <span>Chatroom</span></a></li>
						<li><a href="../feedback/myprj_stud.php" class=""><i class="fa fa-comments-o"></i> <span>Feedback</span></a></li>	
						<li><a href="blog.php" class=""><i class="fa fa-rss"></i> <span>Blogs</span></a></li>
						<li><a href="AMock_Test/select.php" class=""><i class="fa fa-graduation-cap"></i> <span>Mock Test</span></a></li>
						
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
						
							<li><a href="Attendance_System.php"><i class="fa fa-paper-plane-o"></i><span>Mark Attendance</span></a></li>
							
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="../../assets/img/user.png" class="img-circle" alt="Avatar"> <span><?php echo $rollno; ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="page-Teacher_profile.php"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								
									<li><a href="../logout.php"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
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
				<h3 class="page-title">Attendance System</h3>
			<table class="table">
				<thead>
						<th><h3>Subject :</h3>
						<form action="View_attendance.php" method="POST">
						<select name="subject" class="form-control input-lg">
						<option value="select subject" style="display: none">select subject</option>
							<?php
								$query = mysqli_query($conn,"SELECT course_code,course_name FROM subject_info WHERE course_staff_id='$rollno'");
								while($row = mysqli_fetch_object($query)){
								echo "<option value='".$row->course_code."'>".$row->course_name."</option>";
								}
							?>
						</select><br>
						<center><button type="submit" class="btn btn-primary">View Attendance</button></center>
						</form>
						</th>
				</thead>
			</table>				
					<div class="row">
						<div class="col-md-6">
						
							
							<!-- END TABLE HOVER -->
							
						</div>
				
					</div>
					
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
			<footer>
				
			</footer>
		</div>
		<!-- END MAIN -->
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->

	<script src="showmark.js"></script>
	<script src="assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="assets/js/bootstrap/bootstrap.min.js"></script>
	<script src="assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/js/klorofil.min.js"></script>
	<script
</body>

</html>
