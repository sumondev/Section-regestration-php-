




<?php


include ("delet.php");

?>




<?php


include ("id_check.php");

?>




<html>
<head>
<title> Display data in db </title>
<style type= "text/css">



.a {


   
 
}



h1 {

  color: #13BAD8;


  border-color: #13BAD8;
}

table {


    border: 10px solid blue;
    background-color: #44C10E;

    width:80%;

     margin-left: 80px;
    margin-right: 80px;
    padding-top: 0px;

    height: auto;


    
   
     }



th {


   border-bottom: 10px solid #6328C3;
}

td {

  background-color:#117A65 ;

  border-bottom: 2px solid #666;
}

h3{


color:#37D813;

}

</style>
</head>
<body>

  
  <h1> Display data from DB</h1>









<?php 



echo "<h3>";

echo "welcome to student details";

echo "</h3>";

$servername="localhost";
$username="root";
$pass="";
$db_name="student";

$conn=mysqli_connect($servername,$username,$pass,$db_name);


$sqlget= " select * from reg";                // ai khan theke queery start 
$sqldata= mysqli_query($conn,$sqlget);

echo "<div class=a>";

echo "<table>";

echo "<tr>
         <th>First name:</th>
        
           <th>last name: </th>  

            <th>S_ID: </th>
             
              <th>Email: </th>

                <th> S_slot: </th>

               
               
     </tr>";
   

   while ($row= mysqli_fetch_array($sqldata, MYSQLI_ASSOC )) {     //aita ami akta boi a dekhlam onno vabe kora ... aktu sohoj.. aboita taro shoj ai kjaer daitto mone koro ami nilam ..bapar na .... show to ai vabe korlei hocche ...hm but amio to shikhtesi.. hmm ami tomare pore details bolbo nie .. at fiosrt ami mysql_connect( )  parametar niya korcilam but jeta te jhamela hoccilo..trai mysqli ai method dia korrci..cause a
      
           echo "<tr> <td>";
           
           echo $row ['fst_name'];
           echo "</td><td>";
           echo $row ['lst_name'];
           echo "</td><td>";
           echo $row ['sid'];
           echo "</td><td>";
           echo $row ['email'];
           echo "</td><td>";
           echo $row ['slot1'];
           echo "</td><td>";

           
            
            }
  echo "</table>";

  echo "</div>";


echo "<br>";echo "<br>";



echo "<table>";

echo "<tr>
         <th>SECTION (A) REGESTRATION</th>
        
           <th>SECTION (B) REGESTRATION </th>  

                   
     </tr>";


      echo "<tr> <td>";

      include("check.php"); 

        echo "</td> <td>";

          include("checkB.php"); 

         echo "</td> </tr>"; 








?>


<?php


?>



</body>

</html>
