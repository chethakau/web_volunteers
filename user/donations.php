<?php 
include('incu/header.php');?>

<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>

<style type="text/css">
<!--
.style3 {font-size: 14px}
.style4 {
	font-size: 16px;
	color: #000000;
}
.style5 {
	font-size: 14px;
	color: #0066CC;
}
-->
</style>

<div id="wrapper">
  

<img align="right" alt="informations" src="../pictures/info.png" width="48" height="48" />
  
<div id="content">
<div class="entry">
<div class="entry-title style4" align="center">
	     			<div class="entry-title style4">
                     <div><br>
          </div></div>
          <form  name="form1" action="getdon.php" method="post">
	<fieldset>
    <legend align="center" style="color: #0033FF"><span style="font-family: &quot;Times New Roman&quot;, Times, serif">New Book Donor Information</span></legend>
			
           <table width="484" border="0" cellspacing="5" cellpadding="0">
  <tr>
    <td width="183"><div align="right"><span class="style3">Donor's Name</span> </div></td>
    <td width="290"><div align="left"> <input type="text" name="dname" id="dname" size="30"/>
    </div></td>
  </tr>
  
       <tr>
    <td width="183"><div align="right"><span class="style3">Number of Books</span> </div></td>
    <td width="290"><div align="left"> <input type="text" name="nbook" id="nbook" size="30"/>
   </div></td>
  </tr>
   
     <tr>
    <td width="183"><div align="right"><span class="style3">Donor's Area/Town</span> </div></td>
    <td width="290"><div align="left"> <input type="text" name="dtown" id="dtown" size="30"/>
   </div></td>
  </tr>

 <tr>
   <td><div align="right"><span class="style3">Telephone</span></div></td>
   <td><div align="left"><input name="dtele" type="text" size="30" />
   </div></td>
   </tr>
      <tr>
   <td> <div align="right"><span class="style3">E-mail</div></td>
   <td><div align="left"><input name="demail" id="demail" type="text"size="30"/>
   <br /><span class="style1" id="Msg"></span></div>
   </td>
           </tr>		   
		         <tr>
   <td> <div align="right"><span class="style3">Other Info</div></td>
   <td><div align="left"><textarea cols="30" rows="4" name="dinfo"></textarea>
   <br /><span class="style1" id="Msg"></span></div>
   </td>
           </tr>
		   
          </table>

   <div align="center">
   <input name="change" type="submit" id="change" value="submit"/>
  <input name="clear" type="reset" value="Clear"/></div>
  </fieldset>
  </form>
  </p> 
              
                  
      <p></p>
			
	  </div>
	</div>

</div>



<?php 
include('incu/footer.php');
?>

