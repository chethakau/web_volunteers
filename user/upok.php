<?php
include('incu/header.php'); ?>
<div align="center">
<fieldset>

<legend align="center">
<h2>My Infromation</h2>
</legend> <br/>

<img align="right" src="../pictures/ok1.png" width="96" height="96" />
<span style="color: #009900; font-weight: bold">Update completed successfully...!</span><br/>
<br/>
<table><tr><td><span style="font-family: Georgia, &quot;Times New Roman&quot;, Times, serif; color: #000099; font-weight: bold">Full Name</span></td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td><td><span style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: #990000"><?PHP echo $f_name." ".$l_name;?></span></td></tr>
<tr><td><span style="font-family: Georgia, &quot;Times New Roman&quot;, Times, serif; color: #000099; font-weight: bold">Date of Birth</span></td>
<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td><td><span style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: #990000"><?PHP echo $birth;?></span></td></tr>
<tr><td><span style="font-family: Georgia, &quot;Times New Roman&quot;, Times, serif; color: #000099; font-weight: bold">Area/Town</span></td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td><td><span style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: #990000"><?PHP echo $town;?></span></td></tr>
<tr><td><span style="font-family: Georgia, &quot;Times New Roman&quot;, Times, serif; color: #000099; font-weight: bold">Country</span></td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td><td><span style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: #990000"><?PHP echo $rata;?></span></td></tr>
<tr><td><span style="font-family: Georgia, &quot;Times New Roman&quot;, Times, serif; color: #000099; font-weight: bold">Gender</span></td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td><td><span style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: #990000"><?PHP echo $gen;?></span></td></tr>
<tr><td><span style="font-family: Georgia, &quot;Times New Roman&quot;, Times, serif; color: #000099; font-weight: bold">Telephone No</span></td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td><td><span style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: #990000"><?PHP echo $tp;?></span></td></tr>
<tr><td><span style="font-family: Georgia, &quot;Times New Roman&quot;, Times, serif; color: #000099; font-weight: bold">Email</span></td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td><td><span style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: #990000"><?PHP echo $mail;?></span></td></tr>
<tr></tr></table><br/>

</div></fieldset>

<?php include('incu/footer.php'); ?>