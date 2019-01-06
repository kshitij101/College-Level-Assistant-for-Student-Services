<?php
	session_start();
	if(!isset($_SESSION['roll_no']))
	{
		header("location:login.html");
	}
	echo $_SESSION['user_type'];
	switch ($_SESSION['user_type'])
	{
		case "admin":
			header("location:admin/page-Admin_profile.php");
			break;
		case "Student":
			header("location:student/page-Student_profile.php");
			break;
		case "Teacher":
			header("location:teacher/page-Teacher_profile.php");
			break;
		case "HOD":
			header("location:hod/page-Hod_profile.php");
			break;
	}

?>