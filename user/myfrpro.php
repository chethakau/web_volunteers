<?php session_start();
include('incu/header.php'); 
$uid=$_POST['uid'];

$name=$_SESSION['fuser']; 
$first=$_SESSION['mulnama'];
$last=$_SESSION['aganama'];

include('../server.php');
$qryno="select * from user where uid='".$uid."'";
$resulno=mysql_query($qryno) or die("ERROR");
$new=mysql_fetch_array($resulno);
$usrname=$new['uname'];
$f_name=$new['fname'];
$l_name=$new['lname'];
$photo=$new['mname'];
$birth=$new['dob'];
$rata=$new['country'];
$gen=$new['gender'];
$tp=$new['tele'];
$mail=$new['email'];
$year=$new['year'];
$pic=$photo;
?>
<style type="text/css">
<!--
.style1 {
	color: #FFFF00;
	font-weight: bold;
	font-size: 10px;
}
.style2 {
	color: #006600;
	font-size: 10px;
	
}
.style3 {
	color: #0000FF;
	font-weight: bold;
	font-size: 12px;
}
-->
</style>

<div align="center">
<fieldset>

<legend align="center">
<h2>Welcome <?php echo $first." ".$last;?>...!</h2>

</legend> <br/>
<img align="middle" border="5" width="200" height="200" src="<?php echo $pic;?>">
<br/><br/>
<table><tr><td><span style="font-family: Georgia, &quot;Times New Roman&quot;, Times, serif; color: #000099; font-weight: bold">Full Name</span></td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td><td><span style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: #990000"><?PHP echo $f_name." ".$l_name;?></span></td></tr>
<tr><td><span style="font-family: Georgia, &quot;Times New Roman&quot;, Times, serif; color: #000099; font-weight: bold">Date of Birth</span></td>
<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td><td><span style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: #990000"><?PHP echo $birth;?></span></td></tr>
<tr><td><span style="font-family: Georgia, &quot;Times New Roman&quot;, Times, serif; color: #000099; font-weight: bold">Country</span></td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td><td><span style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: #990000"><?PHP echo $rata;?></span></td></tr>
<tr><td><span style="font-family: Georgia, &quot;Times New Roman&quot;, Times, serif; color: #000099; font-weight: bold">Gender</span></td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td><td><span style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: #990000"><?PHP echo $gen;?></span></td></tr>

<tr><td><span style="font-family: Georgia, &quot;Times New Roman&quot;, Times, serif; color: #000099; font-weight: bold">Telephone</span></td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td><td><span style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: #990000"><?PHP echo $tp;?></span></td></tr>

<tr><td><span style="font-family: Georgia, &quot;Times New Roman&quot;, Times, serif; color: #000099; font-weight: bold">Email</span></td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td><td><span style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: #990000"><?PHP echo $mail;?></span></td></tr>
</table>



<?php include('incu/footer.php'); ?>
