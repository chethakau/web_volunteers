<?php session_start();
$usid=$_SESSION['uid'];

$fnid=$_POST['fid'];
$ffnm=$_POST['fnm'];
$flnm=$_POST['lnm'];
$status="pend";

include('../server.php');
$q2="select * from myfriends where uid='".$usid."'";

$r2=mysql_query($q2) or die("ERROR2");
while($new=mysql_fetch_array($r2)){
$usrid=$new['uid'];
$fndid=$new['fid'];
	if($usrid==$usid && $fndid==$fnid){
	include('logall.php');
		echo '<script type="text/javascript">
			  				
			alert("Request is Already Pending...!\n\n'.$ffnm." ".$flnm.' has to Conform your request.");
			</script>';	
			exit();
	}
}

$q1="insert into myfriends(uid,fid,status) values('$usid','$fnid','$status')";
$r1=mysql_query($q1) or die("ERROR1");
include('logall.php');
echo '<script type="text/javascript">
alert("Your Invitation is sent to '.$ffnm." ".$flnm.'\n\nConformation is Pending...!");
</script>';

exit();
?>
