<html>

    <head>
    
        <title>Registration form</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        
        
    </head>
    
    <body>
        
        <div class="main">


            



                <div class="panel">
            
        <a  href="details.php">   <div class="a">
                
                student_details
            
            </div></a>
    

    </div>




                <div class="panel2">
            
        <a  href="delet.php">   <div class="b">
                
                delet student list:
            
            </div></a>
    

    </div>

  
                <div class="panel3">
            
        <a  href="section_demo.php">   <div class="c">
                
                section list:
            
            </div></a>
    

    </div>



                
                     


         
            
            
        
        <div class="registration_form">
            
            <div class="reg">
        
             <div class="text"> student registration Form </div>
            
            
            <form class="form" method="post" action="reg.php">
                
                First name:  <input  name="name1" type="text"  placeholder="write your first name" required >
                <br>
            
              last name: <input name="name2" type="text" placeholder="write your last name"  required >
                <br>
               S_ID: <input  name="name3" type="text" placeholder="Input your student ID"  required >
                <br>
                
                Email: <input  name="name4" type="text" placeholder="Input your Email"  required>
                <br>
                
              

                 S_slot: <select name="name5" required>

         <datalist id="name5">



       

         <?php



$servername="localhost";
$username="root";
$pass="";
$db_name="student";

$conn=mysqli_connect($servername,$username,$pass,$db_name);


$sql= " SELECT count(sid) AS total FROM reg  where slot1= 'A' ";                // ai khan theke queery start 

$result= mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$rows=$values['total'];

if ($rows=='10'){

  echo  '<option disabled   value="A"> A </option> ';

}

else {


    echo '<option  value="A"> A </option> ';
}



       ?>




       <?php

       $sql= " SELECT count(sid) AS total FROM reg  where slot1= 'B' ";                // ai khan theke queery start 

$result= mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$rows=$values['total'];



       if ($rows=='10'){

  echo  '<option disabled   value="B"> B </option> ';

}

else {


    echo '<option  value="B"> B </option> ';
}




       ?>


     
     
     
     </datalist> 
 </select>
                
                <br>
                <br>    


            



                












    <?php

   




@$sql = " SELECT * FROM reg GROUP BY sid HAVING ( COUNT(sid) >'1' )";




@$result= mysqli_query($conn,$sql);
@$rows=$values['sid'];

mysqli_query($conn,$sql);

   $disabled = "disabled='disabled'"; 
      if ( $rows>='1' ){ 
              //$disabled = "$rows"; 
       
echo "<input type='submit' class='name9', value='Submit' " . $disabled . "/>";  

}

else {
  

  echo  "<input class='name9' type='submit' value='Submit'>  ";
}


    ?>
                
                
                
                
            
            </form>
            
            
            
        
        
        </div>
            
        </div>    
        
        
        
        </div>
    
    
    
    </body>




</html>





