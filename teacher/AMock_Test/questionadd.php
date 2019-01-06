<?php
session_start();
	if(!isset($_SESSION['roll_no']))
	{
		header("location:../login.html");
	}
	$rollno = $_SESSION['roll_no'];
require("../../Database/dbcon.php");


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
				<a href="../page-Teacher_profile.php"><img src="../../assets/img/logo.png" alt="Class Logo" class="img-responsive logo"></a>
			</div>
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="../page-Teacher_profile.php" ><i class="lnr lnr-home"></i> <span>Profile</span></a></li>
						<li><a href="../Attendance_System.php" ><i class="lnr lnr-chart-bars"></i> <span>Attendance</span></a></li>
						<li><a href="../notices/notices.php" ><i class="lnr lnr-code"></i> <span>Notices</span></a></li>
						<li><a href="../Timetable/input_tt.php" ><i class="lnr lnr-chart-bars"></i> <span>Timetble</span></a></li>
					
						<li><a href="../Anotes/display.php" class=""><i class="fa fa-book"></i> <span>Notes</span></a></li>
						<li><a href="../syllabus.php" class=""><i class="fa fa-book"></i> <span>Syllabus</span></a></li>
						
						<li><a href="../../feedback/myprj_stud.php" class=""><i class="fa fa-comments-o"></i> <span>Feedback</span></a></li>	
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
								
								
						
								<li>
								<a href="subadd.php"><button  class="btn btn-default"><i class="fa fa-backward"></i>&nbsp; Add Subject</button></a>
								</li>
								<li>
								<a href="testadd.php"><button  class="btn btn-default"><i class="fa fa-backward"></i>&nbsp; Add Test</button></a>
								</li>
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
											 <?php @$_SESSION['roll_no']; 
											  error_reporting(1);
											  ?>
											 
												<?php
													if(isset($_SESSION['roll_no']))
													{
														 echo  "<li><a href=\"../page-Teacher_profile.php\"><i class='lnr lnr-user'> </i><span>My Profile </span></a></li>
														       <li><a href=\"select.php\"><i class='lnr lnr-home'> </i><span>Mock Test Home</span></a></li>
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
extract($_POST);

echo "<BR>";
if (!isset($_SESSION[roll_no]))
{
	echo "<br><h2><div  class=page-title>You are not Logged On Please Login to Access this Page</div></h2>";
	echo "<a href=../../index.php><h3 align=center>Click Here for Login</h3></a>";
	exit();
}
echo "<BR><h1 class=page-title align=center>Add Question </h1>";
if($_POST[submit]=='Save' || strlen($_POST['testid'])>0 && $i!=('total_que'+1))
{
	$i=1;
	
extract($_POST);
mysqli_query($conn,"insert into mst_question(test_id,que_desc,ans1,ans2,ans3,ans4,true_ans) values ('$testid','$addque','$ans1','$ans2','$ans3','$ans4','$anstrue')") or die(mysqli_error($conn));
echo "<p align=center>Question Added Successfully.</p>";
unset($_POST);
$i++;
}
?>

<div class="panel">
<div class="panel-body">
<div class="panel-heading">
	<h3 class="panel-title">Mock Test</h3>
</div>
<form name="form1" method="post" onSubmit="return check();">
  <table class="table" align="center">
    <tr>
      <td ><div align="left"><strong>Select Test Name </strong></div></td>
      <td >  
      <td ><select class="form-control input-lg" name="testid" id="testid">
<?php
$rs=mysqli_query($conn,"Select * from mst_test order by test_name");
	  while($row=mysqli_fetch_array($rs))
{
if($row[0]==$testid)
{
echo "<option value='$row[0]' selected>$row[2]</option>";
}
else
{
echo "<option value='$row[0]'>$row[2]</option>";
}
}
?>
      </select>
        
    <tr>
        <td ><div align="left"><strong> Enter Question </strong></div></td>
        <td>&nbsp;</td>
	    <td><textarea class="form-control" name="addque" cols="60" rows="2" id="addque" placeholder="Enter Question"></textarea></td>
    </tr>
    <tr>
      <td ><div align="left"><strong>Enter Answer 1 </strong></div></td>
      <td>&nbsp;</td>
      <td><input class="form-control" name="ans1" type="text" id="ans1" size="85" maxlength="85" placeholder="Enter Answer 1"></td>
    </tr>
    <tr>
      <td ><strong>Enter Answer 2 </strong></td>
      <td>&nbsp;</td>
      <td><input class="form-control" name="ans2" type="text" id="ans2" size="85" maxlength="85"placeholder="Enter Answer 2"></td>
    </tr>
    <tr>
      <td ><strong>Enter Answer 3 </strong></td>
      <td>&nbsp;</td>
      <td><input class="form-control" name="ans3" type="text" id="ans3" size="85" maxlength="85"placeholder="Enter Answer 3"></td>
    </tr>
    <tr>
      <td><strong>Enter Answer 4</strong></td>
      <td>&nbsp;</td>
      <td><input class="form-control" name="ans4" type="text" id="ans4" size="85" maxlength="85"placeholder="Enter Answer 4"></td>
    </tr>
    <tr>
      <td ><strong>Enter Number True Answer </strong></td>
      <td>&nbsp;</td>
      <td><input class="form-control" name="anstrue" type="text" id="anstrue" size="85" maxlength="85" placeholder="Enter Numberbv True Answer"></td>
    </tr>
    <tr>
      <td ></td>
      <td>&nbsp;</td>
      <td><button type="submit" name="submit" value="Add" class="btn btn-default"><i class="fa fa-plus-square"></i> Add </button></td>
    </tr>
  </table>
</form>
<p>&nbsp; </p>
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
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.addque.value;
if (mt.length<1) {
alert("Please Enter Question");
document.form1.addque.focus();
return false;
}
a1=document.form1.ans1.value;
if(a1.length<1) {
alert("Please Enter Answer1");
document.form1.ans1.focus();
return false;
}
a2=document.form1.ans2.value;
if(a1.length<1) {
alert("Please Enter Answer2");
document.form1.ans2.focus();
return false;
}
a3=document.form1.ans3.value;
if(a3.length<1) {
alert("Please Enter Answer3");
document.form1.ans3.focus();
return false;
}
a4=document.form1.ans4.value;
if(a4.length<1) {
alert("Please Enter Answer4");
document.form1.ans4.focus();
return false;
}
at=document.form1.anstrue.value;
if(at.length<1) {
alert("Please Enter True Answer");
document.form1.anstrue.focus();
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