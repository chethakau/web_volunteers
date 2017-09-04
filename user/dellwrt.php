<?php

$uid=$_POST['uid'];
$mid=$_POST['mid'];
include('../server.php');
$q11="delete from msg where msgid='".$mid."'";
$r11=mysql_query($q11) or die("ERROR");
include('myfrpro.php');
exit();
?>
