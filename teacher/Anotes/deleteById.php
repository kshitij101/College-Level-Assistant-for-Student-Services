<?php 
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"class");

$id = $_GET['id']; 

mysqli_query($link,"DELETE FROM presentation where id = '$id'"); 

header("Location: delete.php"); 



?>