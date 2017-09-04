<?php

session_start();
$name=$_SESSION['fuser'];
include('../server.php');
$stid= $_POST["stid"];
$sname= $_POST["sname"];
$scno= $_POST["scno"];
$spadrs=$_POST["spadrs"];
$semail=$_POST["semail"];
$sdate=$_POST["sdate"];
$sage= $_POST["sage"];
$sgender = $_POST["sgender"];
$snat= $_POST["snat"];
$sbook= $_POST["sbook"];
$showc=$_POST["showc"];
$shcon=$_POST["shcon"];
$shelp=$_POST["shelp"];
$splan= $_POST["splan"];
$syes = $_POST["syes"];
$srem= $_POST["srem"];
$sid=$_POST["sid"];

//echo "aaa ".$dinfo;
$query1="update stake set sname='".$sname."' where stid='".$stid."'";
$result1=mysql_query($query1) or die("ERROR1");

$query2="update stake set scno='".$scno."' where stid='".$stid."'";
$result2=mysql_query($query2) or die("ERROR2");

$query3="update stake set spadrs='".$spadrs."' where stid='".$stid."'";
$result3=mysql_query($query3) or die("ERROR3");

$query7="update stake set semail='".$semail."' where stid='".$stid."'";
$result7=mysql_query($query7) or die("ERROR7");

$query4="update stake set sdate='".$sdate."' where stid='".$stid."'";
$result4=mysql_query($query4) or die("ERROR4");

$query5="update stake set sage='".$sage."' where stid='".$stid."'";
$result5=mysql_query($query5) or die("ERROR5");

$query55="update stake set sgender='".$sgender."' where stid='".$stid."'";
$result55=mysql_query($query55) or die("ERROR55");

$query51="update stake set snat='".$snat."' where stid='".$stid."'";
$result51=mysql_query($query51) or die("ERROR51");

$query52="update stake set sbook='".$sbook."' where stid='".$stid."'";
$result52=mysql_query($query52) or die("ERROR52");

$query53="update stake set showc='".$showc."' where stid='".$stid."'";
$result53=mysql_query($query53) or die("ERROR53");

$query54="update stake set shcon='".$shcon."' where stid='".$stid."'";
$result54=mysql_query($query54) or die("ERROR54");

$query5="update stake set shelp='".$shelp."' where stid='".$stid."'";
$result5=mysql_query($query5) or die("ERROR5");

$query56="update stake set splan='".$splan."' where stid='".$stid."'";
$result56=mysql_query($query56) or die("ERROR56");

$query57="update stake set syes='".$syes."' where stid='".$stid."'";
$result57=mysql_query($query57) or die("ERROR57");

$query58="update stake set srem='".$srem."' where stid='".$stid."'";
$result58=mysql_query($query58) or die("ERROR58");

$query59="update stake set sid='".$sid."' where stid='".$stid."'";
$result59=mysql_query($query59) or die("ERROR59");

//echo "aaa ".$sid;
include('stakeinfo.php');
exit();

?>

