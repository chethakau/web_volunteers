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
<div align="center"><h3>Stakeholders added by '.$f_name.' '.$l_name.'</h3></div>';
$q5="select * from stake where volid='$loggeduser'";
$r5=mysql_query($q5) or die("My stake ERROR");

while($new=mysql_fetch_array($r5)){

$sname=$new['sname'];
$stid=$new['stid'];

$count=$count+1;
echo $count;

echo '<fieldset title="'.$sname.'">
	
           <table>
  <tr>
    <td><div align="right"><span class="style3">Name(Individual/ Corporate) :</span> </div></td>
    <td width="290">'.$sname.'</td>
	<td>
	  	<form action="stakeinfo.php" method="post">
<input title="More Details" type="image" src="../pictures/more.png" width="100" height="100">
<input type="hidden" name="stid" value="'.$stid.'" />
</form>
	</td>

  </tr>

  </table>


</fieldset>';

}
echo "No more stakeholders added by you !";


include('incu/footer.php');?>
