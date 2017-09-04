<?php
include('../sess.php');

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


include('../server.php');
if($sname!=''){
$query="insert into stake(sname,scno,spadrs,semail,sdate,sage,sgender,snat,sbook,showc,shcon,shelp,splan,syes,srem,volid) values('$sname','$scno','$spadrs','$semail','$sdate','$sage','$sgender','$snat','$sbook','$showc','$shcon','$shelp','$splan','$syes','$srem','$loggeduser')";
$result=mysql_query($query);


if($result!=1){
echo "If you added \" ' \" mark please remove it and add details again. sorry for inconvienence..<br> Press back button of your browser.";
//echo $query;
}
else {
//echo "Insert Done";
//include('server.php');
header("Location: mystake.php");
}
}else{
include('adstake.php');
}



?>
