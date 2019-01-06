<?php
	session_start();
	//checking user is logged in or not
	if(!isset($_SESSION['roll_no'])){
			echo '<script language="javascript">'; 
			echo 'alert("Please LogIn First")';
			echo '</script>';
			header('Location: ../index.php');
		exit();
	}
	//include db file
	include('../dbcon.php');
	$rollno = $_SESSION['roll_no'];


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
 
<!-- [ POPUP ]
        =========================================================================================================================-->

<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="popup/css/reset.css"> <!-- CSS reset -->

<link rel="stylesheet" href="popup/css/style.css"> <!-- Gem style -->

<script src="popup/js/modernizr.js"></script> <!-- Modernizr -->


</head>

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
                    
<li><a href="feedback.php" class="page-scroll">Feedback</a></li>
            
                       
<li><a href="../logout.php" class="page-scroll">Logout</a></li>
           
                   
</ul>
</div>

<!-- /.navbar-collapse -->
 

     
</div>

<!-- /.container-fluid -->
   

 </nav>


   


<!-- [/NAV]
 ============================================================================================================================-->    
    
    
    
    
    
 

 <!-- [MAIN GALLERY ]
=============================================================================================================================-->
 

 <section class="main-gallery" id="home">
    
<div class="overlay">
     
 <div class="container">
          
<div class="row">
            
  <div class="col-md-12 text-center">
<a href="cwitpune.com" class="page-scroll"><img src="images/clogo.png" width="179" height="169">
                 
<h3 class="text-capitalize bigFont" data-scroll-reveal="wait 0.45s, then enter top and move 80px over 1s">Cusrow Wadia Institute of Technology </h3>

                
<p class="intro" data-scroll-reveal="wait 0.45s, then enter left and move 80px over 1s">Engineering college in Pune,India</p>
              
</div>
 
            
</div>
              
          
 <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        
<div class="text-center top40">
                           
<br>
<br>                       
</div>
                   
 </div>
              
         
 </div>
      
     
  
</section>
  
  
  


<!-- [/MAIN GALLERY]
=============================================================================================================================-->
  




<!-- [MOBILE APPLICATION]
=============================================================================================================================-->
  
  

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