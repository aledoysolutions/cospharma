<?php
$name = $_POST['name'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$message= $_POST['message'];


$userfile = $_FILES['userfile']['tmp_name'];
$userfile_name = $_FILES['userfile']['name'];
$size = $_FILES['userfile']['size'];


$filesize = $size/1024;

if(!$name || !$email || !$telephone || !$userfile || !$message)
{
    $error = 'You are required to enter all informations before Submiting';
    include('career.php');
    exit;
}

if($message > 100)
{
    $error = 'Your Compostion is out of limit';
    include('career.php');
    exit;
}
if($filesize > '300')
{
    $error = 'Upload a file not more than 30KB.';
    include('career.php');
    exit;
}

// validatinf file etentions
$file = explode('.',$userfile_name);
$files = array_reverse($file);

if ($files[0] =='doc' || $files[0] =='pdf' || $files[0] =='docx')
{
    $filename = $email.'.'.$files[0];
    $filepath = 'uploadedcv/'.$filename;
    move_uploaded_file($userfile,$filepath);
    // echo 'Cv Submited Succesfully.';
    include('index.php');
}
else {
    $error = 'Can only accept documents in ms word or pdf format. Please upoad another docutment.';
    include('career.php');
    exit;
}

// send form to mail
$body = 'Below are the data entered from the careers form:'."\n"
        .'Full Name: '.$name."\n"
        .'Email: '.$email."\n"
        .'Telephone: '.$telephone."\n"
        .'Message: '.$message."\n"
        .'<a href="http://cospharma.com.ng/'.$filepath.'">Click here</a> to download CV'."\n";
$to = 'info@cospharma.com.ng';
$subject = 'Career Application Form';
$header = 'From:noreply@cospharma.com.ng';

mail($to, $subject, $header, $body);


?>