<?php 
include('incu/header.php');
include('../server.php');

$doid= $_POST["doid"];
$_SESSION['doid']=$doid;

////////////////
$q5="select * from donor where doid='$doid'";
$r5=mysql_query($q5) or die("pend donor ERROR");

$new=mysql_fetch_array($r5);

$dname=$new['dname'];
$nbook=$new['nbook'];
$dtown=$new['dtown'];
$dtp=$new['dtele'];
$dmail=$new['demail'];
$dinfo=$new['dinfo'];
$vo_id=$new['uid'];
$sid=$new['sid'];
$willid=$new['willid'];

$adate=$new['adate'];

$q6="select * from user where uid='$vo_id'";
$r6=mysql_query($q6) or die("vo member ERROR");

$new2=mysql_fetch_array($r6);
$vfname=$new2['fname'];
$vlname=$new2['lname'];

$q7="select * from user where uid='$sid'";
$r7=mysql_query($q7) or die("s member ERROR");

$new3=mysql_fetch_array($r7);
$sfname=$new3['fname'];
$slname=$new3['lname'];

$q8="select * from user where uid='$willid'";
$r8=mysql_query($q8) or die("will member ERROR");

$new4=mysql_fetch_array($r8);
$wfname=$new4['fname'];
$wlname=$new4['lname'];
//////////////

//$dname= $_POST["dname"];

//$dtown= $_POST["dtown"];
//$nbook=$_POST["dnbook"];
//$dtp=$_POST["dtp"];
//$dmail=$_POST["dmail"];
//$dinfo= $_POST["dinfo"];
//$vfname=$_POST["vfname"];
//$vlname= $_POST["vlname"];
//$adate= $_POST["adate"];

echo '
<script type="text/javascript">
function confirm_delete() {
  return confirm("Are you sure collected books? ");
}
function confirm_coll() {
  return confirm("Are you going to collect books? ");
}
function confirm_but() {
  return confirm("Are you cancel this collection? ");
}
</script>
<div align="center"><h3>Book Donation from '.$dname.'</h3></div>';


echo '<fieldset title="'.$dname." From ".$dtown.'"> (Edit details before you confirm it as collected)
';
if($willid!=''){
echo '
<form action="loginfo.php" method="post">
<strong><span style="color: #FF0000"><input type="submit" value="'.$wfname.' '.$wlname.'" /> will collect books !</span></strong>
<input type="hidden" name="uid" value="'.$willid.'" />
</form>
';
}
echo '

<table>
<td  width="150"><table><tr><td>Donor\'s Name</td></tr><tr><td>No. of Books</td></tr><tr><td>Area/Town</td></tr><tr><td>Telephone</td></tr><tr><td>Email</td></tr><tr><td height="80">Other Info</td></tr></table></td>
<td><table><tr><td>:</td></tr><tr><td>:</td></tr><tr><td>:</td></tr><tr><td>:</td></tr><tr><td>:</td></tr><tr><td height="80">:</td></tr></table></td>
<td width="500"><table><tr><td>'.$dname.'</td></tr><tr><td>'.$nbook.'</td></tr><tr><td>'.$dtown.'</td></tr><tr><td>'.$dtp.'</td></tr><tr><td>'.$dmail.'</td></tr><tr><td height="80">'.$dinfo.'</td></tr></table></td>
<td><table><tr align="center">
';
if($willid==''){
echo '
<form action="willdo.php" method="post">
<input title="'.$f_name.' will collect books " type="image" src="../pictures/will.png" width="100" height="100" onclick="return confirm_coll()" >
<input type="hidden" name="doid" value="'.$doid.'" />
<input type="hidden" name="whoid" value="'.$loggeduser.'" />
</form>
';
} 
if($willid==$loggeduser) {
echo '
<form action="dobut.php" method="post">
<input title="'.$f_name.' can not collect books " type="image" src="../pictures/but.png" width="100" height="100" onclick="return confirm_but()" >
<input type="hidden" name="doid" value="'.$doid.'" />
<input type="hidden" name="whoid" value="'.$loggeduser.'" />
</form>
';
}
echo '

</tr>
<tr align="center">

<form action="editdon.php" method="post">
<input title="Edit donation details" type="image" src="../pictures/edit.png" width="100" height="100" >
<input type="hidden" name="mid" value="'.$m_id.'" />
<input type="hidden" name="doid" value="'.$doid.'" />
<input type="hidden" name="dname" value="'.$dname.'" />
<input type="hidden" name="dtown" value="'.$dtown.'" />
<input type="hidden" name="dnbook" value="'.$nbook.'" />
<input type="hidden" name="dtp" value="'.$dtp.'" />
<input type="hidden" name="dmail" value="'.$dmail.'" />
<input type="hidden" name="dinfo" value="'.$dinfo.'" />
<input type="hidden" name="vfname" value="'.$vfname.'" />
<input type="hidden" name="vlname" value="'.$vlname.'" />
<input type="hidden" name="adate" value="'.$adate.'" />
</form>
</tr>
<tr align="center">
';

if($willid=='' or $willid==$loggeduser) {
echo '
<form action="confirm.php" method="post">
<input title="Confirm if books are collected from '.$dname.'" type="image" src="../pictures/collect.png" width="100" height="100" onclick="return confirm_delete()">
<input type="hidden" name="doid" value="'.$doid.'" />
<input type="hidden" name="whoid" value="'.$loggeduser.'" />
</form>

';
}
echo '
</tr>
</table></td>
</table>
<form action="loginfo.php" method="post">
<h4>Donation Added By <input type="submit" value="'.$vfname.' '.$vlname.'" /> on '.$adate.'</h4>
<input type="hidden" name="uid" value="'.$vo_id.'" />
</form>
';
if($sid!=''){
echo '
<form action="loginfo.php" method="post">
<h4>Details edited By <input type="submit" value="'.$sfname.' '.$slname.'" /></h4>
<input type="hidden" name="uid" value="'.$sid.'" />
</form>
';
}
echo '

<form action="pe_don.php" method="post">
<input title="Back to Pending Donations" type="image" src="../pictures/back.png" width="100" height="100">
</form>
</fieldset>';



include('incu/footer.php');?>
