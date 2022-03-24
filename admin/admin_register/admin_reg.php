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
  <title>Registration of Admin</title>
  <link rel="stylesheet" href="../../css/admin_reg.css">
</head>
<body id="body">
  <div class="container">
    <div class="header">
      <h2>Create Account</h2>
    </div>
    <form action="admin_validreg.php" method="POST" class="form" id="form">
      <div class="form-control">
        <label>Fullname</label>
        <input type="text" name="fullname" placeholder="Fullname" id="username" class="text-input correct">
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>Error Message</small>
      </div>
      <div class="form-control">
        <label>E-mail</label>
        <input type="email" name="email" placeholder="e-mail" id="email" class="text-input">
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>Error Message</small>
      </div>
      <div class="form-control">
        <label>Password</label>
        <input type="password" name="password" placeholder="password" id="password" class="text-input">
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>Error Message</small>
      </div>
      <div class="form-control">
        <label>Confirm Password</label>
        <input type="password" name="confirm_password" placeholder="confirm password" id="password2" class="text-input">
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>Error Message</small>
      </div>
      <button type="submit" name="admin_reg" class="button">Submit</button>
  </form>
  <p class="admin_links">Registered? <span><a href="admin_signin.php">Sign In</a></span></p>
  </div>
<!--  <script src="../../js/admin_reg.js"></script>  -->
</body>
</html>
