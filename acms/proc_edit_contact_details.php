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


    
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $phone_2 = $_POST['phone_2'];
    $email = $_POST['email'];

    $id = $_POST['id'];


    if($address == '' || $phone == '' || $phone_2 == '' ||  $email == '')
    {
        $error = 'All information are required !!!';
        include ('edit_contact_details.php');
        exit;
    }


    $email = filter_var($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format !!!";
        include ('edit_contact_details.php');
        exit;
    }

    $query = "update contact_details set address = '$address', phone = '$phone', phone_2 = '$phone_2', email = '$email' where id = '$id'";
    
    $result = mysqli_query($db,$query);
    if($result)
    {
        $success = 'Contact detail has been edited successfully';
        include ('edit_contact_details.php');
        exit;
        
    }
    else{
        $error = 'Sorry, contact details cannot be editied at this time, make sure all information are entered correctly';
        include ('edit_contact_details.php');
        exit;
    }
    

?>