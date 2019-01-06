<?php
    session_start();
		if(!isset($_SESSION['roll_no']))
	{
		header("location:../../login.html");
	}
	$rollno = $_SESSION['roll_no'];
	include "../../Database/dbcon.php";
	
    $query = "UPDATE `teach_info` SET `first_name`='".$_POST['first_name']."',`last_name`='".$_POST['last_name']."',`qualification`= '".$_POST['qualification']."',`address`='".$_POST['address']."',`mobile`='".$_POST['mobile']."',`dob`='".$_POST['dob']."',`dept_id`='".$_POST['dept_id']."' WHERE rollno= '".$_POST['rollno']."'";
    $result = mysqli_query($conn,$query);
    header("location:teachadmin.php")
    ?>