<?php
session_start();
   if(!isset($_SESSION['login_user'])){
      header("location: index.php");
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
            padding: 5.86em;
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
			  <h1>Welcome Here</h1> 
			  <h2>Please LOG In Again for Confirmation</h2>	
			  <h2>for Confirmation</h2>
        </nav>

        <article>
			<h2>LOG IN HERE</h2> 
		  
			<form action="index.php" method="post" id="login">
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