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


echo '
<script type="text/javascript">
function confirm_delete() {
  return confirm("Save stakeholder details? ");
}
</script>
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
<form action="savestake.php" method="post">
           <table>
 

   <tr>
    <td ><div align="right"><strong><span class="style3">Name(Individual/ Corporate)</span> </div></td>
	<td> : </td>
    <td width="100"><input type="text" name="sname" id="sname" value="'.$sname.'"/> </td>
  </tr>
  <tr>
  <td></br></td><td></td><td></td>
  </tr>
       <tr>
    <td width="100"><div align="right"><strong><span class="style3">Contact Number</span> </div></td>
	<td> : </td>
    <td><input type="text" name="scno" id="scno" value="'.$scno.'"/></td>
  </tr>
     </tr>
  <tr>
  <td></br></td><td></td><td></td>
  </tr>
     <tr>
    <td width="100"><div align="right"><strong><span class="style3">Postal Address</span> </div></td>
	<td> : </td>
    <td><textarea cols="30" rows="3" name="spadrs">'.$spadrs.'</textarea></td>
  </tr>
    </tr>
  <tr>
  <td></br></td><td></td><td></td>
  </tr>
      <tr>
   <td> <div align="right"><strong><span class="style3">E-mail</div></td>
	<td> : </td>
    <td><input name="semail" id="semail" type="text" value="'.$semail.'"/>
   </td>
           </tr>		
		     </tr>
  <tr>
  <td></br></td><td></td><td></td>
  </tr>
		    <tr>
   <td> <div align="right"><strong><span class="style3">Contact Date</div></td>
	<td> : </td>
    <td><input name="sdate" id="sdate" type="text" value="'.$sdate.'"/>
   </td>
           </tr>
		     </tr>
  <tr>
  <td></br></td><td></td><td></td>
  </tr>
		   		    <tr>
   <td> <div align="right"><strong><span class="style3">Age</div></td>
	<td> : </td>
    <td><input name="sage" id="sage" type="text" value="'.$sage.'"/>
   </td>
           </tr>
		     </tr>
  <tr>
  <td></br></td><td></td><td></td>
  </tr>
		      <tr>
   <td><div align="right" class="style3"><strong>Gender </div></td>
	<td> : </td>
    <td><input name="sgender" id="sgender" type="text" value="'.$sgender.'"/></td>
   </tr>
     </tr>
  <tr>
  <td></br></td><td></td><td></td>
  </tr>
		   		    <tr>
   <td> <div align="right"><strong><span class="style3">Nationality</div></td>
	<td> : </td>
    <td><input name="snat" id="snat" type="text" value="'.$snat.' "/>
   </td>
           </tr>
		     </tr>
  <tr>
  <td></br></td><td></td><td></td>
  </tr>
		   
		   		    <tr>
   <td> <div align="right"><strong><span class="style3">No of books donated</div></td>
	<td> : </td>
    <td><input name="sbook" id="sbook" type="text" value="'.$sbook.'"/>
   </td>
           </tr>
		     </tr>
  <tr>
  <td></br></td><td></td><td></td>
  </tr>
		   		    <tr>
   <td> <div align="right"><strong><span class="style3">How much donated</div></td>
	<td> : </td>
    <td><input name="showc" id="showc" type="text" value="'.$showc.'"/>
   </td>
           </tr>
		     </tr>
  <tr>
  <td></br></td><td></td><td></td>
  </tr>
		      		   		    <tr>
   <td> <div align="right"><strong><span class="style3">How we got the contact </div></td>
	<td> : </td>
    <td><textarea cols="30" rows="3" name="shcon">'.$shcon.'</textarea>
   </td>
           </tr>
		     </tr>
  <tr>
  <td></br></td><td></td><td></td>
  </tr>
		   		      		   		    <tr>
   <td  width="200"> <div align="right"><strong><span class="style3">How does He/She/Company help IMCD</div></td>
	<td> : </td>
    <td><textarea cols="30" rows="3" name="shelp">'.$shelp.'</textarea>
   </td>
           </tr>
		     </tr>
  <tr>
  <td></br></td><td></td><td></td>
  </tr>
		   	<tr>
   <td  width="300"> <div align="right"><strong><span class="style3">Does he/she/company planning to help IMCD in the future</div></td>
	<td> : </td>
    <td><textarea cols="30" rows="3" name="splan">'.$splan.'</textarea>
   </td>
		         <tr>
				   </tr>
  <tr>
  <td></br></td><td></td><td></td>
  </tr>
				 		   	<tr>
   <td> <div align="right"><strong><span class="style3">If "yes" how </div></td>
	<td> : </td>
    <td><textarea cols="30" rows="3" name="syes">'.$syes.'</textarea>
   </td></tr>
     </tr>
  <tr>
  <td></br></td><td></td><td></td>
  </tr>
		         <tr>
   <td> <div align="right"><strong><span class="style3">Remarks</div></td>
	<td> : </td>
    <td><textarea cols="30" rows="3" name="srem">'.$srem.'</textarea>
   </td>
           </tr>


<tr><td align="right">
<input title="Save new info" type="submit" value="Save details" onclick="return confirm_delete()" >
<input type="hidden" name="stid" value="'.$stid.'" />
<input type="hidden" name="sid" value="'.$loggeduser.'" />
</form></td>
<td>  </td><td align="right">
<form action="stakeinfo.php" method="post">
<input title="Cancel" type="submit" value="Cancel">
<input type="hidden" name="stid" value="'.$stid.'" />
</form></td></tr>
  </table>
</fieldset>';

include('incu/footer.php');?>
