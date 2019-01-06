<?php
    session_start();
    include("../../Database/dbcon.php");
    for($i=0;$i<6;$i++){
    $query = "INSERT INTO time_table VALUES('".$_POST['dept_id']."', '".$_POST['term']."', '".$_POST[$i.'0']."', '".$_POST[$i.'1']."', '".$_POST[$i.'2']."', '".$_POST[$i.'3']."', '".$_POST[$i.'4']."', '".$_POST[$i.'5']."', '".$_POST[$i.'6']."', '".$_POST[$i.'7']."', '".$_POST[$i.'8']."', '".$_POST[$i.'9']."')";
    if(mysqli_query($conn,$query))
   {
     header("location:view_tt.php");
   }
   else{
      echo "failed";
   }
}