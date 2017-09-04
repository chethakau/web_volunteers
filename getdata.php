<?php


$tb_user="user";
$fname= $_POST["fname"];
$mname= "photo/user.png";
$lname=$_POST["lname"];
$date=$_POST["date"];
$month=$_POST["month"];
$year=$_POST["year"];
$dob=$month." ".$date.", ".$year;
$town= $_POST["town"];
$country=$_POST["country"];
$gender=$_POST["gender"];
$telephone=$_POST["telephone"];
$email=$_POST["email"];
$username= $_POST["username"];
$password=$_POST["password"];
$type="user";
$secques=$_POST["secques"];
$answer=$_POST["answer"];

if(!filled_out($_POST)){
//echo "You Have not Completed The Form Properly";
header("Location: signup.php");
exit();
}


function filled_out($formvars){
foreach($formvars as $key=>$value)
{
	if(!isset($key) || ($value==''))
	return false;
}
return true;
}

include('server.php');

$check="select uname from $tb_user where uname='".$username."'";
$chresul=mysql_query($check);
while($new=mysql_fetch_array($chresul)){
$u_name=$new['uname'];
//echo $u_name;
if($username==$u_name){
header("Location: errsignup.php");
exit();
}
}


$query="insert into $tb_user(uname,fname,mname,lname,dob,country,gender,tele,email,year,town) values('$username','$fname','$mname','$lname','$dob','$country','$gender','$telephone','$email','$year','$town')";
$result=mysql_query($query);
//echo $dob;
if($result!=1){

}
else {
//echo "Insert Done";
include('server.php');

$user1 ="update user set answer='".$answer."' where uname='".$username."'";
 $result1 = mysql_query($user1) or die("Invalid query: " . mysql_error());

//echo "Done";
$user2 ="update user set seq='".$secques."' where uname='".$username."'";
 $result2 = mysql_query($user2) or die("Invalid query: " . mysql_error());

//echo "Done";
$enpass=sha1($_POST["password"]);
$user1 ="update user set pword='".$enpass."' where uname='".$username."'";
 $result1 = mysql_query($user1) or die("Invalid query: " . mysql_error());
 
 //  $to1 = "chethakau@gmail.com";
 // $to2 = "upul@imcds.org";
 // $to3 = "GREATVIMUKTHI@gmail.com";
 // $to4 = "nimanthie.ariyasinghe@gmail.com";

 //$subject = "New Member Request";
// $message = $fname.' '.$lname;
//$message .= ' is requesting to register as a member. Confirm/Ignore here. Use the admin login. http://volunteers.imcds.org/user/request.php';
//$emailfr = "needyreaders@imcds.org";
//mail($to1, $subject, $message, "From: $emailfr");
//mail($to2, $subject, $message, "From: $emailfr");
//mail($to3, $subject, $message, "From: $emailfr");
//mail($to4, $subject, $message, "From: $emailfr");

$q5="select * from user where utype='admin'";
$r5=mysql_query($q5) or die("admin email ERROR");

while($new=mysql_fetch_array($r5)){
$to=$new['email'];
$subject = "New Member Request";
$message = $fname.' '.$lname;
$message .= ' is requesting to register as a member. Confirm/Ignore here. http://volunteers.imcds.org/user/request.php';
$emailfr = "needyreaders@imcds.org";
mail($to, $subject, $message, "From: $emailfr");
}


include('activeuser.php');
}

?>