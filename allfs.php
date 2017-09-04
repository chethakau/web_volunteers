<?php 
include('inc/header.php');
include('server.php');
echo '<div align="center"><h2>Members</h2></div>';

$word=$_POST['sch'];
$count=0;
$qry="select * from user where fname like '%$word%' or lname like '%$word%' or town like '%$word%'";

$resul=mysql_query($qry);
while($new=mysql_fetch_array($resul)){
$uid=$new['uid'];
$usrname=$new['uname'];
$f_name=$new['fname'];
$l_name=$new['lname'];
$photo=$new['mname'];
$birth=$new['dob'];
$rata=$new['country'];
$town=$new['town'];
$gen=$new['gender'];
$tp=$new['tele'];
$mail=$new['email'];
$year=$new['year'];
$status=$new['status'];
$pic="user/".$photo;

if($status=='aprov'){
$count=$count+1;
echo $count.'. '.$f_name;
//echo $f_name;
echo '<form id="form1" name="form1" method="post" action="info.php"><fieldset title="'.$f_name." ".$l_name.'"><table><td><input type="image" name="imageField" src="'.$pic.'" width="120" height="90" border="5" />
</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><table><tr><td><span class="style2">Name</td></tr><tr><td><span class="style2">Area/Town</td></tr></table></td>
<td><table><tr><td><span class="style2">:</td></tr><tr><td><span class="style2">:</td></tr></table></td>
<td width="350"><table><tr><td><span class="style2">'.$f_name." ".$l_name.'</td></tr><tr><td><span class="style2">'.$town.'</td></tr></table></td>
<td></td>
<input type="hidden" name="uid" value="'.$uid.'"/>
</table>
</fieldset></form>';
}
}

include('inc/footer.php');?>
<style type="text/css">
<!--
.style2 {
	color: #0000FF;
	font-size: 12px;
	font-weight: bold;
}
-->
</style>