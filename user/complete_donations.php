<?php 
include('incu/header.php');
include('../server.php');
$noof=0;
$count=0;
echo '

<div align="center"><h3>Completed Book Donations</h3></div>';

$q5="select * from donor where status='aprov' ORDER BY doid DESC";
$r5=mysql_query($q5) or die("pend donor ERROR");

while($new=mysql_fetch_array($r5)){
$noof=$noof+1;
$d_name=$new['dname'];
$n_book=$new['nbook'];
$d_town=$new['dtown'];
$dtp=$new['dtele'];
$dmail=$new['demail'];
$dinfo=$new['dinfo'];
$vo_id=$new['uid'];
$do_id=$new['doid'];
$adate=$new['adate'];
$whoid=$new['whoid'];
$cdate=$new['cdate'];

$count=$count+$n_book;

$q6="select * from user where uid='$vo_id'";
$r6=mysql_query($q6) or die("vo member ERROR");

$new2=mysql_fetch_array($r6);
$vo_fname=$new2['fname'];
$vo_lname=$new2['lname'];

$q7="select * from user where uid='$whoid'";
$r7=mysql_query($q7) or die("who member ERROR");

$new3=mysql_fetch_array($r7);
$who_fname=$new3['fname'];
$who_lname=$new3['lname'];
echo $noof;
echo '<fieldset title="'.$d_name." From ".$d_town.'">
<table>
<td  width="150"><table><tr><td>Donor\'s Name</td></tr><tr><td>No. of Books</td></tr><tr><td>Area/Town</td></tr><tr><td>Telephone</td></tr><tr><td>Email</td></tr><tr><td height="80">Other Info</td></tr></table></td>
<td><table><tr><td>:</td></tr><tr><td>:</td></tr><tr><td>:</td></tr><tr><td>:</td></tr><tr><td>:</td></tr><tr><td height="80">:</td></tr></table></td>
<td width="500"><table><tr><td>'.$d_name.'</td></tr><tr><td>'.$n_book.'</td></tr><tr><td>'.$d_town.'</td></tr><tr><td>'.$dtp.'</td></tr><tr><td>'.$dmail.'</td></tr><tr><td height="80">'.$dinfo.'</td></tr></table></td>
<td><table><tr align="center">
</tr></table></td>
</table>
<form action="loginfo.php" method="post">
<h4>Collected By  : &nbsp;<input type="submit" value="'.$who_fname.' '.$who_lname.'" /> on '.$cdate.'</h4>
<input type="hidden" name="uid" value="'.$whoid.'" />
</form>
<form action="loginfo.php" method="post">
<h4>Added By &nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;<input type="submit" value="'.$vo_fname.' '.$vo_lname.'" /> on '.$adate.'</h4>
<input type="hidden" name="uid" value="'.$vo_id.'" />
</form>
</fieldset>';

}
echo "<div align='right'><h1> Overall Book Count - ".$count."</h1></div>";
echo "No more completed book donations !";


include('incu/footer.php');?>