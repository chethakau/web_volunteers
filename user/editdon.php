<?php 
include('incu/header.php');
include('../server.php');

$doid= $_POST["doid"];
$dname= $_POST["dname"];

$dtown= $_POST["dtown"];
$nbook=$_POST["dnbook"];
$dtp=$_POST["dtp"];
$dmail=$_POST["dmail"];
$dinfo= $_POST["dinfo"];
$vfname=$_POST["vfname"];
$vlname= $_POST["vlname"];
$adate= $_POST["adate"];

echo '
<script type="text/javascript">
function confirm_delete() {
  return confirm("Save book donor new details ? ");
}
</script>
<div align="center"><h3>Edit Pending '.$dname.'\'s Book Donations</h3></div>';


echo '<fieldset title="'.$dname." From ".$dtown.'">
<form action="savedon.php" method="post">
<table>
<td  width="150"><table><tr><td height="40">Donor\'s Name</td></tr><tr><td height="40">No. of Books</td></tr><tr><td height="40">Area/Town</td></tr><tr><td height="40">Telephone</td></tr><tr><td height="40">Email</td></tr><tr><td height="80">Other Info</td></tr></table></td>
<td><table><tr><td height="40">:</td></tr><tr><td height="40">:</td></tr><tr><td height="40">:</td></tr><tr><td height="40">:</td></tr><tr><td height="40">:</td></tr><tr><td height="80">:</td></tr></table></td>
<td width="500"><table><tr><td height="40"><input type="text" name="dname" value="'.$dname.'" /></td></tr><tr><td height="40"><input type="text" name="nbook" value="'.$nbook.'" /></td></tr><tr><td height="40"><input type="text" name="dtown" value="'.$dtown.'" /></td></tr><tr><td height="40"><input type="text" name="dtp" value="'.$dtp.'" /></td></tr><tr><td height="40"><input type="text" name="dmail" value="'.$dmail.'" /></td></tr><tr><td height="80"><textarea cols="30" rows="4" name="dinfo">'.$dinfo.'</textarea></td></tr></table></td>
<td><table><tr align="center">
<br><br>
<input title="Save new info" type="submit" value="Save details" onclick="return confirm_delete()" >
<input type="hidden" name="mid" value="'.$m_id.'" />
<input type="hidden" name="doid" value="'.$doid.'" />
<input type="hidden" name="vfname" value="'.$vfname.'" />
<input type="hidden" name="vlname" value="'.$vlname.'" />
<input type="hidden" name="adate" value="'.$adate.'" />
<input type="hidden" name="sid" value="'.$loggeduser.'" />
</form>
<form action="don_info.php" method="post">
<input title="Cancel" type="submit" value="Cancel">
<input type="hidden" name="mid" value="'.$m_id.'" />
<input type="hidden" name="doid" value="'.$doid.'" />
<input type="hidden" name="vfname" value="'.$vfname.'" />
<input type="hidden" name="vlname" value="'.$vlname.'" />
<input type="hidden" name="adate" value="'.$adate.'" />
</form>
</tr>
<tr align="center">

</tr>
<tr align="center">

</tr>
</table></td>
</table>
<form action="loginfo.php" method="post">
<h4>Donation Added By <input type="submit" value="'.$vfname.' '.$vlname.'" /> on '.$adate.'</h4>
<input type="hidden" name="uid" value="'.$vo_id.'" />
</form>
</fieldset>';



include('incu/footer.php');?>
