<?php

$us = $_POST["us"];
$em = $_POST["em"];
$status= $_POST["status"];
$host='localhost';
$user='root';
$pass='';
$db='mydb';
$conn=mysqli_connect($host,$user,$pass,$db);
if(mysqli_connect_error())
{
	echo 'error';
}
else{
			$sql = "UPDATE user SET status= '$status' WHERE em='$em'";
            $result = mysqli_query($conn,$sql);
			if ($result== TRUE) {
    		header("../users/welcome.php");
			} 			
			else {
   			echo "Error updating record: " . $con->error;
			}
	
	}
?>