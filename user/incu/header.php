<?php
include('../sess.php');
?>
<html>
<head>
<link rel="icon" href="../pictures/im.ico" type="image/x-icon" /> 
<link rel="shortcut icon" href="../pictures/im.ico" type="image/x-icon" /> 
<title><?php echo $f_name." ".$l_name; ?></title>
<meta http-equiv="Content-Type" content="text/html;">
<link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body bgcolor="#ffffff" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="100%" border="0" cellspacing="0" cellpadding="0" height="100%">
  <tr> 
    <td bgcolor="#395080" height="50" valign="top"> 
      <table width="100%" border="0" cellspacing="0" cellpadding="0" height="100%">
        <tr> 
          <td width="50%" valign="top"><a href="index.php" class="menutext"> <img name="companyname" src="images/companyname.jpg" width="247" height="50" border="0"></a></td>
          <td width="50%" valign="top">
            <table width="100%" border="0" cellspacing="0" cellpadding="15">
              <tr> 
                <td valign="top" align="right" class="menutext"> 
				<?php echo gmdate("F d, Y | l");?>
				</td>
              </tr>
            </table>
		 </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr> 
    <td height="98" valign="top"> 
      <table width="100%" border="0" cellspacing="0" cellpadding="0" height="100%">
        <tr> 
          <td valign="top" width="82%"> 
            <table width="100%" border="0" cellspacing="0" cellpadding="0" height="100%">
              <tr bgcolor="#EAEBE4"> 
                <td height="73" valign="top" bgcolor="#EAEBE4"><img src="images/spacer.gif" width="1" height="73"></td>
                <td>&nbsp;</td>
              </tr>
              <tr> 
                <td height="25" bgcolor="#395080" class="menutext" nowrap width="100%">
				
				<ul id="menu">
    <li><a href="../user/myinfo.php" class="menutext"><?php echo $f_name." ".$l_name; ?></a></li>
    <li><a href="pe_don.php" class="menutext">Book Donations</a>
        <ul>
            <li><a href="donations.php" class="menutext"><img src="images/square.jpg" width="7" height="7"> &nbsp;&nbsp;Add New Donation</a></li>
            <li><a href="../user/pe_don.php" class="menutext"><img src="images/square.jpg" width="7" height="7"> &nbsp;&nbsp;Pending Donations</a></li>
            <li><a href="complete_donations.php" class="menutext"><img src="images/square.jpg" width="7" height="7"> &nbsp;&nbsp;Completed Donations</a></li>
        </ul>
    </li>
	
	    <li><a href="#" class="menutext">Stakeholders</a>
        <ul>
            <li><a href="adstake.php" class="menutext"><img src="images/square.jpg" width="7" height="7"> &nbsp;&nbsp;Add New Stakeholder Details</a></li>
			<li><a href="mystake.php" class="menutext"><img src="images/square.jpg" width="7" height="7"> &nbsp;&nbsp;Stakeholders Added by me </a></li>
            
        </ul>
    </li>
    
     <li><a href="forum.php" class="menutext">Member Forum</a>
        <ul>
            <li><a href="Current projects & processes.php" class="menutext"><img src="images/square.jpg" width="7" height="7"> &nbsp;&nbsp;Current projects & processes</a></li>
			<li><a href="New projects.php" class="menutext"><img src="images/square.jpg" width="7" height="7"> &nbsp;&nbsp;New projects </a></li>
            <li><a href="ER & stake holder management.php" class="menutext"><img src="images/square.jpg" width="7" height="7"> &nbsp;&nbsp;ER & stake holder management </a></li>
			<li><a href="Marketing & promotions.php" class="menutext"><img src="images/square.jpg" width="7" height="7"> &nbsp;&nbsp;Marketing & promotions </a></li>
			<li><a href="Brand development & management.php" class="menutext"><img src="images/square.jpg" width="7" height="7"> &nbsp;&nbsp;Brand development & management </a></li>
			<li><a href="Member learning & development.php" class="menutext"><img src="images/square.jpg" width="7" height="7"> &nbsp;&nbsp;Member learning & development </a></li>
			<li><a href="HR & Team structure.php" class="menutext"><img src="images/square.jpg" width="7" height="7"> &nbsp;&nbsp;HR & Team structure </a></li>
			<li><a href="Logistics.php" class="menutext"><img src="images/square.jpg" width="7" height="7"> &nbsp;&nbsp;Logistics </a></li>
			<li><a href="Other.php" class="menutext"><img src="images/square.jpg" width="7" height="7"> &nbsp;&nbsp;Other </a></li>
			<li><a href="Complaints.php" class="menutext"><img src="images/square.jpg" width="7" height="7"> &nbsp;&nbsp;Complaints </a></li>
        </ul>
    </li>
    
	<?php
	if($utype=='admin'){
	echo '
	
		    <li><a href="#" class="menutext">Admin Tasks</a>
        <ul>
            <li><a href="request.php" class="menutext"><img src="images/square.jpg" width="7" height="7"> &nbsp;&nbsp;Pending Member Requests</a></li>
			<li><a href="allstake.php" class="menutext"><img src="images/square.jpg" width="7" height="7"> &nbsp;&nbsp;All Stakeholders</a></li>
            
        </ul>
    </li>
	
	';
	}
	?>
    <li><a href="../user/logout.php" class="menutext">Logout</a>

    </li>

