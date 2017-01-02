<?php
include("connection.php");

   session_start();
   if( isset($_SESSION['login_user']) )
   {
   header("location: welcome.php");
   }
   

if (isset($_POST['username']) && isset($_POST['password'])) {
	
	  $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
    
    if (($_POST['username'] == $myusername) && ($_POST['password'] == $mypassword)) {    
        
        if (isset($_POST['rememberme'])) {
            setcookie('username', $_POST['username'], time()+60*60*24*365);
            setcookie('password', $_POST['password'], time()+60*60*24*365);
        
        } else {
            setcookie('username', $_POST['username'], false);
            setcookie('password', $_POST['password'], false);
        }
        header('Location: welcome.php');
        
    } else {
        echo 'Username/Password Invalid';
    }
    
} else {
    echo 'You must supply a username and password.';
}
?>