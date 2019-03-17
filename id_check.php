
<?php



$servername="localhost";
$username="root";
$pass="";
$db_name="student";

$conn=mysqli_connect($servername,$username,$pass,$db_name);



$sql = " SELECT * FROM reg GROUP BY sid HAVING ( COUNT(sid) >'1' )";


//$sql= " SELECT count(sid) AS total FROM reg  where slot1= 'A' ";                // ai khan theke queery start 

$result= mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$rows=$values['sid'];

echo " Duplicates values:";
echo  $rows ;
/*
echo "<br>";
echo " Regestration remaining :";
echo (20-$rows);
 */




//@$var1= $_POST['sid'];

//$sql = " SELECT * FROM reg GROUP BY sid HAVING ( COUNT($var1) = '1' )";

//echo' $sql';

//if ( )



 // @$sql =" DELETE FROM `reg` WHERE  sid=$var"; 

mysqli_query($conn,$sql);







?>