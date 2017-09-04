<?php include('incu/header.php'); 
$usid= $_POST["usid"];
if($_SESSION['fuid']!=''){
$fuid=$_SESSION['fuid'];
}else
$fuid= $_POST["fuid"];

?>


<div align="center"><h3> IMCD Volunteers Forum - Space for Your Ideas</h3></div>

<?php include('../server.php');

$qry1="select * from forum where fuid='$fuid'";
$re1=mysql_query($qry1) or die("ERROR forum");
$new=mysql_fetch_array($re1);
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
echo '
<script type="text/javascript">
function confirm_delete() {
  return confirm("Delete reply ? ");
}
</script>

<fieldset>
<form method="post" action="myfrpro.php">
<table><tr><td width="110">
<input title="View '.$fname." ".$lname.' Profile" type="image" name="imageField" src="'.$pic1.'" width="60" height="45" border="1" />
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
<td width="200">
<div id="pd_rating_holder_67848'.$fuid.'"></div>
<script type="text/javascript">
PDRTJS_settings_67848'.$fuid.' = {
"id" : "67848'.$fuid.'",
"unique_id" : "default",
"title" : "",
"permalink" : ""
};
</script>
<script type="text/javascript" src="http://i0.poll.fm/js/rating/rating.js"></script>
</td> </tr></table></fieldset>

<fieldset>
<span class="style2">'.$idea.'</span>
</fieldset>';
if($usid==$loggeduser){
echo '
<div align="right">
<form action="editforum.php" method="post">
<input title="Edit forum" type="image" src="../pictures/edit.png" width="80" height="70" >
<input type="hidden" name="fuid" value="'.$fuid.'" />
</form></div>
';
}
echo '<h4>Replies</4>';
$qry1="select * from reply where fuid='".$fuid."' ";
$re1=mysql_query($qry1) or die("ERROR reply");
while($new3=mysql_fetch_array($re1)){
$reply=$new3['reply'];
$luser=$new3['luser'];
$rdate=$new3['rdate'];
$repid=$new3['repid'];

$qryno77="select * from user where uid='".$luser."'";
$resulno77=mysql_query($qryno77) or die("ERROR77");
$new77=mysql_fetch_array($resulno77);

$fname77=$new77['fname'];
$lname77=$new77['lname'];
$photo177=$new77['mname'];

$pic177=$photo177;
echo '
<fieldset>
<form method="post" action="myfrpro.php">
<table><tr><td width="110">
<input title="View '.$fname77." ".$lname77.' Profile" type="image" name="imageField" src="'.$pic177.'" width="32" height="24" border="1" />
<input type="hidden" name="uid" value="'.$luser.'"/>
<br><span class="style1"> By:'.$fname77.'
<br>'.$rdate.'
</span>
</form>
';
echo '</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td width="500">';
echo '<span class="style3">'.$reply.'</span></td>
';
if($luser==$loggeduser){
echo '<td><form action="dellrep.php" method="post">
<input title="Delete Reply" type="image" src="../pictures/cancel.png" onclick="return confirm_delete()"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="hidden" name="repid" value="'.$repid.'" />
</form></td>';
}
echo '
</td> </tr></table></fieldset>';

}

echo '
<br><br>Post a Reply ...
<div align="right">
<form action="getreply.php" method="post">
<textarea cols="70" rows="5" name="freply"></textarea><br/>
<input width="60" height="60" type="image" src="../pictures/post.png"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="hidden" name="luser" value="'.$loggeduser.'" />
<input type="hidden" name="fuid" value="'.$fuid.'" />
</form><br/>
</div>
';

?>

<?php include('incu/footer.php'); ?>
<style type="text/css">
<!--
.style1 {
	font-size: 10px;
	}
	.style2 {
	font-size: 15px;
	}
		.style3 {
	font-size: 12px;
	}
-->
</style>