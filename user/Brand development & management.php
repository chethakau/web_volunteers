<?php include('incu/header.php'); 
unset($_SESSION['fuid']);
?>



<div align="center"><h3> Forum - Brand development & management</h3></div>

<form action="adfor.php" method="post"><div align="right"><input height="25" width="100" type="image" src="../pictures/forum.png"/></div></form>

<?php include('../server.php');

$qry1="select * from forum order by fuid desc";
$re1=mysql_query($qry1) or die("ERROR forum");
while($new=mysql_fetch_array($re1)){
$catg=$new['catg'];
$subj=$new['subj'];
$idea=$new['idea'];
$usid=$new['usid'];
$fuid=$new['fuid'];
$fdate=$new['fdate'];

$qryno22="select * from user where uid='".$usid."'";
$resulno22=mysql_query($qryno22) or die("ERROR");
$new22=mysql_fetch_array($resulno22);

$fname=$new22['fname'];
$lname=$new22['lname'];
$photo1=$new22['mname'];

$pic1=$photo1;
if($catg=="Brand development & management"){
echo '<fieldset>
<form method="post" action="myfrpro.php">
<table><tr><td width="110">
<input title="View '.$fname." ".$lname.' Profile" type="image" name="imageField" src="'.$pic1.'" width="48" height="36" border="1" />
<input type="hidden" name="uid" value="'.$usid.'"/>
<br><span class="style1"> By:'.$fname.'
<br>'.$fdate.'
</span>
</form>
';
echo '</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td width="500">';
echo ''.$subj.'<br><span class="style1"> Catagory:<a href="'.$catg.'.php">'.$catg.'</a></span></td>
<td>
<div align="right">
<form method="post" action="fdetails.php">

<input type="submit" name="vdetails" id="vdetails" value="Read More Details">

<input type="hidden" name="usid" value="'.$usid.'"/>
<input type="hidden" name="subj" value="'.$subj.'"/>
<input type="hidden" name="fuid" value="'.$fuid.'"/>
</form></div>
</td>';

echo '</tr></table></fieldset>';
}
}
?>

<?php include('incu/footer.php'); ?>
<style type="text/css">
<!--
.style1 {
	font-size: 10px;
	}
-->
</style>
