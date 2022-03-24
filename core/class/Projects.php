<?php 
    class Projects {
        protected $pdo;

        function __construct($pdo) {
            $this->pdo = $pdo;
        }


        public function checkInput($var){
            $var = htmlspecialchars($var);
            $var = trim($var);
            $var = stripcslashes($var);
            return $var;
        }

        public function query ($stmt) {
            $stmt = $this->pdo->prepare ($stmt);
            return $stmt;
        }

        public function uploadImage($file) {
            $filename = basename($file['name']);
            $fileTmp = $file['tmp_name'];
            $fileSize = $file['size'];
            $folderName = '../prev_img/';
            $newName = mt_rand(1111, 9999).mt_rand(1111, 9999).".png";
            $joinFile = $folderName.$newName;
            $myTime = date("D j F, Y; h:i a");
            $array_allow = array('jpg', 'png', 'jpeg', 'bmp');
            $file_ext = strtolower(pathinfo($filename)['extension']);
//if($_FILES['image']['size'] > 3485760) {
                    if($fileSize > 3485760) {
                        return false;
                    } elseif(!in_array($file_ext, $array_allow)) {
                        return false;
                    } else {
                        if(move_uploaded_file($fileTmp, $joinFile)) {
                            return $joinFile;
                        }
                    }
        }

        public function uploadDocument($file) {
            $filename = basename($file['name']);
            $fileTmp = $file['tmp_name'];
            $fileSize = $file['size'];
            $error = $file['error'];

            $ext = explode('.', $filename);
            $ext = strtolower(end($ext));
            $allowed_ext = array('doc', 'pdf', 'xls', 'zip', 'txt');

            if(in_array($ext, $allowed_ext) === true) {
                if($error === 0) {
                    if($fileSize <= 10485760) {
                        $fileRoot = '../prev_docu/'. $filename;
                        move_uploaded_file($fileTmp, $fileRoot);
                        return $fileRoot;
                    } else {
                        return false;
                    }
                }
            } else {
                return false;
            }
        }

        public function checkNames($firstName, $last_name, $email, $phoneNumber, $department, $institution) {
            $stmt = $this->pdo->prepare("SELECT * FROM `users` WHERE `first_name` = :first_name AND `last_name` = :last_name AND `email` = :email AND `phone` = :phone AND `institution` = :institution AND `dept` = :dept");
            $stmt->bindParam(":first_name", $firstName, PDO::PARAM_STR);
            $stmt->bindParam(":last_name", $last_name, PDO::PARAM_STR);
            $stmt->bindParam(":email", $email, PDO::PARAM_STR);
            $stmt->bindParam(":phone", $phoneNumber, PDO::PARAM_STR);
            $stmt->bindParam(":institution", $institution, PDO::PARAM_STR);
            $stmt->bindParam(":dept", $department, PDO::PARAM_STR);
            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_OBJ);
            $count = $stmt->rowCount();

            if($count > 0){
                return true;
            } else {
                return false;
            }
        }

        public function checkMail($email){
            $stmt = $this->pdo->prepare("SELECT * FROM `users` WHERE `email` = :email");
            $stmt->bindParam(":email", $email, PDO::PARAM_STR);
            $stmt->execute();
    
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            $count = $stmt->rowCount();
    
            if($count > 0) {
                return true;
              /*
               // $_SESSION['super_admin'] = 1;
                $_SESSION['id'] = $user->id;
                $_SESSION['sname'] = $user->surname;
                $_SESSION['fname'] = $user->firstname;
               // $_SESSION['passport'] = $user->passport;
                $_SESSION['email'] = $user->email;
                header('Location: dashboard');
                */
            }else{
                return false;
            }
            
        }

        public function checkNumber($phoneNumber){
            $stmt = $this->pdo->prepare("SELECT * FROM `users` WHERE `phone_number` = :phone");
            $stmt->bindParam(":phone", $phoneNumber, PDO::PARAM_STR);
            $stmt->execute();
    
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            $count = $stmt->rowCount();
    
            if($count > 0) {
                return true;
            }else{
                return false;
            }
            
        }

        public function checkLastName($lastName) {
            $stmt = $this->pdo->prepare("SELECT * FROM `users` WHERE `last_name` = :last_name");
            $stmt = $this->pdo->prepare("SELECT * FROM `teacher` WHERE `email`=:email AND `password`= :passwords");
            $stmt->bindParam(":last_name", $last_name, PDO::PARAM_STR);
            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_OBJ);
            $count = $stmt->rowCount();

            if($count > 0){
                return true;
            } else {
                return false;
            }
        }

        public function checkProjects($topic) {
            $stmt = $this->pdo->prepare("SELECT * FROM `project` WHERE `title` = :project_topic");
            $stmt->bindParam(":project_topic", $topic, PDO::PARAM_STR);
            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_OBJ);
            $count = $stmt->rowCount();

            if($count > 0){
                return true;
            }else{
                return false;
            }
        }

        public function register($project_topic, $strikePrice, $actualPrice) {
            $stmt = $this->pdo->prepare("INSERT INTO `comprojects` (`project_topic`, `discount`, `price`) VALUES(:project_topic, :discount, :price)");
            $stmt->bindParam(":project_topic", $project_topic, PDO::PARAM_STR);
            $stmt->bindParam(":discount", $strikePrice, PDO::PARAM_STR);
            $stmt->bindParam(":price", $actualPrice, PDO::PARAM_STR);

            $stmt->execute();

            $id = $this->pdo->lastInsertId();
            $_SESSION['id'] = $id;
        }

        public function get_singles_where($table, $where, $id) {
            $stmt = $this->pdo->prepare("SELECT * FROM $table WHERE $where = :id");
            $stmt->bindValue(":id", $id, PDO::PARAM_INT);
            $stmt->execute();
            $single = $stmt->fetchAll(PDO::FETCH_OBJ);
          
            return $single; 
        }

        public function get_single($table, $id) {
            $stmt = $this->pdo->prepare("SELECT * FROM $table WHERE `id`= :id");
            $stmt->bindValue(":id", $id, PDO::PARAM_INT);
            $stmt->execute();
            $single = $stmt->fetch(PDO::FETCH_OBJ);
          
            return $single; 
        }

        public function get_Dept($table, $id) {
            $stmt = $this->pdo->prepare("SELECT * FROM $table WHERE `id`= :id");
            $stmt->bindValue(":id", $id, PDO::PARAM_INT);
            $stmt->execute();
            $single = $stmt->fetch(PDO::FETCH_OBJ);
          
            return $single; 
        }

        public function get_multi_asc($tables){
            $stmt = $this->pdo->prepare("SELECT * FROM $tables ORDER BY `id` ASC");
            $stmt->execute();
            $multi = $stmt->fetchAll(PDO::FETCH_OBJ);
          
            return $multi; 
        }

        //check whether dept is existing before
        public function checkDept($newDept) {
            $stmt = $this->pdo->prepare("SELECT * FROM `dept` WHERE `dept_name` = :new_dept");
            $stmt->bindParam(":new_dept", $newDept, PDO::PARAM_STR);
            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_OBJ);
            $count = $stmt->rowCount();

            if($count > 0){
                return true;
            } else {
                return false;
            }
        }
        
        //getting computer science topics from comprojects database
        public function getAllProjects(){
            $stmt = $this->pdo->prepare("SELECT * FROM `project`");
            $stmt->execute();
            $multi = $stmt->fetchAll(PDO::FETCH_OBJ);
          
            return $multi; 
        }

        //getting computer science topics from comprojects database
        public function getStatCourse(){
            $stmt = $this->pdo->prepare("SELECT * FROM `mathandstat`");
            $stmt->execute();
            $multi = $stmt->fetchAll(PDO::FETCH_OBJ);
          
            return $multi; 
        }

        //getting computer engineer topics from comprojects database
        public function getCompEngrCourse(){
            $stmt = $this->pdo->prepare("SELECT * FROM `comp_engr`");
            $stmt->execute();
            $multi = $stmt->fetchAll(PDO::FETCH_OBJ);
          
            return $multi; 
        }

        //getting currentl loogin course
        public function userData($id) {
            $stmt = $this->pdo->prepare("SELECT count FROM `comprojects` WHERE `id` = :id");
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->execute();
            $count = $stmt->rowCount();
            return $stmt->fetch(PDO::FETCH_OBJ);
        }
        
        public function create($table, $fields = array()) {
            // remove the , from the key values in the fields(i.e the values input into databse)
            $columns = implode(',', array_keys($fields));
            $values = ':'.implode(', :', array_keys($fields));
            $sql = "INSERT INTO {$table} ({$columns}) VALUES ({$values})";
            if($stmt = $this->pdo->prepare($sql)) {
                foreach($fields as $key => $data) {
                    $stmt->bindValue(`:`.$key, $data);
                }
                $stmt->execute();
                return $this->pdo->lastInsertId();
            }
        }

        public function uploadDeptid() {
            $stmt = $this->pdo->prepare("INSERT INTO `project` (`project_topic`, `discount`, `price`) VALUES(:project_topic, :discount, :price)");
            $stmt->bindParam(":project_topic", $project_topic, PDO::PARAM_STR);
            $stmt->bindParam(":discount", $strikePrice, PDO::PARAM_STR);
            $stmt->bindParam(":price", $actualPrice, PDO::PARAM_STR);

            $stmt->execute();

            $id = $this->pdo->lastInsertId();
            $_SESSION['id'] = $id;
        }

        public function update($table, $id, $fields = array()) {
            $columns = '';
            $i = 1;

            foreach($fields as $name => $value) {
                $columns .= "`{$name}` = :{$name}";
                if($i < count($fields)) {
                    $columns .= ', ';
                }
                $i++;
            }
            $sql = "UPDATE {$table} SET {$columns} WHERE `id` = {$id}";
            if($stmt = $this->pdo->prepare($sql)) {
                foreach($fields as $key => $value) {
                    $stmt->bindValue(':'.$key, $value);
                }
                //var_dump($sql);
                $stmt -> execute();
            }
        }

        
    }
?>
