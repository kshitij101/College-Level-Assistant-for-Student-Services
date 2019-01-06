<?php
   session_start();
		if(!isset($_SESSION['roll_no']))
	{
		header("location:../../login.html");
	}
	$rollno = $_SESSION['roll_no'];
	include "../../Database/dbcon.php";
	
    $a = $_GET['r'];
    $result = mysqli_query($conn,"DELETE FROM teach_info WHERE rollno = $a");
    if($result){
        echo "RECORD DELETED SUCCESFULLY";
    }
    else
    {
        echo "deletion Failed";
    }
?>