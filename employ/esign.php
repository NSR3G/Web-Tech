<?php
$host='localhost';
$user='root';
$pass='';
$db='mydb';
$us = $_POST["username"];
$ps = $_POST["psw"];
$em = $_POST["em"];
$psrepeat = $_POST["psw-repeat"];
if($ps!=$psrepeat)
{
	header("location:../employ/employ.php?signup=spass");
	exit();
}

session_start();
$conn=mysqli_connect($host,$user,$pass,$db);

if(mysqli_connect_error())
{
	echo 'error';
}
else
{
      $sql1 = "SELECT * FROM emp WHERE us='$us'";
	  $sql2 = "SELECT * FROM emp WHERE em='$em'";
      $result1 = mysqli_query($conn,$sql1);
	  $result2 = mysqli_query($conn,$sql2);
      $count1 = mysqli_num_rows($result1);
	  $count2 = mysqli_num_rows($result2);
      // If result matched $myusername and $mypassword, table row must be 1 row	
      if($count1) 
	  {//session_register("myusername")
		
         header("location:../employ/employ.php?signup=userexist");
		 $user = $us;
		 exit();
		 
		 
	  }
	  if($count2)
	  {
		header("location:../employ/employ.php?signup=emailexist");
		$email = $em;
		 exit();
	  }
	  else
	  {
		$sql = "INSERT INTO emp (us,em,ps,name,ad,mo,dob,ge) VALUES ('$us','$em','$ps','$us','magadi','123456','23092000','male');";
		mysqli_query($conn,$sql);
		$_SESSION['login_user'] = $us;
		header("Location: ../employ/ewelcome.php?signup=success");
		exit();
	  }
}

?>