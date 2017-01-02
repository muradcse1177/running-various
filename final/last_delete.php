<?php
session_start();
  if(!isset($_SESSION['login_user'])){
      header("location: index.php");
	  die("");
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
            max-width: 100%;
            margin: 1px;
            padding: 8em;
            background-color: aquamarine;
        }

        article {
            margin-left: 203px;
            border-left: 1px solid gray;
            padding: 5.86em;
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
            <ul style="list-style-type: disc">
                <li><a href="insert.php">Create  </a></li>
                <li><a href="update.php">UPdate </a></li>
                <li><a href="delete.php">Delete</a></li>
                <li><a href="show.php">View</a></li>
            </ul>
			<br><br>
			<h2><a href = "logout.php">Sign Out</a></h2>
			
        </nav>

        <article>
            <h1>Your Profile Successfully Delated</h1>
            <p>Many people[who?] believe that software engineering implies a certain level
                of academic training, professional discipline, adherence to formal processes,
                and especially legal liability that often are not applied in cases of software
                development. A common analogy is that working in construction does not make one a
                civil engineer, and so writing code does not make one a software engineer. Furthermore,
                because computing doesn't utilize the methods of mathematical physics common to all conventional
                engineering disciplines, it's more appropriate to call those engaged in this occupation as software
                developers, computer scientists or similar.</p>
        </article>
        <footer>
            <h1>Copyright © Content House Ltd</h1>
        </footer>


    </div>
</head>
<body>

</body>
</html>