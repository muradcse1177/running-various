<?php
include('../connection.php');
session_start();
// if(!isset($_SESSION['login_user'])){
  // header("location: index.php");
// }
$msg = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
        include('connection.php');	
		$category = $_POST['category'];
		$subcategory=$_POST['subcategory'];		
		$name =$_POST['name'];
		$duration=$_POST['duration'];
		$remarks=$_POST['remarks'];
		$username=$_SESSION['username'];
		$status="Published";
		
		function getRandomHex($num_bytes=4) {
		  return bin2hex(openssl_random_pseudo_bytes($num_bytes));
		}
		$content_id = getRandomHex(15);
		$pre_directory="main";
		if(!is_dir($pre_directory)){
			mkdir($pre_directory);			
		}
		$pre_directory.="/{$category}";
		if(!is_dir($pre_directory)){
			mkdir($pre_directory);
		}
		$pre_directory.="/{$subcategory}";
		if(!is_dir($pre_directory))
			mkdir($pre_directory);
		
		$pre_directory="../demo";
		if(!is_dir($pre_directory)){
			mkdir($pre_directory);			
		}
		$pre_directory.="/{$category}";
		if(!is_dir($pre_directory)){
			mkdir($pre_directory);
		}
		$pre_directory.="/{$subcategory}";
		if(!is_dir($pre_directory)){
			mkdir($pre_directory);
		}
		$image_link="../demo/{$category}/{$subcategory}/".$content_id.substr($_FILES['file_preview']['name'],-4);
		move_uploaded_file($_FILES['file_preview']['tmp_name'], $image_link);
		
		$video_link="main/{$category}/{$subcategory}/".$content_id.$_FILES['file']['name'];
		move_uploaded_file($_FILES['file']['tmp_name'], $video_link);
		$video_link="./upload/main/{$category}/{$subcategory}/".$content_id.$_FILES['file']['name'];		
		
		
	if ($connection->connect_error) {
		die("Connection failed: " . $connection->connect_error);
	}	
	$sql = "INSERT INTO contents 
	     (category,subcategory,content_id,name,duration,preview_link,file_link,uploded_by,upload_time,status,remarks)
		 VALUES
		 ('$category','$subcategory','$content_id','$name','$duration','$image_link','$video_link','$username',NOW(),'$status','$remarks')";
	if ($connection->query($sql) === TRUE) {
		$msg = "You are successfully uploded the file.";
	} else {
		echo "Error: " . $sql . "<br>" . $connection->error;
	}
	$connection->close();
}
?>


