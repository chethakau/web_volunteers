<?php
include('../sess.php');

$catg= $_POST["catg"];
$subj= $_POST["subj"];
$idea=$_POST["idea"];
$fdate = gmdate("F d, Y");



include('../server.php');
if($subj!=''){
$query="insert into forum(catg,subj,idea,usid,fdate) values('$catg','$subj','$idea','$loggeduser','$fdate')";
$result=mysql_query($query);

//$q6="select * from user where uid='$loggeduser'";
//$r6=mysql_query($q6) or die("vo member ERROR");

//$new2=mysql_fetch_array($r6);
//$vo_fname=$new2['fname'];
//$vo_lname=$new2['lname'];

if($result!=1){
echo "If you added \" ' \" mark please remove it and add details again. sorry for inconvienence..<br> Press back button of your browser.";

}
else {
// $subject = "New Forum Topic";

// $message = 'New forum topic is added by '.$vo_fname.' '.$vo_lname;
//$message .= 'Subject - '.$subj.' | View more details here. http://volunteers.imcds.org/user/forum.php';
//$emailfr = "needyreaders@imcds.org";

//$q5="select * from user";
//$r5=mysql_query($q5) or die("user email ERROR");

//while($new9=mysql_fetch_array($r5)){
//$email=$new9['email'];
// $to = $email;
//mail($to, $subject, $message, "From: $emailfr");
//}

header("Location: forum.php");
}
}else{
include('adfor.php');
}



?>
