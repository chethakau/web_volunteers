<?php
session_start();
$repid=$_POST['repid'];

include('../server.php');
$q11="delete from reply where repid='".$repid."'";
$r11=mysql_query($q11) or die("ERROR");
include('fdetails.php');
exit();
?>
