<?php 
include('incu/header.php');
include('../server.php');
$count=0;
echo '
<script type="text/javascript">
function confirm_delete() {
  return confirm("Are you sure collected books? ");
}
</script>
<div align="center"><h3>Pending New Book Donations</h3>(Editing option will be updated)</div>';
$q5="select * from donor where status='pend' ORDER BY doid DESC";
$r5=mysql_query($q5) or die("pend donor ERROR");

while($new=mysql_fetch_array($r5)){

$d_name=$new['dname'];
$n_book=$new['nbook'];
$d_town=$new['dtown'];
$dtp=$new['dtele'];
$dmail=$new['demail'];
$dinfo=$new['dinfo'];
$vo_id=$new['uid'];
$do_id=$new['doid'];
$adate=$new['adate'];

$q6="select * from user where uid='$vo_id'";
$r6=mysql_query($q6) or die("vo member ERROR");

$new2=mysql_fetch_array($r6);
$vo_fname=$new2['fname'];
$vo_lname=$new2['lname'];

$count=$count+1;
echo ''.$count;
echo '<fieldset title="'.$d_name." From ".$d_town.'">
<table>
<td  width="150"><table><tr><td>Donor\'s Name</td></tr><tr><td>No. of Books</td></tr><tr><td>Area/Town</td></tr><tr><td>Telephone</td></tr><tr><td>Email</td></tr><tr><td height="80">Other Info</td></tr></table></td>
<td><table><tr><td>:</td></tr><tr><td>:</td></tr><tr><td>:</td></tr><tr><td>:</td></tr><tr><td>:</td></tr><tr><td height="80">:</td></tr></table></td>
<td width="500"><table><tr><td>'.$d_name.'</td></tr><tr><td>'.$n_book.'</td></tr><tr><td>'.$d_town.'</td></tr><tr><td>'.$dtp.'</td></tr><tr><td>'.$dmail.'</td></tr><tr><td height="80">'.$dinfo.'</td></tr></table></td>
<td><table><tr align="center">
<form action="confirm.php" method="post">
<input title="Confirm if books are collected from '.$d_name.'" type="image" src="../pictures/confirm.png" width="100" height="100" onclick="return confirm_delete()">
<input type="hidden" name="doid" value="'.$do_id.'" />
<input type="hidden" name="whoid" value="'.$loggeduser.'" />
</form>
</tr></table></td>
</table>
<form action="loginfo.php" method="post">
<h4>Donation Added By <input type="submit" value="'.$vo_fname.' '.$vo_lname.'" /> on '.$adate.'</h4>
<input type="hidden" name="uid" value="'.$vo_id.'" />
</form>
</fieldset>';

}
echo "No More Pending Book Donations !";


include('incu/footer.php');?>