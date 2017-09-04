
<?php
include('../sess.php');
$add=$_POST['mail'];
echo $add;
echo $mail;
$to = $add;
$subject = "Just a test mail";
$message = "Just training on php";
$from = $mail;
/* To send HTML mail, you can set the Content-type header. */
$headers1 = "MIME-Version: 1.0\r\n";
$headers1 .= "Content-type: text/html; charset=iso-8859-1\r\n";

/* additional headers */
$headers1 .= "To: ".$to."\r\n";
$headers1 .= "From: ".$from."\r\n";
$headers1 .= "Reply-To: ".$from."\r\n";


?>
<?php
mail($to, $subject, $message, $headers);
?>