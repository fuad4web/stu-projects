<?php 
    include '../../core/init.php';
    $id = $_SESSION['id'];

    if(isset($_POST['pro_pay'])) {
        
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $phoneNumber = $_POST['phone_number'];
        $email = $_POST['email'];

        //for select options
        $institution = $_POST['institution'];
        $department = $_POST['dept'];

        if(empty($firstName) || empty($lastName) || empty($email) || empty($phoneNumber) || empty($institution) || empty($department)) {
    ?>
            <div class="alert alert-danger alert-center">
				<?php echo "All Input Fields are required"; ?>
			</div>
    <?php
        } else {
            $firstName = $getFromP->checkInput($firstName);
            $lastName = $getFromP->checkInput($lastName);
            $email = $getFromP->checkInput($email);
            $phoneNumber = $getFromP->checkInput($phoneNumber);
            $institution = $getFromP->checkInput($institution);
            $department = $getFromP->checkInput($department);

            if(strlen($firstName) < 3) {
                echo '<script>alert("First Name and Last Name must be 3 characters or more than");</script>';
            } elseif (strlen($phoneNumber) < 11) {
                echo '<script>alert("Phone Number not complete");</script>';
            } else {
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo '<script>alert("Invalid Email");</script>';
                } else {
                    if($getFromP->checkMail($email) === true) {
                        echo '<script>alert("Email Existing");</script>';
                        header("Location: ../form.php?mailexisting");
                    } else {
                    if($getFromP->checkNumber($phoneNumber) === true) {
                        echo '<script>alert("Number Existing");</script>';
                        header("Location: ../form.php?numberexisting");
                    } else {
                        $id = $getFromP->create('users', array('first_name' => $firstName, 'last_name' => $lastName, 'email' => $email, 'phone_number' => $phoneNumber, 'institution' => $institution, 'dept' => $department));
                        echo '<script>alert("Successful");</script>';
                        header("Location: ../form.php?successful");
                    }
                  }
                }
            }
        }

    }

/*

    if(isset($_POST['pro_pay'])) {
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phone'];

        $institution = $_POST['institution'];
        $department = $_POST['dept'];

        if(!empty($firstName) && !empty($lastName) && !empty($email) && !empty($phoneNumber)) {
            $firstName = $getFromP->checkInput($firstName);
            $lastName = $getFromP->checkInput($lastName);
            $email = $getFromP->checkInput($email);
            $phoneNumber = $getFromP->checkInput($phoneNumber);
            $institution = $getFromP->checkInput($institution);
            $department = $getFromP->checkInput($department);

            if($getFromP->checkNames($firstName) === false) {
                if($getFromP->checkNames($lastName) === false) {
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        if($getFromP->checkNames($email) == false) {
                            if($getFromP->checkNames($institution) == false) {
                                if($getFromP->checkNames($phoneNumber) == false) {
                                    //code
                                } else {
                                    echo '';
                                }
                            } else {
                                echo "<script>alert('Select Institution');</script>";
                            }
                        } else {
                            echo "<script>alert('Mail Exist');</script>";
                        }
                    } else {
                        echo "<script>alert('Invalid Mail format');</script>";
                    }
                } else {
                    echo "<script>alert('Last Name Exist');</script>";
                }
            } else {
                echo "<script>alert('First Name Exist');</script>";
            }
        } else {
            echo "<script>alert('Fill in the Input Box');</script>";
        }
    }
*/
    ?>
