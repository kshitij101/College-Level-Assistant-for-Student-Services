<?php
	include "../dbcon.php";
	session_start();
	$subject = $_REQUEST['s'];
	$query = $conn->prepare("SELECT * FROM student WHERE subject_regi='$subject'");
	$query->execute();
	$query->bind_result($rollno,$name,$subject_regi);
	while($query->fetch()):
	echo $rollno."|";
	endwhile;
?>