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
    $image = $_POST['image'];
    
    $id = $_POST['id'];
    

    if($title == '')
    {
        $error = 'All information are required !!!';
        include ('edit_home_banner.php');
        exit;
    }

    if($_FILES['image']['name'])
    {
        // banner image
        $file = $title.'_'.$_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder="upload/";
     //file size
        // $new_size = $file_size/1024;  

        $new_file_name = strtolower($file);

        $file_ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));

        
        if($file_ext == 'jpg' || $file_ext == 'png' || $file_ext == 'JPG' || $file_ext == 'PNG' || $file_ext == 'jpeg'  || $file_ext == 'JPEG' || $file_ext == 'GIF' || $file_ext == 'gif')
        {
            $image = str_replace(' ',' ',$new_file_name);
            move_uploaded_file($file_loc, $folder. $image);
        }
        else 
        {
            $error = "Please reupload your banner image, the ony accepted file format is JPG, jpg, JPEG, jpeg, PNG, png, GIF, gif";
            include ('edit_home_banner.php');
            exit;
        }
        
        $query = "update home_banner set image = '$image' where id = '$id'";
        $result = mysqli_query($db,$query);
    } 
    // image ends here 


    $query = "update home_banner set title = '$title' where id = '$id'";
    
    $result = mysqli_query($db,$query);
    if($result)
    {
        $success = 'Home banner has been edited successfully';
        include ('edit_home_banner.php');
        exit;
        
    }
    else{
        $error = 'Sorry, home banner cannot be editied at this time, make sure all information are entered correctly';
        include ('edit_home_banner.php');
        exit;
    }
    

?>