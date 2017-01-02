<?php
$username = "";
$password= "";   
if(isset($_GET['username']) &&isset($_GET['password']) ) {
	include('connection.php');
	
		$username = $_GET['username'];
		$password = $_GET['password']; 
		
	if ($connection->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}	
	$sql = "INSERT INTO user_info (username, password)
							VALUES('$username', '$password')";
	if ($connection->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$connection->close();
}
else{
	echo "Please provide correct data.";
}


?>