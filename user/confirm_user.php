<?php 
include('../sess.php');
include('../server.php');

$mid=$_POST['mid'];
$mmail=$_POST['mmail'];
$uname=$_POST['uname'];

$st="aprov";
$cdate = gmdate("F d, Y");


$q7="update user set status='".$st."' where uid='".$mid."'";
$r7=mysql_query($q7) or die ("ERROR");

  $to = $mmail;
 $subject = "IMCD Member request is approved";
 $message = "Congratulations ! Your member request is approved. You can login to the system now. Username : ".$uname;

$emailfr = "needyreaders@imcds.org";
mail($to, $subject, $message, "From: $emailfr");


include('request.php');
exit();
?>