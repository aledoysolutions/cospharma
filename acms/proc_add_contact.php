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


    if($address == '' || $phone == '' || $phone_2 == '' ||  $email == '')
    {
        $error = 'All information are required !!!';
        include ('add_contact.php');
        exit;
    }

    $email = filter_var($_POST['email']);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $error = "Invalid email format !!!";
        include('add_contact.php');
        exit;
    }


    $query = "insert into contact_details (address, phone, phone_2, email) 
    values ('$address', '$phone', '$phone_2', '$email')";
    

    $result = mysqli_query($db,$query);
    if($result)
    {
        $success = 'Contact has been added successfully';
        include ('add_contact.php');
        exit;
        
    }
    else{
        $error ='Sorry, contact cannot be added at this time, make sure all information are entered correctly';
        include ('add_contact.php');
        exit;
    }
    

?>