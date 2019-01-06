<?php
    session_start();
		if(!isset($_SESSION['roll_no']))
	{
		header("location:../../login.html");
	}
	$rollno = $_SESSION['roll_no'];
	include "../../Database/dbcon.php";
    $query = "UPDATE `student_info` SET `first_name`='".$_POST['first_name']."',`last_name`='".$_POST['last_name']."',`dob`='".$_POST['dob']."',`address`='".$_POST['address']."',`mobile`='".$_POST['mobile']."' WHERE rollno= '".$_POST['rollno']."'";
    $result = mysqli_query($conn,$query);
    header("location:studadmin.php")
    ?>