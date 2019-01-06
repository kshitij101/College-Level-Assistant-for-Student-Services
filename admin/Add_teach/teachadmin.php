
<?php


	session_start();
		if(!isset($_SESSION['roll_no']))
	{
		header("location:../../login.html");
	}
	$rollno = $_SESSION['roll_no'];
	include "../../Database/dbcon.php";

?>

<!doctype html>
<html >

<head>
	<title>Admin| CLASS-College Level Assistant for Student Sevices</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- CSS -->
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/css/vendor/icon-sets.css">
	<link rel="stylesheet" href="../../assets/css/main.min.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="../../assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../../assets/img/favicon.png">
	
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    
   
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- SIDEBAR -->
		<div class="sidebar">
			<div class="brand">
				<a href="index.html"><img src="../../assets/img/logo.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="sidebar-scroll" id="LOC">
			<nav>
					<ul class="nav">
							<li><a href="#" ><i class="lnr lnr-home"></i> <span>My Profile</span></a></li>
						  <li><a href="../Add_stud/studadmin.php"><i class="fa fa-user"></i><span>Student</span></a></li>
							<ul class="nav">
									<li><i class="fa fa-user"></i><span>Teacher</span></li>
							
								
								
									<li><a href="addteach.php"><i class="lnr lnr-user"></i> <span>Add Teacher</span></a></li>
										
							
						</ul>
							
							
							
							
							
					
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
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="" class="img-circle" alt="Avatar"> <span><?php echo $rollno; ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								
									<li><a href="../../logout.php"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
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
            
			<div id="teach">
                <center><h2>Teacher Information</h2></center>
                <?php
                    $query = "SELECT * FROM teach_info";
                    $result = mysqli_query($conn,$query);
                    $fields = mysqli_fetch_fields($result);
                    ?>
                    <table class="table table-bordered">
                    <tr>
                    <?php
                        foreach($fields as $field){
                            echo "<td>";
                            echo $field->name;
                            echo "</td>";
                        }
                        ?>
                        <td>Update</td>
                        <td>Delete</td>
                    </tr>
                    <?php
                    while($obj = mysqli_fetch_object($result)){
                        echo "<tr>";
                        for($i=0;$i<$result->field_count;$i++){
                             echo "<td>";
                             echo $obj->{$fields[$i]->name};
                             echo "</td>";
                         }
                         echo "<td><a href='upteach.php?r=$obj->rollno'>Update</a></td>";
                         echo "<td><a href='delteach.php?r=$obj->rollno'>Delete</a></td>";
                        echo "</tr>";
                    }
                    ?>
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


	<script src="../../assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="../../assets/js/bootstrap/bootstrap.min.js"></script>
	<script src="../../assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../../assets/js/klorofil.min.js"></script>
</body>
    </html>