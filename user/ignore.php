<?php 
include('../sess.php');
include('../server.php');

$mid=$_POST['mid'];
$mmail=$_POST['mmail'];

  $to = $mmail;
 $subject = "Member request is not approved";
 $message = 'Your member request is not approved yet. Please contact one of the IMCD administrators and inform this issue. Sorry for the trouble.';

$emailfr = "needyreaders@imcds.org";
mail($to, $subject, $message, "From: $emailfr");


$q8="delete from user where uid='".$mid."'";
$r8=mysql_query($q8) or die ("ERROR");

include('request.php');
exit();
?>
