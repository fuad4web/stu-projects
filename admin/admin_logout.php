<?php 

    include '../core/init.php';
    $getFromS->logout();
    if($getFromS->loggedIn() === false) {
        header('Location: admin_register/admin_signin.php');
    }

?>
