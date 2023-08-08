<?php

$name =     mysqli_real_escape_string($db,$_POST['name']);
$address =  mysqli_real_escape_string($db,$_POST['address']);
$phone =    mysqli_real_escape_string($db,$_POST['phone']);
$email =    mysqli_real_escape_string($db,$_POST['email']);
$textarea = mysqli_real_escape_string($db,$_POST['textarea']);


$from = "From: info@cospharma.com.ng";
$to = "info@cospharma.com.ng";
$subject = 'Order From Website';
$content = 'Name: '.$name."\n"
.'Address: '.$address."\n"
.'Phone: '.$phone."\n"
.'Email: '.$email."\n"
.'Message: '.$textarea."\n";

mail($to,$subject,$content,$from);

$customer_mail = 'Dear '.$name.','."\n\n"
.'Thank you for your order.'."\n\n"
.'You will be contacted shortly by our marketing unit.'."\n\n"
.'Thank you.'."\n\n";

$subject2 = 'Thank you for your Order';
mail($email,$subject2,$customer_mail,$from);

$msg = 'Thank you for your Order';
include('form.php');
exit;


?>