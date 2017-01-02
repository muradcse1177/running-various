
<?php
 include('connection.php');
 if($_SERVER["REQUEST_METHOD"] == "POST") {
	
		$name = $_POST['textfield3'];
		$Gender = $_POST['Gender'];
		$education = $_POST['education'];
		$phone = $_POST['phone'];
		$email = $_POST['textfield36'];
		$cmnt = $_POST['textarea'];
		
	if ($connection->connect_error) {
		die("Connection failed: " . $connection->connect_error);
	}	
	$sql = "INSERT INTO comments (name,sex,edu,pn_num,email,cmt)VALUES('$name','$Gender','$education','$phone','$email','$cmnt')";
	if ($connection->query($sql) === TRUE) {
		echo"<h1> YOur Data Successfully Inserted</h1>";
	} else {
		echo "Error: " . $sql . "<br>" . $connection->error;
	}
	$connection->close();
}

?> 