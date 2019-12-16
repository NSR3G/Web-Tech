<?php

$host='localhost';
$user='root';
$pass='';
$db='mydb';
$con=new mysqli($host,$user,$pass,$db);
$sql = "SELECT * FROM user";
$result = $con->query($sql);		
$con->close();
?>