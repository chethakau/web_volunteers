<?php 
include('incu/header.php');
include('../server.php');
if($utype!='admin'){
exit();
}
echo '
<script type="text/javascript">
function confirm_ok() {
  return confirm("Confirm the member ? ");
}
function confirm_delete() {
  return confirm("Ignore member request? ");
}
</script>
<h3>Member Requests</h3>';
$q5="select * from user where status='pend'";
$r5=mysql_query($q5) or die("memberreq ERROR");

while($new=mysql_fetch_array($r5)){
$m_id=$new['uid'];
$f_name=$new['fname'];
$l_name=$new['lname'];
$photo=$new['mname'];
$birth=$new['dob'];
$rata=$new['country'];
$town=$new['town'];
$gen=$new['gender'];
$tp=$new['tele'];
$mail=$new['email'];
$uname=$new['uname'];
$pic=$photo;

echo $f_name;

echo '<fieldset title="'.$f_name." ".$l_name.'"><table><td>

<input title="View '.$f_name." ".$l_name.' Profile" type="image" name="imageField" src="'.$pic.'" width="100" height="100" border="5" />

</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><table><tr><td>Name</td></tr><tr><td>Gender</td></tr><tr><td>From</td></tr><tr><td>Telephone</td></tr><tr><td>Email</td></tr></table></td>
<td><table><tr><td>:</td></tr><tr><td>:</td></tr><tr><td>:</td></tr><tr><td>:</td></tr><tr><td>:</td></tr></table></td>
<td width="350"><table><tr><td>'.$f_name." ".$l_name.'</td></tr><tr><td>'.$gen.'</td></tr><tr><td>'.$town.', '.$rata.'</td></tr><tr><td>'.$tp.'</td></tr><tr><td>'.$mail.'</td></tr></table></td>
<td><table><tr align="center">
<form action="confirm_user.php" method="post">
<input title="Confirm '.$f_name.' as a Member" type="image" src="../pictures/confirm.png" width="84" height="84" onclick="return confirm_ok()">
<input type="hidden" name="mid" value="'.$m_id.'" />
<input type="hidden" name="fnm" value="'.$f_name.'" />
<input type="hidden" name="lnm" value="'.$l_name.'" />
<input type="hidden" name="mmail" value="'.$mail.'" />
<input type="hidden" name="uname" value="'.$uname.'" />
</form>
</tr><tr align="center">
<form action="ignore.php" method="post">
<input title="Ignore '.$f_name.' " type="image" src="../pictures/but.png" width="84" height="84" onclick="return confirm_delete()" >
<input type="hidden" name="mid" value="'.$m_id.'" />
<input type="hidden" name="mmail" value="'.$mail.'" />
</form>
</tr></table></td>
</table>
</fieldset>';


}
echo "No More Member Requests !";


include('incu/footer.php');?>