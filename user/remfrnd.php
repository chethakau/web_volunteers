<?php 
include('../sess.php');
include('../server.php');

$frid=$_POST['fid'];


$q8="delete from myfriends where fid='".$frid."' and uid='".$loggeduser."'";
$r8=mysql_query($q8) or die ("ERROR");

$q9="delete from myfriends where fid='".$loggeduser."' and uid='".$frid."'";
$r9=mysql_query($q9) or die ("ERROR");

include('myfriends.php');
exit();
?>
