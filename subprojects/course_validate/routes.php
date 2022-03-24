<?php


    
   // Main Website Redirection   
   if(isset($_GET['contact'])){
        include('main/contact.php');
        }  
    
    
    elseif(isset($_GET['list'])){
        include('main/course_list.php');
    }

    elseif(isset($_GET['course_details'])){
        include('main/course_detail.php');
    }
    elseif(isset($_GET['category'])){
        include('main/category_list.php');
    }
   
    elseif(isset($_GET['admin_quiz_menu'])){
        include('../admin/student/quiz-manager.php');
    } 

        /*
        * AUTHENTICATION ROUTES
        */

       // elseif(isset($_GET['auths'])){
       //     include('../auth/student_login.php');
       // }



      // Admin Portal Routes   
   
        elseif(isset($_GET['dashboard'])){
        include('../admin/dashboard.php');
        }
       
        elseif(isset($_GET['courses'])){
            include('../admin/student/courses.php');
        }
        elseif(isset($_GET['new_course'])){
            include('../admin/student/new_course.php');
        }
         elseif(isset($_GET['student_reg'])){
            include('../admin/student/student_reg.php');
        }

        elseif(isset($_GET['student'])){
            include('../admin/student/student.php');
        } 
        elseif(isset($_GET['chats'])){
            include('../admin/student/chats.php');
        } 

         // Student  Portal Routes   
   
         elseif(isset($_GET['student-dashboard'])){
            include('../student_portal/student-dashboard.php');
            }
           
            elseif(isset($_GET['chat'])){
                include('../student_portal/student-discussions.php');
            }
            
            elseif(isset($_GET['lessons'])){
                include('../student_portal/student-lessons.php');
            }
            elseif(isset($_GET['quiz'])){
                include('../student_portal/student-quiz.php');
            } 
            elseif(isset($_GET['quiz_menu'])){
                include('../student_portal/quiz_menu.php');
            } 
            elseif(isset($_GET['student-home'])){
                include('../student_portal/student.php');
            } 
            elseif(isset($_GET['billing'])){
                include('../student_portal/student-billing.php');
            }
            elseif(isset($_GET['subscribe'])){
                include('../student_portal/student-course-purchase.php');
            } 
            elseif(isset($_GET['start_course'])){
                include('../student_portal/start-course.php');
            } 
            elseif(isset($_GET['student_courses'])){
                include('../student_portal/student-courses.php');
            } 
            elseif(isset($_GET['my_courses'])){
                include('../student_portal/my-courses.php');
            }
            elseif(isset($_GET['reg-course'])){
                include('../student_portal/reg-course.php');
            } 
            elseif(isset($_GET['edit-account'])){
                include('../student_portal/edit_account.php');
            } 
            elseif(isset($_GET['student_logout'])){
                include('../student_portal/logout.php');
            } 
    
            



    else {
            include('main/home.php');
    }
?>
