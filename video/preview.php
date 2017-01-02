<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <title>CHL</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https:css/ie10-viewport-bug-workaround.css" type="text/css" media="all">

    <script type="text/javascript" src="js/ie-emulation-modes-warning.js"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">
    <script type="text/javascript" src="js/jquery.min.js"></script>

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">

    <script type="text/javascript" src="js/bootstrap-hover-dropdown.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            if ($(window).width() < 500) {
                $(".navbar-fixed-top").css("background-color", "rgba(0,0,0,.7)"); // if not, change it back to transparent
            }
            $(window).scroll(function() { // check if scroll event happened

                if ($(document).scrollTop() > 0 && $(window).width() > 500) {
                    // alert($(window).width());
                    // alert("scrolled"); // check if user scrolled more than 50 from top of the browser window
                    $(".navbar-fixed-top").css("background-color", "rgba(0,0,0,.7)"); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
                } else if ($(document).scrollTop() >= 0 && $(window).width() < 500) {
                    $(".navbar-fixed-top").css("background-color", "rgba(0,0,0,.7)");
                } else {
                    $(".navbar-fixed-top").css("background-color", "transparent"); // if not, change it back to transparent
                }
            });
        });
    </script>

    <style>
        ul.img-list {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        
        ul.img-list li {
            display: inline-block;
            height: auto;
            margin: 0 1em 1em 0;
            position: relative;
            width: 100%;
        }
        
        span.text-content {
            background: rgba(0, 0, 0, 0.7);
            color: white;
            cursor: pointer;
            display: table;
            height: auto;
            left: 0;
            padding: 5px;
            position: absolute;
            bottom: 0;
            width: 100%;
            opacity: 0;
            -webkit-transition: opacity 500ms;
            -moz-transition: opacity 500ms;
            -o-transition: opacity 500ms;
            transition: opacity 500ms;
        }
        
        span.text-content span {
            display: table-cell;
            text-align: center;
            vertical-align: middle;
        }
        
        ul.img-list li:hover span.text-content {
            opacity: 1;
        }
        
        a:link,
        a:hover,
        a:active {
            text-decoration: none;
            color: #FFF;
            opacity: 0.9;
        }
        /* responsive text queries */
        
        @media screen and (max-width: 992px) {
            p,
            .btn,
            input,
            div,
            span,
            h4 {
                font-size: 95%;
            }
            h1 {
                font-size: 24px;
            }
            h2 {
                font-size: 22px;
            }
            h3 {
                font-size: 18px;
            }
            h4 {
                font-size: 17px;
            }
        }
        
        @media screen and (max-width: 768px) {
            p,
            .btn,
            input,
            div,
            span,
            h4 {
                font-size: 90%;
            }
            h1 {
                font-size: 20px;
            }
            h2 {
                font-size: 18px;
            }
            h3 {
                font-size: 16px;
            }
            h4 {
                font-size: 15px;
            }
        }
        
        @media screen and (max-width: 480px) {}
        
        #macrosectiontext {
            text-decoration: none;
            color: #cccccc;
            position: relative;
            font: Arial, sans-serif;
            opacity: 0.6;
            background-color: transparent;
            padding: 5px;
        }
        
        #macrosectiontext a:link {
            color: #cccccc;
        }
        
        #macrosectiontext a:visited,
        #macrosectiontext a:hover,
        #macrosectiontext a:active {
            color: #FFF;
            opacity: 0.9;
        }
    </style>

</head>

