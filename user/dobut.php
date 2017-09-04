<?php

session_start();
$name=$_SESSION['fuser'];
include('../server.php');

$doid= $_POST["doid"];

$willid= $_POST["whoid"];
//echo "aaa ".$dinfo;
$query1="update donor set willid='' where doid='".$doid."'";
$result1=mysql_query($query1) or die("ERROR1");

//echo "aaa ".$sid;
include('don_info.php');
exit();

?>

