<?php
require '../includes/db.php';
session_start();
$err='';
if($_SERVER['REQUEST_METHOD']==='POST'){
  $user=$_POST['email']; $pass=$_POST['password'];
  $stmt=$conn->prepare("SELECT admin_id, password FROM admins WHERE username=?");
  $stmt->bind_param('s',$user); $stmt->execute(); $res=$stmt->get_result();
  if($row=$res->fetch_assoc()){
    if(password_verify($pass,$row['password'])){
      $_SESSION['admin_id']=$row['admin_id'];
      header('Location: dashboard.php'); exit;
    } else $err='Invalid credentials';
  } else $err='No admin found';
}
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../assets/css/style.css">
  </head>
  <body>
<div class="background">    
  <div class="background-img">
        <img src="../img/Background.png" alt="background">
      </div>   
  <div class="container">
    <h2>Admin Login</h2>
    <?php if($err) echo '<p class="error">'.htmlspecialchars($err).'</p>'; ?>
    <form method="post">
      <label>Email</label><input name="email" type="email" placeholder="Enter your email" required>
      <label>Password</label><input name="password" type="password" placeholder="Enter your Password" required>
      <button class="btn" type="submit">Login</button>
    </form>
    <p>Don’t have an account? <a href="../register.php">Register</a></p>
  </div>
</div>
</body>
</html>
