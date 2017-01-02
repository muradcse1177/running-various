<?php
session_start();
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
<li><a href="show.php">Show</a></li>
</ul>
<div  class="clear"></div>
</div>
</div>





<div class="fl_right">
   <h1 class="title">Data Details </h1>
	<?php
 include("connection.php"); 
$sql = "SELECT * FROM comments ORDER BY id DESC";
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {?>
	<div class="single_request" style="padding:20px">
	
	  <h2 class="title"><?php echo "ID: ".$row['id'].", Name: ".$row['name'].", Education: ".$row['edu'].", Email: ".$row['email'].", Phone: ".$row['pn_num'];?></h2>
	  <h1 class="title">Massage : <br><?php echo $row['cmt']; ?></h1>
 		
  </div>
    <?php{ ?>
		<p><a href="update_user.php?id=<?php echo $row['id'] ?>">Update</a></p> 
		<?php  } ?>


<?php  }?>
	  
  </div>


<body>  
  <h2><a href = "logout.php">Sign Out</a></h2>
  
</body>

</html>