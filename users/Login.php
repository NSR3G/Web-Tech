<?php
   include("../config.php");
   session_start();
   $error='';
   
   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
      $myusername = $_POST['us'];
      $mypassword = $_POST['ps']; 
      
      $sql = "SELECT id FROM user WHERE us = '$myusername' and ps = '$mypassword'";
      echo $sql;
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) 
	  {//session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         header("location:../users/welcome.php");
		 exit();
	}
	  else
	  {
		 header("Location: ../users/users.php?login=error");
		exit();
   }}
?>
