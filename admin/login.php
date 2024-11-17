<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login'])) 
  {
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $sql ="SELECT ID FROM tbladmin WHERE UserName=:username and Password=:password";
    $query=$dbh->prepare($sql);
    $query-> bindParam(':username', $username, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
    $query-> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0)
{
foreach ($results as $result) {
$_SESSION['sturecmsaid']=$result->ID;
}

  if(!empty($_POST["remember"])) {
//COOKIES for username
setcookie ("user_login",$_POST["username"],time()+ (10 * 365 * 24 * 60 * 60));
//COOKIES for password
setcookie ("userpassword",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
} else {
if(isset($_COOKIE["user_login"])) {
setcookie ("user_login","");
if(isset($_COOKIE["userpassword"])) {
setcookie ("userpassword","");
        }
      }
}
$_SESSION['login']=$_POST['username'];
echo "<script type='text/javascript'> document.location ='dashboard.php'; </script>";
} else{
echo "<script>alert('Invalid Details');</script>";
}
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login Form</title>
    <link rel="icon" type="image/png" href="../includes/logo.png">
    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="login/style.css" />
  </head>
  <body>
    <div class="container">
      <form method="post" name="login">
        <label for="username">Admin Name:</label>
        <input type="text" id="username" placeholder="Admin Name here..." required="true" name="username" value="<?php if(isset($_COOKIE["user_login"])) { echo $_COOKIE["user_login"]; } ?>" /><br>
        <label for="password">Password:</label>
        <input type="password" id="password" placeholder="Password here..." name="password" required="true" value="<?php if(isset($_COOKIE["userpassword"])) { echo $_COOKIE["userpassword"]; } ?>"/><br>
        <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" id="remember" class="form-check-input" name="remember" <?php if(isset($_COOKIE["user_login"])) { ?> checked <?php } ?> /> Keep me signed in </label>
                    </div>
                    <!-- <a href="forgot-password.php" class="auth-link text-black">Forgot password?</a> -->
                  </div>
        <button name="login" type="submit">Login</button>
      </form>
      <div class="ear-l"></div>
      <div class="ear-r"></div>
      <div class="panda-face">
        <div class="blush-l"></div>
        <div class="blush-r"></div>
        <div class="eye-l">
          <div class="eyeball-l"></div>
        </div>
        <div class="eye-r">
          <div class="eyeball-r"></div>
        </div>
        <div class="nose"></div>
        <div class="mouth"></div>
      </div>
      <div class="hand-l"></div>
      <div class="hand-r"></div>
      <div class="paw-l"></div>
      <div class="paw-r"></div>
    </div>
    <!-- Script -->
    <script src="login/script.js"></script>
  </body>
</html>