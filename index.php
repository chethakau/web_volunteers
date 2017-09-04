<?php include('inc/header.php'); ?>



          <div align="center">
		  <br>
	            <h2>  Welcome IMCD Members. Please <a href="signup.php" class="mlinks">Sign Up</a> with your deatils to use the system.  </h2>
				<br>
	              <fieldset><strong><img align="right" width="72" height="72" src="pictures/imcd-logo.png" /></strong><br/><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Already have an account, please Sign In !</strong>
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
	      <tr><input type="submit" value="Sign In"></form></tr><tr>&nbsp;&nbsp;</tr>
		        <tr><form action="signup.php" method="post"><input type="submit" value="Sign Up"></form></tr>
	      </table>
	      <h2 class="mlinks">If you already registerd and can't sign in, please inform one of IMCD adminstrators for approving your request.</h2>
	      </fieidset>
		  </div>
		  <?php include('hitcount.php'); ?>
		  
                  <?php include('inc/footer.php'); ?>