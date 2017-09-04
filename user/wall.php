<?php 
include('../sess.php');
include('../server.php');


$msg=$_POST['msg'];

$uid=$_POST['uid'];

$tab="msg";



$q77="insert into $tab(messg,wrt,rid) 
values('$msg','$loggeduser','$uid')";

$r77=mysql_query($q77) or die("ERROR77");
include('myfrpro.php');
exit();

?>
