<?php 
    include 'database/dbpdo.php';
    include 'class/Projects.php';
    include 'class/Survey.php';
    include 'class/class.phpmailer.php';
    include 'class/class.smtp.php';

    global $pdo;

    session_start();

    $getFromP = new Projects($pdo);
    $getFromS = new Survey($pdo);

    define("BASE_URL", "http://localhost/projects/");

    //echo "<script>alert('Jo');</script>";
?>
