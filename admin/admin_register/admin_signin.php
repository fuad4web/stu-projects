<?php 
    include '../../core/init.php';
    if(isset($_SESSION['admin_id'])) {
      header('Location: ../new_course.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../../css/admin_signin.css" />
</head>
<body>
   <div class="container">
     <form id="form" action="admin_validsignin.php" method="POST">
       <div class="form-header" id="form-header">
         <h1>Login<span>Page</span></h1>
       </div>
       <div class="form-username">
         <input id="form-username" autocomplete="off" type="email" placeholder="enter email" name="email">
         <div id="username_error">Enter your email address</div>
       </div>
       <div class="form-password">
         <input id="form-password" type="password" name="password" placeholder="enter password">
         <div id="password_error">Please fill up your username</div>
       </div>
       <div class="login-site">
        <button id="login-site" name="admin_login" type="submit">LOGIN</button>         
       </div>
       <p class="admin_links">Not Registered? <span><a href="admin_reg.php">Sign Up</a></span></p>
     </form>
   </div>
    <script type="text/javascript" src="../../js/admin_signin.js"></script>
</body>
</html>
