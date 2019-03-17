<?php

echo "welcome to registration  form";

//include ("details.php");

$servername="localhost";
$username="root";
$pass="";
$db_name="student";

$con_db=mysqli_connect($servername,$username,$pass,$db_name);


    
   
   @ $fst_name=$_POST['name1'];
   @ $lst_name=$_POST['name2'];
   @ $sid=$_POST['name3'];
   @ $email=$_POST['name4'];
   @ $slot1=$_POST['name5'];
   // $slot2=$_POST['name6'];

    
   

   
    
    
    
    $sql="insert into reg (fst_name,lst_name,sid,email,slot1)
        
        values('$fst_name','$lst_name','$sid','$email','$slot1 ')";
    
    mysqli_query($con_db,$sql);
    
   

    

     
    


?>