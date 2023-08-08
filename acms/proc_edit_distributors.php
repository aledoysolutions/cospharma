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


    
    $title = $_POST['title'];
    $sub_title = $_POST['sub_title'];
    $content = $_POST['content'];
    $region = $_POST['region'];

    $id = $_POST['id'];


    if($title == '' || $content == '' ||  $region == '')
    {
        $error = 'All information are required !!!';
        include ('edit_distributors.php');
        exit;
    }


    $query = "update distributors set title = '$title', sub_title = '$sub_title', content = '$content', region = '$region' where id = '$id'"; 
    
    $result = mysqli_query($db,$query);
    if($result)
    {
        $success = 'Distributor has been edited successfully';
        include ('edit_distributors.php');
        exit;
        
    }
    else{
        $error = 'Sorry, distributor cannot be editied at this time, make sure all information are entered correctly';
        include ('edit_distributors.php');
        exit;
    }
    

?>