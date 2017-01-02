<!DOCTYPE html>
<?php
session_start();
 if (isset($_GET['msg'])) {
      echo $_GET['msg'];
    }
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Education Time</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />

<script type="text/javascript" src="scripts/jquery-1.8.2.min.js"></script>
<!-- liteAccordion is Homepage Only -->
<link rel="stylesheet" href="scripts/liteaccordion-v2.2/css/liteaccordion.css" type="text/css" />
<link href="css.css" rel="stylesheet" type="text/css" />
</head>
<body id="top";background:<div id="logo">
  </div>

<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="index.php">Naildi B.S.S High School</a></h1>
       <td width="250"><form id="form1" name="form1" method="post" action="index.php" >
              <table width="200" border="0" float="left" cellpadding="0" cellspacing="0";margin-top:15px;>
                <tr>
                  <td width="100" class="search">Quick Search : </td>
                  <td width="110"><input name="textfield" type="text" class="field" style="width:150px;" /></td>
                  <td width="30px;"><input type="image" name="imageField" src="images/index_08.gif" /></td>
                </tr>
              </table>
                  </form>
            </td>
    </div>
    <?php
    if (!isset($_SESSION['user_id'])) {

     ?>
    <form action="login.php" method="post" id="login">
      <fieldset>
        <legend><p>Student Login</p></legend>
         <input type="password" name="password"pattern=".{8,32}" title="Password" placeholder="Password"   required/>
        <input type="username" id="newsletter" name="username"  placeholder="Username" required/>
        <input type="image" src="images/sign_in.gif" id="signin" alt="Sign In" />
        
      </fieldset>
    </form>
    <?php 
    }
    else
    {
      echo " <a href='logout.php' style='float:right;margin-right: -80px;margin-top: 20px;'>logout</a>".'<h1 class="userpanelec">Welcome '."{$_SESSION['user_name']}</h1>";
    }
     ?>
    
  </div>
</div>
                         
<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div id="topnav">
    <ul>
      <li class="active"><a href="index.php">Homepage</a></li>
      <li><a href="About Teachers.php">About Teachers</a></li>
      <li><a href="full-width.php">About</a></li>
      <li><a href="NoticeBoard.php">NoticeBoard</a></li>
      <li><a href="Alumini.php">Alumini</a></li>
      <li><a href="Articles.php">Articles</a></li>
      </ul>
      <li><a href="Contact Us.php">Contact Us </a></li>
      <li class="last"><a href="gallery.php">Gallery</a></li>
    </ul>
    <div  class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->

<div class="about teacher">

  
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="footer" class="clear">
    <!-- ####################################################################################################### -->
    <div class="foot_contact">
      <h2>School Name:Naildi B.S.S High School</h2>
      <address>
      Address Line 1:Naildi,Lohagora,Narail <br />
      Town/City:Naildi,Narail <br />
      Postcode/Zip:xxxxxxxx
      </address>
      <ul>
        <li><strong>Tel:</strong> xxxxx xxxxxxxxxx</li>
        <li><strong>Fax:</strong> xxxxx xxxxxxxxxx</li>
        <li class="last"><strong>Email:</strong> <a href="#">contact@mydomain.com</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Administration</h2>
      <ul>
        <li><a href="#">Disclaimer</a></li>
        <li><a href="#">Accessibility</a></li>
        <li><a href="#">Freedom of Information</a></li>
        <li><a href="#">Website Privacy</a></li>
        <li><a href="#">Press Release Information</a></li>
        <li><a href="#">Annual Report</a></li>
        <li><a href="#">Financial Statements</a></li>
        <li><a href="#">Job Vacancies</a></li>
        <li class="last"><a href="#">Exam Dates</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Link Block 2</h2>
      <ul>
        <li><a href="#">School</a></li>
        <li><a href="#">Student Activities</a></li>
        <li><a href="#">Student Affairs</a></li>
        <li><a href="#">Student Development</a></li>
        <li><a href="#">Student Financial Services</a></li>
        <li><a href="#">Student Group Directory</a></li>
        <li><a href="#">Student Life</a></li>
        <li class="last"><a href="#">Global Learning</a></li>
      </ul>
    </div>
    <div class="footbox last">
      <h2>Link Block 3</h2>
      <ul>
        <li><a href="#">Academic Advisory</a></li>
        <li><a href="#">Academic Assistance</a></li>
        <li><a href="#">Academic Calendars</a></li>
        <li><a href="#">Academics Office</a></li>
        <li><a href="#">Administration</a></li>
        <li><a href="#">Adult Learners</a></li>
        <li><a href="#">Alumni Chapters</a></li>
        <li><a href="#">Alumni Events</a></li>
        <li class="last"><a href="#">Residential School</a></li>
      </ul>
    </div>
    <!-- ####################################################################################################### -->
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2013 - All Rights Reserved - <a href="#">Domain Name</a></p>
    </div>
<!-- liteAccordion is Homepage Only -->
<script type="text/javascript" src="scripts/liteaccordion-v2.2/js/liteaccordion.jquery.min.js"></script>
<script type="text/javascript">
$("#featured_slide").liteAccordion({
    theme: "os-tpl",
  
    containerWidth: 960, // fixed (px)
    containerHeight: 360, // fixed (px) - overall height of the slider
    headerWidth: 48, // fixed (px) - slide spine title

    firstSlide: 1, // displays slide (n) on page load
  activateOn: "click", // click or mouseover
    autoPlay: false, // automatically cycle through slides
    pauseOnHover: true, // pause slides on hover
    rounded: false, // square or rounded corners
    enumerateSlides: true, // put numbers on slides

    slideSpeed: 800, // slide animation speed
    cycleSpeed: 6000, // time between slide cycles
});
</script>
</body>
</html>