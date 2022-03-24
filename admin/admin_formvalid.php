<?php 
include '../core/init.php';
//$id = $_SESSION['id'];

    if(isset($_POST['addInfo'])) {
        $dept = $_POST['dept'];
        $topic = $_POST['topic'];
        $initialPrice = $_POST['strike_price'];
        $actualPrice = $_POST['price'];
        $chapter = $_POST['chapter'];

        if(empty($dept) || empty($topic) || empty($initialPrice) || empty($actualPrice) || empty($chapter)) {
            header('Location: new_course.php?fieldsempty');
        } else {
            $dept = $getFromP->checkInput($dept);
            $topic = $getFromP->checkInput($topic);
            $initialPrice = $getFromP->checkInput($initialPrice);
            $actualPrice = $getFromP->checkInput($actualPrice);
            $chapter = $getFromP->checkInput($chapter);

            if($getFromP->checkProjects($topic) == true) {
                header('Location: new_course.php?projectexisting');
            } else {
                $stmt = $getFromP->query ("SELECT * FROM `dept` WHERE `dept_name` = :deptName");
                $stmt->bindParam(":deptName", $dept, PDO::PARAM_INT);
                $stmt->execute();
                $get_deptId = $stmt->fetch(PDO::FETCH_OBJ);
                if ($stmt->rowCount() == 1) {
                    $deptid = $get_deptId["dept_id"];
                    $id = $getFromP->create('project', array('dept_id' => $deptid, 'title' => $topic, 'amount' => $initialPrice, 'discount' => $actualPrice, 'chapter1' => $chapter));
                    header("Location: new_course.php?successful");
                }
            }
        }
    }

?>

<!-- if(isset($_FILES['avater_img'])) {
                    if(!empty($_FILES['avater_img']['name'][0])) {
                        $fileRoot = $getFromP->uploadImage($_FILES['avater_img']);
                        $getFromP->update('comprojects', $id, array('avater_img' => $fileRoot));
                    }
                } -->
<?php 
//include '../core/init.php';
//$id = $_SESSION['id'];

if(isset($_POST['addDept'])) {
    $newDept = $_POST['dept'];
    $deptDescription = $_POST['dept_description'];

    if(!empty($newDept) && !empty($deptDescription)) {
        $newDept = $getFromP->checkInput($newDept);
        $deptDescription = $getFromP->checkInput($deptDescription);

        if($getFromP->checkDept($projectTopic) === true) {
            echo '<script>alert("Project Topic Existing");</script>';
            header('Location: new_course.php?projectExisting');
        } elseif($getFromP->checkDept($projectTopic) === false) {
            $admin_dept = $getFromP->create('dept', array('dept_name'=>$newDept, 'description'=>$deptDescription));
            header('Location: new_course.php?deptAddedSuccessfully');
        }
    }
}
?>


<?php 

/*
        if(isset($_POST['addticket'])){
        $stmt = $db->prepare("INSERT INTO ticket (requestor_name, employee_name, department_concern, subject, description, priority) VALUES (:Requestor, :Employee, :Department, :Subject, :Description, :Priority)");
        $stmt->bindParam(':Requestor', $Requestor);
        $stmt->bindParam(':Employee', $Employee);
        $stmt->bindParam(':Department', $Department);
        $stmt->bindParam(':Subject', $Subject);
        $stmt->bindParam(':Description', $Description);
        $stmt->bindParam(':Priority', $Priority);

        $Requestor = $_POST['requestor'];
        $Employee = $_POST['employee'];
        $Department = $_POST['department'];
        $Subject = $_POST['subject'];
        $Description = $_POST['description'];
        $Priority = $_POST['priority'];
        $stmt->execute();


        if(isset($_FILES['course_image'])) {
    if(!empty($_FILES['course_image']['name'][0])) {
        $fileRoot = $getFromP->uploadImage($_FILES['course_image']);
        $getFromP->update('comprojects', $user_id, array('course_img' => $fileRoot));
        header('Location: new_course.php?imageuploaded');
    } else {
        echo "<script>alert('Uploaded Image Success');</script>";
    }
}

        }


                if($deptSelect == 'Computer Science') {

            if(!empty($projectTopic) && !empty($strikePrice) && !empty($actualPrice)) {
                $projectTopic = $getFromP->checkInput($projectTopic);
                $strikePrice = $getFromP->checkInput($strikePrice);
                $actualPrice = $getFromP->checkInput($actualPrice);

                
                if($getFromP->checkCompProject($projectTopic) === true) {
                    echo '<script>alert("Project Topic Existing");</script>';
                    header('Location: new_course.php?projectExisting');
                } elseif($getFromP->checkCompProject($projectTopic) === false) {
                    $id = $getFromP->create('comprojects', array('project_topic' => $projectTopic, 'discount' => $strikePrice, 'price' => $actualPrice));
                    if(isset($_FILES['course_image'])) {
                        if(!empty($_FILES['course_image']['name'][0])) {
                            $fileRoot = $getFromP->uploadImage($_FILES['course_image']);
                            $getFromP->update('comprojects', $id, array('course_img' => $fileRoot));
                        }
                        if(isset($_FILES['course_document'])) {
                            if(!empty($_FILES['course_document']['name'][0])) {
                                $fileDocu = $getFromP->uploadDocument($_FILES['course_document']);
                                $getFromP->update('comprojects', $id, array('documents' => $fileDocu));
                                header('Location: admin?successful');
                            }
                        } else {
                            header('Location: new_course.php?documentError');
                        }
                    } else {
                        header('Location: new_course.php?imageError');
                    }
                } else {
                    header('Location: new_course.php?unsuccessful');
                }



            } else {
                header('Location: new_course.php?allfieldsrequire');
            }
        */
    ?>
