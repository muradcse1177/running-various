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

        <nav class="navbar transparent navbar-transparent navbar-fixed-top" id="navbar-fixed-top" role="navigation">

            <div class="container-fluid">


                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                    <div class="col-sm-3 col-md-3 pull-right" style="padding-top: 15px;">
                        <form action="search.php" method="GET" class="search-form">
                            <div class="form-group has-feedback">
                                <label for="search" class="sr-only">Search</label>
                                <input type="text" class="form-control" name="cn" id="search" placeholder="Titles, people, genres">
                                <span class="glyphicon glyphicon-search form-control-feedback"></span>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </nav>


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
                background: url('img/b05.png') no-repeat;
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
				include("connection.php");
				$remarks="banner";	
				$sql = "SELECT * FROM contents where remarks='$remarks'";					 
				$result = mysqli_query($connection,$sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						//print_r($row);
						?>
						<div data-p="225.00" style="display: block;">
							<a href="preview.php?id=<?php echo $row['content_id'];?>&name=<?php echo $row['name'];?>&duration=<?php echo $row['duration'];?>&category=<?php echo $row['category'];?>"><img class="lazy" data-u="image" src="<?php echo $row['preview_link'];?>" width=auto height=auto/></a>
						</div>
						
						<?php
					}
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
    <h4 id="macrosectiontext" class="container-fluid"><a href="#">Campaign</a></h4>
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
				$remarks="campaign";	
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
    <h4 id="macrosectiontext" class="container-fluid"><a href="#"> Exclusive</a> </h4>
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
            <div id="owl-demo113" class="owl-carousel">
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

        </div>
        <!-- Demo -->

        <style>
            #owl-demo113 .item {
                margin: 2px;
            }
            
            #owl-demo113 .item img {
                display: block;
                width: 100%;
                height: auto;
            }
        </style>


        <script>
            $(document).ready(function() {
                if ($(window).width() > 100 && $(window).width() < 500) { // for Tab
                    if ($("#owl-demo113 div").length + 1 > 1) {
                        $("#owl-demo113").owlCarousel({
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

                    $("#owl-demo113").owlCarousel({
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
	
    <h4 id="macrosectiontext" class="container-fluid"><a href="#"> Popular</a> </h4>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <!-- Owl Carousel Assets -->
        <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
        <link href="owl-carousel/owl.theme.css" rel="stylesheet">

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
            <div id="owl-demo114" class="owl-carousel">
                <?php
				//session_start();   
				include("connection.php");
				$remarks="popular";	
				$sql = "SELECT * FROM contents where remarks='$remarks' limit 5";					 
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

			<script>
				function showUser() { 
				  if (window.XMLHttpRequest) {
					// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp=new XMLHttpRequest();
				  } else { // code for IE6, IE5
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				  }
				  xmlhttp.onreadystatechange=function() {
					if (this.readyState==4 && this.status==200) {
					  document.getElementById("nextvid").innerHTML=this.responseText;
					}
				  }
				  xmlhttp.open("GET","getuser.php,true);
				  xmlhttp.send();
				}
			</script>
			
			
			<body>

				
                <div name="users" onchange="showUser()" class="owl-controls clickable">
					<div class="owl-buttons">
						<div class="owl-prev">
							<img src="left.png">
						</div>
						<div class="owl-next">
							<img src="right.png">
						</div>
					</div>
				</div>
				
				<div id="nextvid">	</div>
						
			</body>
		</div>	
	</div>




        <!-- Demo -->

        <style>
            #owl-demo114 .item {
                margin: 2px;
            }
            
            #owl-demo114 .item img {
                display: block;
                width: 100%;
                height: auto;
            }
        </style>


        <script>
            $(document).ready(function() {
                if ($(window).width() > 100 && $(window).width() < 500) { // for Tab
                    if ($("#owl-demo114 div").length + 1 > 1) {
                        $("#owl-demo114").owlCarousel({
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

                    $("#owl-demo114").owlCarousel({
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
    <h4 id="macrosectiontext" class="container-fluid"><a href="Bflix_show_allcontent_new.php?ct=mov&cn=Movies">Movies</a> </h4>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <!-- Owl Carousel Assets -->
        <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
        <link href="owl-carousel/owl.theme.css" rel="stylesheet">


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


            <div id="owl-demo115" class="owl-carousel">
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=ua4N99tLjvg&cc=mov">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/ua4N99tLjvg_mq.jpg" />

                                <span class="text-content"><span >Danob</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=m4EJwvVl6sc&cc=mov">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/m4EJwvVl6sc_mq.jpg" />

                                <span class="text-content"><span >Bangla Movie Prayoschitto (?????????????) by Shabana, Razzak, Mostafa, Razib by Kamal Ahmed</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=gX7PmVO6_ck&cc=mov">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/gX7PmVO6_ck_mq.jpg" />

                                <span class="text-content"><span >Dafan (2016) | Full HD Bangla Movie | Manna | Purnima | Nasrin | Misha | CD Vision</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=3oP4jag1GBc&cc=mov">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/3oP4jag1GBc_mq.jpg" />

                                <span class="text-content"><span >Chirodin ami Tomar (2009)</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=wgifQdsVyic&cc=mov">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/wgifQdsVyic_mq.jpg" />

                                <span class="text-content"><span >Hason Raja (2016 | Full HD Bangla Movie | Helal Khan | Mukti | Shomi Kaowsar | Babita | CD Vision</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=QnyPFRiYSI8&cc=mov">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/QnyPFRiYSI8_mq.jpg" />

                                <span class="text-content"><span >CD Vision - Ontore Ontore (2016) | Bangla Movie | Salman Shah | Moushumi | Anowara | CD Vision</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=gA7wunscmSU&cc=mov">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/gA7wunscmSU_mq.jpg" />

                                <span class="text-content"><span >Ammajaan (????????) Popular Bangla Movie by Moushumi & Manna (??????  & ??????) | NTV Bangla Movie</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=6JBL93aHDrU&cc=mov">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/6JBL93aHDrU_mq.jpg" />

                                <span class="text-content"><span >CD Vision - Amader Choto Shaheb (2016) | Bangla Movie | Shakib | Apu | Shahara | Misha | CD Vision</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=GBACLp_nvss&cc=mov">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/GBACLp_nvss_mq.jpg" />

                                <span class="text-content"><span >Stirir Morjada (2016) | Full HD Bangla Movie | Shakib Khan | Moushumi | Bobita | Misha | CD Vision</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=VAULt2UBlAs&cc=mov">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/VAULt2UBlAs_mq.jpg" />

                                <span class="text-content"><span >??????? ???? [Aparajito Nayok] - ????? ??????? ????? ???????</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=SgSK20DQ0l8&cc=mov">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/SgSK20DQ0l8_mq.jpg" />

                                <span class="text-content"><span >Amar Adalot (2016) |  Bangla Movie | Ilias Kanchan | Tamila | Anowara | Ahmed Sorif | CD Vision</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=DPM9FyrET8g&cc=mov">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/DPM9FyrET8g_mq.jpg" />

                                <span class="text-content"><span >???? ?????? [Rukhe Darao] - ????? ??????? ????? ???????</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=a-mKZU6gc8c&cc=mov">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/a-mKZU6gc8c_mq.jpg" />

                                <span class="text-content"><span >Bhoyonkor Bishu (????? ????) Popular Bangla Movie by Shabnur, Riaz, Dipjol | NTV Bangla Movie</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=sZ4j0CiM9xM&cc=mov">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/sZ4j0CiM9xM_mq.jpg" />

                                <span class="text-content"><span >Amar Shopno Amar Shongshar | Bangla Movie 2016 | Dipjol | Reshi | Purnima | Amin Khan</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=mIeispC89e0&cc=mov">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/mIeispC89e0_mq.jpg" />

                                <span class="text-content"><span >Raza Bangaldeshi ( ???? ?????????) | Bangla Movie</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=nCvqq6oJlqI&cc=mov">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/nCvqq6oJlqI_mq.jpg" />

                                <span class="text-content"><span >Bangla Cinema Utthan Poton (?????? ???) by Rubel, Mishela, Sohana, Humayun Faridi | NTV Bangla Movie</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=rD2EGPQjdVk&cc=mov">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/rD2EGPQjdVk_mq.jpg" />

                                <span class="text-content"><span >Mon Chuyeche Mon | Bangla Movie | Shabnur | Riyaz</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=xM2Y0kS7ymY&cc=mov">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/xM2Y0kS7ymY_mq.jpg" />

                                <span class="text-content"><span >Noyoner Alo 2016 | Bangla Movie | Jafor Ikbal | Shuborna Mustufa | Kajori | Miju Ahmed | CD Vision</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=YTAt0aBnskM&cc=mov">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/YTAt0aBnskM_mq.jpg" />

                                <span class="text-content"><span >Shobar Opre Prem 2016 | Full HD Bangla Movie | Shakib Khan |Shabnur | Kholil | Don | CD Vision</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=PdFxIjGkTd8&cc=mov">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/PdFxIjGkTd8_mq.jpg" />

                                <span class="text-content"><span >Bangla Movie Inchi Inchi Prem (????? ????? ?????) by Bobby, Bappy, Shathy, Srabon</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
            </div>

        </div>




        <!-- Demo -->

        <style>
            #owl-demo115 .item {
                margin: 2px;
            }
            
            #owl-demo115 .item img {
                display: block;
                width: 100%;
                height: auto;
            }
        </style>


        <script>
            $(document).ready(function() {

                if ($(window).width() > 100 && $(window).width() < 500) { // for Tab

                    if ($("#owl-demo115 div").length + 1 > 1) {
                        $("#owl-demo115").owlCarousel({
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

                    $("#owl-demo115").owlCarousel({
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
    <h4 id="macrosectiontext" class="container-fluid"><a href="Bflix_show_allcontent_new.php?ct=dsr&cn=Drama Serial">Drama Serial</a> </h4>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <!-- Owl Carousel Assets -->
        <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
        <link href="owl-carousel/owl.theme.css" rel="stylesheet">


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


            <div id="owl-demo117" class="owl-carousel">
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=jOcK1YICm7A&cc=dsr">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/jOcK1YICm7A_mq.jpg" />

                                <span class="text-content"><span >Bangla Natok - Ochena Protibimbo (????? ??????????) | Episode 01 | Directed by</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=zVRv3BvUipA&cc=dsr">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/zVRv3BvUipA_mq.jpg" />

                                <span class="text-content"><span >Bangla Natok   Houseful ???? ??? | Episode 107 | Mosharraf Karim & Sumaiya Shimu | Drama & Telefilm</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=1NtSdZMtvAA&cc=dsr">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/1NtSdZMtvAA_mq.jpg" />

                                <span class="text-content"><span >Bangla Natok   Aughoton Ghoton Potiyoshi (???? ??? ???????) | Episode 86 | Prova & Hasan Imam</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=IOamT0A2FMk&cc=dsr">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/IOamT0A2FMk_mq.jpg" />

                                <span class="text-content"><span >Bangla Natok Aughoton Ghoton Potiyoshi (???? ??? ???????) | Episode 84 | Prova & Hasan Imam</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=2-G0bfl3Wws&cc=dsr">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/2-G0bfl3Wws_mq.jpg" />

                                <span class="text-content"><span >Rumali | Episode 40 | Drama & Telefilm</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=LCHQ3lk8IMY&cc=dsr">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/LCHQ3lk8IMY_mq.jpg" />

                                <span class="text-content"><span >False Item | Drama | All Episodes | Zahid Hasan | Bindu | A Kha M Hasan</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=ZpGhoiCSmRE&cc=dsr">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/ZpGhoiCSmRE_mq.jpg" />

                                <span class="text-content"><span >Bangla Natok   Cinemawala ???????????? | Episode 15 | Sadia Jahan Prova & Azad Abul Kalam</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=4utlYDP1F-8&cc=dsr">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/4utlYDP1F-8_mq.jpg" />

                                <span class="text-content"><span >Bangla Natok   Torun Turkey ???? ?????? | Episode 12 | Sajal & Nova</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=fonorJcrMxY&cc=dsr">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/fonorJcrMxY_mq.jpg" />

                                <span class="text-content"><span >Bangla Natok Dhupchaya | Prova, Momo, Munmun, Nisho | Episode 76 | Drama & Telefilm</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=mnamK5t-4Uc&cc=dsr">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/mnamK5t-4Uc_mq.jpg" />

                                <span class="text-content"><span >Bangla Natok   Ochena Protibimbo (????? ??????????) | Episode 03 | Directed by Raihan Khan</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=52nkB_jVNA0&cc=dsr">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/52nkB_jVNA0_mq.jpg" />

                                <span class="text-content"><span >Bangla Natok  Metro Life ??????? ???? | Episode 52 | Mosharraf Karim & Mousumi | Drama & Telefilm</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=et4tPMMvhJY&cc=dsr">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/et4tPMMvhJY_mq.jpg" />

                                <span class="text-content"><span >Bangla Natok   Cinemawala (????????????) | Episode 29 | Sadia Jahan Prova & Azad Abul Kalam</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=vC-T6dPHlHQ&cc=dsr">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/vC-T6dPHlHQ_mq.jpg" />

                                <span class="text-content"><span >Bangla Natok   Songsar ????? | Episode 04 | Arfan Nishu & Moushumi Hamid</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=JelqLOfT-uI&cc=dsr">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/JelqLOfT-uI_mq.jpg" />

                                <span class="text-content"><span >Bangla Natok   Aughoton Ghoton Potiyoshi ???? ??? ??????? | Episode 60 | Prova & Hasan Imam</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=RZNOZSyYDkM&cc=dsr">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/RZNOZSyYDkM_mq.jpg" />

                                <span class="text-content"><span >Bangla Natok   Aughoton Ghoton Potiyoshi (???? ??? ???????) | Episode 93 | Prova & Hasan Imam</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=8inOUfjFEbc&cc=dsr">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/8inOUfjFEbc_mq.jpg" />

                                <span class="text-content"><span >Bangla Natok - Sublet Gublet (?????? ??????) Arfan Nisho & kusum sikdar | Episode 07</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=TwAN-H3r1J8&cc=dsr">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/TwAN-H3r1J8_mq.jpg" />

                                <span class="text-content"><span >Bangla Natok   Shesh Bikeler Gan ??? ??????? ??? | ????????, ??????? | Episode 70 | Drama & Telefilm</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=4JWCwNhpwB4&cc=dsr">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/4JWCwNhpwB4_mq.jpg" />

                                <span class="text-content"><span >Bangla Natok - Beauty Boat (????? ????) Jahid Hasan & Tisha | Episode 04 | Drama & Telefilm</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=6NKWjGZh2yE&cc=dsr">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/6NKWjGZh2yE_mq.jpg" />

                                <span class="text-content"><span >Bangla Natok - Beauty Boat (????? ????) Jahid Hasan & Tisha | Episode 01 | Drama & Telefilm mp3</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=Zc_t9tOQJkY&cc=dsr">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/Zc_t9tOQJkY_mq.jpg" />

                                <span class="text-content"><span >Bangla Natok - Beauty Boat (????? ????) Jahid Hasan & Tisha | Episode 02 | Drama & Telefilm</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
            </div>

        </div>


        <!-- Demo -->

        <style>
            #owl-demo117 .item {
                margin: 2px;
            }
            
            #owl-demo117 .item img {
                display: block;
                width: 100%;
                height: auto;
            }
        </style>


        <script>
            $(document).ready(function() {
                if ($(window).width() > 100 && $(window).width() < 500) { // for Tab
                    if ($("#owl-demo117 div").length + 1 > 1) {
                        $("#owl-demo117").owlCarousel({
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

                    $("#owl-demo117").owlCarousel({
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
    <h4 id="macrosectiontext" class="container-fluid"><a href="Bflix_show_allcontent_new.php?ct=msn&cn=Movie Songs">Movie Songs</a> </h4>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <!-- Owl Carousel Assets -->
        <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
        <link href="owl-carousel/owl.theme.css" rel="stylesheet">

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


            <div id="owl-demo118" class="owl-carousel">
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=lS_NLc_up2w&cc=msn">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/lS_NLc_up2w_mq.jpg" />

                                <span class="text-content"><span >Hridoy Jekhane | Bangla Movie 'Shuvo Bibaho' HD Song | Muhin, Ronty Das | Ferdous, Purnima</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=eoP1ba7RDPA&cc=msn">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/eoP1ba7RDPA_mq.jpg" />

                                <span class="text-content"><span >Tumi Rojhoni Gondha Premri Chonda| Full HD Video Song | CD Vision</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=p7mnWotV62c&cc=msn">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/p7mnWotV62c_mq.jpg" />

                                <span class="text-content"><span >CD Vision - Prem Priti R Valobasha | Asa Valobasha 2016 | Movie Song | Salman Sha | CD Vision</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=_rt7ClmGRqI&cc=msn">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/_rt7ClmGRqI_mq.jpg" />

                                <span class="text-content"><span >Rongo Shalay Dekho Tumi Rongila Golam | Full HD Video Song | CD Vision</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=FCOtwP1w4QM&cc=msn">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/FCOtwP1w4QM_mq.jpg" />

                                <span class="text-content"><span >A mon Tomaky Chay Chay | Full HD Video Song | CD Vision</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=Hru0sHKmCeE&cc=msn">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/Hru0sHKmCeE_mq.jpg" />

                                <span class="text-content"><span >CD Vision - Tumi Choke | Shontaner Moto Shontan (2016) | Movie Song | Shakib | Shahara | CD Vision</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=Exf41DoM5R4&cc=msn">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/Exf41DoM5R4_mq.jpg" />

                                <span class="text-content"><span >CD Vision - Iche Iche Mon | Amader Choto Shaheb (2016) | HD Movie Song | Shakib | Apu | CD Vision</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=9bS239uH7n4&cc=msn">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/9bS239uH7n4_mq.jpg" />

                                <span class="text-content"><span >CD Vision - Dom Dom Hare Dom | Shiri Forhad (2016) | Movie Song | Don | Nasrin | CD Vision</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=dhY2-zx3044&cc=msn">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/dhY2-zx3044_mq.jpg" />

                                <span class="text-content"><span >Tumi Jodi Sukh How | Bangla Movie 'Bhool' HD Song | Sithi Shaha, Anan</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=nI2G1KLF7DY&cc=msn">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/nI2G1KLF7DY_mq.jpg" />

                                <span class="text-content"><span >CD Vision - Shurzu Konna | Amader Choto Shaheb (2016) | HD Movie Song | Shakib | Shahara | CD Vision</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=lxf4-Vxwclc&cc=msn">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/lxf4-Vxwclc_mq.jpg" />

                                <span class="text-content"><span >CD Vision - O Hiro O Hiro I Love u | Ontore Ontore (2016) | Movie Song | Salman sha | CD Vision</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=oUmBTVbrYm4&cc=msn">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/oUmBTVbrYm4_mq.jpg" />

                                <span class="text-content"><span >Duniyate Apon Bolte | Full HD Video Song | CD Vision</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=aGlvXGtcLbE&cc=msn">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/aGlvXGtcLbE_mq.jpg" />

                                <span class="text-content"><span >Onjoli Onjoli Deho Theke Pran Gele | Bolona Tumi Amr (2016) | Movie Song |Shakib | Shokh | CD Vision</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=9ftNJvPGiGE&cc=msn">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/9ftNJvPGiGE_mq.jpg" />

                                <span class="text-content"><span >CD Vision - Pritibete Shuk | Jibon Shongshar (2016) | Movie Song | Salman Shah | Shabnur | CD Vision</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=W3mClQ7T1As&cc=msn">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/W3mClQ7T1As_mq.jpg" />

                                <span class="text-content"><span >A Buke Ase Betha Kotho Jomad | Bolona Tumi Amr (2016) | Movie Song | Shakib Khan | Shokh | CD Vision</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=8d99uCOvF1Q&cc=msn">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/8d99uCOvF1Q_mq.jpg" />

                                <span class="text-content"><span >Manob Jomin - Monir Khan & Konok Chapa - Bangla Movie Song</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=zzqM1W_cxEY&cc=msn">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/zzqM1W_cxEY_mq.jpg" />

                                <span class="text-content"><span >Isharai Shis Diye | Shrititoko Thak (2016) | Movie Song | Nodi | CD Vision</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=gGkcO98Xssc&cc=msn">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/gGkcO98Xssc_mq.jpg" />

                                <span class="text-content"><span >CD Vision - Atu Dine Bujlam | Shuker Ghore Duker Agun (2016) | Movie Song | Moushumi | CD Vision</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=Ms22f3u7rRM&cc=msn">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/Ms22f3u7rRM_mq.jpg" />

                                <span class="text-content"><span >Jekhane Hridoy Ase Sekhane Prem | Shikari (2016) | Movie Song | Rubel | Shanu | CD Vision</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=I1qHL1QMQD4&ccc=msn">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/I1qHL1QMQD4_mq.jpg" />

                                <span class="text-content"><span >Premer Tajmahal | Sonia, Muhin, Ronty, Kishore | Shakib Khan, Lamia Mimo | Purnodoirgho Prem Kahini</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

            </div>

        </div>



        <!-- Demo -->

        <style>
            #owl-demo118 .item {
                margin: 2px;
            }
            
            #owl-demo118 .item img {
                display: block;
                width: 100%;
                height: auto;
            }
        </style>


        <script>
            $(document).ready(function() {
                if ($(window).width() > 100 && $(window).width() < 500) { // for Tab
                    if ($("#owl-demo118 div").length + 1 > 1) {
                        $("#owl-demo118").owlCarousel({
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

                    $("#owl-demo118").owlCarousel({
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
    <h4 id="macrosectiontext" class="container-fluid"><a href="Bflix_show_allcontent_new.php?ct=mvo&cn=Music Video">Music Video</a> </h4>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <!-- Owl Carousel Assets -->
        <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
        <link href="owl-carousel/owl.theme.css" rel="stylesheet">


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


            <div id="owl-demo119" class="owl-carousel">

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=0R-pSOZRwgM&cc=mvo">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/0R-pSOZRwgM_mq.jpg" />

                                <span class="text-content"><span >Mon Chhuyechhe - Tishma - Prem - Full Music Video</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=8dREA-Qi0Y4&cc=mvo">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/8dREA-Qi0Y4_mq.jpg" />

                                <span class="text-content"><span >TUMI ELE | Raju Ahmed | Choity | New Music Video 2016</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=_89EufNpNWI&cc=mvo">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/_89EufNpNWI_mq.jpg" />

                                <span class="text-content"><span >Mon Manena by N R Nayan & Kheya Rahman | Official Music Video</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=nexMEJapadE&cc=mvo">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/nexMEJapadE_mq.jpg" />

                                <span class="text-content"><span >Bhalobasa Kome Na | Kazi Shuvo | Official Music Video</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=G_SZTNHrYNY&cc=mvo">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/G_SZTNHrYNY_mq.jpg" />

                                <span class="text-content"><span >Ektuku Chowa Lage | Jayati Chakraborty and Shwapnil Shojib | Rabindra Sangeet | 2016</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=CgdORO2x-ww&cc=mvo">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/CgdORO2x-ww_mq.jpg" />

                                <span class="text-content"><span >Milon Mahmod & Nazu Akhand - Moner Kotha | Bangla New Song | Sangeeta</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=mkTfiF6kVkA&cc=mvo">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/mkTfiF6kVkA_mq.jpg" />

                                <span class="text-content"><span >??????? ??????</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=7nk1DSmKvXg&cc=mvo">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/7nk1DSmKvXg_mq.jpg" />

                                <span class="text-content"><span >Michhey Shongkoch - Shoeb & Nodi - Bangla New Song 2016</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=DOk8XctGswM&cc=mvo">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/DOk8XctGswM_mq.jpg" />

                                <span class="text-content"><span >Cholna Sujon | Official Music Video | Bokhate (2016) | Siam & Toya | Ahmmed Humayun</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=o6YwPAhQE4c&cc=mvo">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/o6YwPAhQE4c_mq.jpg" />

                                <span class="text-content"><span >Habib Wahid - Godhuli Logon | Album Bolchhi Tomake | Bangla New Song | Sangeeta</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=Owxhub5PFpk&cc=mvo">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/Owxhub5PFpk_mq.jpg" />

                                <span class="text-content"><span >Tumi Jekhane  - Tishma - Bangla Music Video 2016</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=UhoPbjnDKuY&cc=mvo">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/UhoPbjnDKuY_mq.jpg" />

                                <span class="text-content"><span >Achin Taan by Oyshee Official Music Video 2016 ¦ Maya ¦ Belal Khan ¦ JK Majlish ¦ Zahid Akbar</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=G_ImWPbN8UY&cc=mvo">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/G_ImWPbN8UY_mq.jpg" />

                                <span class="text-content"><span >Amar Shesh - Kumar Bishwajit and Nancy (Official Video)</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=GQEmS7upf5c&cc=mvo">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/GQEmS7upf5c_mq.jpg" />

                                <span class="text-content"><span >Thank You Teacher | Emon Shaha | Teacher's Day Special | Bangla New Song | 2016</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=iD-G9Woxuto&cc=mvo">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/iD-G9Woxuto_mq.jpg" />

                                <span class="text-content"><span >Chand Janla By Priyanka Gope | Album Chand Janla | Official Music Video</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=4IjdzJL7LIE&cc=mvo">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/4IjdzJL7LIE_mq.jpg" />

                                <span class="text-content"><span >Imran - Valobashar Murshid | Bangla New Song | Sangeeta</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=SjUasf2gjzA&cc=mvo">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/SjUasf2gjzA_mq.jpg" />

                                <span class="text-content"><span >Khamokhi bhalobashi | KONA | Bangla New Song 2016 | CMV</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=46mCHS_QbRo&cc=mvo">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/46mCHS_QbRo_mq.jpg" />

                                <span class="text-content"><span >Tor Tane by J. Alam</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=AX9a-3LOHFY&cc=mvo">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/AX9a-3LOHFY_mq.jpg" />

                                <span class="text-content"><span >Bondhu Hobo By ASIF & HAIMANTI</span></span>

                            </div>

                        </a>

                    </li>

                </ul>

                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=dHd3jwnqyb4&cc=mvo">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/dHd3jwnqyb4_mq.jpg" />

                                <span class="text-content"><span >Tumi Ami Bondhu Noy by Eleyas Hossain</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
            </div>

        </div>




        <!-- Demo -->

        <style>
            #owl-demo119 .item {
                margin: 2px;
            }
            
            #owl-demo119 .item img {
                display: block;
                width: 100%;
                height: auto;
            }
        </style>


        <script>
            $(document).ready(function() {
                if ($(window).width() > 100 && $(window).width() < 500) { // for Tab
                    if ($("#owl-demo119 div").length + 1 > 1) {
                        $("#owl-demo119").owlCarousel({
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

                    $("#owl-demo119").owlCarousel({
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
    <h4 id="macrosectiontext" class="container-fluid"><a href="Bflix_show_allcontent_new.php?ct=fal&cn=Fashion & Lifestyle">Fashion & Lifestyle</a> </h4>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <!-- Owl Carousel Assets -->
        <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
        <link href="owl-carousel/owl.theme.css" rel="stylesheet">


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


            <div id="owl-demo120" class="owl-carousel">
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=Bt-mZucuikc&cc=fal">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/Bt-mZucuikc_mq.jpg" />

                                <span class="text-content"><span >Styles and Trends (World Entertainment and Fashion) | Episode 127</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=A-kmWmuKnRE&cc=fal">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/A-kmWmuKnRE_mq.jpg" />

                                <span class="text-content"><span >Styles and Trends (World Entertainment and Fashion) | Episode 137</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=U3SwJsbRmNo&cc=fal">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/U3SwJsbRmNo_mq.jpg" />

                                <span class="text-content"><span >Momtaz Mehendy Ronge Rangate | Episode 05 | 2016</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=RCJsbsRWYlI&cc=fal">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/RCJsbsRWYlI_mq.jpg" />

                                <span class="text-content"><span >Styles and Trends (World Entertainment and Fashion) | Episode 131</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=P9gAlN2gx7Y&cc=fal">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/P9gAlN2gx7Y_mq.jpg" />

                                <span class="text-content"><span >Styles and Trends (World Entertainment and Fashion) | Episode 128</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=lryd4lPv6m4&cc=fal">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/lryd4lPv6m4_mq.jpg" />

                                <span class="text-content"><span >Momtaz Mehendy Ronge Rangate | Episode 06 | 2016</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=N0RV_R8UJkc&cc=fal">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/N0RV_R8UJkc_mq.jpg" />

                                <span class="text-content"><span >Styles and Trends (World Entertainment and Fashion) | Episode 111</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=hq4-k2xExGM&cc=fal">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/hq4-k2xExGM_mq.jpg" />

                                <span class="text-content"><span >Momtaz Mehendy Ronge Rangate | Episode 03 | 2016</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=otdiATKq1Cg&cc=fal">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/otdiATKq1Cg_mq.jpg" />

                                <span class="text-content"><span >Styles and Trends (??????? ??????? ????????) | Episode 162</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=rgnm-jW_hv8&cc=fal">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/rgnm-jW_hv8_mq.jpg" />

                                <span class="text-content"><span >Styles and Trends ??????? ??????? ???????? | Episode 160</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=tXa15fvPzU4&cc=fal">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/tXa15fvPzU4_mq.jpg" />

                                <span class="text-content"><span >Styles and Trends (World Entertainment and Fashion) | Episode 120</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=DNAtxJSnM_c&cc=fal">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/DNAtxJSnM_c_mq.jpg" />

                                <span class="text-content"><span >Styles and Trends (?????? ???? ????????) World Entertainment and Fashion | Episode 146</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=nVdCEykua4w&cc=fal">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/nVdCEykua4w_mq.jpg" />

                                <span class="text-content"><span >Styles and Trends (?????? ???? ????????) World Entertainment and Fashion | Episode 147</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=hIcYtr9Zomg&cc=fal">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/hIcYtr9Zomg_mq.jpg" />

                                <span class="text-content"><span >Styles and Trends | Episode 148</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=7AdiVHvfJGg&cc=fal">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/7AdiVHvfJGg_mq.jpg" />

                                <span class="text-content"><span >Styles and Trends (World Entertainment and Fashion) | Episode 117</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=f4tR7HoJg7g&cc=fal">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/f4tR7HoJg7g_mq.jpg" />

                                <span class="text-content"><span >Momtaz Mehendy Ronge Rangate | Episode 04 | 2016</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=1aKv9X2lSwc&cc=fal">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/1aKv9X2lSwc_mq.jpg" />

                                <span class="text-content"><span >Styles and Trends (World Entertainment and Fashion) | Episode 123</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=VlD8j4WPB-s&cc=fal">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/VlD8j4WPB-s_mq.jpg" />

                                <span class="text-content"><span >Styles and Trends | Episode 151</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=U0QvoTdqKcU&cc=fal">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/U0QvoTdqKcU_mq.jpg" />

                                <span class="text-content"><span >Styles and Trends (World Entertainment and Fashion) | Episode 134</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
                <ul class="img-list">
                    <li>

                        <a href="playcontent.php?c=QjjKGux_yz0&cc=fal">

                            <div class="item">

                                <img class="lazyOwl" data-src="https://banglaflix.com.bd/yt_th_mq/QjjKGux_yz0_mq.jpg" />

                                <span class="text-content"><span >Styles and Trends ??????? ??????? ???????? | Episode 161</span></span>

                            </div>

                        </a>

                    </li>

                </ul>
            </div>

        </div>



        <!-- Demo -->

        <style>
            #owl-demo120 .item {
                margin: 2px;
            }
            
            #owl-demo120 .item img {
                display: block;
                width: 100%;
                height: auto;
            }
        </style>


        <script>
            $(document).ready(function() {
                if ($(window).width() > 100 && $(window).width() < 500) { // for Tab
                    if ($("#owl-demo120 div").length + 1 > 1) {
                        $("#owl-demo120").owlCarousel({
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

                    $("#owl-demo120").owlCarousel({
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