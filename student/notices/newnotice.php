<?php
	session_start();
	if(!isset($_SESSION['roll_no']))
	{
		header("location:../login.html");
	}
	//include db file
	include('../dbcon.php');
	$rollno = $_SESSION['roll_no'];
	
	if (isset($_POST['submit'])) {
		$title = $_POST['title'];
		$post = $_POST['post'];
		$cat = $_POST['category'];		
		$title = mysqli_real_escape_string($conn,$title);
		$post = mysqli_real_escape_string($conn,$post);
		$title = htmlentities($title);
		
		if($title && $post && $cat){
		if (file_exists("upload/" . $_FILES["file"]["name"]))
		{
			echo '<script language="javascript">alert(" Sorry!! Filename Already Exists...")</script>';
		}
		else
		{
			move_uploaded_file($_FILES["file"]["tmp_name"], "upload/".$rollno."_". $_FILES["file"]["name"]) ;
			$query = mysqli_query($conn,"INSERT INTO notices (user_id, title, body, category,file) 
			VALUES ('$rollno', '$title', '$post', '$cat','".$rollno."_".$_FILES["file"]["name"] ."')");
			
				echo '<script language="javascript">'; 
				echo 'alert("Post added SUCCESSFULLY.....")';
				echo '</script>';
				echo "<h2></h2>";
			
			/*else{
				echo "<h2>Something Error</h2>";
			}*/
		}}
		else{
				echo '<script language="javascript">'; 
				echo 'alert("You missed something to Write")';
				echo '</script>';
		}
	}
?>
<!DOCTYPE HTML >
<html>
<head>
<title>Blogs | CLASS-College Level Assistant For Student Services</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
						<li><a href="../Student_profile.php" ><i class="lnr lnr-home"></i> <span>Profile</span></a></li>
						<li><a href="#" class=""><i class="lnr lnr-code"></i> <span>Notifications</span></a></li>
						<li><a href="#" class=""><i class="lnr lnr-chart-bars"></i> <span>Timetble</span></a></li>
						<li><a href="#" class=""><i class="lnr lnr-cog"></i> <span>Results</span></a></li>
						<li><a href="#" class=""><i class="lnr lnr-alarm"></i> <span>Notes</span></a></li>
							<li><a href="#" class=""><i class="lnr lnr-alarm"></i> <span>Syllabus</span></a></li>
								<li><a href="#" class=""><i class="lnr lnr-alarm"></i> <span>Chatroom</span></a></li>
						
						<li><a href="blog.php" class="active"><i class="lnr lnr-dice"></i> <span>Blogs</span></a></li>
						<li><a href="Mock_stud.php" ><i class="lnr lnr-text-format"></i> <span>Mock Test</span></a></li>
						<li><a href="index.html" class=""><i class="lnr lnr-linearicons"></i> <span>About Us</span></a></li>
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
						
							   <li><a href="#"><i class="fa fa-paper-plane-o"></i><span>New Post</span></a></li>
							   
								<li><a href="delete.php"><i class="lnr lnr-trash"></i><span>Delete Post</span></a></li>	
								
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
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="../assets/img/user.png" class="img-circle" alt="Avatar"> <span><?php ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
								<ul class="dropdown-menu">
											 <?php @$_SESSION['login']; 
											  error_reporting(1);
											  ?>
											 
												<?php
												if(isset($_SESSION['login']))
												{
												 echo "<li><a href=\"../Student_profile.php\"><i class='lnr lnr-user'> </i><span>My Profile </span></a></li>
														<li><a href=\"Blog.php\"><i class='lnr lnr-home'> </i><span>Blog Home </span></a></li>
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
				<div class="container-fluid">
  
  
  <h1 class="panel-title" align="center">Add Notice</h1><br><br>
 
 <div class="panel">
<div class="panel-body">
<div class="panel-heading">
<h3 class="panel-title">Notice</h3>
</div>
  
	<form name="form1" method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']?>">
	<table class="table" align="center">
    <tr>
	
		<td ><div align="left"><strong>Title</strong></div></td>
		 <td ><input class="form-control" type="text" size="85" maxlength="85" name="title" placeholder ="Title" id="loginid2"></tr>
		
	<tr>
		
		<td ><div align="left"><strong>Short Description:</strong></div></td>
		<td ><textarea class="form-control" name="post" placeholder ="What you are thinking....."></textarea></td >
	</tr>
		
		
		<tr>
		<td ><div align="left"><strong>Category:</strong></div></td>
		<td>
		<select class="form-control input-lg" name="category">
			<?php
				$query = mysqli_query($conn,"SELECT * FROM categories");
				while($row = mysqli_fetch_object($query)){
					echo "<option value='".$row->category."'>".$row->category."</option>";
				}
			?>
		</select>
		</td>
		</tr>
		<tr>
				<td ><div align="left"><strong>Upload Notice File:</strong></div></td>
				<td><input type="file" name="file" id="file" class="form-control" title="Click here to select file to upload." required /></td>
		</tr>
		
		<tr>
		<td></td>
		
		<td><button type="submit" class="btn btn-default" name="submit" type="submit" id="submit" value="Post"><i class="fa fa-paper-plane-o"></i>  Post</button></td>
	</tr>
	</form>
	</table>
	
	</div>
	</div></div>
	</div>
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
	<script src="../assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="../assets/js/bootstrap/bootstrap.min.js"></script>
	<script src="../assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../assets/js/klorofil.min.js"></script>
</body>
</html>
