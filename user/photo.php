<?php 
include('incu/header.php');
?>
<style type="text/css">
<!--
.style1 {color: #FF0000}
.style2 {font-family: "High Tower Text"}
-->
</style>
<br/>
<fieldset><legend align="center">Change your Photo</legend>
<div align="center"><img width="400" height="300" src="<?php echo $photo;?>">
<form enctype="multipart/form-data" action="getph.php" method="post">
<table width="484" border="0" cellspacing="15" cellpadding="0">
  <tr>
    <td width="183"><div align="right"><span class="style2">Choose your Photo</span> <span class="style1">*</span></div></td>
    <td width="256"><input type="file" name="up" id="up" size="30" /></td>
	 
  </tr>
 
  <table>
<tr><td><input type="submit" value="Upload Photo"></td>
</tr>
</table>
  
</table></div>
</fieldset>
<?php include('incu/footer.php');?>