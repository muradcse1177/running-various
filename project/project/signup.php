
<?php
 include('connection.php');
 if($_SERVER["REQUEST_METHOD"] == "POST") {
	
		$username = $_POST['username'];
		$password = $_POST['password']; 
		
	if ($connection->connect_error) {
		die("Connection failed: " . $connection->connect_error);
	}	
	$sql = "INSERT INTO user_info (username, password)
							VALUES('$username', '$password')";
	if ($connection->query($sql) === TRUE) {
		header("location: confirm.php");
	} else {
		echo "Error: " . $sql . "<br>" . $connection->error;
	}
	$connection->close();
}
else{
	echo "Please provide correct data.";
}


?>