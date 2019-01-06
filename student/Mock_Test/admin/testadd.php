<?php
session_start();
error_reporting(1);

?>

<!DOCTYPE HTML >
<html>
<head>
<title>Online Mock Test</title>
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
						<li><a href="../HOD_profile.php" class="active"><i class="lnr lnr-home"></i> <span>Profile</span></a></li>
						<li><a href="../../Notice/notice.php" class=""><i class="lnr lnr-code"></i> <span>Notifications</span></a></li>
						<li><a href="../../Timetable/time_table.php" class=""><i class="lnr lnr-chart-bars"></i> <span>Timetble</span></a></li>
						<li><a href="#" class=""><i class="lnr lnr-cog"></i> <span>Results</span></a></li>
						<li><a href="#" class=""><i class="lnr lnr-alarm"></i> <span>Notes</span></a></li>
							<li><a href="#" class=""><i class="lnr lnr-alarm"></i> <span>Syllabus</span></a></li>
								<li><a href="#" class=""><i class="lnr lnr-alarm"></i> <span>Chatroom</span></a></li>
						
						<li><a href="../../Blog/Blog.php" class=""><i class="lnr lnr-dice"></i> <span>Blogs</span></a></li>
						<li><a href="#" class=""><i class="lnr lnr-text-format"></i> <span>Mock Test</span></a></li>
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
								<a href="" class="dropdown-toggle" data-toggle="dropdown"><img src="../../../assets/img/user.png" class="img-circle" alt="Avatar"> <span><?php echo $_SESSION[alogin]?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
								<ul class="dropdown-menu">
											 <?php @$_SESSION['alogin']; 
											  error_reporting(1);
											  ?>
											 
												<?php
													if(isset($_SESSION['alogin']))
													{
														 echo "<li><a href=\"../../HOD_profile.php\"><i class='lnr lnr-user'> </i><span>My Profile </span></a></li>
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
				<div class="container-fluid">

				<?php
require("../database.php");



if (!isset($_SESSION['alogin']))
{
	echo "<br><h2>You are not Logged On Please Login to Access this Page</h2>";
	echo "<a href=index.php><h3 align=center>Click Here for Login</h3></a>";
	exit();
}

echo "<br><h2><div  class=head1>Add Test</div></h2>";
if($_POST[submit]=='Save' || strlen($_POST['subid'])>0 )
{
extract($_POST);
mysql_query("insert into mst_test(sub_id,test_name,total_que) values ('$subid','$testname','$totque')",$cn) or die(mysql_error());
echo "<p align=center>Test <b>\"$testname\"</b> Added Successfully.</p>";
unset($_POST);
}
?>
				
				
				<form name="form1" method="post" onSubmit="return check();">
  <table width="58%"  border="0" align="center">
    <tr>
      <td width="49%" height="32"><div align="left"><strong>Enter Subject ID </strong></div></td>
      <td width="3%" height="5">  
      <td width="48%" height="32"><select name="subid">
<?php
$rs=mysql_query("Select * from mst_subject order by  sub_name",$cn);
	  while($row=mysql_fetch_array($rs))
{
if($row[0]==$subid)
{
echo "<option value='$row[0]' selected>$row[1]</option>";
}
else
{
echo "<option value='$row[0]'>$row[1]</option>";
}
}
?>
      </select>
        
    <tr>
        <td height="26"><div align="left"><strong> Enter Test Name </strong></div></td>
        <td>&nbsp;</td>
	  <td><input name="testname" type="text" id="testname"></td>
    </tr>
    <tr>
      <td height="26"><div align="left"><strong>Enter Total Question </strong></div></td>
      <td>&nbsp;</td>
      <td><input name="totque" type="text" id="totque"></td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" value="Add" ></td>
    </tr>
  </table>
</form>
<p>&nbsp; </p>
				
				
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
	<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.testname.value;
if (mt.length<1) {
alert("Please Enter Test Name");
document.form1.testname.focus();
return false;
}
tt=document.form1.totque.value;
if(tt.length<1) {
alert("Please Enter Total Question");
document.form1.totque.value;
return false;
}
return true;
}
</script>
	<script src="../../assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="../../assets/js/bootstrap/bootstrap.min.js"></script>
	<script src="../../assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../../assets/js/klorofil.min.js"></script>
</body>
</html>