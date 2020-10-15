<?php 
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Beranda</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <nav class="navbar navbar-dark bg-dark mr-auto">
      <a class="navbar-brand" href="beranda.php">
        <img src="assets/img/home.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
        Beranda
      </a>
    </nav>

    <a href="logout.php" class="form-inline my-2 my-lg-0 btn btn-secondary">Logout</a>
</nav>

<div class="jumbotron">
  <h1 class="display-4 mt-2">Selamat Datang <?php echo $_SESSION['nama']; ?></h1>
  <p class="lead">Silahkan mengisi form pendaftaran online dengan mengklik tombol dibawah ini</p>
  <hr class="my-4">
  <a class="btn btn-primary btn-lg" href="index.php" role="button">Buka Pendaftaran Online</a>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="assets/js/jquery-3.5.1.slim.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>