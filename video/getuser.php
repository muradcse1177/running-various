<!DOCTYPE html>
<html>
<head>
<style>
</style>
</head>
<body>

<?php
session_start();

$con = mysqli_connect('localhost','root','','videochannel');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"ajax_demo");
$_SESSION['popular']=5;
$a=$_SESSION['popular'];
$remarks="popular";
 $a=$a+1;
$sql = "SELECT * FROM contents where remarks='$remarks'limit $a";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
 ?>
		<ul class="img-list">
			<li>
				<a href="preview.php?id=<?php echo $row['content_id'];?>&name=<?php echo $row['name'];?>&duration=<?php echo $row['duration'];?>&category=<?php echo $row['category'];?>">

					<div class="item">

						<img class="lazyOwl" data-src="<?php echo $row['preview_link'];?>" />

						<span class="text-content"><span><?php echo $row['name'];?></span></span>

					</div>

				</a>
			</li>

		</ul>
<div id="nextvid">	</div>	
<?php
}
mysqli_close($con);
?>

</body>
</html>