<?php 
include('incu/header.php');
include('../server.php');
echo '<h3>My Friends</h3>';

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
$birth=$new['dob'];
$rata=$new['country'];
$gen=$new['gender'];
$tp=$new['tele'];
$mail=$new['email'];
$year=$new['year'];
$pic=$photo;

echo $f_name;
echo '<fieldset title="'.$f_name." ".$l_name.'"><table><td>
<form id="form1" name="form1" method="post" action="myfrpro.php">
<input title="View '.$f_name." ".$l_name.' Profile" type="image" name="imageField" src="'.$pic.'" width="100" height="100" border="5" />
<input type="hidden" name="uid" value="'.$frndid1.'"/>
</form>
</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><table><tr><td><span class="style1">Name</span></td></tr><tr><td><span class="style1">Gender</span></td></tr><tr><td><span class="style1">From</span></td></tr></table></td>
<td><table><tr><td><span class="style1">:</span></td></tr><tr><td><span class="style1">:</span></td></tr><tr><td><span class="style1">:</span></td></tr></table></td>
<td width="350"><table><tr><td><span class="style1">'.$f_name." ".$l_name.'</td></tr><tr><td><span class="style1">'.$gen.'</td></tr><tr><td><span class="style1">'.$rata.'</td></tr></table></td></span>
<td><table><tr align="center"><td>

</td>
</tr><tr align="center">
<td>
<form action="remfrnd.php" method="post">
<input title="Remove '.$f_name.' from My Friends " type="image" src="../pictures/deluser.png" width="32" height="32" /><span class="style2">Remove <b>'.$f_name.'</b></span> 
<input type="hidden" name="fid" value="'.$frndid1.'" />

</form></td>
</tr></table></td>
</table>
</fieldset>';


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
$birth=$new['dob'];
$rata=$new['country'];
$gen=$new['gender'];
$tp=$new['tele'];
$mail=$new['email'];
$year=$new['year'];
$pic=$photo;

echo $f_name;
echo '<fieldset title="'.$f_name." ".$l_name.'"><table><td>
<form id="form1" name="form1" method="post" action="myfrpro.php">
<input title="View '.$f_name." ".$l_name.' Profile" type="image" name="imageField" src="'.$pic.'" width="100" height="100" border="5" />
<input type="hidden" name="uid" value="'.$frndid2.'"/>
</form>
</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><table><tr><td><span class="style1">Name</span></td></tr><tr><td><span class="style1">Gender</span></td></tr><tr><td><span class="style1">From</span></td></tr></table></td>
<td><table><tr><td><span class="style1">:</span></td></tr><tr><td><span class="style1">:</span></td></tr><tr><td><span class="style1">:</span></td></tr></table></td>
<td width="350"><table><tr><td><span class="style1">'.$f_name." ".$l_name.'</td></tr><tr><td><span class="style1">'.$gen.'</td></tr><tr><td><span class="style1">'.$rata.'</td></tr></table></td></span>
<td><table><tr align="center"><td>

</td>
</tr><tr align="center">
<td>
<form action="remfrnd.php" method="post">
<input title="Remove '.$f_name.' from My Friends " type="image" src="../pictures/deluser.png" width="32" height="32" /><span class="style2">Remove <b>'.$f_name.'</b></span> 
<input type="hidden" name="fid" value="'.$frndid2.'" />

</form></td>
</tr></table></td>
</table>
</fieldset>';

}
echo "No More Friend Requests !";


include('incu/footer.php');?>
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
-->
</style>

