<?php
include('../sess.php');
session_start();

$fuid= $_POST["fuid"];
$luser= $_POST["luser"];
$freply=$_POST["freply"];
$fdate = gmdate("F d, Y");

$_SESSION['fuid']=$fuid;

include('../server.php');
if($freply!=''){
$query="insert into reply(fuid,luser,reply,rdate) values('$fuid','$luser','$freply','$fdate')";
$result=mysql_query($query);


if($result!=1){
echo "If you added \" ' \" mark please remove it and add details again. sorry for inconvienence..<br> Press back button of your browser.";
//echo $query;
}
else {
//echo "Insert Done";
//include('server.php');
header("Location: fdetails.php");
}
}else{
include('fdetails.php');
}



?>
