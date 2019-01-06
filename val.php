<?php
	include 'dbcon.php';
	$roll = $_REQUEST['r'];
	$query = "SELECT * FROM all_users WHERE roll_no ='$roll'";
	$result=mysqli_query($conn,$query);
	$s = mysqli_num_rows($result);
	if($s == 1)
	{
		$row = mysqli_fetch_object($result);
		$flag = $row->pic;
	}
	else
	{
		$flag = '0';
	}
	echo $flag;
?>