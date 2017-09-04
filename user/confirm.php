<?php 
include('../sess.php');
include('../server.php');

$doid=$_POST['doid'];
$whoid=$_POST['whoid'];

$st="aprov";
$cdate = gmdate("F d, Y");


$q7="update donor set status='".$st."' where doid='".$doid."'";
$r7=mysql_query($q7) or die ("ERROR");

$q8="update donor set whoid='".$whoid."' where doid='".$doid."'";
$r8=mysql_query($q8) or die ("ERROR");

$q9="update donor set cdate='".$cdate."' where doid='".$doid."'";
$r9=mysql_query($q9) or die ("ERROR");

$q6="select * from user where uid='$loggeduser'";
$r6=mysql_query($q6) or die("vo member ERROR");

$new2=mysql_fetch_array($r6);
$vo_fname=$new2['fname'];
$vo_lname=$new2['lname'];

$q100="select * from donor where doid='$doid'";
$r100=mysql_query($q100) or die("doi member ERROR");

$new100=mysql_fetch_array($r100);
$doemail=$new100['demail'];

 $subject = "Collected a book donation";
 $message = 'A book donation is collected by '.$vo_fname.' '.$vo_lname;
$message .= ' | View more details here. http://volunteers.imcds.org/user/complete_donations.php';
$emailfr = "needyreaders@imcds.org";

if($doemail!=''){
$subject22 = "Thank you for your book donation";
$message22 = "Dear Sir/Madam,\n\n";
$message22 .= "On behalf of The International Movement for Community Development (IMCD), I would like convey our heartfelt gratitude to you for your generous donation of books towards the Needy Readers. Your benefaction in helping the underprivileged people in our community is sincerely appreciated.\n\n";
$message22 .= $vo_fname." ".$vo_lname." has confirmed us about your book donation. \n\nThank you very much again !";
$message22 .= "\nBest Regards, \n\n--- Needy readers\n--- Vist Us : http://imcds.org";
mail($doemail, $subject22, $message22, "From: $emailfr");
mail("chethakau@gmail.com,", $subject22, $message22, "From: $emailfr");
}

$q5="select * from user";
$r5=mysql_query($q5) or die("user email ERROR");

while($new=mysql_fetch_array($r5)){
$email=$new['email'];
 $to = $email;
mail($to, $subject, $message, "From: $emailfr");
}
// $doemail.' -- '.$doid;
include('pe_don.php');
exit();
?>