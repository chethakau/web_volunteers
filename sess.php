<?php
session_start();
$name=$_SESSION['fuser']; 
$loggeduser=$_SESSION['uid'];
if($name==''){
header("Location: /erruser.php");
exit();
}
include('server.php');

$query="select * from user where uname='".$name."' ";
$result=mysql_query($query);

$new=mysql_fetch_array($result);
$f_name=$new['fname'];
$l_name=$new['lname'];
$photo=$new['mname'];
$birth=$new['dob'];
$rata=$new['country'];
$town=$new['town'];
$gen=$new['gender'];
$tp=$new['tele'];
$mail=$new['email'];
$year=$new['year'];
$utype=$new['utype'];
$chpassword=$new['pword'];
$utype=$new['utype'];
?>