<html lang="en"><!--<![endif]--><head>
    <title> Upload video</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="./assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="./css/style.min.css" rel="stylesheet">
    <link href="./css/style_responsive.css" rel="stylesheet">
    <link href="./css/style_default.css" rel="stylesheet" id="style_color">
    <link href="./assets/fancybox/source/jquery.fancybox.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./assets/uniform/css/uniform.default.css">
    <link href="./assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet">
    <link href="./assets/jqvmap/jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body class="fixed-top">
    <div id="header" class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="brand" href="./index.php"><img src="./img/logo.png" alt="Admin Lab"></a>
                <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span><span class="arrow"></span></a>
                <div id="top_menu" class="nav notify-row">
                    <ul class="nav top-menu">
                        <li class="dropdown"><a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Settings"><i class="icon-cog"></i></a></li>
                        <li class="dropdown" id="header_inbox_bar"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-envelope-alt"></i><span class="badge badge-important">5</span></a>
                            <ul class="dropdown-menu extended inbox">
                                <li>
                                    <p>You have 5 new messages</p>
                                </li>
                                <li><a href="#"><span class="photo"><img src="./img/avatar-mini.png" alt="avatar"></span><span class="subject"><span class="from">Dulal Khan</span><span class="time">Just now</span></span><span class="message"> Hello, this is an example messages please check </span></a></li>
                                <li><a href="#"><span class="photo"><img src="./img/avatar-mini.png" alt="avatar"></span><span class="subject"><span class="from">Rafiqul Islam</span><span class="time">10 mins</span></span><span class="message"> Hi, Mosaddek Bhai how are you ? </span></a></li>
                                <li><a href="#"><span class="photo"><img src="./img/avatar-mini.png" alt="avatar"></span><span class="subject"><span class="from">Sumon Ahmed</span><span class="time">3 hrs</span></span><span class="message"> This is awesome dashboard templates </span></a></li>
                                <li><a href="#"><span class="photo"><img src="./img/avatar-mini.png" alt="avatar"></span><span class="subject"><span class="from">Dulal Khan</span><span class="time">Just now</span></span><span class="message"> Hello, this is an example messages please check </span></a></li>
                                <li><a href="#">See all messages</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="top-nav ">
                    <ul class="nav pull-right top-menu">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="./img/avatar-mini.png" alt=""><span class="username">Syed Muradul Islam</span><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                                <li class="divider"></li>
                                <li><a href="./logout.php"><i class="icon-key"></i> Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="container" class="row-fluid">
        <div id="sidebar" class="nav-collapse collapse">
            <div class="sidebar-toggler hidden-phone"></div>
            <div class="navbar-inverse">
                <form class="navbar-search visible-phone">
                <input type="text" class="search-query" placeholder="Search">
                </form>
            </div>
            <ul class="sidebar-menu">
                <li class="has-sub active"><a href="javascript:;" class=""><span class="icon-box"><i class="icon-picture"></i></span> Contents <span class="arrow"></span></a>
                    <ul class="sub">
                        <li><a class="active" href="./upload_content.php"><i class="icon-upload"></i> Upload</a></li>
                        <li><a class="" href="./view_content.php"><i class="icon-th"></i> View</a></li>
                    </ul>
                </li>
                <li class="has-sub"><a href="javascript:;" class=""><span class="icon-box"><i class="icon-th"></i></span> Categorization <span class="arrow"></span></a>
                    <ul class="sub">
                        <li><a class="" href="./add_subcategory.php"><i class="icon-plus"></i> Add subcategory</a></li>
                        <li><a class="" href="./remove_subcategory.php"><i class="icon-trash"></i> Delete subcategory</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div id="main-content">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                        <div id="theme-change" class="hidden-phone"><i class="icon-cogs"></i><span class="settings"><span class="text">Theme:</span><span class="colors"><span class="color-default" data-style="default"></span><span class="color-gray" data-style="gray"></span><span class="color-purple" data-style="purple"></span><span class="color-navy-blue" data-style="navy-blue"></span></span>
                            </span>
                        </div>
                        <h3 class="page-title"> Upload Content</h3>
                        <ul class="breadcrumb">
                            <li><a href="index.php"><i class="icon-home"></i></a><span class="divider">&nbsp;</span></li>
                            <li><a href="#">Content</a><span class="divider">&nbsp;</span></li>
                            <li><a href="upload_content.php">Upload Content</a><span class="divider-last">&nbsp;</span></li>
                        </ul>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget">
                            <div class="widget-title">
                                <h4><i class="icon-reorder"></i>Upload content</h4>
                                <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                        </span>
                            </div>
                            <div class="widget-body form">
                                <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="controls">
										<p style="color:green;"><b></b></p>
									</div>
                                    <div class="control-group">
                                        <label class="control-label">Category *</label>
                                        <div class="controls">
                                            <select class="span6" id="category" name="category" tabindex="1" required="">
												<option value="">Video</option>
												<option value="movie">Movie </option>
												<option value="natok">Natok </option>
												<option value="telifilm">Telifilm </option>
												<option value="music_video">Music video</option>
												<option value="movie_song">Movie Song </option>
												<option value="funny_video">Funny Video </option>
												<option value="Fashion_lifestyle">Fashion &amp; Lifestyle </option>
												<option value="Sports_video">Sports Video </option>
											</select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Subcategory *</label>
                                        <div class="controls">
                                            <select class="span6" id="subcategory" name="subcategory" tabindex="2" required="">
												<option value="">Select subcategory</option>
												<option value="action">Action</option>
												<option value="animation">Animation </option>
												<option value="horror">Horror </option>
												<option value="romance">Romance </option>
												<option value="history">History</option>
												<option value="family">Family</option>
												<option value="inspiration">Inspiration</option>
												<option value="sci_fi">Sci-Fi </option>
												<option value="documentary">Documentary </option>
												<option value="comedy">Comedy</option>
												<option value="musical">Musical</option>
												<option value="biography">Biography</option>
												<option value="crime">Crime</option>
												<option value="mystery">Mystery</option>
												<option value="thriller">Thriller</option>
												<option value="funny">Funny</option>						
											</select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Name *</label>
                                        <div class="controls">
                                            <input type="text" class="span6 " name="name" placeholder="Enter name" required="" tabindex="3">
                                        </div>
                                    </div>
									<div class="control-group">
                                        <label class="control-label">Duration *</label>
                                        <div class="controls">
                                            <input type="text" class="span6 " name="duration" placeholder="Duration time" required="" tabindex="3">
                                        </div>
                                    </div>
									<div class="control-group">
                                        <label class="control-label">Remarks *</label>
                                        <div class="controls">
                                            <select class="span6" id="ramarks" name="remarks" tabindex="1" required="">
												<option value="">Remarks</option>
												<option value="banner">Banner </option>
												<option value="campaign">Campaign </option>
												<option value="exclusive">Exclusive </option>
												<option value="popular">Popular </option>
												<option value="movie">Movie </option>
												<option value="music_video">Music video</option>
												<option value="movie_song">Movie Song </option>
												<option value="funny_video">Funny Video </option>
												<option value="Fashion_lifestyle">Fashion &amp; Lifestyle </option>
												<option value="Sports_video">Sports Video </option>
											</select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">File *</label>
                                        <div class="controls">
                                            <input type="file" class="span6" name="file" id="file" required="" tabindex="4">
                                        </div>
                                    </div>
									
                                    <div class="control-group">
                                        <label class="control-label">Preview file*</label>
                                        <div class="controls">
                                            <input type="file" class="span6" name="file_preview" id="file_preview" required="" tabindex="5">
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <input type="submit" value="Upload" name="submit" tabindex="6">
                                        <!-- <button type="button" class="btn"></button> -->
                                        <a href="upload_content.php" class="btn" tabindex="7">Cancel</a>
                                    </div>

                                </form>
								<?php 
										
											{
											?>
												<p style="color:red;"><b><?php  echo "<h2>$msg</h2>"?></b></p>
                                            <?php
											}
											?>
								
                                <!-- END FORM-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer"> © videochannel.mobi.
        <div class="span pull-right"><span class="go-top"><i class="icon-arrow-up"></i></span></div>
    </div>
    <script src="./js/jquery-1.8.3.min.js"></script>
    <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/jquery.blockui.js"></script>
    <!--[if lt IE 9]><script src="./js/excanvas.js"></script><script src="./js/respond.js"></script><![endif]-->
    <script type="text/javascript" src="./assets/uniform/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="./assets/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="./js/jquery.pulsate.min.js"></script>
    <script src="./assets/fancybox/source/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="./assets/jslider/js/jshashtable-2.1_src.js"></script>
    <script type="text/javascript" src="./assets/jslider/js/jquery.numberformatter-1.2.3.js"></script>
    <script type="text/javascript" src="./assets/jslider/js/tmpl.js"></script>
    <script type="text/javascript" src="./assets/jslider/js/jquery.dependClass-0.1.js"></script>
    <script type="text/javascript" src="./assets/jslider/js/draggable-0.1.js"></script>
    <script type="text/javascript" src="./assets/jslider/js/jquery.slider.js"></script>
    <script src="./js/scripts.js"></script>
    <script>
        jQuery(document).ready(function() {
            App.init()
        });
    </script>


</body></html>