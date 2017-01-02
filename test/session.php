<?php
   include('connection.php');
   session_start();
   
   $user = $_SESSION['login_user'];
   $ses_sql = mysqli_query($connection,"select username from user_info where username = '$user' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location: index.php");
   }
?>

