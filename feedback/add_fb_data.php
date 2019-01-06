<?php
	
	session_start();
	//include db file
	include('../dbcon.php');
	//session
	$rollno = $_SESSION['roll_no'];
	$count = $_POST['count'];
	
	$cnt = 1;
	$office = $_POST['office'];
	$comment = $_POST['comment'];
	//query 
	$query = mysqli_query($conn,"SELECT course_code, course_name FROM student INNER JOIN subject_info ON subject_info.course_code=student.subject_regi WHERE rollno='$rollno'");

	
	if (isset($_POST['submit'])) {
		while ($row = mysqli_fetch_object($query)){
				echo "<br>+--------------------------------+";
				while($cnt<=($count-2)){
					$code = $row->course_code;
					$q_value = $_POST[$cnt.$row->course_code];
					if($rollno && $code && $cnt && $q_value){
					$query1 = mysqli_query($conn,"INSERT INTO `feed_entries` (`rollno`, `course_code`, `q_id`, `q_value`) VALUES ('$rollno', '$code', '$cnt', '$q_value');");						
					}
					else{
						header("Location:myprj_stud.php");
					}
					$cnt = $cnt + 1;
				}
				echo "<br>DONE";
				echo "<br>+--------------------------------+";
			$cnt = 1;
		}
		$query2 = mysqli_query($conn,"INSERT INTO `feed_office` (`rollno`, `value`) VALUES ('$rollno','$office');")or die("Something went wrong");						
		$query3 = mysqli_query($conn,"INSERT INTO `suggestion` (`comments`) VALUES ('$comment');")or die("Something went wrong");						

		if($query1){
			header("Location:thankyou.php");
		}
	}	
	else{
		echo "error";
	}



?>