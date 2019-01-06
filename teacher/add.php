<?php
	session_start();
	//checking user is logged in or not
	if(!isset($_SESSION['roll_no'])){
			echo '<script language="javascript">'; 
			echo 'alert("Please LogIn First")';
			echo '</script>';
			header('Location: login.php');
		exit();
	}
	//include db file
	include('../dbcon.php');
	
	//getting data
	$date = date("Y-m-d");
	$sub = $_POST['subject'];
	echo "Date: ".$date."<br>";
	//echo "Course Code: ".$subject."<br>";
	echo "Following enrollment numbers are present: <br>";
	if(!empty($_POST['rollno']))
	{
		foreach($_POST['rollno'] as $roll)
		{
			echo $roll."<br>"; 
			if($roll && $date && $sub)
			{
				$query = mysqli_query($conn,"INSERT INTO `student_at` (`rollno`, `date`,`subject`) VALUES ('$roll', '$date','$sub');");
			}
			else
				echo "nooooooooo";
		}
		$query1 = mysqli_query($conn,"SELECT lect_taken FROM subject_info WHERE course_code='$sub'");
		$row = mysqli_fetch_object($query1);
		$lect = $row->lect_taken;
		//echo "Total number of lectures taken before".$lect."<br>";
		$lect = $lect + 1;
			$query = mysqli_query($conn,"UPDATE `subject_info` SET `lect_taken`='$lect' WHERE course_code='$sub';");
		echo "Total no. of lectures taken: ".$lect;
		
	}
	
	echo "<br><a href='logout.php'>LOG OUT</a>";
?>





