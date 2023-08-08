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

    $query = "delete from pages where id = '$id'";
    $result = mysqli_query($db, $query);

    if($result)
    {
        $success = "Page has been deleted";
        include ('pages.php');
        exit;
    }
    else
    {
        $error = "Page cannot be deleted at this time, try again";
        include ('pages.php');
        exit;

    }
?>