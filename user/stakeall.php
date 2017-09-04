<?php 
include('incu/header.php');
include('../server.php');
if($utype!='admin'){
exit();
}
$word=$_POST['sch'];
echo '
<div align="right"><form action="stakeall.php" method="post"><a href="../user/stakeall.php" class="menucolo">Search</a><input type="text" name="sch" size="15"></form></div>
<div align="center"><h2>Stakeholders</h2></div>';

$qry="select * from stake where sname like '%$word%'";
$resul=mysql_query($qry);
while($new=mysql_fetch_array($resul)){

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
echo "No more stakeholders !";


include('incu/footer.php');?>
