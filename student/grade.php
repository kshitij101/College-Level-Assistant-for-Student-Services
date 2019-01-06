<?php
	session_start();
	if(!isset($_SESSION['roll_no']))
	{
		header("location:../login.html");
	}
	$rollno = $_SESSION['roll_no'];
	$subject = $_POST['subject'];
	include('../dbcon.php');

	$query2 = mysqli_query($conn,"SELECT * FROM student_at WHERE rollno='$rollno' AND subject='$subject'");
		$dada = mysqli_num_rows($query2);
		$query3 = mysqli_query($conn,"SELECT lect_taken FROM subject_info WHERE course_code='$subject'");
	$row3 = mysqli_fetch_object($query3);
	$lect = $row3->lect_taken;
	if($dada<=0 && $lect<=0)
	{}
	else
	{
		$atte_per = round((($dada/$lect)*100),2);
	}


	
															$query1 = mysqli_query($conn,"SELECT tot_ut_com, tot_ut FROM syllabus WHERE course_code='$subject'")or die("Nooo");
															while($row1 = mysqli_fetch_object($query1))
															{
																$syl_per = round(($row1->tot_ut_com)/($row1->tot_ut)*100);
																if($syl_per>=0)
																{}
																else
																	echo "Syllabus Not started";
															
														}


	$rs=mysqli_query($conn,"select t.test_name,t.total_que,r.test_date,r.score from mst_test t, mst_result r where
			t.test_id=r.test_id and r.roll_no='$rollno'") or die(mysqli_error($conn));

	if(mysqli_num_rows($rs)<1)
			{
				echo "<br><br><h2 class=page-title> You have not given any test</h2>";
				exit;
			}
	else{
		while($row=mysqli_fetch_row($rs))
			{
			$tot_que = $row[1]; 
			$tot_score =  $row[3];
			}
			$test_per = round(($tot_score/$tot_que)*100);
	}

	echo $atte_per;
	echo $syl_per;
	echo $test_per;

	
	$_SESSION['atte_per'] = $atte_per;
	$_SESSION['syl_per'] = $syl_per;
	$_SESSION['test_per'] = $test_per;
	header("location: grade_prediction.php");
?>

