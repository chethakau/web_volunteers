<?php include('inc/header.php'); ?>


<fieldset><legend align="left"><h3>Feedback About IMCD Volunteers Data Portal</h3></legend>

<?php include('server.php');
$abt="1";
$qry1="select * from msg where rid='".$abt."' order by msgid desc";
$re1=mysql_query($qry1) or die("ERROR med");
while($new=mysql_fetch_array($re1)){
$message=$new['messg'];
$snd=$new['wrt'];
$mid=$new['msgid'];

$qryno22="select * from user where uid='".$snd."'";
$resulno22=mysql_query($qryno22) or die("ERROR");
$new=mysql_fetch_array($resulno22);

$fname=$new['fname'];
$lname=$new['lname'];
$photo1=$new['mname'];

$pic1="user/".$photo1;
echo '<fieldset><table><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>
<form method="post" action="myfrpro.php">
<input title="View '.$fname." ".$lname.' Profile" type="image" name="imageField" src="'.$pic1.'" width="120" height="90" border="2" />
<input type="hidden" name="uid" value="'.$snd.'"/>
</form>
';
echo '</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><span class="style3">'.$fname." ".$lname.'</span><br/>';
echo '<textarea readonly="readonly" cols="50" rows="5" name="msg">'.$message.'</textarea></td>';
if($snd==$loggeduser){
echo '<td><form action="dellwrt.php" method="post">
<input title="Delete Message from Wall" type="image" src="../pictures/cancel.png"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="hidden" name="mid" value="'.$mid.'" />
<input type="hidden" name="uid" value="'.$uid.'" />
</form></td>';
}
echo '</tr></table></fieldset><br/>';
}
?>
</fieldset>

<?php include('inc/footer.php'); ?>
