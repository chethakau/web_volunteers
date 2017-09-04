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
          <form  name="form1" action="getstake.php" method="post">
	<fieldset>
    <legend align="center" style="color: #0033FF"><span style="font-family: &quot;Times New Roman&quot;, Times, serif">Add New Stakeholder Details</span></legend>
			
           <table width="600" border="0" cellspacing="5" cellpadding="0">
  <tr>
    <td ><div align="left"><span class="style3">Name(Individual/ Corporate)</span> </div></td>
    <td width="290"><div align="left">  : <input type="text" name="sname" id="sname" size="30"/>
    </div></td>
  </tr>
  
       <tr>
    <td width="183"><div align="left"><span class="style3">Contact Number</span> </div></td>
    <td width="290"><div align="left">  : <input type="text" name="scno" id="scno" size="30"/>
   </div></td>
  </tr>
   
     <tr>
    <td width="183"><div align="left"><span class="style3">Postal Address</span> </div></td>
    <td width="290"><div align="left"> : <textarea cols="30" rows="3" name="spadrs"></textarea>
   <br /><span class="style1" id="spadrs"></span>
   </div></td>
  </tr>
      <tr>
   <td> <div align="left"><span class="style3">E-mail</div></td>
   <td><div align="left"> : <input name="semail" id="semail" type="text"size="30"/>
   <br /><span class="style1" id="semail"></span></div>
   </td>
           </tr>		
		   
		    <tr>
   <td> <div align="left"><span class="style3">Contact Date</div></td>
   <td><div align="left"> : <input name="sdate" id="sdate" type="text"size="30"/>
   <br /><span class="style1" id="sdate"></span></div>
   </td>
           </tr>
		   
		   		    <tr>
   <td> <div align="left"><span class="style3">Age</div></td>
   <td><div align="left"> : <input name="sage" id="sage" type="text"size="30"/>
   <br /><span class="style1" id="sage"></span></div>
   </td>
           </tr>
		      <tr>
   <td><div align="left" class="style3">Gender </div></td>
   <td><div align="left"> : <select name="sgender" id="sgender" >
     <option selected="selected">Male</option>
     <option>Female</option>
      </select></div></td>
   </tr>
		   		    <tr>
   <td> <div align="left"><span class="style3">Nationality</div></td>
   <td><div align="left"> : <input name="snat" id="snat" type="text"size="30"/>
   <br /><span class="style1" id="snat"></span></div>
   </td>
           </tr>
		   
		   		    <tr>
   <td> <div align="v"><span class="style3">No of books donated</div></td>
   <td><div align="left"> : <input name="sbook" id="sbook" type="text"size="30"/>
   <br /><span class="style1"></span></div>
   </td>
           </tr>
		   
		   		    <tr>
   <td> <div align="left"><span class="style3">How much donated</div></td>
   <td><div align="left"> : <input name="showc" id="showc" type="text"size="30"/>
   <br /><span class="style1"></span></div>
   </td>
           </tr>
		      		   		    <tr>
   <td> <div align="left"><span class="style3">How we got the contact </div></td>
   <td><div align="left"> : <textarea cols="30" rows="3" name="shcon"></textarea>
   <br /><span class="style1"></span></div>
   </td>
           </tr>
		   		      		   		    <tr>
   <td> <div align="left"><span class="style3">How does He/She/Company help IMCD</div></td>
   <td><div align="left"> : <textarea cols="30" rows="3" name="shelp"></textarea>
   <br /><span class="style1"></span></div>
   </td>
           </tr>
		   	<tr>
   <td> <div align="left"><span class="style3">Does he/she/company planning to help IMCD in the future</div></td>
   <td><div align="left"> : <textarea cols="30" rows="3" name="splan"></textarea>
   <br /><span class="style1"></span></div>
   </td>
		         <tr>
				 		   	<tr>
   <td> <div align="left"><span class="style3">If "yes" how </div></td>
   <td><div align="left"> : <textarea cols="30" rows="3" name="syes"></textarea>
   <br /><span class="style1"></span></div>
   </td>
		         <tr>
   <td> <div align="left"><span class="style3">Remarks</div></td>
   <td><div align="left"> : <textarea cols="30" rows="3" name="srem"></textarea>
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

