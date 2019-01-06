<?php
	include 'dbcon.php';
	session_start();
	$rollno = "PC1003";
	//$rollno = $_SESSION['roll_no'];
?>
	
<html>
<head>
<title>test</title>
</head>
<body>
	<select id="subject"> 
	<?php
			$query = mysqli_query($conn,"SELECT course_code,course_name FROM subject_info WHERE course_staff_id='$rollno'");
			while($row = mysqli_fetch_object($query)){
				echo "<option value='".$row->course_code."'>".$row->course_name."</option>";
			}
	?>
	</select>
	<div id='a'>
	</div>
</body>
<script src="testing.js"></script>
</html>