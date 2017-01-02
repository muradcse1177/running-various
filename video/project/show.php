<!DOCTYPE html>
<html>
<head>
<style>
 th, td {
     border:1px solid black;
}
</style>

<head>
  <title>Welcome </title>
</head>

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

<h1>Your Given Data is!!!!</h1>
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
	 
	 </tr>";
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td> " . $row["sex"]. "</td><td>" . $row["edu"]. "</td><td>" . $row["pn_num"]. "</td><td>" . $row["email"]. "</td><td>" . $row["cmt"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$connection->close();
?>


<body>  
      <h2><a href = "logout.php">Sign Out</a></h2>
	  
   </body>
</body>
</html>