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


    if($title == '' || $sub_title == '' || $content == '' ||  $region == '')
    {
        $error = 'All information are required !!!';
        include ('add_distributors.php');
        exit;
    }


    $query = "insert into distributors (title, sub_title, content, region) 
    values ('$title', '$sub_title', '$content', '$region')";
    

    $result = mysqli_query($db,$query);
    if($result)
    {
        $success = 'Distributor has been added successfully';
        include ('add_distributors.php');
        exit;
        
    }
    else{
        $error = 'Sorry, distributor cannot be added at this time, make sure all information are entered correctly';
        include ('add_distributors.php');
        exit;
    }
    

?>