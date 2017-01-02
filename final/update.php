
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
            max-width: 100%;
            margin: 1px;
            padding: 8em;
            background-color: aquamarine;
        }

        article {
            margin-left: 350px;
            border-left: 1px solid gray;
            padding: 3em;
			background-color: transparent;
        }
        footer {
            padding: 1em;
            color: white;
            background-color: black;
            text-align: center;
            clear: left;
        }
		th, td {
            border:1px solid black;
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

				<h1 class="title">Data Details </h1>
				<?php

				include('connection.php');
				if ($connection->connect_error) {
					 die("Connection failed: " . $connection->connect_error);
				} 
				$sql = "SELECT * FROM comments";
				$result = $connection->query($sql);

				if ($result->num_rows > 0) {
					 echo "<table>
					 <tr>
					 <th>ID</th>
					 <th>Name</th>
					 <th>Sex</th>
					 <th>Education</th>
					 <th>Mobile</th>
					 <th>Email</th>
					 <th>Comments</th>
					 <th>update</th>
					 </tr>";
					 while($row = $result->fetch_assoc()) {
						  echo "<tr>
						 <td>" . $row["id"]. "</td>
						 <td>" . $row["name"]. "</td>
						 <td> " . $row["sex"]. "</td>
						 <td>" . $row["edu"]. "</td>
						 <td>" . $row["pn_num"]. "</td>
						 <td>" . $row["email"]. "</td>
						 <td>" . $row["cmt"]. "</td>
						 <td><a href="."update_user.php?id=".$row["id"]."&name=".$row["name"]."&sex=".$row["sex"]."&edu=".$row["edu"]."&pn_num=".$row["pn_num"]."&email=".$row["email"]."&cmt=".$row["cmt"].">Update</a></td>	
						 </tr>";
					 }
					 echo "</table>";
				} else {
					 echo "0 results";
				}  				

				$connection->close();
                ?>				  
        </article>
        <footer>
            <h1>Copyright © Content House Ltd</h1>
        </footer>


    </div>
</head>
<body>

</body>
</html>
