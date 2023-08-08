<?php
 
 session_start();
 
 session_unset($_SESSION['cos_user']);
 session_destroy();
 
 header("Location: index.php");

 
 ?>

