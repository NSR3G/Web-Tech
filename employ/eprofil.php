<?php

$name = $_POST["name"];
$ad = $_POST["ad"];
$mo = $_POST["mo"];
$dob = $_POST["dob"];
$ge = $_POST["ge"];

$host='localhost';
$user='root';
$pass='';
$db='mydb';
session_start();
$us = $_SESSION['login_user'];
$con=mysqli_connect($host,$user,$pass,$db);
if(mysqli_connect_error())
{
	echo 'error';
}
else{
	
			$sql = "UPDATE emp SET name = '$name', ad = '$ad', mo = '$mo', dob = '$dob', ge = '$ge' WHERE us='$us'";

			if ($con->query($sql) === TRUE) {
    		echo "Record updated successfully";
    		header("location:ewelcome.php");
			} 			
			else {
   			echo "Error updating record: " . $con->error;
			}
	
	}
?>