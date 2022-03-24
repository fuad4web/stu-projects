<?php 

class Survey extends Projects {
    protected $pdo;

    function __construct($pdo) {
        $this->pdo = $pdo;
    }


    public function checkInput($var) {
        $var = htmlspecialchars($var);
        $var = trim($var);
        $var = stripcslashes($var);
        return $var;
    }

    
    function sendmail($to,$subject,$body){
        // include("class.phpmailer.php"); //you have to upload class files "class.phpmailer.php" and "class.smtp.php"
      
         $mail = new PHPMailer();
     
         $mail->IsSMTP();
         $mail->SMTPAuth = true;
     
         $mail->Host = "mail.globaltradecollege.com";
     
         $mail->Username = "solutions@globaltradecollege.com";
         $mail->Password = "FuTa@(2017)"; 
     
         $mail->From = "solutions@globaltradecollege.com";
         $mail->FromName = "Fuskydo";
     
         $mail->AddAddress($to);
         $mail->AddCC("info@3timpex.com");
         $mail->AddCC("tradeacademy@3timpex.com");
         $mail->Subject = $subject;
         $mail->Body = $body;
         $mail->WordWrap = 50;
         $mail->IsHTML(true);
         //$mail->SMTPSecure = 'tls';
         $mail->Port = 25;
         //$mail->SetLanguage('en', 'language/');
         $success=$mail->Send(); 
         return $success;
     }
 
 

    public function login($email, $password) {
        $stmt = $this->pdo->prepare("SELECT `admin_id` FROM `admin_reg` WHERE `email` = :email AND `password` = :passwords");
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->bindParam(":passwords", md5($password), PDO::PARAM_STR);
        $stmt->execute();

        $admin = $stmt->fetch(PDO::FETCH_OBJ);
        $count = $stmt->rowCount();
        //return $user;

       if($count > 0) {
            //return $count;
            $_SESSION['admin_id'] = $admin->admin_id;
            header('Location: ../../admin/new_course.php');
        } else {
            return false;
        }
    }

    public function register($project_topic, $strikePrice, $actualPrice) {
        $stmt = $this->pdo->prepare("INSERT INTO `comprojects` (`project_topic`, `discount`, `price`) VALUES(:project_topic, :discount, :price)");
        $stmt->bindParam(":project_topic", $project_topic, PDO::PARAM_STR);
        $stmt->bindParam(":discount", $strikePrice, PDO::PARAM_STR);
        $stmt->bindParam(":price", $actualPrice, PDO::PARAM_STR);

        $stmt->execute();

        $admin_id = $this->pdo->lastInsertId();
        $_SESSION['admin_id'] = $admin_id;
    }

    public function userData($admin_id) {
        $stmt = $this->pdo->prepare("SELECT * FROM `admin_reg` WHERE `admin_id` = :admin_id");
        $stmt->bindParam(":admin_id", $admin_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    //fetch all departments from database
    public function getAllDept(){
        $stmt = $this->pdo->prepare("SELECT * FROM `dept`");
        $stmt->execute();
        
        $multi = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $multi;
    }

    //to check whether mail is existing
    public function checkMail($email){
        $stmt = $this->pdo->prepare("SELECT * FROM `admin_reg` WHERE `email` = :email");
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->execute();

        $admin = $stmt->fetch(PDO::FETCH_OBJ);
        $count = $stmt->rowCount();

        if($count > 0) {
            return true;
        } else {
            return false;
        }
        
    }

    public function loggedIn() {
        return (isset($_SESSION['admin_id'])) ? true : false;
    }

    public function logout() {
        $_SESSION = array();
        session_destroy();
        header('Location: '.BASE_URL.'admin/admin_register/admin_signin.php');
    }

}
?>
