<?php
$us = $_POST["username"];
$ps = $_POST["psw"];
$em = $_POST["em"];

$host='localhost';
$user='root';
$pass='';
$db='mydb';

$con=mysqli_connect($host,$user,$pass,$db);
if($con)
	echo 'connection successfull to mydb database';
$query=mysqli_query($con,"INSERT INTO user (em,us,ps) values ('$em','$us','$ps')");
if ($query) 
	echo 'data inserted successfully';
else
	echo ' unsuccessfull';
?>