<?php 
include('incu/header.php');
include('../server.php');

$stid= $_POST["stid"];
$_SESSION['stid']=$stid;

////////////////
$q5="select * from stake where stid='$stid'";
$r5=mysql_query($q5) or die("stake ERROR");

$new=mysql_fetch_array($r5);

$sname= $new['sname'];
$scno= $new['scno'];
$spadrs=$new['spadrs'];
$semail=$new['semail'];
$sdate=$new['sdate'];
$sage= $new['sage'];
$sgender = $new['sgender'];
$snat= $new['snat'];
$sbook= $new['sbook'];
$showc=$new['showc'];
$shcon=$new['shcon'];
$shelp=$new['shelp'];
$splan= $new['splan'];
$syes = $new['syes'];
$srem= $new['srem'];
$volid= $new['volid'];
$sid=$new['sid'];

$q6="select * from user where uid='$volid'";
$r6=mysql_query($q6) or die("vo member ERROR");

$new2=mysql_fetch_array($r6);
$vfname=$new2['fname'];
$vlname=$new2['lname'];

$q7="select * from user where uid='$sid'";
$r7=mysql_query($q7) or die("s member ERROR");

$new3=mysql_fetch_array($r7);
$sfname=$new3['fname'];
$slname=$new3['lname'];


echo '
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<style type="text/css">
<!--
.style3 {font-size: 13px;
color: #0066CC;

}
-->
</style>
<div align="center"><h3>Stakeholder '.$sname.'</h3></div>';


echo '<fieldset title="'.$sname.'">
           <table>
 

   <tr>
    <td ><div align="right"><strong><span class="style3">Name(Individual/ Corporate)</span> </div></td>
	<td> : </td>
    <td width="100">'.$sname.' </td>
  </tr>
  <tr>
  <td></br></td><td></td><td></td>
  </tr>
       <tr>
    <td width="100"><div align="right"><strong><span class="style3">Contact Number</span> </div></td>
	<td> : </td>
    <td>'.$scno.'</td>
  </tr>
     </tr>
  <tr>
  <td></br></td><td></td><td></td>
  </tr>
     <tr>
    <td width="100"><div align="right"><strong><span class="style3">Postal Address</span> </div></td>
	<td> : </td>
    <td>'.$spadrs.'</td>
  </tr>
    </tr>
  <tr>
  <td></br></td><td></td><td></td>
  </tr>
      <tr>
   <td> <div align="right"><strong><span class="style3">E-mail</div></td>
	<td> : </td>
    <td>'.$semail.'
   </td>
           </tr>		
		     </tr>
  <tr>
  <td></br></td><td></td><td></td>
  </tr>
		    <tr>
   <td> <div align="right"><strong><span class="style3">Contact Date</div></td>
	<td> : </td>
    <td>'.$sdate.'
   </td>
           </tr>
		     </tr>
  <tr>
  <td></br></td><td></td><td></td>
  </tr>
		   		    <tr>
   <td> <div align="right"><strong><span class="style3">Age</div></td>
	<td> : </td>
    <td>'.$sage.'
   </td>
           </tr>
		     </tr>
  <tr>
  <td></br></td><td></td><td></td>
  </tr>
		      <tr>
   <td><div align="right" class="style3"><strong>Gender </div></td>
	<td> : </td>
    <td>'.$sgender.'</td>
   </tr>
     </tr>
  <tr>
  <td></br></td><td></td><td></td>
  </tr>
		   		    <tr>
   <td> <div align="right"><strong><span class="style3">Nationality</div></td>
	<td> : </td>
    <td>'.$snat.' 
   </td>
           </tr>
		     </tr>
  <tr>
  <td></br></td><td></td><td></td>
  </tr>
		   
		   		    <tr>
   <td> <div align="right"><strong><span class="style3">No of books donated</div></td>
	<td> : </td>
    <td>'.$sbook.'
   </td>
           </tr>
		     </tr>
  <tr>
  <td></br></td><td></td><td></td>
  </tr>
		   		    <tr>
   <td> <div align="right"><strong><span class="style3">How much donated</div></td>
	<td> : </td>
    <td>'.$showc.'
   </td>
           </tr>
		     </tr>
  <tr>
  <td></br></td><td></td><td></td>
  </tr>
		      		   		    <tr>
   <td> <div align="right"><strong><span class="style3">How we got the contact </div></td>
	<td> : </td>
    <td>'.$shcon.'
   </td>
           </tr>
		     </tr>
  <tr>
  <td></br></td><td></td><td></td>
  </tr>
		   		      		   		    <tr>
   <td  width="200"> <div align="right"><strong><span class="style3">How does He/She/Company help IMCD</div></td>
	<td> : </td>
    <td>'.$shelp.'
   </td>
           </tr>
		     </tr>
  <tr>
  <td></br></td><td></td><td></td>
  </tr>
		   	<tr>
   <td  width="300"> <div align="right"><strong><span class="style3">Does he/she/company planning to help IMCD in the future</div></td>
	<td> : </td>
    <td>'.$splan.'
   </td>
		         <tr>
				   </tr>
  <tr>
  <td></br></td><td></td><td></td>
  </tr>
				 		   	<tr>
   <td> <div align="right"><strong><span class="style3">If "yes" how </div></td>
	<td> : </td>
    <td>'.$syes.'
   </td></tr>
     </tr>
  <tr>
  <td></br></td><td></td><td></td>
  </tr>
		         <tr>
   <td> <div align="right"><strong><span class="style3">Remarks</div></td>
	<td> : </td>
    <td>'.$srem.'
   </td>
           </tr>

  </table>

<form action="editstake.php" method="post">
<input title="Edit stakeholder details" type="image" src="../pictures/edit.png" width="100" height="100" >
<input type="hidden" name="stid" value="'.$stid.'" />
</form>

<form action="loginfo.php" method="post">
<h4>Stakeholder Added By <input type="submit" value="'.$vfname.' '.$vlname.'" /> </h4>
<input type="hidden" name="uid" value="'.$volid.'" />
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
if($utype=='admin'){
echo '
<form action="allstake.php" method="post">
<input title="Back to Pending Donations" type="image" src="../pictures/back.png" width="100" height="100">
</form>';
}else{
echo '

<form action="mystake.php" method="post">
<input title="Back to Pending Donations" type="image" src="../pictures/back.png" width="100" height="100">
</form>';
}
echo '
</fieldset>';



include('incu/footer.php');?>
