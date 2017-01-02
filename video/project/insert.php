<?php
session_start();
?>



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

<html>

<head>
  <title>Welcome </title>
</head>

<div class="row1">
<div id="top">
<ul>
<li class="active"><a href="insert.php">Insert</a></li>
<li><a href="update.php">Update</a></li>
<li><a href="delete.php">Delete</a></li>
<li><a href="show.php">show</a></li>
</ul>
<div  class="clear"></div>
</div>
</div>

<body>

  <h1><a href = "insert.php">Please Insert your Information!!</a></h1>	  
  
</body>


<div class="wrapper row4">
<div id="container" class="clear">
<div id="homepage" class="clear">
  <div class="fl_left">
		 <h1 class="title">Insert Your Data </h1>
		   <div class="comment">
			  <td style="padding-top:15px; padding-bottom:15px;" valign="top" bgcolor="#00E2D0"><table align="" border="0" cellpadding="0" cellspacing="0" width="295" float:"right">
			  <tbody><tr>
				<td valign="top"><form id="form2" name="form2" method="post" action="">
				  <table class="border" align="center" border="0" cellpadding="2" cellspacing="2" width="98%">
					<tbody><tr>
					  <td colspan="3" class="heading" style="padding-top:8px; color:#0066FF;" valign="top" height="35"><span class="style2"><strong>Information :</strong></span></td>
					</tr>
					<tr>
					  <td width="34%">Name:</td>
					  <td  width="66%"><input name="textfield3" required  style="width:180px; height:20px;" type="text"></td>
					</tr>
					<tr>
					  <td>Gender:</td>
					  <td>
					   
						<select name="Gender"<br/>
						<option value="male">Male</option>
						<option value="Female">Female</option>
						<option value="Others">others</option>
					  </td>
					</tr>
					<tr>
					  <td> Education:</td>
					  <td >
					   <select name="education"><br/>
					   <option value="Graduate">Graduate</option>
					   <option value="HSC">HSC</option>
					   <option value="SSC">SSC</option>
					   <option value="Others">OHTERS</option>
					   </select>
					   <br/>
					  </td>
					</tr>
					<tr>
					  <td >Phone no:</td>
					  <td >
							<input name="phone"  type="tel"  title='Phone Number'required style="width:180px;" /> 
					  </td>
					</tr>
					<tr>
					  <td >Email ID:</td>
					  <td ><input name="textfield36" type="email" style="width:180px; height:20px;" type="text"required></td>
					</tr>
					<tr>
					  <td>Comment :</td>
					  <td><textarea name="textarea" rows="5" cols="" style="width:180px;"required></textarea></td>
					</tr>
					<tr>
					  <td>&nbsp;</td>
					  <td colspan="2"><table border="0" cellpadding="0" cellspacing="0" width="100%">
						  <tbody><tr>
							<td width="38%"><input name="imageField2" src="submit.gif" type="image"></td>
						  </tr>
					  </tbody></table></td>
					</tr>
				  </tbody></table>
				  </form>
				</td>
			  </tr>
			</tbody></table></td>
			</a></div>
  </div>
</div>
</div>
</div>
	  
  </div>







<body>  
  <h2><a href = "logout.php">Sign Out</a></h2>
  
</body>

</html>