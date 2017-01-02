<!DOCTYPE html>
<html>
<head>
<style>
 th, td {
     border:1px solid black;
}
</style>

<?php

include('connection.php');
if ($connection->connect_error) {
     die("Connection failed: " . $connection->connect_error);
} 
$sql = "SELECT * FROM user_info";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
     echo "<table>
	 <tr>
	 <th>ID</th>
	 <th>Name</th>
	 <th>Password</th>
	 </tr>";
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"]. "</td><td> " . $row["password"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$connection->close();
?>
</body>
</html>