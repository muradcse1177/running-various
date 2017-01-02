<!DOCTYPE html>
<html>
<head>
<style type="text/css">
    </style>
    <script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js?ver=3.4.2"></script>
    <script>
        $(document).ready(function() {
            $("#closead").click(function() {
                $("#ads").css("display", "none");
            });

            $frameheight = $(window).height() - 40;
            $(".sourceView").css("height", $frameheight);

            $(window).resize(function() {
                $frameheight = $(window).height() - 40;
                $(".sourceView").css("height", $frameheight);
            });

        });
    </script>
	<style>
		body {
			margin:0px;
			overflow: hidden;
		}		
		.sourceView {
			height:100%;
			width:100%;
		}
	</style>
</head>

<body>
<?php
	//session_start();
	$content_id=$_GET['id'];
	//$video_link=$_GET['video_link'];					
	include("connection.php");
	$sql = "SELECT * FROM contents where content_id='$content_id'";					
	$result = mysqli_query($connection,$sql);
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc(); 
	}
	?>
	
	
	<body>
		<iframe src="<?php echo $row['file_link'];?>" frameborder="0" class="sourceView" noresize="noresize" style="height: 622px;"></iframe>
	</body>
	
	
</body>
dshdfuydaudb ctduiasdsad 8
</html>


