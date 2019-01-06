<?php
	include 'dbcon.php';
	$p = $_REQUEST['p'];
	$r = $_REQUEST['r'];
	$p = md5($p);
	$query = "SELECT * FROM all_users WHERE roll_no = '$r' AND password = '$p'";
	$result=mysqli_query($conn,$query);
	$s = mysqli_num_rows($result);
	
	if($s == 1){
		session_start();
		$_SESSION['roll_no'] = $r;
		$flag = '1';
		$row = mysqli_fetch_object($result);
		$_SESSION['img'] = $row->pic;
		switch ($row->user_type)
		{
			case 1:
				$_SESSION['user_type'] = "admin";
				
				break;
			case 2:
				$_SESSION['user_type'] = "Student";
				break;
			case 3:
				$_SESSION['user_type'] = "Teacher";
				break;
			case 4:
				$_SESSION['user_type'] = "HOD";
				break;
		}
	}
	else
	{
		$flag = '0';
	}
	echo $flag;
?>
