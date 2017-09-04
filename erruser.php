<?php include('inc/header.php'); ?>
          
	
          
              
                <div align="center">
	
                  
				 
	              
	              <fieldset><strong><img align="right" src="pictures/error2.png" /></strong><br/><strong><span style="color: #FF0000">Your login is not approved yet or Error in username/password. <br>Contact one of the IMCD Adminstrators for approving your member request !</span></strong>
	      <br/>
		  <br/>
	      <table>
	      </br><form action="checklogin.php" method="post">
	      <tr>Username</tr>
		  <tr> : </tr>
	      <tr> <input type="text" name="usname"></tr>
	      </br></br>
	      <tr>Password</tr>
		  <tr> : </tr>
	      <tr><input type="password" name="psword"></tr>
	      </br></br>
	      <tr><input type="submit" value="Sign In"></form></tr>
	      </table>
	      </fieidset>
	      </div>
	      <?php include('hitcount.php'); ?>
                  <?php include('inc/footer.php'); ?>