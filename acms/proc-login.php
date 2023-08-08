<?php
session_start();
include('connection/connect.php');

$username = mysqli_real_escape_string($db, $_POST['username']);
$password = mysqli_real_escape_string($db, $_POST['password']);

if (!$username || !$password)
{
$error = 'Enter credentials before you login';
 include('index.php');
 exit;
}


$query = "select * from login where
              username = '$username' and
              password = '$password'";

    $result = mysqli_query($db,  $query );
    $num = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);
    if(!$result)
    {
      echo 'Cannot run query.';
      exit;
    }

    if ( $num > 0 )
    {
    
    
    // Generate Otp and send to user
    
    $_SESSION['otp_cos_email'] = $row['email'];
    $_SESSION['otp_cos_user_name'] = $row['username'];

    $code = rand(1000,600);
    $char = array(''.substr($row['username'], 0, 2));
    $a_char = strtoupper($char[0]);
    $username_code = $a_char.$code;

    $_SESSION['otp_cos_code'] = $username_code;

    $subject = "One Time Password";
    $message = "Hello ".$row['username'].", kindly use this code <b>$username_code</b> to sign in";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: <From: noreply@cospharma.com>' . "\r\n";

    mail($row['email'],$subject,$message,$headers); 

   // Generate Otp and send to user
	
	
      header('location: access.php?otp=sent');
    }
    else
    {
      // visitor's name and password combination are not correct
    $error = 'Login failed - Please try again';
    include('index.php');
    }

?>