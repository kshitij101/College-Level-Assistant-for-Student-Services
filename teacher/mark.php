<?php
	include '../dbcon.php';
	$sub = $_REQUEST['s'];
	/*$query = "SELECT * FROM student WHERE subject_regi='$sub'";
	$result=mysqli_query($conn,$query);
	$s = mysqli_num_rows($result);
	if($s == 1)
	{
		$row = mysqli_fetch_object($result);
		$rollno = $row->rollno;
		$subject = $row->subject_regi;
	}
	echo $subject;*/

		$query1 = mysqli_query($conn,"SELECT rollno FROM student WHERE subject_regi='$sub'");
			while($row = mysqli_fetch_object($query1))
			{
			$query2 = mysqli_query($conn,"SELECT * FROM student_at WHERE rollno='$row->rollno' AND subject='$sub'") or die("noo");
			$dada = mysqli_num_rows($query2);
			//echo "<th>".$dada."</th>";
			$per = round((($dada/$lect)*100),2);
			}

?>