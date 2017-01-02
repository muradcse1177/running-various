<?php
   include("connection.php");
   session_start();
   if( isset($_SESSION['login_user']) )
   {
   header("location: welcome.php");
   }

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      
      $sql = "SELECT id FROM user_info WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($connection,$sql);	  
	  
	  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            
      $count = mysqli_num_rows($result);
		
      if($count > 0) {
         $_SESSION['myusername'] = $myusername;
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>



<html>

   <head>
      <title>Login</title>    
   </head>
   <body>
     
      <h2>LOG IN HERE</h2> 
      
        <form action="" method="post" id="login">
		<input type="username" id="newsletter" name="username"  placeholder="Username" required/><br><br>
        <input type="password" name="password" title="Password" placeholder="Password"   required/><br><br>      
        <input type="image" src="sign_in.gif" id="signin" alt="Sign In" />
    </form>
	<h2>SIGN UP HERE</h2> 
	<form action="signup.php" method="post">    
        <input type="username" id="newsletter" name="username"  placeholder="Username" required/><br><br>
        <input type="password" name="password" title="Password" placeholder="Password"   required/><br><br>	
        <input type="image" id="subscribe" src="sign-up.gif" alt="Submit" /><br>
        <br>
        <br>
          
    </form>
			
        <p>
			<?php 
			 	if(isset($error))
				echo $error;
			?>
		</p>
   </body>
</html>