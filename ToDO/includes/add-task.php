<?php 
session_start();
	$rollno = $_SESSION['roll_no'];
	$task = strip_tags( $_POST['task'] );
	$date = date('Y-m-d');
	$time = date('H:i:s');

	require("../../Database/dbcon.php");

	mysqli_query($conn,"INSERT INTO tasks VALUES ('', '$task', '$date', '$time','$rollno')");

	$query = mysqli_query($conn,"SELECT * FROM tasks WHERE task='$task' and date='$date' and time='$time' and sess_id='$rollno'");

	while( $row = mysqli_fetch_assoc($query) ){
		$task_id = $row['id'];
		$task_name = $row['task'];
		$date= $row['date'];
		$time= $row['time'];
	}

	mysqli_close($conn);

	echo'
	<li>
			
			<p>
			<span class="short-description">'.$task_name.'</span>
			<span class="date">'.$date.'</span>
			&nbsp;
			<span class="date">'.$time.'</span>
			<img id="'.$task_id.'" class="right delete-button" width="10px" src="../ToDO/images/close.svg" />
			</p>
		
			
			</li>';
	
	
?>