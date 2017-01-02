<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: new.php");
   }
   else
	   header("Location:welcome.php?location=" . urlencode($_SERVER['REQUEST_URI']));
   
?>

