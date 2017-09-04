<?php
include('../sess.php');
$target_path="photo/";
if($_FILES['up']['error']>0)
{

include('errphoto.php');
exit();
	  
}

if(file_exists($target_path.$_FILES['up']['name']))
{

include('errphoto.php');
exit();
}

else{

$target_path=$target_path.$_FILES['up']['name'];
$url="photo/".$_FILES['up']['name'];
if(move_uploaded_file($_FILES['up']['tmp_name'],$target_path))
{

$tb_name="user";



$query="update $tb_name set mname='".$url."' where uname='".$name."'";
$result=mysql_query($query);	
if($result!=1){
echo "Query Fails";
echo $mail;}
else {

include('../user/index.php');
	  exit();

}

}


else{
include('errphoto.php');
exit();
}





	
	 

}

			
			
			
			?>
  
?>