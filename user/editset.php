<?php 
include('incu/header.php');?>
 
<div align="center">
	     			
	<fieldset>
    <legend align="center"><h2>Edit Your Account</h2></legend><br/>
	<img align="right" alt="informations" src="../pictures/settings.png"/>
			<form action="sett.php" method="post">
           <table width="484" border="0" cellspacing="5" cellpadding="0">
  <tr>
    <td><div align="right"><span style="color: #FF0000">*</span><span style="color: #660066; font-weight: bold">Username</span></div></td>
	<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
    <td><div align="left"><input type="text" name="username" id="username" size="30" value="<?php echo $name;?>"/>
    </div></td>
  </tr>
  <tr>
  <tr>
    <td><div align="right"><span style="color: #FF0000">*</span><span style="color: #660066; font-weight: bold">Old Password</span></div></td>
	<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
    <td><div align="left"><input type="password" name="old" id="old" size="30"/>
    </div></td>
  </tr>
  <tr>
    <td><div align="right"><span style="color: #FF0000">*</span><span style="color: #660066; font-weight: bold">New Password</span></div></td>
	<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
    <td><div align="left"><input name="new" type="password" id="new" size="30"/>
     </div></td>
  </tr>
  
  	
  <tr>   <td><div align="right"><span style="color: #FF0000">*</span><span style="color: #660066; font-weight: bold">Confirm</span></div></td>
  <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
   <td><div align="justify"><input name="conew" type="password" id="conew" size="30"/>
   		  </div>
   </td>
   </tr>
   <tr>
    <td><div align="right"><span style="color: #FF0000">*</span><span style="color: #660066; font-weight: bold">Email</span></div></td>
	<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
    <td><div align="left"><input type="text" name="mail" id="mail" value="<?php echo $mail;?>" size="30"/>
    </div></td>
  </tr>
         
</table><br/>
<span style="color: #FF0000">*</span><span style="color: #0000FF">Every boxes should be filled for Update...!</span>
		  <input type="submit" value="Update Settings" name="upacc" />
		  </form>
</fieldset>
  
		
	  </div>
	
<?php 
include('incu/footer.php');
?>