</ul>
				
				 </td>
                <td height="25" width="22" valign="bottom"><img name="triangle1" src="images/triangle1.jpg" width="22" height="25" border="0"></td>
              </tr>
            </table>
          </td>
          <td valign="top" align="right" width="340"><img name="graphic1" src="images/graphic1.jpg" width="340" height="98" border="0"></td>
        </tr>
      </table>
    </td>
  </tr>
  <tr> 
    <td height="72%" valign="top"> 
      <table width="70%" border="0" cellspacing="0" cellpadding="0" height="100%">
        <tr>
          <td valign="top" width="152" bgcolor="#395080"> 
            <table width="152" border="0" cellspacing="0" cellpadding="0" height="100%">
              <tr> 
                <td width="152" bgcolor="#395080" height="140" valign="top"><a href="../user/photo.php"><img border="4" name="user" src="<?php echo $photo; ?>" width="160" height="120"/></a></td>
              </tr>
              <tr> 
                <td valign="top" bgcolor="#395080"> 
                  <table width="100%" border="0" cellspacing="0" cellpadding="3" height="300">
                    <tr> 
                      <td width="10" align="right"><img src="images/square.jpg" width="7" height="7"></td>
                      <td nowrap class="menutext"><a href="../user/photo.php" class="menutext">Change Photo</a></td>
                    </tr>
					<tr> 
                      <td width="10" align="right"><img src="images/square.jpg" width="7" height="7"></td>
                      <td class="menutext"><a href="../user/myinfo.php" class="menutext">My Information</a></td>
                    </tr>
                    <tr> 
                      <td width="10" align="right"><img src="images/square.jpg" width="7" height="7"></td>
                      <td class="menutext"><a href="../user/editset.php" class="menutext">Account Settings</a></td>
                    </tr>
                    <tr> 
                      <td width="10" align="right"><img src="images/square.jpg" width="7" height="7"></td>
                      <td class="menutext"><a href="editme.php" class="menutext">Edit My Info</a></td>
                    </tr>
				<!--	<tr> 
                      <td width="10" align="right"><img src="images/square.jpg" width="7" height="7"></td>
                      <td class="menutext"><a href="yon.php" class="menutext">Delete My Profile</a></td>
                    </tr> -->
					<tr>
					</tr>
					<tr>
					</tr>
					<tr>
					<td width="10" align="right"><img src="images/square.jpg" width="7" height="7"></td>
                      <td class="menutext">
					<a href="../user/logall.php" class="menutext">Search Members</a><form action="logall.php" method="post"><input type="text" name="sch" size="15"></form></td>
					</tr>

                   
                  </table>
                </td>
              </tr>
            </table>
          </td>
		   <td valign="top" width="85%"> 
            <table width="100%" border="0" cellspacing="0" cellpadding="20" height="100%">
              <tr> 
                <td valign="top" height="420" class="text">