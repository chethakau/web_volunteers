<?php 
include('../sess.php');

$q4="delete from user where uid='".$loggeduser."'";
$r4=mysql_query($q4) or die("ERROR IN DELETE");

$q5="delete from myfriends where uid='".$loggeduser."' or fid='".$loggeduser."'";
$r5=mysql_query($q5) or die("ERROR IN DELETE FRIENDS");

header ('location: logout.php');
exit();
?>