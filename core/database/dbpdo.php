 <?php
    $dsn = 'mysql:host=localhost; dbname=student_projects';
    $user = 'root';
    $password = '';

    try {
        $pdo = new PDO($dsn, $user, $password);
        //echo '<script>alert("Database Connection Successful");</script>';
    } catch(PDOException $e) {
        echo 'Connection Error :' . $e->getMessage();
        echo '<script>alert("Database Error Connection");</script>';
    }


























    // $host = "localhost";
    // $user ="root";
    // $password = "";
    // $dbname = "stuprojects";

    // try {
    //     //creating a PDO instance
    //     $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     echo 'Connected!';
    // } catch(PDOException $e) {
    //     echo "Connection failed : ". $e->getMessage();
    // }

//     <?php
    // $servername = "mysql:host=localhost; dbname=stuprojects";
    // $username = "root";
    // $password = "";
    
    // try{
    //     $pdo = new PDO($servername, $username, $password);
    //     //echo '<script>alert("It has connect jhr and stop messing around with me");</script>';

    // }catch(PDOException $e){
    //     echo 'Connection error'. $e->getMessage();
    // }
?>
