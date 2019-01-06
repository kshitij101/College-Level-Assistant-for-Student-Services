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


        <?php
			if(!empty($_POST))
			{
				if (!$conn)
					echo('Could not connect: ' . mysqli_error($conn));
				else
				{
					if (file_exists("download/" . $_FILES["file"]["name"]))
					{
						echo '<script language="javascript">alert(" Sorry!! Filename Already Exists...")</script>';
					}
					else
					{
						move_uploaded_file($_FILES["file"]["tmp_name"],
						"download/".$rollno."_". $_FILES["file"]["name"]) ;
						$sql = "INSERT INTO presentation(subject,topic,file,staff_id) VALUES ('" . $_POST["course_code"] ."','" . $_POST["pre"] . "',
						'".$rollno."_".$_FILES["file"]["name"] ."','$rollno');";
						if (!mysqli_query($conn,$sql))
							echo('Error : ' . mysqli_error($con));
						else
							echo '<script language="javascript">alert("Thank You!! File Uploded")</script>';
						}
				}
				mysqli_close($conn);
			}
        ?>

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
						<li><a href="delete.php"><i class="lnr lnr-trash"></i><span>Delete Notes</span></a></li>
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
								<a href="" class="dropdown-toggle" data-toggle="dropdown"><img src="../../assets/img/user.png" class="img-circle" alt="Avatar"> <span><?php echo $_SESSION['roll_no']?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
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
		<h3>Upload Notes</h3> 
		</div>
		<div class="panel-body no-padding">

        <form id="form3" class="" enctype="multipart/form-data" method="post" action="upload.php">
				<div class="col-md-12">
				
				<div class="col-md-6">
					<label for="sub"><h4>Subject: </h4></label>	
					
				</div>
				<div class="col-md-6">
                   <select class="form-control input" name="course_code">
					<?php
						$query = mysqli_query($conn,"SELECT course_code,course_name FROM subject_info WHERE course_staff_id='$rollno'");
						while($row = mysqli_fetch_object($query)){
						echo "<option value='".$row->course_code."'>".$row->course_name."</option>";
						}
					?>
				</select>
				</div>	
			
				</div>
				
				<div class="col-md-12">
				
               <div class="col-md-6">
                    <h4>Topic Name:</h4>
				</div>
				<div class="col-md-6">
                    <input type="text" name="pre" cols="50" rows="10" id="pre" placeholder="Topic name" class="form-control" required>
				</div>
				
               </div>
			   
			   <div class="col-md-12">
			   
			   <div class="col-md-6">
                   <label for="file"><h4>File:</h4></label>
				</div>
				   <div class="col-md-6">
						<input type="file" name="file" id="file" class="form-control" title="Click here to select file to upload." required />
					</div>
                  </div>
				 		   <div class="col-md-12">
						   <div class="col-md-6">
						   </div>
						   <div class="col-md-6">
				   <input type="submit" class="btn btn-primary" name="upload" id="upload" 
				   title="Click here to upload the file." value="Upload File" /></div>
				   <br><br>
               </div>
            
        </form>
	
		</div>
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


	<script src="../../assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="../../assets/js/bootstrap/bootstrap.min.js"></script>
	<script src="../../assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../../assets/js/klorofil.min.js"></script>
	
