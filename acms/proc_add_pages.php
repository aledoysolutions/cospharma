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

    
    $page = $_POST['page'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $banner_image = $_POST['banner_image'];
    $video_url = $_POST['video_url'];
    

    if($title == '' || $content == '')
    {
        $error = 'All information are required !!!';
        include ('add_pages.php');
        exit;
    }


        // banner image
        $file = $title.'_'.$_FILES['banner_image']['name'];
        $file_loc = $_FILES['banner_image']['tmp_name'];
        $file_size = $_FILES['banner_image']['size'];
        $file_type = $_FILES['banner_image']['type'];
        $folder="upload/";
       //file size
        // $new_size = $file_size/1024;  

        $new_file_name = strtolower($file);

        $file_ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));

        
        if($file_ext == 'jpg' || $file_ext == 'png' || $file_ext == 'JPG' || $file_ext == 'PNG' || $file_ext == 'jpeg'  || $file_ext == 'JPEG' || $file_ext == 'GIF' || $file_ext == 'gif')
        {
            $banner_image = str_replace(' ',' ',$new_file_name);
            move_uploaded_file($file_loc, $folder. $banner_image);
        }
        else 
        {
            $error = "Please reupload your banner image, the ony accepted file format is JPG, jpg, JPEG, jpeg, PNG, png, GIF, gif";
            include ('add_pages.php');
            exit;
        }
    // image ends here 

    // video_url
    $file = $title.'_'.$_FILES['video_url']['name'];
    $file_loc = $_FILES['video_url']['tmp_name'];
    $file_size = $_FILES['video_url']['size'];
    $file_type = $_FILES['video_url']['type'];
    $folder="upload/";
    // $new_size = $file_size/1024;  

    $new_file_name = strtolower($file);

    $file_ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));

    // if ($new_size > 1550) {
    //     $error = "Sorry, your image 2 file is too large, the required file size is 1.5mb below";
    //     include ('add_products.php');
    //     exit;
    // }
    
    if($file_ext == 'jpg' || $file_ext == 'png')
    {
        $video_url = str_replace(' ',' ',$new_file_name);
        move_uploaded_file($file_loc, $folder. $video_url);
    }
    else 
    {
        $error = "Please re upload your video , the ony accepted file format is MP4, mp4";
        include ('add_pages.php');
        exit;
    }
// video url ends here 


    $query = "insert into pages(page, title, content, banner_image, video_url) 
    values('$page','$title', '$content', '$banner_image', '$video_url')";
    

    $result = mysqli_query($db,$query);
    if($result)
    {
        $success = 'Page has been added successfully';
        include ('add_pages.php');
        exit;
        
    }
    else{
        $error = 'Sorry, page cannot be added at this time, make sure all information are entered correctly';
        include ('add_pages.php');
        exit;
    }
    

?>