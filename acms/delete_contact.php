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


    $id = $_GET['id'];

    $query = "delete from contact_details where id = '$id'";
    $result = mysqli_query($db, $query);

    if($result)
    {
        $success = "Contact has been deleted";
        include ('contact_details.php');
        exit;
    }
    else
    {
        $error = "Contact cannot be deleted at this time, try again";
        include ('contact_details.php');
        exit;

    }
?>