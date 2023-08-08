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


    
    $product_name = $_POST['product_name'];
    $content = $_POST['content'];
    $image_1 = $_POST['image_1'];
    $image_2 = $_POST['image_2'];
    
    $id = $_POST['id'];
    

    if($product_name == '' || $content == '')
    {
        $error = 'All information are required !!!';
        include ('edit_products.php');
        exit;
    }


    

    if($_FILES['image_1']['name'])
    {
        // image1
        $file = $product_name.'_'.$_FILES['image_1']['name'];
        $file_loc = $_FILES['image_1']['tmp_name'];
        $file_size = $_FILES['image_1']['size'];
        $file_type = $_FILES['image_1']['type'];
        $folder="upload/";
       //file size
        $new_size = $file_size/1024;  

        $new_file_name = strtolower($file);

        $file_ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));

        if ($new_size > 1550) {
            $error = "Sorry, your image 1 file is too large, the required file size is 1.5mb below";
            include ('edit_products.php');
            exit;
        }
        
        if($file_ext == 'jpg' || $file_ext == 'png' || $file_ext == 'JPG' || $file_ext == 'PNG' || $file_ext == 'jpeg'  || $file_ext == 'JPEG' || $file_ext == 'doc' || $file_ext == 'docx' || $file_ext == 'pdf' || $file == 'PDF')
        {
            $image_1 = str_replace(' ',' ',$new_file_name);
            move_uploaded_file($file_loc, $folder. $image_1);
        }
        else 
        {
            $error = "Please reupload your image 1, the ony accepted file format is JPG, jpg, JPEG, jpeg, PNG, png, Doc, doc, Docx, docx, PDF, pdf";
            include ('edit_products.php');
            exit;
        }
        
        $query = "update products set image_1 = '$image_1' where id = '$id'";
        $result = mysqli_query($db,$query);
    }
    // image ends here 


    if($_FILES['image_2']['name'])
    {
    // image2
    $file = $product_name.'_'.$_FILES['image_2']['name'];
    $file_loc = $_FILES['image_2']['tmp_name'];
    $file_size = $_FILES['image_2']['size'];
    $file_type = $_FILES['image_2']['type'];
    $folder="upload/";
   //file size
    $new_size = $file_size/1024;  

    $new_file_name = strtolower($file);

    $file_ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));

    if ($new_size > 1550) {
        $error = "Sorry, your image 2 file is too large, the required file size is 1.5mb below";
        include ('edit_products.php');
        exit;
    }
    
    if($file_ext == 'jpg' || $file_ext == 'png' || $file_ext == 'JPG' || $file_ext == 'PNG' || $file_ext == 'jpeg'  || $file_ext == 'JPEG' || $file_ext == 'GIF' || $file_ext == 'gif')
    {
        $image_2 = str_replace(' ',' ',$new_file_name);
        move_uploaded_file($file_loc, $folder. $image_2);
    }
    else 
    {
        $error = "Please reupload your image 2, the ony accepted file format is JPG, jpg, JPEG, jpeg, PNG, png, GIF, gif";
        include ('edit_products.php');
        exit;
    }
// image ends here 

$query = "update products set image_2 = '$image_2'  where id = '$id'";
$result = mysqli_query($db,$query);

    }

    // $query = "update products set product_name = '$product_name', content = '$content', image_1='$image_1', image_2 = '$image_2' where id = '$id'";

    $query = "update products set product_name = '$product_name', content = '$content' where id = '$id'";
    $result = mysqli_query($db,$query);
    if($result)
    {
        $success = 'Product has been edited successfully';
        include ('edit_products.php');
        exit;
        
    }
    else{
        $error = 'Sorry, product cannot be editied at this time, make sure all information are entered correctly';
        include ('edit_products.php');
        exit;
    }
    

?>