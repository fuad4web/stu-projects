<?php

    include '../../core/init.php';
    //$admin_id = $_SESSION['admin_id'];
    $admin_id = (isset($_POST['admin_id']) ? $_POST['admin_id'] : '');

    if(isset($_POST['admin_reg'])) {
        $fullName = $_POST['fullname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirm_password'];

        if(!empty($fullName) && !empty($email) && !empty($password) && !empty($confirmPassword)) {
            $fullName = $getFromS->checkInput($fullName);
            $email = $getFromS->checkInput($email);
            $password = $getFromS->checkInput($password);
            $confirmPassword = $getFromS->checkInput($confirmPassword);

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo '<script>alert("Invalid Email Address");</script>';
            } else {
                if($getFromS->checkMail($email) === true) {
                    echo '<script>alert("Mail existing");</script>';
                } else {
                    if($password !== $confirmPassword) {
                        echo '<script>alert("Password not Match");</script>';
                    } else {
                        $admin_id = $getFromP->create('admin_reg', array('fullname'=>$fullName, 'email'=>$email, 'password'=>md5($password)));
                        header('Location: ../new_course.php?Successful');
                        //header('Location: '.BASE_URL.'admin');
                    }
                }
            }
        }
    }

?>
