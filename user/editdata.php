<?php
if(!filled_out($_POST)){
//echo "You Have not Completed The Form Properly";
include('editme.php');
exit();
}else{
session_start();
$name=$_SESSION['fuser'];
include('../server.php');

$tb_user="user";
$fname= $_POST["fname"];
$lname=$_POST["lname"];
$dob=$_POST["dob"];
$town=$_POST["town"];
$country=$_POST["country"];
$gender=$_POST["gender"];
$telephone=$_POST["telephone"];

$query1="update $tb_user set fname='".$fname."' where uname='".$name."'";
$result1=mysql_query($query1) or die("ERROR1");

$query2="update $tb_user set lname='".$lname."' where uname='".$name."'";
$result2=mysql_query($query2) or die("ERROR2");

$query3="update $tb_user set dob='".$dob."' where uname='".$name."'";
$result3=mysql_query($query3) or die("ERROR3");

$query7="update $tb_user set town='".$town."' where uname='".$name."'";
$result7=mysql_query($query7) or die("ERROR7");

$query4="update $tb_user set country='".$country."' where uname='".$name."'";
$result4=mysql_query($query4) or die("ERROR4");

$query5="update $tb_user set gender='".$gender."' where uname='".$name."'";
$result5=mysql_query($query5) or die("ERROR5");

$query6="update $tb_user set tele='".$telephone."' where uname='".$name."'";
$result6=mysql_query($query6) or die("ERROR6");

include('upok.php');
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
?>

