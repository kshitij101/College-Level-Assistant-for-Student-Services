<?php
   session_start();
		if(!isset($_SESSION['roll_no']))
	{
		header("location:../../login.html");
	}
	$rollno = $_SESSION['roll_no'];
	include "../../Database/dbcon.php";
	echo $_POST['rollno'];
    $query = "INSERT INTO `teach_info` VALUES(`rollno`= '".$_POST['rollno']."',`first_name`='".$_POST['first_name']."',`last_name`='".$_POST['last_name']."',`qualification`= '".$_POST['qualification']."',`address`='".$_POST['address']."',`mobile`='".$_POST['mobile']."',`dob`='".$_POST['dob']."',`dept_id`='".$_POST['dept_id']."' )";
    $result = mysqli_query($conn,$query);
    $p = md5($_POST['password']);
    $target_dir = "../../images/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } 
    
    else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $query = "INSERT INTO all_users VALUES(rollno = '".$_POST['rollno']."', password = '".$p."' pic= '".$target_file."', user_type = 3)";
    } else {
        echo "Sorry, there was an error uploading your file.";
        }
    }
    }
    if($result){
    header("location:teachadmin.php");
    }
    else
    {
        echo "failed";
    }
 ?>