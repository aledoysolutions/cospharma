<?php
session_start();
include ('connection/connect.php');

$otp = mysqli_real_escape_string($db, $_POST['otp']);

if(isset($_POST['btn_login']))
{
    if($otp != $_SESSION['otp_cos_code'] )
    {
        $error = "Invalid OTP";
        include('access.php');
        exit;
    }
    else
    {
        $_SESSION['cos_user'] = $_SESSION['otp_cos_user_name'];
        header('location: dashboard.php');
        exit;
    }
}
else
{
   $error = "Access Denied";
   include('index.php');
    exit;
}

?>