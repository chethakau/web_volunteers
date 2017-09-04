<?php 
include('incu/header.php');?>
 
<div align="center">
	     			
	<fieldset>
    <legend align="center"><h2>Edit Your Information</h2></legend><br/>
	<img align="right" alt="informations" src="../pictures/info.png" width="96" height="96" />
			<form action="editdata.php" method="post">
           <table width="484" border="0" cellspacing="5" cellpadding="0">
  <tr>
    <td width="183"><div align="right"><span style="color: #FF0000">*</span><span style="color: #006600; font-weight: bold">First Name</span></div></td>
	<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
    <td width="290"><div align="left"> <input type="text" name="fname" value="<?php echo $f_name; ?>" id="fname" size="30"/></div></td>
  </tr>
  
  <tr>
    <td><div align="right"><span style="color: #FF0000">*</span><span style="color: #006600; font-weight: bold">Last Name</span></div></td>
	<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
    <td><div align="left"><input name="lname" value="<?php echo $l_name; ?>" type="text" size="30"/></div></td>
  </tr>
  
  <tr>
  	<td><div align="right"><span style="color: #FF0000">*</span><span style="color: #006600; font-weight: bold">Date of Birth</span></div></td>
	<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
    <td><div align="left">
      <input name="dob" value="<?php echo $birth; ?>" type="text" size="30" /></div></td>
   </tr> 
     
	    <tr>
   <td><div align="right"><span style="color: #FF0000">*</span><span style="color: #006600; font-weight: bold">Area/Town</span></div></td>
   <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
   <td><div align="left"><input name="town" value="<?php echo $town; ?>" type="text" size="30" /></div>   </td>
    </tr>
	 
   <tr>
   <td><div align="right"><span style="color: #FF0000">*</span><span style="color: #006600; font-weight: bold">Country</span></div></td>
   <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
   <td><div align="left"><input name="country" value="<?php echo $rata; ?>" type="text" size="30" /></div>   </td>
    </tr>
	
   <tr>
   <td><div align="right"><span style="color: #FF0000">*</span><span style="color: #006600; font-weight: bold">Gender</span> </div></td>
   <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
   <td><div align="left"><input name="gender" value="<?php echo $gen; ?>" type="text" size="30" /></div>   </td>
   </tr>
   <tr>
   <td><div align="right"><span style="color: #FF0000">*</span><span style="color: #006600; font-weight: bold">Telephone</span></span></div></td>
   <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
   <td><div align="left"><input value="<?php echo $tp; ?>" name="telephone" type="text" size="30" />
   </div></td>
   </tr>
      
          </table><br/>
           <span style="color: #FF0000">*</span><span style="color: #0000FF">Every boxes should be filled for Update...!</span>
		  <input type="submit" value="Update Information" name="update" />
		  </form>
</fieldset>
		
	  </div>
	
<?php 
include('incu/footer.php');
?>

