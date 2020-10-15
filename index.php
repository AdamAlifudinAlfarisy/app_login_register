<?php
session_start();

if (!isset($_SESSION['is_login'])) {
    header('location:login.php');
    exit();
}
?>
<?php include('config/koneksi.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Online</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="bg-light">
    <div class="bg-dark text-white">
        <div class="header">
            <h1 class="display-4">Pendaftaran Online</h1>
        </div>
    </div>
    <div class="container">
        <?php
        if(empty($_GET['page']) OR $_GET['page'] == NULL) {
            include('content/home.php');
        }
        elseif(!empty($_GET['page']) && $_GET['page'] == 'tambah') {
            include('content/tambah.php');
        }
        elseif(!empty($_GET['page']) && $_GET['page'] == 'detail') {
            include('content/detail.php');
        } 
        elseif(!empty($_GET['page']) && $_GET['page'] == 'update')  {
            include('content/update.php');
        }
        elseif(!empty($_GET['page']) && $_GET['page'] == 'hapus') {
            include('content/delete.php');
        }
        ?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
