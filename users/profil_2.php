<?php

$host='localhost';
$user='root';
$pass='';
$db='mydb';

$us = $_SESSION['login_user'];
$con=new mysqli($host,$user,$pass,$db);
if(mysqli_connect_error())
{
	echo 'error';
}
else{
		/*$name = "SELECT name FROM user WHERE us = '$us' ";
		$ad = "SELECT ad FROM user WHERE us = '$us' ";
		$mo = "SELECT mo FROM user WHERE us = '$us' ";
		$dob = "SELECT dob FROM user WHERE us = '$us' ";	
		$ge = "SELECT ge FROM user WHERE us = '$us' ";		*/

		$sql = "SELECT * FROM user";
		$result = $con->query($sql);

		if ($result->num_rows > 0) 
		{
    		
    		// output data of each row
   		 	while($row = $result->fetch_assoc()) 
   		 	{
        		
        		if($row["us"]==$us)
        			{
        				$name =$row["name"] ;
        				$em =$row["em"] ;
		$ad =$row["ad"];
		$mo = $row["mo"];
		$dob = $row["dob"];	
		$ge = $row["ge"];
		$status =$row["status"];
		$complaint=$row["complain"];
		break;
        			}

    		}
    		
		} 		
		else {
    		echo "0 results";
		}
		$con->close();
	}
?>