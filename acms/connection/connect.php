<?php


error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
ini_set('display_errors', 1);

date_default_timezone_set('Africa/Lagos');

    $db = mysqli_connect('localhost', 'cospharm_db', 'certification231', 'cospharm_db') or die ('Cannot connect to database');

  

?>