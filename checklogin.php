<?php
include('server.php');
session_start();

$username=$_POST['usname'];
$password=$_POST['psword'];

$user="user";
$query="select * from $user where uname='".$username."' and status='aprov'";
$result=mysql_query($query);

while($new=mysql_fetch_array($result)){
$u_name=$new['uname'];
$p_word=$new['pword'];
$first=$new['fname'];
$last=$new['lname'];
$uid=$new['uid'];
session_start();
$_SESSION['fuser']=$username;
$_SESSION['mulnama']=$first;
$_SESSION['aganama']=$last;
$_SESSION['uid']=$uid;
$_SESSION['pass']=$password;

}

if ($username=='' && $password==''){
header("Location: erruser.php");

}
/*
else if ($username=='admin' && $password=='admin'){
	include('admin/admin.php');
	}*/
	else if(sha1($password)!=$p_word){

header("Location: erruser.php");

}
	else if(sha1($password)==$p_word){
	header("Location: user/myinfo.php");
	
	}
	
	else {
	header("Location: erruser.php");
}


?>