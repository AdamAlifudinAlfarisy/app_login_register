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
    <a class="navbar-brand" href="#">WB</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="beranda.php">Home <span class="sr-only">(current)</span></a>
        </li>
      </ul>

      <a href="logout.php" class="form-inline my-2 my-lg-0 btn btn-secondary">Logout</a>

    </div>
  </nav>

    <div class="jumbotron">
      <h1 class="display-4">Selamat Datang <?php echo $_SESSION['nama']; ?></h1>
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