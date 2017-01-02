


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

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        div.container {
            width: 100%;
            border: 1px solid gray;
        }

        header {
            padding: 2em;
            color: white;
            background-color: black;
            text-align: center;
            clear: left;
        }

        nav {
            float: left;
            max-width: 70%;
            margin: 1px;
            padding: 5.86em;
			border-right: 100px solid gray;
            background-color: aquamarine;
        }

        article {
            margin-left: 650px;
            border-left: 120px solid gray;
            padding: 6.2em;
			background-color: aquamarine;
        }
        footer {
            padding: 1em;
            color: white;
            background-color: black;
            text-align: center;
            clear: left;
        }



    </style>

    <meta charset="UTF-8">
    <title>HTML</title>
    <div class="container">
        <header>
            <h1>Content House Ltd</h1>
        </header>
		
		 <nav>
			<h2>SIGN UP HERE</h2> 
			<form action="signup.php" method="post">    
				<input type="username" id="newsletter" name="username"  placeholder="Username" required/><br><br>
				<input type="password" name="password" title="Password" placeholder="Password"   required/><br><br>	
				<input type="image" id="subscribe" src="sign-up.gif" alt="Submit" /><br>

				  
			</form>	
        </nav>

        <article>
			<h2>LOG IN HERE</h2> 
		  
			<form action="" method="post" id="login">
				<input type="username" id="newsletter" name="username"  placeholder="Username" required/><br><br>
				<input type="password" name="password" title="Password" placeholder="Password"   required/><br><br>      
				<input type="image" src="sign_in.gif" id="signin" alt="Sign In" />
			</form>		
        </article>
		
		
        <footer>
            <h1>Copyright © Content House Ltd</h1>
        </footer>


    </div>
</head>
<body>

</body>
</html>