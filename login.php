<?php 
session_start();
include_once('db_connect.php');
$database = new database();

if(isset($_SESSION['is_login']))
{
  header('location:beranda.php');
}

if(isset($_COOKIE['username']))
{
  $database->relogin($_COOKIE['username']);
  header('location:beranda.php');
}

// define variables and set to empty values
$usernameErr = $passwordErr = "";
$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $usernameErr = "Masukan username";
  } 
  else {
    $username = test_input($_POST["username"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
      $usernameErr = "username anda tidak terdaftar"; 
    }
  }

  if (empty($_POST["password"])) {
    $passwordErr = "password harus di isi";
  } else {
    $password = test_input($_POST["password"]);
    // check if e-mail address is well-formed
    if (!filter_var($password, FILTER_VALIDATE_BOOLEAN)) {
      $passwordErr = "password yang anda masukan salah"; 
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if(isset($_POST['login']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];
  if(isset($_POST['remember']))
  {
    $remember = TRUE;
  }
  else
  {
    $remember = FALSE;
  }

  if($database->login($username,$password,$remember))
  {
    header('location:beranda.php');
  }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login Form</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <style>
    body {
      height: 100%;
    }
    body {
      display: -ms-flexbox;
      display: flex;
      -ms-flex-align: center;
      align-items: center;
      padding-top: 40px;
      padding-bottom: 40px;
    }
  </style>
  <!-- Custom styles  -->
</head>
<body class="text-center">
  <div class="container">
    <form method="post" action="">
      <img class="mb-4 mr-2" src="assets/img/html5.svg" alt="" width="72" height="72">
      <img class="mb-4 mr-2" src="assets/img/php.svg" alt="" width="72" height="72">
      <img class="mb-4 mr-2" src="assets/img/bootstrap.svg" alt="" width="72" height="72">
      <img class="mb-4 mr-2" src="assets/img/javascript.svg" alt="" width="72" height="72">
      <img class="mb-4 mr-2" src="assets/img/jquery.svg" alt="" width="72" height="72">
      <img class="mb-4 mr-2" src="assets/img/css3.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <div class="col-4 mx-auto">
        <label for="username" class="sr-only">Username</label>
        <input type="text" id="username" class="form-control mb-2" placeholder="Username" name="username" required autofocus>
        <span class="text-danger"><?php echo $usernameErr;?></span>
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" class="form-control mb-2" placeholder="Password" name="password" required>
        <span class="text-danger mb-2"><?php echo $passwordErr;?></span>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me" name="remember"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button>
      <a href="register.php" class="btn btn-lg btn-success btn-block">Register</a>
      <p class="mt-5 mb-3 text-muted">DTS2020 &copy;2020</p>
      </div>
    </form>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>