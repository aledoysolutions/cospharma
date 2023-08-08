<?php

session_start();  

if(!isset($_SESSION['otp_cos_code']))
{
   $error = "Access Denied";
    include('index.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="robots" content="noindex,nofollow">
    <title>Login</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <!-- login form -->
    <link href="css_login/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css_login/startmin.css" rel="stylesheet">

    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Enter the code sent to your email</h3>
                        </div>
                        <div class="panel-body">
                        <?php if($error)
                            {
                             echo '<div  class="alert alert-danger ">'.$error.'</div>' ;
                            }
				    	?>
                   
                   <?php if($_GET['otp'] == 'sent')
                   {
 
                   ?>
                   <div class="text-success" style="margin-bottom: 10px;font-size: 15px;"><span class=""></span>An OTP has been sent to your email</div> 
                   <?php } ?>
                            <form role="form" action="proc-otp.php" method="post">
                                <fieldset>

                                    <div class="form-group">
                                        <input class="form-control" placeholder="Enter Code" name="otp" type="password" value="">
                                    </div>
                                    <div class="">
                                        <button type ="submit" style=" margin-bottom: -10px; " name="btn_login" class="btn btn-lg btn-success btn-block"><span >Login</span></button>
                                    </div>
                                    <label>
                                    
                                    </label>
                                    <!-- Change this to a button or input when using this as a form -->
                                
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

    </body>
</html>
