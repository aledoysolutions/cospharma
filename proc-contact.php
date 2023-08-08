<?php

header("X-XSS-Protection: 0");

$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');

$to = 'info@cospharma.com.ng';
$from = "From: noreply@cospharma.com.ng";

$subject = "Inquiry";

$content = 'Name: '.$name."\n"
.'Email: '.$email."\n"
.'Message: '.$message."\n";

mail($to,$subject,$content,$from);


$msg = 'Thank you for contacting Cospharma Limited, a representative will get in touch as soon as possible.';
include('contact.php');
exit;


?>