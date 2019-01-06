<?php

	session_start();
	//checking user is logged in or not
	if(!isset($_SESSION['roll_no'])){
			echo '<script language="javascript">'; 
			echo 'alert("Please LogIn First")';
			echo '</script>';
			header('Location: index.php');
		exit();
	}

	//include db file
	include('../dbcon.php');
	$rollno = $_SESSION['roll_no'];
	
	//binding the data
	/*$query = $conn->prepare("SELECT question FROM question_bank");
	$query->execute();
	$query->bind_result($question);
	*/
	$query = mysqli_query($conn, "SELECT question FROM question_bank");
	$query1 = mysqli_query($conn,"SELECT course_code, course_name FROM student INNER JOIN subject_info ON subject_info.course_code=student.subject_regi WHERE rollno='$rollno'");

/*
	//binding the data
	$query1 = $conn->prepare("SELECT course_code, course_name FROM student INNER JOIN subject_info ON subject_info.course_code=student.subject_regi WHERE rollno='$rollno'");
	$query1->execute();
	$query1->bind_result($course_code, $course_name);
*/

?>

<!DOCTYPE html>




<html>

<head>
	
<meta charset="utf-8">
	
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
<meta http-equiv="X-UA-Compatible" content="IE=edge">




	
<title>C.W.I.T student Feedback system</title>
	
	


<!-- [ FONT-AWESOME ICON ] 
        =========================================================================================================================-->
	


<link rel="stylesheet" type="text/css" href="library/font-awesome-4.3.0/css/font-awesome.min.css">

	


<!-- [ PLUGIN STYLESHEET ]
        =========================================================================================================================-->
	


<link rel="shortcut icon" type="image/x-icon" href="images/ikn.jpg">
	
<link rel="stylesheet" type="text/css" href="css/animate.css">
	
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
        
<link rel ="stylesheet" type="text/css" href="library/vegas/vegas.min.css">
	

<!-- [ Boot STYLESHEET ]
        =========================================================================================================================-->
	


<link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap-theme.min.css">
	
<link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap.css">
        
       

 <!-- [ DEFAULT STYLESHEET ] 
        =========================================================================================================================-->
	


<link rel="stylesheet" type="text/css" href="css/style.css">
       
 <link rel="stylesheet" type="text/css" href="css/responsive.css">
	
<link rel="stylesheet" type="text/css" href="css/color/dodblu.css">
        



<body >




<!-- [WRAPPER ]
=============================================================================================================================-->



<div class="wrapper">
    
 


<!-- [NAV]
 ============================================================================================================================-->    
   

<!-- Navigation
    ==========================================-->
   

 <nav  class="amd-menu navbar navbar-default navbar-fixed-top theme_background_color fadeInDown">
      
<div class="container">
        


<!-- Brand and toggle get grouped for better mobile display -->
 <div class="navbar-header">
          
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
           
 <span class="sr-only">Toggle navigation</span>
            
<span class="icon-bar"></span>
            
<span class="icon-bar"></span>
            
<span class="icon-bar"></span>
          
</button>
            
<a href="images/clogo.png">
</span>
</a><a href="cwitpune.com" class="page-scroll"><img src="images/clogo.png" width="79" height="59"></a>
        
</div>

        


<!-- Collect the nav links, forms, and other content for toggling -->
        


<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          
<ul class="nav navbar-nav navbar-right">

<li><a href="myprj_stud.php" class="page-scroll">Home</a></li>                       

<li><a href="../logout.php" class="page-scroll">Logout</a></li>                       
                     
</ul>
</div>

</div>

<!-- /.container-fluid -->
   

 </nav>
<div>

<style type="text/css">
body{
	background:#616161;
}

.form-style-10{
	max-width:1250px;
	padding:30px;
	margin:40px auto;
	background: #FFF;
	border-radius: 10px;
	-webkit-border-radius:10px;
	-moz-border-radius: 10px;
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
	-moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
	-webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
}
.form-style-10 .inner-wrap{
	padding: 30px;
	background: #F8F8F8;
	border-radius: 6px;
	margin-bottom: 15px;
}
.form-style-10 h1{
	background: #2A88AD;
	padding: 20px 30px 15px 30px;
	margin: -30px -30px 30px -30px;
	border-radius: 10px 10px 0 0;
	-webkit-border-radius: 10px 10px 0 0;
	-moz-border-radius: 10px 10px 0 0;
	color: #fff;
	text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
	font: normal 30px 'Bitter', serif;
	-moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	-webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	border: 1px solid #257C9E;
}
.form-style-10 h1 > span{
	display: block;
	margin-top: 2px;
	font: 13px Arial, Helvetica, sans-serif;
}
.form-style-10 label{
	display: block;
	font: 13px Arial, Helvetica, sans-serif;
	color: #888;
	margin-bottom: 15px;
}
.form-style-10 input[type="text"],
.form-style-10 input[type="date"],
.form-style-10 input[type="datetime"],
.form-style-10 input[type="email"],
.form-style-10 input[type="number"],
.form-style-10 input[type="search"],
.form-style-10 input[type="time"],
.form-style-10 input[type="url"],
.form-style-10 input[type="password"],
.form-style-10 textarea,
.form-style-10 select {
	display: block;
font-family: Georgia, "Times New Roman", Times, serif;

	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	width: 100%;
	padding: 8px;
	border-radius: 6px;
	-webkit-border-radius:6px;
	-moz-border-radius:6px;
	border: 2px solid #fff;

	color:#607D8B;
	box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
	-moz-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
	-webkit-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
}

