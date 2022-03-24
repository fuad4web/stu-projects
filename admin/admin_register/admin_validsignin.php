<?php 
    include '../../core/init.php';

        if(isset($_POST['admin_login'])) {
            //email and password listed from this post is from the database
            $email = $_POST['email'];
            $password = $_POST['password'];

            if(!empty($email) or !empty($password)) {
                //this is checking it from databse through the class created
                $email = $getFromS->checkInput($email);
                $password = $getFromS->checkInput($password);

                if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    header("Location: admin_signin.php?invalidEmail");
                } else {
                    if($getFromS->login($email, $password) === false) {
                        header("Location: admin_signin.php?loginError");
                    }
                }
            } else {
                header("Location: admin_signin.php?fieldsEmpty");
            }
        }
?>
