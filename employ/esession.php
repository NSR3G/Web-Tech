<?php
   include('../config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select us from emp where us = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['us'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:elogin.php");
      die();
   }
?>