.form-style-10 .section{
	font: normal 20px 'Bitter', serif;
	color: #2A88AD;
	margin-bottom: 5px;
}
.form-style-10 .subject{
	font: normal 15px 'Bitter', serif;
	color: #000000;
	margin-bottom: 5px;
}
.form-style-10 .section span {
	background: #2A88AD;
	padding: 5px 10px 5px 10px;
	position: absolute;
	border-radius: 50%;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border: 4px solid #fff;
	font-size: 14px;
	margin-left: -45px;
	color: #fff;
	margin-top: -3px;
}
.form-style-10 input[type="button"], 
.form-style-10 input[type="submit"]{
	background: #2A88AD;
	padding: 8px 20px 8px 20px;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	color: #fff;
	text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
	font: normal 30px 'Bitter', serif;
	-moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	-webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	border: 1px solid #257C9E;
	font-size: 15px;
}
.form-style-10 input[type="button"]:hover, 
.form-style-10 input[type="submit"]:hover{
	background: #2A6881;
	-moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
	-webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
	box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
}
.form-style-10 .privacy-policy{
	float: right;
	width: 250px;
	font: 12px Arial, Helvetica, sans-serif;
	color: #4D4D4D;
	margin-top: 10px;
	text-align: right;
}

</style>
</head>




<!--  main feedback form-->
 <br>
<br>
<br>
<br>
<div class="form-style-10">

<h1>Give your precious feedback now!<span>Tell us what you think !</span></h1>
<form action="add_fb_data.php" method="POST">
    <?php 
		$cnt = 0;
		while ($row = mysqli_fetch_object($query)) {
		$cnt = $cnt + 1;
?>

<div class="section"><span><?php echo $cnt;?></span><?php echo $row->question;?><br><br></div>


   <div class="inner-wrap">
        
<table>
<tr>
<?php
	
	$cnt_f = 0;
	while ($row1 = mysqli_fetch_object($query1)){
		
		$cnt_f = $cnt_f + 1 ;
	
?>
	<th>
	<label class="subject"><?php echo "".$row1->course_name."";?></label>
	<select name="<?php echo "".$cnt."".$row1->course_code;?>" class="field-select">
		<option value="" style="display: none"></option>
        <option value=5>Excellent</option>
        <option value=4>Good</option>
        <option value=3>Satisfactory</option>
		<option value=2>Need Improvements</option>
        <option value=1>Poor</option>
    </select>
	</th>
	<?php  
	//inner while end
	}
	mysqli_data_seek($query1, 0);
	
	?>
</tr>
</table>
</div>
<?php } ?>

    <div class="section"><span><?php echo $cnt = $cnt+1;?></span>office</div>
        <div class="inner-wrap">
         <select name="office" class="field-select">
        <option value="" style="display: none"></option>
        <option value=5>Excellent</option>
        <option value=4>Good</option>
        <option value=3>Satisfactory</option>
		<option value=2>Need Improvements</option>
        <option value=1>Poor</option>
        </select>
    </div>

    <div class="section"><span><?php echo $cnt = $cnt+1;?></span>Comments</div>
    <div class="inner-wrap">
         <label> <textarea name="comment"></textarea></label>
    </div>
	<input type="hidden" name="count" value="<?php echo $cnt;?>">
    <div class="button-section">
     <input type="submit" name="submit" value="Submit">
    </div>
</form>
</div>


  
<!-- [/ main feedback form]---------------->


<section class="mobile-app theme_background_color">
      
<br>
<br>
<br>
<br>
</section>







 
 
 
 
 
 
 


 
</div>
 
<!-- [ /WRAPPER ]
=============================================================================================================================-->

	

<!-- [ DEFAULT SCRIPT ] -->

<script src="library/modernizr.custom.97074.js"></script>
	
<script src="library/jquery-1.11.3.min.js"></script>
        
<script src="library/bootstrap/js/bootstrap.js"></script>
	
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        
<script src="library/vegas/vegas.min.js"></script>
	

<!-- [ PLUGIN SCRIPT ] -->
        
	

<script src="js/plugins.js"></script>
        
<script src="js/fappear.js"></script>
      
 <script src="js/jquery.countTo.js"></script>
	
<script src="js/scrollreveal.js"></script>
       	 

<!-- [ COMMON SCRIPT ] -->
	

<script src="js/common.js">
</script>




  

</body>

<script type="text/javascript">
    $(document).ready(function()
    {
        fullscreenslider();
    }
     );
    
 </script>




</html>