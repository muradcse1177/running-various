
<?php
 include('connection.php');
	    $id = $_GET['id'];
		$name = $_GET['name'];
		$Gender = $_GET['Gender'];
		$education = $_GET['education'];
		$phone = $_GET['phone'];
		$email = $_GET['email'];
		$cmnt = $_GET['cmt'];
		
	if ($connection->connect_error) {
		die("Connection failed: " . $connection->connect_error);
	}	
	$sql = "UPDATE comments
	        SET name='$name',sex='$Gender',edu='$education',pn_num='$phone',email='$email',cmt='$cmnt' WHERE id=$id";
	if ($connection->query($sql) === TRUE) {	
		header("location:last_update.php");
	} else {
		echo "Error: " . $sql . "<br>" . $connection->error;
	}
	$connection->close();


?> 



<?php
session_start();
  if(!isset($_SESSION['login_user'])){
      header("location: index.php");
   }
?>
<html>
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome Here</h1>	  
	  
   </body>
   
   
   
<div class="row1">
<div id="top">
<ul>
  <li class="active"><a href="insert.php">Insert</a></li>
  <li><a href="update.php">Update</a></li>
  <li><a href="delete.php">Delete</a></li>
  <li><a href="show.php">Show</a></li>
</ul>
<div  class="clear"></div>
</div>
</div>
   
  
<body>  
      <h2><a href = "logout.php">Sign Out</a></h2>
	  
   </body>
  
</html>