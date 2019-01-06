<?php
	session_start();
	if(!isset($_SESSION['roll_no']))
	{
		header("location:../login.html");
	}
	$rollno = $_SESSION['roll_no'];

	//include db file
	include('../../dbcon.php');
?>
<!DOCTYPE HTML >
<html>
<head>
<title>Notes Sharing</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- CSS -->
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/css/vendor/icon-sets.css">
	<link rel="stylesheet" href="../../assets/css/main.min.css">

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../../assets/img/favicon.png">
	
<link href="../quiz.css" rel="stylesheet" type="text/css">


        
</head>
<body>
<!-- WRAPPER -->
	<div id="wrapper">
		<!-- SIDEBAR -->
		<div class="sidebar">
			<div class="brand">
				<a href="HOD_profile.php"><img src="../../assets/img/logo.png" alt="Class Logo" class="img-responsive logo"></a>
			</div>
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="../page-Teacher_profile.php" ><i class="lnr lnr-home"></i> <span>Profile</span></a></li>
						<li><a href="../Attendance_System.php" ><i class="lnr lnr-chart-bars"></i> <span>Attendance</span></a></li>
						<li><a href="../notices/notices.php" ><i class="lnr lnr-code"></i> <span>Notices</span></a></li>
						<li><a href="../Timetable/inpu_tt.php" class="active"><i class="lnr lnr-chart-bars"></i> <span>Timetble</span></a></li>
					
						<li><a href="#" class=""><i class="fa fa-book"></i> <span>Notes</span></a></li>
						<li><a href="../syllabus.php" class=""><i class="fa fa-book"></i> <span>Syllabus</span></a></li>
						
						<li><a href="../../feedback/myprj_stud.php" class=""><i class="fa fa-comments-o"></i> <span>Feedback</span></a></li>	
						<li><a href="../blog.php" class=""><i class="fa fa-rss"></i> <span>Blogs</span></a></li>
						<li><a href="../AMock_Test/mock_Stud.php" class=""><i class="fa fa-graduation-cap"></i> <span>Mock Test</span></a></li>
						
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
						
						<li><a href="Upload.php"><i class="lnr lnr-upload"></i><span>Uplaod Notes</span></a></li>
						<li><a href="display.php"><i class="lnr lnr-home"></i><span>Display Notes</span></a></li>
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
								<a href="" class="dropdown-toggle" data-toggle="dropdown"><img src="../../assets/img/user.png" class="img-circle" alt="Avatar"> <span><!--<?php echo $_SESSION[alogin]?>--></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
								<ul class="dropdown-menu">
											 <?php @$_SESSION['alogin']; 
											  error_reporting(1);
											  ?>
											 
												<?php
													if(isset($_SESSION['alogin']))
													{
														 echo  "<li><a href=\"../HOD_profile.php\"><i class='lnr lnr-user'> </i><span>My Profile </span></a></li>
														       <li><a href=\"select.php\"><i class='lnr lnr-home'> </i><span>Mock Test Home</span></a></li>
															   <li><a href=\"signout.php\"><i class='lnr lnr-exit'></i> <span>Logout</span></a></li>";
														

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
			
			
			
<div class="panel">
<div class="panel-heading">

		<h3> Delete Record Files</h3>
</div>
<div class="panel-body no-padding">	
		<table class="table table-bordered">
              <thead>
                <tr>
                  <th width="60px"> No</th>
				  <th>Subject</th>
                  <th>Topic</th>
                  <th>File</th>
               	  <th> Action </th>
                </tr>
              </thead>
              <tbody>
			  <?php 
			    $no=1;
				$result = mysqli_query($conn,"SELECT * FROM presentation WHERE staff_id='$rollno' ORDER BY subject ASC");
				while($data = mysqli_fetch_object($result) ):
			  ?>
                <tr>
				  <td><?php echo $no;?></td>
                  <td><?php echo $data->subject ?></td>
                  <td><?php echo $data->topic?></td>
				  <td><?php echo $data->file?></td>
				  <td>
				  <a href="deleteById.php?id=<?php echo $data->id ?> ">
				<button class="btn btn-danger" title="Click here to erase file."> Delete </button>
				</a>
				  <script type="text/javascript">
					function del()
					{
						var qury = confirm("Are you sure to delete this file?");
						 if(qury)
						 {
								innerHTML+='<a href="deleteById.php?id=<?php echo $data->id ?> ">';
						 }
						 
					}
					</script>
				  </td>
                </tr>
			  <?php
				$no++;
				endwhile;
			  ?>
              </tbody>
		</table>
		
		</div>
</div>	
</div>
<script>
function delete()
{
	var qury = confirm("Are you sure to delete this file?");
	 if(qury)
	 {
			innerHTML+='<a href="deleteById.php?id=<?php echo $data->id ?> ">';
	 }
	 
}
</script>

</body>
</html>
