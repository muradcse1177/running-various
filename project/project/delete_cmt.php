<?php
include ('connection.php');
$id = $_GET['id'];

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
$sql = "DELETE FROM comments WHERE id=$id";
if ($connection->query($sql) === TRUE) {

		echo"<h1> YOur Data Successfully Delated</h1>";
} else {
    echo "Error deleting record: " . $connection->error;
}

$connection->close();

?>



<?php
session_start();
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
  <li><a href="Edit.php">Edit</a></li>
</ul>
<div  class="clear"></div>
</div>
</div>
   
  
<body>  
      <h2><a href = "logout.php">Sign Out</a></h2>
	  
   </body>
  
</html>



