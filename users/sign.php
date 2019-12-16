<?php
$us = $_POST["username"];
$ps = $_POST["psw"];
$em = $_POST["em"];
$psrepeat = $_POST["psw-repeat"];
if($ps!=$psrepeat)
{
	header("location:../users/users.php?signup=spass");
	exit();
}

$host='localhost';
$user='root';
$pass='';
$db='mydb';
session_start();
$conn=mysqli_connect($host,$user,$pass,$db);
if(mysqli_connect_error())
{
	echo 'error';
}
else{
      $sql1 = "SELECT * FROM user WHERE us='$us'";
	  $sql2 = "SELECT * FROM user WHERE em='$em'";
      $result1 = mysqli_query($conn,$sql1);
	  $result2 = mysqli_query($conn,$sql2);
      $count1 = mysqli_num_rows($result1);
	  $count2 = mysqli_num_rows($result2);
      // If result matched $myusername and $mypassword, table row must be 1 row	
      if($count1) 
	  {//session_register("myusername")
		
         header("location:../users/users.php?signup=userexist");
		 $user = $us;
		 exit();
		 
		 
	  }
	  if($count2)
	  {
		header("location:../users/users.php?signup=emailexist");
		$email = $em;
		 exit();
	  }
	  else
	  {
		$sql = "INSERT INTO user (us,em,ps) VALUES ('$us','$em','$ps');";
		mysqli_query($conn,$sql);
		$_SESSION['login_user'] = $us;
		header("Location: ../users/welcome.php?signup=success");
		exit();
	  }
}
?>