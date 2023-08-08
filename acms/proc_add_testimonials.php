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
    $content = $_POST['content'];
    $display_picture = $_POST['display_picture'];
    

    if($title == '' || $content == '')
    {
        $error = 'All information are required !!!';
        include ('add_testimonials.php');
        exit;
    }


        // image
        $file = $title.'_'.$_FILES['display_picture']['name'];
        $file_loc = $_FILES['display_picture']['tmp_name'];
        $file_size = $_FILES['display_picture']['size'];
        $file_type = $_FILES['display_picture']['type'];
        $folder="upload/";
       //file size
        $new_size = $file_size/1024;  

        $new_file_name = strtolower($file);

        $file_ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));

        if ($new_size > 1550) {
            $error = "Sorry, your file is too large, the required file size is 1.5mb below";
            include ('add_testimonials.php');
            exit;
        }
        
        if($file_ext == 'jpg' || $file_ext == 'png' || $file_ext == 'JPG' || $file_ext == 'PNG' || $file_ext == 'jpeg'  || $file_ext == 'JPEG' || $file_ext == 'doc' || $file_ext == 'docx' || $file_ext == 'pdf' || $file == 'PDF')
        {
            $display_picture = str_replace(' ',' ',$new_file_name);
            move_uploaded_file($file_loc, $folder. $display_picture);
        }
        else 
        {
            $error = "Please reupload your image, the ony accepted file format is JPG, jpg, JPEG, jpeg, PNG, png, Doc, doc, Docx, docx, PDF, pdf";
            include ('add_testimonials.php');
            exit;
        }
    // image ends here 


    $query = "insert into testimonials(title, content, display_picture) 
    values('$title', '$content', '$display_picture')";
    

    $result = mysqli_query($db,$query);
    if($result)
    {
        $success = 'Testimonial has been added successfully';
        include ('add_testimonials.php');
        exit;
        
    }
    else{
        $error = 'Sorry, testimonial cannot be added at this time, make sure all information are entered correctly';
        include ('add_testimonials.php');
        exit;
    }
    

?>