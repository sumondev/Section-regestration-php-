

<!DOCTYPE html>
<html>
<head>
	<title> </title>
</head>
<body>

count :

</body>
</html>




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
echo $rows;
echo "<br>";
echo " Regestration remaining :";
echo (10-$rows);





?>




