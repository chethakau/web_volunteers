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



<div align="center"><h3> IMCD Volunteers Forum - Space for Your Ideas</h3></div>

<div id="wrapper">
  

<img align="right" alt="informations" src="../pictures/info.png" width="48" height="48" />
  
<div id="content">
<div class="entry">
<div class="entry-title style4" align="center">
	     			<div class="entry-title style4">
                     <div><br>
          </div></div>
          <form  name="form1" action="getforum.php" method="post">
	<fieldset>
    <legend align="center" style="color: #0033FF"><span style="font-family: &quot;Times New Roman&quot;, Times, serif">New Forum Topic</span></legend>
			
           <table width="484" border="0" cellspacing="5" cellpadding="0">
  <tr>
    <td width="183"><div align="right"><span class="style3">Catagory</span> </div></td>
    <td width="290"><div align="left"> <select name="catg" id="catg" >
     <option selected="selected">Current projects & processes</option>
     <option>New projects</option>
	 <option>ER & stake holder management</option>
	 <option>Marketing & promotions</option>
	 <option>Brand development & management</option>
	 <option>Member learning & development</option>
	 <option>HR & Team structure</option>
	 <option>Logistics</option>
	 <option>Other</option>
	 <option>Complaints</option>
      </select>
    </div></td>
  </tr>
  
       <tr>
    <td width="183"><div align="right"><span class="style3">Subject</span> </div></td>
    <td width="290"><div align="left"> <input type="text" name="subj" id="subj" size="30"/>
   </div></td>
  </tr>
		   
		         <tr>
   <td> </td>
   <td><div align="left"><textarea cols="75" rows="15" name="idea"></textarea>
   <br /><span class="style1" id="idea"></span></div>
   </td>
           </tr>
		   
          </table>

   <div align="center">
   <input name="submit" type="submit" id="submit" value="Submit" />
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

