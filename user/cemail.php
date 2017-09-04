<?php
$to="chethakau@gmail.com";
$emailfr="needyreaders@imcds.org";
$headers = "From: $emailfr";
$headers .= "Content-type: text/html";
$subject22="Thank you mail";
$message = "<html><head></head><body>";
$message .= "<img src='../pictures/logo.png' alt='logo' width='200' height='200' /></body></html>";



mail($to, $subject22, $message, $headers);
echo $message;
?>