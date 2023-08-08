<?php

session_start();
include ('connection/connect.php');

if(!isset($_SESSION['cos_user']))
{
    include('index.php');
    exit;
}
if(!isset($_SESSION['otp_cos_code']))
{
    $error = "Access Denied";
    include('index.php');
    exit;
}
  
    $cos_user = $_SESSION['cos_user'];
    
    // $password = $_POST['password'];
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    if($old_password == '' || $new_password == '' || $confirm_password == '') 
    {
        $error = "All fields are required";
        include ('change_password.php');
        exit;
    }


    if($new_password != $confirm_password )
    {
        $error = 'Password do not match';
        include ('change_password.php');
        exit;
    }

    

    $sql = "SELECT * from login  WHERE username = '$cos_user' and password = '$old_password'";
    $result = mysqli_query($db, $sql);
    $num = mysqli_num_rows($result);
    if($num > 0)
    {
            $sql_2 = "UPDATE login  SET password ='$new_password' WHERE username='$cos_user'";
            mysqli_query($db, $sql_2);
            $success = "Password Changed Sucessfully";
            include ('change_password.php');
            exit;

    }
    else {
        $error = "Old Password is not correct";
        include('change_password.php');
        exit;
    }


?>

