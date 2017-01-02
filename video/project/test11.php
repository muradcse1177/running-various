<html>

<head>

<title>View Records</title>

</head>

<body>



<?php

/*

VIEW.PHP

Displays all data from 'players' table

*/



// connect to the database

include('connection.php');



// get results from database

$result = mysqli_query("SELECT name,pn_num FROM comments")

or die(mysql_error());



// display data in table

echo "<p><b>View All</b> | <a href=''>View Paginated</a></p>";



echo "<table border='1' cellpadding='10'>";





// loop through results of database query, displaying them in the table

while($row = mysqli_fetch_array( $result )) {



// echo out the contents of each row into a table

echo "<tr>";

echo '<td>' . $row['name'] . '</td>';

echo '<td>' . $row['sex'] . '</td>';

echo '<td>' . $row['edu'] . '</td>';

echo '<td>' . $row['pn_num'] . '</td>';

echo '<td>' . $row['email'] . '</td>';

echo '<td>' . $row['cmt'] . '</td>';

echo '<td><a href="edit.php?id=' . $row['id'] . '">Edit</a></td>';

echo '<td><a href="delete.php?id=' . $row['id'] . '">Delete</a></td>';

echo "</tr>";

}



// close table>

echo "</table>";

?>

<p><a href="new.php">Add a new record</a></p>



</body>

</html>