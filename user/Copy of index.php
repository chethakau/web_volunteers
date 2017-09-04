


<?php 
include('incu/header.php');
include('../server.php');

?>
<table hspace="20"><tr><td align="left" width="600">

<fieldset style="background-color:#CCFFFF">

<legend align="left">
<h3 style="font-family:'Comic Sans MS'">My Wall</h3>
</legend> <br/>
<em><strong>Write Somthing on your wall.....</strong></em>
<div align="center">
<form action="wall.php" method="post">
<textarea cols="50" rows="4" name="msg"></textarea><br/>
<input width="60" height="60" type="image" src="../pictures/post.png"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="hidden" name="uid" value="<?php echo $loggeduser;?>" />
</form>


</div></fieldset></td>

<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

<td>
<div align="right"><fieldset><legend align="center"><h3 style="font-family:'High Tower Text'">My Friends</h3></legend><br/>
<marquee align="middle" width="120" bgcolor="#000000" direction="up">

<?php


$q5="select * from myfriends where fid='".$loggeduser."' and status='aprov'";
$r5=mysql_query($q5) or die("MyFrnds ERROR");

while($new1=mysql_fetch_array($r5)){
$frndid1=$new1['uid'];

$q6="select * from user where uid='".$frndid1."'";
$r6=mysql_query($q6) or die("User ERROR");
$new=mysql_fetch_array($r6);

$f_name=$new['fname'];
$l_name=$new['lname'];
$photo=$new['mname'];
$pic=$photo;

echo '<span class="style3">'.$f_name.'<br/>';
echo '
<form id="form1" name="form1" method="post" action="myfrpro.php">
<input title="View '.$f_name." ".$l_name.' Profile" type="image" name="imageField" src="'.$pic.'" width="100" height="100" border="5" />
<input type="hidden" name="uid" value="'.$frndid1.'"/>
</form>
<br/>';


}

$q16="select * from myfriends where uid='".$loggeduser."' and status='aprov'";
$r16=mysql_query($q16) or die("MyFrndsUU ERROR");

while($new2=mysql_fetch_array($r16)){
$frndid2=$new2['fid'];

$q17="select * from user where uid='".$frndid2."'";
$r17=mysql_query($q17) or die("UserUU ERROR");
$new=mysql_fetch_array($r17);

$f_name=$new['fname'];
$l_name=$new['lname'];
$photo=$new['mname'];

$pic=$photo;

echo '<span class="style3">'.$f_name.'<br/>';
echo '<form id="form1" name="form1" method="post" action="myfrpro.php">
<input title="View '.$f_name." ".$l_name.' Profile" type="image" name="imageField" src="'.$pic.'" width="100" height="100" border="5" />
<input type="hidden" name="uid" value="'.$frndid2.'"/>
</form><br/>';

}
?>

</marquee></fieldset></div>

</td></tr></table>

<?php include('../server.php');
$qry1="select * from msg where rid='".$loggeduser."' order by msgid desc";
$re1=mysql_query($qry1) or die("ERROR med");
while($new=mysql_fetch_array($re1)){
$message=$new['messg'];
$snd=$new['wrt'];
$mid=$new['msgid'];

$qryno22="select * from user where uid='".$snd."'";
$resulno22=mysql_query($qryno22) or die("ERROR");
$new=mysql_fetch_array($resulno22);

$f_name=$new['fname'];
$l_name=$new['lname'];
$photo=$new['mname'];

$pic=$photo;
echo '<fieldset><table><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>
<form method="post" action="myfrpro.php">
<input title="View '.$f_name." ".$l_name.' Profile" type="image" name="imageField" src="'.$pic.'" width="80" height="80" border="2" />
<input type="hidden" name="uid" value="'.$snd.'"/>
</form>
';
echo '</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><span class="style1">'.$f_name." ".$l_name.'</span><br/>';
echo '<textarea readonly="readonly" cols="50" rows="5" name="msg">'.$message.'</textarea></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><form action="dellwall.php" method="post">
<input title="Delete Message from Wall" type="image" src="../pictures/cancel.png"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="hidden" name="mid" value="'.$mid.'" />
</form></td></tr></table></fieldset><br/>';
}
?>
<?php include('incu/footer.php');?>


<style type="text/css">
<!--
.style1 {
	color: #0000FF;
	font-size: 12px;
	font-weight: bold;
}
.style2 {
	color: #006600;
	font-size: 10px;
	
}
.style3 {
	color: #66CCFF;
	font-size: 12px;
	font-weight: bold;
}
-->
</style>
