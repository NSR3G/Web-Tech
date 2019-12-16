<?php

$status = $_POST["status"];

$host='localhost';
$user='root';
$pass='';
$db='mydb';
session_start();
$us = $_SESSION['login_user'];
$con=new mysqli($host,$user,$pass,$db);
if(mysqli_connect_error())
{
	echo 'error';
}
else{
	
			$sql = "UPDATE user SET status = '$status' WHERE us='$status'";

			if ($con->query($sql) === TRUE) {
    		echo "Record updated successfully";
    		header("location:welcome.php");
			} 			
			else {
   			echo "Error updating record: " . $con->error;
			}
	
	}
?>