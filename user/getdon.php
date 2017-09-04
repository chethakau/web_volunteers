<?php
include('../sess.php');
//echo $f_name;
//echo $loggeduser;

$tb_donor="donor";
$dname= $_POST["dname"].".";

$dtown= $_POST["dtown"].".";
$nbook=$_POST["nbook"];
$dtele=$_POST["dtele"].".";
$demail=$_POST["demail"].",";
$dinfo= $_POST["dinfo"].".";
$dil=$_POST["demail"];
$adate = gmdate("F d, Y");


include('../server.php');

$query="insert into $tb_donor(dname,nbook,dtown,dtele,demail,dinfo,uid,adate) values('$dname','$nbook','$dtown','$dtele','$demail','$dinfo','$loggeduser','$adate')";
$result=mysql_query($query);

$q6="select * from user where uid='$loggeduser'";
$r6=mysql_query($q6) or die("vo member ERROR");

$new2=mysql_fetch_array($r6);
$vo_fname=$new2['fname'];
$vo_lname=$new2['lname'];

if($result!=1){
//echo "Query Fails";
//echo $demail;
}
else {
//echo "Insert Done";
//include('server.php');

 $subject = "New Book Donation";
// $body = "Hi,\n\nHow are you?";
 $message = 'New Book Donation is added by '.$vo_fname.' '.$vo_lname;
$message .= ' | Donor is from '.$dtown;
$message .= ' | View more details here. http://volunteers.imcds.org/user/pe_don.php';
$emailfr = "needyreaders@imcds.org";

if($dil!=''){
$subject22 = "Thank you for your book donating idea";
$message22 = "Dear Sir/Madam,\n\n";
$message22 .= "Thank you very much for your generous idea of donating books to Needy Readers.\n";
$message22 .= $vo_fname." ".$vo_lname." notified us about your donation. One of our members in your area will immediately contact you. \n\nThank you again !";
$message22 .= "\n\n--- Needy readers\n--- Vist Us : http://imcds.org";
mail($dil, $subject22, $message22, "From: $emailfr");
mail("chethakau@gmail.com", $subject22, $message22, "From: $emailfr");
}
include('twiinfo/post_tweet.php');
$q5="select * from user";
$r5=mysql_query($q5) or die("user email ERROR");

while($new=mysql_fetch_array($r5)){
$email=$new['email'];
 $to = $email;
mail($to, $subject, $message, "From: $emailfr");
}

include('pe_don.php');
}

?>