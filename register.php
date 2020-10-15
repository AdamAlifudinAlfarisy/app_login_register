<?php 
include_once('db_connect.php');
$database = new database();
if(isset($_POST['register']))
{
  $username = $_POST['username'];
  $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
  $nama = $_POST['nama'];
  if($database->register($username,$password,$nama))
  {
    header('location:login.php');
  }
}

?>
<!doctype html>
<html lang="en" class="h-100">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Register Form</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

</head>
<body>
  <div class=" jumbotron jumbotron-fluid bg-dark text-white">
    <div class="container">      
      <h1>Register Form</h1>
      <p class="lead">Silahkan Daftarkan Identitas Anda</p>
    </div>        
  </div>
  <!-- Begin page content -->
  <main role="main" class="flex-shrink-0">
    <div class="container">
      <form method="post" action="">
        <div class="form-group row">
          <label for="username" class="col-sm-2 col-form-label">Username</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="nama" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
          </div>
        </div>


        <div class="form-group row">
          <label for="password" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-5">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-5">
            <a href="login.php" class="btn btn-success">Login</a>
            <button type="submit" class="btn btn-primary" name="register">Register</button>
          </div>
        </div>
      </form>
    </div>
  </main>

  <footer class="footer mt-auto py-3">
    <div class="container">
      <span class="text-muted">DTS2020@2020</span>
    </div>
  </footer>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>