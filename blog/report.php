<?php

	if(!isset($_GET['id'])){
		header('Location: index.php');
		exit();
	}
	else{
		$id = $_GET['id'];
	}
	include('../dbcon.php');
	if(!is_numeric($id)){
		header('Location: index.php');
		exit();
	}
	

//report id get 

	
		$query = "SELECT report FROM post1 WHERE post_id='$id'";
		$result = mysqli_query($conn, $query);
		$row = mysqli_fetch_object($result);
		$repo = $row->report;
		if($repo > 5)
		{
			$query = "DELETE FROM post1 WHERE post_id='$id'";
			if(mysqli_query($conn, $query)){
				echo '<script language="javascript">'; 
				echo 'alert("Record DELETED successfully...!")';
				echo '</script>';
				header('Location: blog.php');
			} 
			else
			{
				echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
			}
		}
		else
		{
			$repo = 1 + $repo;
			//insert report id
			$query2 = "UPDATE post1 set report =".$repo." WHERE post_id = '$id'";
			$result2 = mysqli_query($conn,$query2);
			echo '<script language="javascript">'; 
			echo 'alert("Report added SUCCESSFULLY.....")';
			echo '</script>';
			header('Location: blog.php');
		}

?>
