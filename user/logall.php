<?php 
include('incu/header.php');
include('../server.php');
$word=$_POST['sch'];
$count=0;
echo '<div align="center"><h2>Members</h2></div>';

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
$pic=$photo;

if($status=='aprov'){
$count=$count+1;
echo $count.'. '.$f_name;
if($uid==$loggeduser){
echo '<fieldset title="'.$f_name." ".$l_name.'"><table><td><a href="index.php"><img src="'.$pic.'" width="100" height="100" border="5"></a>
</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><table>
<tr><td><span class="style2">Name</td></tr>
<tr><td><span class="style2">Area/Town</td></tr>
<tr><td><span class="style2">Telephone</td></tr></table></td>
<td><table><tr><td><span class="style2">:</td></tr><tr><td><span class="style2">:</td></tr><tr><td><span class="style2">:</td></tr></table></td>
<td width="350">
<table>
<tr><td><span class="style2">'.$f_name." ".$l_name.'</td></tr>
<tr><td><span class="style2">'.$town.'</td></tr>
<tr><td><span class="style2">'.$tp.'</td></tr>
</table></td>
</table>
</fieldset></form>';
}else{

echo '<fieldset title="'.$f_name." ".$l_name.'"><table><td><form id="form1" name="form1" method="post" action="loginfo.php"><input title="View '.$f_name." ".$l_name.' Profile" type="image" name="imageField" src="'.$pic.'" width="100" height="100" border="5" />
<input type="hidden" name="uid" value="'.$uid.'"/>
</form>
</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><table>
<tr><td><span class="style2">Name</td></tr>
<tr><td><span class="style2">Area/Town</td></tr>
<tr><td><span class="style2">Telephone</td></tr></table></td>
<td><table><tr><td><span class="style2">:</td></tr><tr><td><span class="style2">:</td></tr><tr><td><span class="style2">:</td></tr></table></td>
<td width="350">
<table>
<tr><td><span class="style2">'.$f_name." ".$l_name.'</td></tr>
<tr><td><span class="style2">'.$town.'</td></tr>
<tr><td><span class="style2">'.$tp.'</td></tr>
</table></td>

<input type="hidden" name="uid" value="'.$uid.'"/>
</table>
</fieldset></form>';
}
}

}


include('incu/footer.php');?>
<style type="text/css">
<!--
.style1 {
	color: #0033FF;
	font-weight: bold;
	font-size: 12px;
}
.style2 {
	color: #993300;
	font-size: 12px;
	font-weight: bold;
}
-->
</style>