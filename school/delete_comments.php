<?php
include "includes/connection.php";
$id = $_GET['id'];
mysql_query("DELETE FROM comments WHERE id='$id'");
header('Location:'.$_SERVER['HTTP_REFERER']);
?>