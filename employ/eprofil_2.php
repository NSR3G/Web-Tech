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
		/*$name = "SELECT name FROM emp WHERE us = '$us' ";
		$ad = "SELECT ad FROM emp WHERE us = '$us' ";
		$mo = "SELECT mo FROM emp WHERE us = '$us' ";
		$dob = "SELECT dob FROM emp WHERE us = '$us' ";	
		$ge = "SELECT ge FROM emp WHERE us = '$us' ";		*/

		$sql = "SELECT em,us, name,ad,mo,dob,ge FROM emp";
		$result = $con->query($sql);

		if ($result->num_rows > 0) 
		{// output data of each row
   		 	while($row = $result->fetch_assoc()) 
   		 	{   if($row["us"]==$us)
        			{   $name =$row["name"] ;
        				$em =$row["em"] ;
		                $ad =$row["ad"];
		                $mo = $row["mo"];
		                $dob = $row["dob"];	
		                $ge = $row["ge"];
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