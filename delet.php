





<?php 



$servername="localhost";
$username="root";
$pass="";
$db_name="student";

$conn=mysqli_connect($servername,$username,$pass,$db_name);




?>





<html>

<header>

<title> delete a student</title>

</header>




<style type= "text/css">


h4{


	background-color: #3399ff;
	text-align: center;
	height: 30px;

}



b{

    background-color: : white;
    column-rule-color: green;


}




form{


 background-color: #00ff00;
 text-align: center;
 width: 95%;
 height: 30px;
 align-content: center;
 padding-left: 30px;
 padding-right: 30px;




}

</style>




















<body>


	
		
    <h4>   Delet a student history</h4>

	
	

<form action="" method="post">

<b>Student ID: </b> <input type="text" name="sid" placeholder="input student id">

<input type="submit" value="Delete">
	


</form>



</body>



</html>





<?php


@$var= $_POST['sid'];




@$sql =" DELETE FROM `reg` WHERE  sid=$var";

mysqli_query($conn,$sql);


?>





<br>










