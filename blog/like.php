<?php

	if(!isset($_GET['id'])){
		header('Location: blog.php');
		exit();
	}
	else{
		$id = $_GET['id'];
	}
	include('../dbcon.php');
	if(!is_numeric($id)){
		header('Location: blog.php');
		exit();
	}
	

//report id get 

	
		$query = "SELECT like_post FROM post1 WHERE post_id='$id'";
		$result = mysqli_query($conn, $query);
		$row = mysqli_fetch_object($result);
		$like = $row->like_post;
		
			$like = 1 + $like;
			//insert report id
			$query2 = "UPDATE post1 set like_post =".$like." WHERE post_id = '$id'";
			$result2 = mysqli_query($conn,$query2);
			echo '<script language="javascript">'; 
			echo 'alert("Report added SUCCESSFULLY.....")';
			echo '</script>';
			header('Location: blog.php');
		

?>
