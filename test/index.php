<?php
include("connection.php");
session_start();
if(isset($_POST["username"]))		
{
	include 'connection.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	if ( $username!="" && $password!="" ) {
		
		$query = "SELECT id, userName FROM login WHERE username = '$username' AND password = '$password'";
		$result_set = mysql_query($query);
		 if (mysql_num_rows($result_set) > 0) {
			 $found_user = mysql_fetch_array($result_set);
			session_start();
			  $_SESSION['user_id'] = $found_user['id'];
			  $_SESSION['user_name'] = $username;

			header("Location: welcome.php");
		 }
		 else
			 echo "Wrong username or password!";
	 } 
}		
?>

<!DOCTYPE HTML>  
<html>
<body>
<form action="" method="post">
              
              <input type="text" id="newsletter" name="username" placeholder="Your Username"required ><br><br>
              <input type="password" id="newsletter" name="password" placeholder="Your Password" required ><br><br> 
              <input type="submit" id="subscribe" src="sign_in.gif" alt="Submit"><br>
             <br>
             <br>
          
	</form> 
</body>
</html>