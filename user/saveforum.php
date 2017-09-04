<?php
session_start();

include('../server.php');

$fuid= $_POST["fuid"];
$catg= $_POST["catg"];
$subj= $_POST["subj"];
$idea=$_POST["idea"];
//echo "aaa ".$dinfo;
$query1="update forum set catg='".$catg."' where fuid='".$fuid."'";
$result1=mysql_query($query1) or die("ERROR1");

$query2="update forum set subj='".$subj."' where fuid='".$fuid."'";
$result2=mysql_query($query2) or die("ERROR2");

$query3="update forum set idea='".$idea."' where fuid='".$fuid."'";
$result3=mysql_query($query3) or die("ERROR3");

//echo "aaa ".$sid;
include('fdetails.php');
exit();

?>

