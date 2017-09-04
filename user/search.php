<?php 

$word="";
include('../server.php');
$query="select * from user where fname like '%$word%'";
$res=mysql_query($query) or die("ERROR");

while($new=mysql_fetch_array($res)){
$rel=$new['fname'];
echo $rel;
}

?>