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

    $query = "delete from home_banner where id = '$id'";
    $result = mysqli_query($db, $query);

    if($result)
    {
        $success = "Home Banner has been deleted";
        include ('home_banner.php');
        exit;
    }
    else
    {
        $error = "Home Banner cannot be deleted at this time, try again";
        include ('home_banner.php');
        exit;

    }
?>