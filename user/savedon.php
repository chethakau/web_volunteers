<?php

session_start();
$name=$_SESSION['fuser'];
include('../server.php');

$doid= $_POST["doid"];
$dname= $_POST["dname"];

$dtown= $_POST["dtown"];
$nbook=$_POST["nbook"];
$dtp=$_POST["dtp"];
$dmail=$_POST["dmail"];
$dinfo= $_POST["dinfo"];
$vfname=$_POST["vfname"];
$vlname= $_POST["vlname"];
$adate= $_POST["adate"];
$sid= $_POST["sid"];
//echo "aaa ".$dinfo;
$query1="update donor set dname='".$dname."' where doid='".$doid."'";
$result1=mysql_query($query1) or die("ERROR1");

$query2="update donor set nbook='".$nbook."' where doid='".$doid."'";
$result2=mysql_query($query2) or die("ERROR2");

$query3="update donor set dtown='".$dtown."' where doid='".$doid."'";
$result3=mysql_query($query3) or die("ERROR3");

$query7="update donor set dtele='".$dtp."' where doid='".$doid."'";
$result7=mysql_query($query7) or die("ERROR7");

$query4="update donor set demail='".$dmail."' where doid='".$doid."'";
$result4=mysql_query($query4) or die("ERROR4");

$query5="update donor set dinfo='".$dinfo."' where doid='".$doid."'";
$result5=mysql_query($query5) or die("ERROR5");

$query55="update donor set sid='".$sid."' where doid='".$doid."'";
$result55=mysql_query($query55) or die("ERROR55");

//echo "aaa ".$sid;
include('don_info.php');
exit();

?>

