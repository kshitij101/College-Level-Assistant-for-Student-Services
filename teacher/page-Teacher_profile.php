<?php
	session_start();
	if(!isset($_SESSION['roll_no']))
	{
		header("location:../login.html");
	}
	include('../dbcon.php');

	$rollno = $_SESSION['roll_no'];
	$u_type = $_SESSION['user_type'];
?>

<!doctype html>
<html lang="en">

<head>
	<title>Profile | CLASS-College Level Assistant for Student Sevices</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/vendor/icon-sets.css">
	<link rel="stylesheet" href="assets/css/main.min.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<link rel="stylesheet" href="../ToDO/style.css">
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
						<li><a href="#" class="active"><i class="lnr lnr-home"></i> <span>Profile</span></a></li>
						<li><a href="Attendance_System.php" class=""><i class="lnr lnr-chart-bars"></i> <span>Attendance</span></a></li>
						<li><a href="notices/notices.php" class=""><i class="lnr lnr-code"></i> <span>Notices</span></a></li>
						<li><a href="timetable/view_tt.php" class=""><i class="lnr lnr-chart-bars"></i> <span>Timetble</span></a></li>
						
						<li><a href="Anotes/display.php" class=""><i class="fa fa-book"></i> <span>Notes</span></a></li>
						<li><a href="add_syllabus.php" class=""><i class="fa fa-book"></i> <span>Syllabus</span></a></li>
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
							<li><a href="location/cluster_stud_loc.php" target="new"class=""><i class="fa fa-graduation-cap"></i> <span>LOCATE STUDENTS</span></a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span><?php echo $rollno; ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								
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
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
										<img src=<?php echo "../".$_SESSION['img']; ?> class="img-circle" alt="Avatar" style="width: 50%; height: 50%">
										<h3 class="name"><?php echo $rollno; ?></h3>
										<span class="online-status status-available">Available</span>
									</div>
									
								</div>
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
								<div class="profile-detail">
									<div class="profile-info">
										<h4 class="heading">Basic Info</h4>
										<ul class="list-unstyled list-justify">
										<?php
											$query = "SELECT * FROM teach_info WHERE rollno = '".$_SESSION['roll_no']."'";
											$result = mysqli_query($conn,$query);
											$row = mysqli_fetch_object($result);
											?>
											<li>Name <span><?php echo $row->first_name." ".$row->last_name ?></span></li>
											<li>Birthdate <span><?php echo $row->dob ?></span></li>
											<li>Mobile <span><?php echo $row->mobile ?></span></li>
											<li>Address <span><?php echo $row->address ?></span></li>
											
										</ul>
									</div>
									
									
								</div>
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right">
								
								<!-- TABBED CONTENT -->
								<div class="custom-tabs-line tabs-line-bottom left-aligned">
									<ul class="nav" role="tablist">
										<li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab">Recent Notices</a></li>
										<li><a href="#tab-bottom-left2" role="tab" data-toggle="tab">Syllabus</a></li>
									</ul>
								</div>
								<div class="tab-content">
									<div class="tab-pane fade in active" id="tab-bottom-left1">
										<ul class="list-unstyled activity-timeline">
											<?php 
													$query1 = mysqli_query($conn,"SELECT title, LEFT(body,30) AS body, file FROM notices WHERE category='Staff' order by post_id desc LIMIT 3") or die("nooo");
													while($row1 = mysqli_fetch_object($query1))
													{	
												?>	
													<li>
												
												
												<i class="fa fa-comment activity-icon"></i>
												<p><?php echo $row1->title; ?><span class="timestamp"><?php echo $row1->body; ?></span></p>
											 <p><a title="Click here to download in file." href="../notices/download.php?id=<?php echo $row1->file;?>">
											 <button type="button" class="btn btn-primary btn-xs"><i class="fa fa-download"></i></button></a></p>
												</li>	<?php } ?>
										</ul>
										<div class="margin-top-30 text-center"><a href="../notices/notices.php" class="btn btn-default">See all notices</a></div>
									</div>
									<div class="tab-pane fade" id="tab-bottom-left2">
										<div class="table-responsive">
											<table class="table project-table">
												<thead>
													<tr>
														<th>Subject</th>
														<th>Syllabus</th>
													</tr>
												</thead>
												<tbody>
													<tr>
													<?php
														$query = mysqli_query($conn,"SELECT course_code,course_name FROM subject_info WHERE course_staff_id='$rollno'");
														while($row = mysqli_fetch_object($query)){
														//echo $row->course_name;
														
													?>
														<td><?php echo $row->course_name;?></td>
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
														<td><div class="progress">
																<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $per; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $per; ?>%;">
																	<span><?php echo $row1->tot_ut_com;?> Units Complete</span>
																</div>
															</div>
														</td>
														<?php	} ?>
													</tr>
													<?php	}
													?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<!-- END TABBED CONTENT -->
							</div>
							<!-- END RIGHT COLUMN -->
		<!-- TODO LIST -->
						<div class="profile-right">
					<h1>To DO List</h1>
					
							<div class="wrap">
								<div class="task-list">
								
										<ul>

								<?php 
									require("../Database/dbcon.php");

									$query = mysqli_query($conn,"SELECT * FROM tasks ORDER BY date ASC, time ASC");
									$numrows = mysqli_num_rows($query);

									if($numrows>0){
										while( $row = mysqli_fetch_assoc( $query ) ){

											$task_id = $row['id'];
											$task_name = $row['task'];
											$date= $row['date'];
											$time= $row['time'];

											echo '<li>
													
													<span>'.$task_name.'</span>
													<span class="date">'.$date.'</span>
																							&nbsp;
																							<span class="date">'.$time.'</span>
													<img id="'.$task_id.'" class="delete-button" width="10px" src="../ToDO/images/close.svg" />
													
												  </li>';
										}
									}

								?>
				
						</ul>
					</div>
		<form class="add-new-task" autocomplete="off">
			<input type="text" name="new-task" placeholder="Add a new item..." />
		</form>
	</div><!-- #wrap -->
							
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
	<script src="assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="assets/js/bootstrap/bootstrap.min.js"></script>
	<script src="assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/js/klorofil.min.js"></script>
</body>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script>
		
		add_task(); // Call the add_task function
		delete_task(); // Call the delete_task function

		function add_task() {

			$('.add-new-task').submit(function(){

				var new_task = $('.add-new-task input[name=new-task]').val();

				if(new_task != ''){

					$.post('../ToDO/includes/add-task.php', { task: new_task }, function( data ) {

						$('.add-new-task input[name=new-task]').val('');

						$(data).appendTo('.task-list ul').hide().fadeIn();

						delete_task();
					});
				}

				return false; // Ensure that the form does not submit twice
			});
		}

		function delete_task() {

			$('.delete-button').click(function(){

				var current_element = $(this);

				var id = $(this).attr('id');

				$.post('../ToDO/includes/delete-task.php', { task_id: id }, function() {

					current_element.parent().fadeOut("fast", function() { $(this).remove(); });
				});
			});
		}

	</script>
</html>
