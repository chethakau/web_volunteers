<?php

$host="localhost";
$user="imcdsorg_vol";
$pass="needy123readers";
$db="imcdsorg_imcdvol";

$connect=mysql_connect($host,$user,$pass) or die ("Unable to connect MysqlServer ");
mysql_select_db($db) or die ("Unable to connect database");

?>