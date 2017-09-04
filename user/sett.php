<?php
if(!filled_out($_POST)){
//echo "You Have not Completed The Form Properly";
include('editset.php');
exit();
}else{
include('../sess.php');
$uname=$_POST['username'];
$old=$_POST['old'];
$new=$_POST['new'];
$conew=$_POST['conew'];
$editmail=$_POST['mail'];
$password=sha1($old);

	if($uname==$name && $password==$chpassword){
		if($new==$conew){
		$newpass=sha1($new);
		$querypass="update user set pword='".$newpass."' where uname='".$name."'";
		$respass=mysql_query($querypass) or die("ERROR");
		
		$querymail="update user set email='".$editmail."' where uname='".$name."'";
		$resmail=mysql_query($querymail) or die("ERROR");
		include('upok.php');
		exit();
		}else{
		include('erredit.php');
		exit();
		}
	}else{
	include('erredit.php');
	exit();
	}

}



function filled_out($formvars){
foreach($formvars as $key=>$value)
{
	if(!isset($key) || ($value==''))
	return false;
}
return true;
}
?>