<body>

    <html>

    <head>

        <script type="text/javascript" src="js/bootstrap-hover-dropdown.min.js"></script>
        <!-- Custom styles for this template -->
        <style type="text/css">
            body {
                background: #000000 !important;
            }
            
            ul.nav a:hover {
                color: #ffffff !important;
            }
            
            .nav>li>a:hover {
                background-color: transparent;
            }
            
            .dropdown-menu>li>a:hover,
            .dropdown-menu>li>a:focus {
                background-color: red;
            }
            
            .navbar .nav>li.dropdown.open.active>a:hover,
            .navbar .nav>li.dropdown.open>a {
                color: #fff;
                background-color: transparent;
                border-color: #fff;
            }
            
            .dropdown-menu {
                min-width: 180px;
            }
            
            .dropdown-menu.columns-3 {
                min-width: 720px;
            }
            
            .dropdown-menu li a {
                padding: 2px 10px;
                font-weight: 300;
            }
            
            .multi-column-dropdown {
                list-style: none;
            }
            
            .multi-column-dropdown li a {
                display: block;
                clear: both;
                line-height: 1.428571429;
                color: #333;
                white-space: normal;
            }
            
            .multi-column-dropdown li a:hover {
                text-decoration: underline;
                color: #262626;
            }
            
            <!-- background-color: red;
            -->@media (max-width: 767px) {
                .dropdown-menu.multi-column {
                    min-width: 150px !important;
                    overflow-x: hidden;
                }
            }
            
            @media only screen and (min-device-width: 320px) and (max-device-width: 480px) {
                /* Styles */
                .multi-column-dropdown li a {
                    display: block;
                    clear: both;
                    line-height: 1.428571429;
                    color: #333;
                    white-space: normal;
                    font-size: 16px;
                }
                .dropdown a {
                    font-size: 18px;
                }
            }
            
            <!-- for new search-->.container2 {
                width: 600px;
                margin: 30px auto;
            }
            
            .search-form .form-group {
                float: right !important;
                transition: all 0.35s, border-radius 0s;
                width: 32px;
                height: 32px;
                background-color: #fff;
                box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
                border-radius: 25px;
                border: 1px solid #ccc;
            }
            
            .search-form .form-group input.form-control {
                padding-right: 20px;
                border: 0 none;
                background: transparent;
                box-shadow: none;
                display: block;
            }
            
            .search-form .form-group input.form-control::-webkit-input-placeholder {
                display: none;
            }
            
            .search-form .form-group input.form-control:-moz-placeholder {
                /* Firefox 18- */
                display: none;
            }
            
            .search-form .form-group input.form-control::-moz-placeholder {
                /* Firefox 19+ */
                display: none;
            }
            
            .search-form .form-group input.form-control:-ms-input-placeholder {
                display: none;
            }
            
            .search-form .form-group:hover,
            .search-form .form-group.hover {
                width: 100%;
                border-radius: 4px 25px 25px 4px;
            }
            
            .search-form .form-group span.form-control-feedback {
                position: absolute;
                top: -1px;
                right: -2px;
                z-index: 2;
                display: block;
                width: 34px;
                height: 34px;
                line-height: 34px;
                text-align: center;
                color: #141414;
                left: initial;
                font-size: 14px;
            }
        </style>
    </head>

    <body>

        <!-- Navigation Bar -->




        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->

    </body>

    </html>

    <!DOCTYPE html>
    <html lang="en">

    <head>

    </head>


    <body>



        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
        <!-- use jssor.slider.debug.js instead for debug -->
        <script>
            jQuery(document).ready(function($) {

                var jssor_1_SlideoTransitions = [
                    [{
                        b: 5500,
                        d: 3000,
                        o: -1,
                        r: 240,
                        e: {
                            r: 2
                        }
                    }],
                    [{
                        b: -1,
                        d: 1,
                        o: -1,
                        c: {
                            x: 51.0,
                            t: -51.0
                        }
                    }, {
                        b: 0,
                        d: 1000,
                        o: 1,
                        c: {
                            x: -51.0,
                            t: 51.0
                        },
                        e: {
                            o: 7,
                            c: {
                                x: 7,
                                t: 7
                            }
                        }
                    }],
                    [{
                        b: -1,
                        d: 1,
                        o: -1,
                        sX: 9,
                        sY: 9
                    }, {
                        b: 1000,
                        d: 1000,
                        o: 1,
                        sX: -9,
                        sY: -9,
                        e: {
                            sX: 2,
                            sY: 2
                        }
                    }],
                    [{
                        b: -1,
                        d: 1,
                        o: -1,
                        r: -180,
                        sX: 9,
                        sY: 9
                    }, {
                        b: 2000,
                        d: 1000,
                        o: 1,
                        r: 180,
                        sX: -9,
                        sY: -9,
                        e: {
                            r: 2,
                            sX: 2,
                            sY: 2
                        }
                    }],
                    [{
                        b: -1,
                        d: 1,
                        o: -1
                    }, {
                        b: 3000,
                        d: 2000,
                        y: 180,
                        o: 1,
                        e: {
                            y: 16
                        }
                    }],
                    [{
                        b: -1,
                        d: 1,
                        o: -1,
                        r: -150
                    }, {
                        b: 7500,
                        d: 1600,
                        o: 1,
                        r: 150,
                        e: {
                            r: 3
                        }
                    }],
                    [{
                        b: 10000,
                        d: 2000,
                        x: -379,
                        e: {
                            x: 7
                        }
                    }],
                    [{
                        b: 10000,
                        d: 2000,
                        x: -379,
                        e: {
                            x: 7
                        }
                    }],
                    [{
                        b: -1,
                        d: 1,
                        o: -1,
                        r: 288,
                        sX: 9,
                        sY: 9
                    }, {
                        b: 9100,
                        d: 900,
                        x: -1400,
                        y: -660,
                        o: 1,
                        r: -288,
                        sX: -9,
                        sY: -9,
                        e: {
                            r: 6
                        }
                    }, {
                        b: 10000,
                        d: 1600,
                        x: -200,
                        o: -1,
                        e: {
                            x: 16
                        }
                    }]
                ];

                var jssor_1_options = {
                    $AutoPlay: true,
                    $SlideDuration: 800,
                    $LazyLoading: 1,
                    $SlideEasing: $Jease$.$OutQuint,
                    $CaptionSliderOptions: {
                        $Class: $JssorCaptionSlideo$,
                        $Transitions: jssor_1_SlideoTransitions
                    },
                    $ArrowNavigatorOptions: {
                        $Class: $JssorArrowNavigator$
                    },
                    $BulletNavigatorOptions: {
                        $Class: $JssorBulletNavigator$
                    }
                };

                var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                //responsive code begin
                //you can remove responsive code if you don't want the slider scales while window resizing
                function ScaleSlider() {
                    var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                    if (refSize) {
                        refSize = Math.min(refSize, 1920);
                        jssor_1_slider.$ScaleWidth(refSize);
                    } else {
                        window.setTimeout(ScaleSlider, 30);
                    }
                }
                ScaleSlider();
                $(window).bind("load", ScaleSlider);
                $(window).bind("resize", ScaleSlider);
                $(window).bind("orientationchange", ScaleSlider);
                //responsive code end
            });
        </script>

        <style>
            /* jssor slider bullet navigator skin 05 css */
            /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
            
            .jssorb05 {
                position: absolute;
            }
            
            .jssorb05 div,
            .jssorb05 div:hover,
            .jssorb05 .av {
                position: absolute;
                /* size of bullet elment */
                width: 16px;
                height: 16px;
                background: url('') no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            
            .jssorb05 div {
                background-position: -7px -7px;
            }
            
            .jssorb05 div:hover,
            .jssorb05 .av:hover {
                background-position: -37px -7px;
            }
            
            .jssorb05 .av {
                background-position: -67px -7px;
            }
            
            .jssorb05 .dn,
            .jssorb05 .dn:hover {
                background-position: -97px -7px;
            }
            /* jssor slider arrow navigator skin 22 css */
            /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        */
            
            .jssora22l,
            .jssora22r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 40px;
                height: 58px;
                cursor: pointer;
                background: url('img/a22.png') center center no-repeat;
                overflow: hidden;
            }
            
            .jssora22l {
                background-position: -10px -31px;
            }
            
            .jssora22r {
                background-position: -70px -31px;
            }
            
            .jssora22l:hover {
                background-position: -130px -31px;
            }
            
            .jssora22r:hover {
                background-position: -190px -31px;
            }
            
            .jssora22l.jssora22ldn {
                background-position: -250px -31px;
            }
            
            .jssora22r.jssora22rdn {
                background-position: -310px -31px;
            }
        </style>


        <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 600px; overflow: hidden; visibility: hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                <div style="position:absolute;display:block;background:url('loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
            </div>

            <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 600px; overflow: hidden;">
                <?php
					//session_start();
					$content_id=$_GET['id'];	
					include("connection.php");
					$sql = "SELECT * FROM contents where content_id='$content_id'";					
					$result = mysqli_query($connection,$sql);
					if ($result->num_rows > 0) {
					$row = $result->fetch_assoc() 
					?>
						<div data-p="225.00" style="display: block;">
							<a href="player.php?id=<?php echo $row['content_id'];?>&name=<?php echo $row['name'];?>&duration=<?php echo $row['duration'];?>&category=<?php echo $row['category'];?>"><img class="lazy" data-u="image" src="<?php echo $row['preview_link'];?>" width=auto height=auto/></a>
						</div>					
					<?php
					}
				?>
            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb05" style="bottom: 40px; right: 16px; width: 458px; height: 16px; left: 421px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            
				<div data-u="prototype" style="width: 16px; height: 16px; position: absolute; left: 0px; top: 0px;" class=""></div>
			</div>
            <!-- Arrow Navigator -->
            <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
            <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
        </div>

        </div>
        <!-- /.container -->



    </body>

    </html>
    <!-- Home New Arrival-->
    
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Owl Carousel Assets -->
        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="css/owl.theme.css" rel="stylesheet">

        <style type="text/css">
            .owl-carousel {
                position: relative;
            }
            
            .owl-prev,
            .owl-next {
                position: absolute;
                top: 35%;
                margin-top: 0px;
            }
            
            .owl-prev {
                left: 0;
            }
            
            .owl-next {
                right: 0;
            }
        </style>

    </head>

    <body>


        <div id="demo">


        </div>

        <script src="js/owl.carousel.js"></script>

        <!-- Demo -->

        <style>
            #owl-demo111 .item {
                margin: 2px;
            }
            
            #owl-demo111 .item img {
                display: block;
                width: 100%;
                height: auto;
            }
        </style>


        <script>
            $(document).ready(function() {

                if ($(window).width() > 100 && $(window).width() < 500) {
                    // for Tab
                    if ($("#owl-demo111 div").length + 1 > 1) {
                        $("#owl-demo111").owlCarousel({
                            navigation: false,
                            autoPlay: false,
                            lazyLoad: true,
                            items: 5,
                            itemsDesktop: [1199, 3],
                            itemsDesktopSmall: [979, 3],
                            itemsTablet: [600, 3],
                            itemsMobile: [400, 2]
                        });
                    }
                } else

                    $("#owl-demo111").owlCarousel({
                    navigation: true,
                    autoPlay: false,
                    lazyLoad: true,
                    items: 5,
                    itemsDesktop: [1199, 3],
                    itemsDesktopSmall: [979, 3],
                    itemsTablet: [600, 3],
                    itemsMobile: [400, 2]
                });

            });
        </script>

    </body>

    </html>
    <!-- Home New Arrival End-->
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <!-- Owl Carousel Assets -->
        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="css/owl.theme.css" rel="stylesheet">


        <style type="text/css">
            .owl-carousel {
                position: relative;
            }
            
            .owl-prev,
            .owl-next {
                position: absolute;
                top: 35%;
                margin-top: 0px;
            }
            
            .owl-prev {
                left: 0;
            }
            
            .owl-next {
                right: 0;
            }
            
            img {
                max-width: 100%;
                width: auto;
                height: auto;
                vertical-align: middle;
                border: 0px;
            }
            
            #owl-demo img {
                /* Just in case there are inline attributes */
                transition: all 1s ease;
                -webkit-backface-visibility: hidden;
                width: 100%;
                height: auto;
                margin: 0px 0px 0px 0px;
            }
            
            #owl-demo img:hover {
                transform: scale(1.2);
            }
        </style>

    </head>

    <body>


        <div id="demo">


            <div id="owl-demo121" class="owl-carousel">
            </div>

        </div>

        <!-- Demo -->

        <style>
            #owl-demo121 .item {
                margin: 2px;
            }
            
            #owl-demo121 .item img {
                display: block;
                width: 100%;
                height: auto;
            }
        </style>


        <script>
            $(document).ready(function() {
                if ($(window).width() > 100 && $(window).width() < 500) { // for Tab
                    if ($("#owl-demo121 div").length + 1 > 1) {
                        $("#owl-demo121").owlCarousel({
                            navigation: false,
                            autoPlay: false,
                            lazyLoad: true,
                            items: 5,
                            itemsDesktop: [1199, 3],
                            itemsDesktopSmall: [979, 3],
                            itemsTablet: [600, 3],
                            itemsMobile: [400, 2]
                        });
                    }
                } else

                    $("#owl-demo121").owlCarousel({
                    navigation: true,
                    autoPlay: false,
                    lazyLoad: true,
                    items: 5,
                    itemsDesktop: [1199, 3],
                    itemsDesktopSmall: [979, 3],
                    itemsTablet: [600, 3],
                    itemsMobile: [400, 2]
                });
            });
        </script>

    </body>

    </html>
	<h4 id="macrosectiontext" class="container-fluid" >Name:<?php echo $_GET['name'];?></h4>
	<h5 id="macrosectiontext" class="container-fluid" >Duration:<?php echo $_GET['duration'];?></h5>
	<h5 id="macrosectiontext" class="container-fluid" >Catagory:<?php echo $_GET['category'];?></h5>
	<h4 id="macrosectiontext" class="container-fluid" style="color: red; text-align:center;" >Free download 2 videos daily @ subscription fee 2.44 Tk/Day (Autorenew)</h4>
    <h4 id="macrosectiontext" class="container-fluid">Recommended videos</h4>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <!-- Owl Carousel Assets -->
        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="css/owl.theme.css" rel="stylesheet">

        <style type="text/css">
            .owl-carousel {
                position: relative;
            }
            
            .owl-prev,
            .owl-next {
                position: absolute;
                top: 35%;
                margin-top: 0px;
            }
            
            .owl-prev {
                left: 0;
            }
            
            .owl-next {
                right: 0;
            }
            
            #photos img {
                /* Just in case there are inline attributes */
                transition: all 1s ease;
                -webkit-backface-visibility: hidden;
                width: 100%;
                height: auto;
                margin: 15px 0px 20px 0px;
                -webkit-transition: all 1s ease;
                /* Safari and Chrome */
                -moz-transition: all 1s ease;
                /* Firefox */
                -ms-transition: all 1s ease;
                /* IE 9 */
                -o-transition: all 1s ease;
                /* Opera */
                transition: all 1s ease;
            }
            
            #photos img:hover {
                transform: scale(1.2);
                z-index: 1;
                display: block;
            }
        </style>
    </head>

    <body>
        <div id="demo">
            <div id="owl-demo112" class="owl-carousel">
                <?php
				//session_start();   
				include("connection.php");
				$remarks="exclusive";	
				$sql = "SELECT * FROM contents where remarks='$remarks'";					 
				$result = mysqli_query($connection,$sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						//print_r($row);
						?>
						<ul class="img-list">
							<li>
								<a href="preview.php?id=<?php echo $row['content_id'];?>&name=<?php echo $row['name'];?>&duration=<?php echo $row['duration'];?>&category=<?php echo $row['category'];?>">

									<div class="item">

										<img class="lazyOwl" data-src="<?php echo $row['preview_link'];?>" />

										<span class="text-content"><span ><?php echo $row['name'];?></span></span>

									</div>

								</a>
							</li>

						</ul>
						
						<?php
					}
				}
				?>

                
                <div class="owl-controls clickable">
					<div class="owl-buttons">
						<div class="owl-prev">
							<img src="left.png">
						</div>
						<div class="owl-next">
							<img src="right.png">
						</div>
					</div>
				</div>

            </div>
			<footer class="container-fluid text-center">
			  <p>© videochannel.mobi</p>
			</footer>

        </div>


        <!-- Demo -->

        <style>
            #owl-demo112 .item {
                margin: 2px;
            }
            
            #owl-demo112 .item img {
                display: block;
                width: 100%;
                height: auto;
                /*z-index:-1;
     transition: all 1s ease;
    -webkit-backface-visibility: hidden;
    width: 100%;
    height: auto;
    margin: 15px 0px 20px 0px;
   -webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -ms-transition: all 1s ease;
    -o-transition: all 1s ease;
    transition: all 1s ease;*/
            }
            /* #owl-demo112 .item img:hover
  { transform: scale(1.2);  z-index:100; display:block;
  }*/
        </style>


        <script>
            $(document).ready(function() {
                if ($(window).width() > 100 && $(window).width() < 500) { // for Tab
                    if ($("#owl-demo112 div").length + 1 > 1) {
                        $("#owl-demo112").owlCarousel({
                            navigation: false,
                            autoPlay: false,
                            lazyLoad: true,
                            items: 5,
                            itemsDesktop: [1199, 3],
                            itemsDesktopSmall: [979, 3],
                            itemsTablet: [600, 3],
                            itemsMobile: [400, 2]
                        });
                    }
                } else

                    $("#owl-demo112").owlCarousel({
                    navigation: true,
                    autoPlay: false,
                    lazyLoad: true,
                    items: 5,
                    itemsDesktop: [1199, 3],
                    itemsDesktopSmall: [979, 3],
                    itemsTablet: [600, 3],
                    itemsMobile: [400, 2]
                });
            });
        </script>

    </body>

    </html>
   


</body>

</html>

<style>

footer {
	background-color: black;
	color: white;
	padding: 2%;
}

</style>
</head>
</html>

